<?php namespace App\Controllers;
use App\Models\Categories;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
   {
      $session = \Config\Services::session();
      $message = $session->getFlashdata('message');
	  $cat = new Categories();
	  $data = $cat->findAll();
	  $catArray = array();
	  foreach ($data as $key => $value){
		  if($value['parent_id']==0){
			$catArray[] = $value; 
		  }
	  }
     
     foreach ($catArray as $k => $v) {
        //print_r($v['id']);
        foreach ($data as $key => $value1){
         if($v['id']==$value1['parent_id']){
          $catArray[$k]['subCategory'][] = $value1; 
         }
      }
     }
      $data['categories'] = $catArray;
      $pager = \Config\Services::pager();
      $data['message'] = $message;
      echo view('home',$data);

      //var_dump($results);
      //echo 'index Students';
   }

	//--------------------------------------------------------------------

}
