<?php 

    class user{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($config){
            $this->db = $config;
        }

        public function getUser($username,$password){
            try{
                $sql = "select * from admin where username = :username AND password = :password ";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':username', $username);
                $stmt->bindparam(':password', $password);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
           }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
    }
?>