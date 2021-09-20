<?php
    class Data
    {
        protected $host_name= "localhost";
        protected $db_name= "bao_quy";
        protected $user_name ="root";
        protected $password= "";
        public function connect()
        {
            try{
                $con = new PDO("mysql:host=$this->host_name;dbname=$this->db_name",$this->user_name,$this->password);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch (PDOException $e){
                    echo $e->getMessage();
            }
            return $con;
        }
    }
?>