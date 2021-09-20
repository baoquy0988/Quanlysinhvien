<?php
    class PointController extends Controller
    {
        public $pointmodel;
        public function __construct()
        {
            $this->pointmodel=$this->model("PointModel");
        }
        public function CreatPoint()
        {
            if(isset($_POST))
            {
                $idst=$_POST["idst"];
                $idsb=$_POST["idsb"];
                $point=$_POST["point"];
                $num=$_POST["num"];
                $this->pointmodel->CreatP($idst,$idsb,$point,$num);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function Read()
        {
            $this->view("main",
            ["array"=>$this->pointmodel->ReadP(),
             "page"=>"Pointview"]);
        }
        public function UpdatePoint()
        {
            if(isset($_POST))
            {
                $idst=$_POST["idst"];
                $idsb=$_POST["idsb"];
                $point=$_POST["point"];
                $num=$_POST["num"];
                $this->pointmodel->UpdateP($idst,$idsb,$point,$num);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function DeletePoint()
        {
            if(isset($_POST))
            {
                $idst=$_POST["idst"];
                $this->pointmodel->DeleteP($idst);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function ReexamStatistics()
        {
            $this->view("main",
            ["array"=>$this->pointmodel->Reexamstatistics(),
            "page"=>"StatisticalRexam"]);
        }
        public function StatisticsUnder5()
        {
            $this->view("main",
            ["array"=>$this->pointmodel->Statisticsunder5(),
            "page"=>"StatisticalUnder5"]);
        }
        public function StatisticsOver8()
        {
            $this->view("main",
            [
            "array"=>$this->pointmodel->Statisticsover8(),
            "page"=>"StatisticalOver8"]);
        }
        public function DescendingSort()
        {
            $this->view("main",
            ["array"=>$this->pointmodel->Descendingsort(),
             "page"=>"StatisticalSwap"]);
        }
        public function ShowformCreat()
        {
            $this->view("main",["page"=>"FrmCreatPoint"]);
        }
        public function ShowformUpdate()
        {
            $this->view("main",["page"=>"FrmUpdatePoint"]);
        }
        public function ShowformDelete()
        {
            $this->view("main",["page"=>"FrmDeletePoint"]);
        }
    }
?>