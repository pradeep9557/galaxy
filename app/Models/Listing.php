<?php namespace App\Models;
use CodeIgniter\Model;

class Listing extends Model
{
   protected $DBGroup = 'default';
   protected $table = 'listing';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['title','images','description','location_id','date','category_id','price','featured'];
   protected $createdField = 'date';
   protected $updatedField = 'modified_date';

}