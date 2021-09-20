<?php
    class StudentController extends Controller
    {
        public $studentmodel;
        public function __construct()
        {
            $this->studentmodel=$this->model("StudentModel");
        }
        public function CreatStudent()
        {
            if(isset($_POST))
            {
                $idsv=$_POST["idsv"];
                $name=$_POST["name"];
                $phone=$_POST["phone"];
                $address=$_POST["address"];
                $this->studentmodel->CreatSV($idsv,$name,$phone,$address);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function Read()
        {
            $this->view("main",
            ["array" => $this->studentmodel->ReadSV(),
            "page"=>"Studentview"]);
        }
        public function UpdateStudent()
        {
            if(isset($_POST))
            {
                $idsv=$_POST["idsv"];
                $name=$_POST["name"];
                $phone=$_POST["phone"];
                $address=$_POST["address"];
                $this->studentmodel->UpdateSV($idsv,$name,$phone,$address);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function DeleteStudent()
        {
            if(isset($_POST))
            {
                $idsv=$_POST["idsv"];
                $this->studentmodel->DeleteSV($idsv);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function ShowformCreat()
        {
            $this->view("main",["page"=>"FrmCreatStudent"]);
        }
        public function ShowformUpdate()
        {
            $this->view("main",["page"=>"FrmUpdateStudent"]);
        }
        public function ShowformDelete()
        {
            $this->view("main",["page"=>"FrmDeleteStudent"]);
        }
    }
?>