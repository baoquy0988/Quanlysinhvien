<?php
    class SubjectController extends Controller
    {
        public $subjectmodel;
        public function __construct()
        {
            $this->subjectmodel=$this->model("SubjectModel");
        }
        public function CreatSubject()
        {
            if(isset($_POST))
            {
                $idsb=$_POST["idsb"];
                $namesb=$_POST["namesb"];
                $number=$_POST["number"];
                $this->subjectmodel->CreatSb($idsb,$namesb,$number);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function Read()
        {
            $this->view("main",
            ["array"=>$this->subjectmodel->ReadSb(),
            "page"=>"Subjectview"]);

        }
        public function UpdateSubject()
        {
            if(isset($_POST))
            {
                $idsb=$_POST["idsb"];
                $namesb=$_POST["namesb"];
                $number=$_POST["number"];
                $this->subjectmodel->UpdateSb($idsb,$namesb,$number);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function DeleteSubject()
        {
            if(isset($_POST))
            {
                $idsb=$_POST["idsb"];
                $this->subjectmodel->DeleteSb($idsb);
                return 1;
            }
            else {
                return 0;
            }
        }
        public function ShowformCreat()
        {
            $this->view("main",["page"=>"FrmCreatSubject"]);
        }
        public function ShowformUpdate()
        {
            $this->view("main",["page"=>"FrmUpdateSubject"]);
        }
        public function ShowformDelete()
        {
            $this->view("main",["page"=>"FrmDeleteSubject"]);
        }


    }
?>