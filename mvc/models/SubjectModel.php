<?php 
    class SubjectModel extends Data
    {
        public function CreatSb($idsb,$namesb,$number)
        {
            $cn=$this->connect();
            $sql="INSERT INTO monhoc(mamh,tenmonhoc,sotinchi) VALUES(:mamh,:ten,:stc)";
            $query=$cn->prepare($sql);
            $query->bindParam(':mamh',$idsb);
            $query->bindParam(':ten',$namesb);
            $query->bindParam(':stc',$number);
            $result=$query->execute();
            return $result;
        }
        public function ReadSb()
        {
            $cn=$this->connect();
            $sql="SELECT * FROM monhoc";
            $result=$cn->query($sql);
            return $result;
        }
        public function UpdateSb($idsb,$namesb,$number)
        {
            $cn=$this->connect();
            $sql="UPDATE monhoc SET tenmonhoc='$namsb',sotinchi='$number' WHERE mamh='$idsb'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;
        }
        public function DeleteSb($idsb)
        {
            $cn=$this->connect();
            $sql="DELETE FROM monhoc WHERE mamh='$idsb'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;
        }






    }



















?>
