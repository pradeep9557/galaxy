<?php namespace App\Controllers;
use App\Models\Categories;
use App\Models\Listing;
use CodeIgniter\Config\Config;
use CodeIgniter\Controller;

class Category extends Controller
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
        foreach ($data as $key => $value){
         if($value['parent_id']==$v['parent_id']){
          $catArray[$k]['subCategory'][] = $value; 
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

   public function view($viewId){
      $listing = new Listing();
      $data = array();
      $cat = new Categories();
      $cat1 = new Categories();
	  $data = $cat->findAll();
	  $catArray = array();
	  foreach ($data as $key => $value){
      if($value['parent_id']==0){
         if($value['id']==$viewId){
            $value['current']=true; 
           }else{
            $value['current']=false;
           } 
       $catArray[] = $value; 
      }
   }
   
   foreach ($catArray as $k => $v) {
      //print_r($v['id']);
      foreach ($data as $key => $value1){
       if($v['id']==$value1['parent_id']){
         if($value1['id']==$viewId){
            $value1['current']=true;  
            $catArray[$k]['current']=true;  
           }else{
            $value1['current']=false;  
            $catArray[$k]['current']=false;  
           } 
        $catArray[$k]['subCategory'][] = $value1; 
       }
    }
   }
      
      	
      $cat = $cat->where('id',$viewId)->findAll();
		if($cat[0]['parent_id']!=0){
			$cat1 = $cat1->where('id',$cat[0]['parent_id'])->findAll();
		}else{
			$cat1 = array();
		}

      $featured = $listing->where('featured','1')->findAll();
      $result = $listing->where('category_id',$viewId)->findAll();
      $pager = \Config\Services::pager();
      $data['categories'] = $catArray;	
      //$data['message'] = $message;
      $data['listing'] = $result;
      $data['featured'] = $featured;
      $data['mainCategory'] = $cat;
      $data['parentCategory'] = $cat1;
      echo view('category',$data);
   }

   /*public function newstudent()
   {
      echo view('newstudent');
      //echo ' new method';
   }

   public function addstudent()
   {
      $request = \Config\Services::request();
      $session = \Config\Services::session();
      $name  = $request->getPost('std');
      $subject  = $request->getPost('subject');
      $newStudent = [
         's_name'=>$name,
         's_subject'=>$subject,
      ];
      $std = new MyStudents();
      $result = $std->insert($newStudent);
      if ($result) {
         $session->setFlashdata('message','You have successfully inserted the student.');
      }
      else{
         $session->setFlashdata('message','Oops something went wrong please try again.');
      }
      return redirect()->to(site_url('students'));
      //var_dump($result);
      //echo 'working..';
   }

   public function editstudent($userId =  null)
   {
      $session = \Config\Services::session();
      if (!empty($userId)) {
         $std = new MyStudents();
         $result = $std->where('s_id',$userId)->findAll();
         if (count($result) > 0) {
            $data['student'] = $result;
            echo view('editStudent',$data);
         }
         else{
            $session->setFlashdata('message','The Student is not exist');
            return redirect()->to(site_url('students'));
         }
      }
      else{
         $session->setFlashdata('message','The id is not available, please try again.');
         return redirect()->to(site_url('students'));
      }

   }

   public function updatestudent()
   {
      $request = \Config\Services::request();
      $session = \Config\Services::session();
      $name  = $request->getPost('std');
      $subject  = $request->getPost('subject');
      $studentId  = $request->getPost('id');

      $updateStudent = [
         's_name'=>$name,
         's_subject'=>$subject,
      ];
      //echo $studentId;
      //die();
      $std = new MyStudents();
      $result = $std->update($studentId,$updateStudent);
      if ($result) {
         $session->setFlashdata('message','You have successfully updated the student.');
      }
      else{
         $session->setFlashdata('message','Oops something went wrong please try again.');
      }
      return redirect()->to(site_url('students'));
   }

   public function delete($userId)
   {
      $session = \Config\Services::session();
      if (!empty($userId)) {
         $std = new MyStudents();
         $result = $std->where('s_id',$userId)->findAll();
         if (count($result) > 0) {
            //$result = $std->delete($userId);
            $result = $std->where('s_id',$userId)->delete();
            if ($result){
               $session->setFlashdata('message','You have successfully deleted.');
               return redirect()->to(site_url('students'));
            }
            else{
               $session->setFlashdata('message','You can\'t delete the student right now.');
               return redirect()->to(site_url('students'));
            }
         }
         else{
            $session->setFlashdata('message','The Student is not exist');
            return redirect()->to(site_url('students'));
         }
      }
      else{
         $session->setFlashdata('message','The id is not available, please try again.');
         return redirect()->to(site_url('students'));
      }
   }*/
}//class