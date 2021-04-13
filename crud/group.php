<?php

require 'Mysqladapter.php';
require 'database_config.php';


class  Group extends Mysqladapter
{
    //set the table name
    private $_table = 'groups';

    public function __construct()
    {
        //Add from the datebase configrution file
        global $config;

        //call the parent constructor
        parent::__construct($config);
    }

    //select  all groups of array
    public function getAllGroup()
    {
        $this->select($this->_table);
        return $this->fetchAll();
    }

    // select one  Cousre of array
    public function getGroupBytId($id)
    {
        $this->select($this->_table, '	id= '.$id);
        return $this->fetch();
    }

    // inser Group
    public function addGroup($data)
    {
        return $this->insert($this ->_table , $data);
    }

   
    // update Group
    public function updateGroup($data,$id){
        return $this->update($this ->_table , $data, '	id= ' .$id);
    }

    //delete Group 
    public function deleteGroup($id){
        return $this->delete($this ->_table ,'	id= ' .$id );

    }
    //search existing Group
    public function searchGroup($keyword)
    {
        $this ->select($this->_table, " name LIKE '%$keyword%' OR email LIKE '%$keyword%' ");
        return $this ->fetchAll();
    }
}


?>