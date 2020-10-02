<?php namespace App\Models;
use CodeIgniter\Model;

class Categories extends Model
{
   protected $DBGroup = 'default';
   protected $table = 'categories';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $useTimestamps = true;
   protected $allowedFields = ['name','date','icon_path','parent_id','modified_date'];
   protected $createdField = 'date';
   protected $updatedField = 'modified_date';

}