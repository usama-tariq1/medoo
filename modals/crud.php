<?php
    namespace Crud;
    class Crud{


        protected $db ;
        protected $table;

        function __construct($db ,$table )
        {
            $this->db = $db;
            $this->table = $table;
        }


        function add(){
            $result = $this->db->insert( $this->table , [
                "u_name" => "xyz",
                "u_email" => "xyz.live",
                "u_pass" => "12345",
                "u_contact" => "03001234567",
                "role_id" => "1"
        
            ]);
            return $result->rowCount();

        }
        function all(){
            return $this->db->select( $this->table , '*');
        }
        function one($where){
            return $this->db->select(  $this->table , '*' , $where  );
        }
    }



?>