<?php
    class StudentModel extends Data
    {
        public function CreatSV($id,$name,$phone,$address)
        {
            $cn=$this->connect();
            $sql="INSERT INTO sinhvien(masv,hoten,sdt,diachi) VALUES(:masv,:hoten,:sdt,:diachi)";
            $query=$cn->prepare($sql);
            $query->bindParam(':masv',$id);
            $query->bindParam(':hoten',$name);
            $query->bindParam(':sdt',$phone);
            $query->bindParam(':diachi',$address);
            $result=$query->execute();
            return $result;
        }
        public function ReadSV()
        {
            $cn=$this->connect();
            $sql="SELECT * FROM sinhvien";
            $result=$cn->query($sql);
            return $result;

        }
        public function UpdateSV($id,$name,$phone,$address)
        {
            $cn=$this->connect();
            $sql="UPDATE sinhvien SET hoten='$name',sdt='$phone',diachi='$address' WHERE masv='$id'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;
        }
        public function DeleteSV($id)
        {
            $cn=$this->connect();
            $sql="DELETE FROM sinhvien WHERE masv='$id'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;
        }
    }
?>