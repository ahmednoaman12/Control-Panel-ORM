<?php

require 'Mysqladapter.php';
require 'database_config.php';


class  Course extends Mysqladapter
{
    //set the table name
    private $_table = 'courses';

    public function __construct()
    {
        //Add from the datebase configrution file
        global $config;

        //call the parent constructor
        parent::__construct($config);
    }

    //select  all courses of array
    public function getAllCourse()
    {
        $this->select($this->_table);
        return $this->fetchAll();
    }

    // select one  Cousre of array
    public function getCourseBytId($id)
    {
        $this->select($this->_table, '	id= '.$id);
        return $this->fetch();
    }

    // inser course
    public function addCourse($data)
    {
        return $this->insert($this ->_table , $data);
    }

   
    // update course
    public function updateCourse($data,$id){
        return $this->update($this ->_table , $data, '	id= ' .$id);
    }

    //delete Course 
    public function deleteCourse($id){
        return $this->delete($this ->_table ,'	id= ' .$id );

    }
    //search existing course
    public function searchCourse($keyword)
    {
        $this ->select($this->_table, " name LIKE '%$keyword%' OR email LIKE '%$keyword%' ");
        return $this ->fetchAll();
    }
}


?>