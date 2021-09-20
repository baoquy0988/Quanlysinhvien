<?php
    class PointModel extends Data
    {
        public function CreatP($idst,$idsb,$point,$num)
        {
            $cn=$this->connect();
            $sql="INSERT INTO diemthi(masv,mamh,diemso,lanthi) VALUES(:masv,:mamh,:diemso,:lanthi)";
            $query=$cn->prepare($sql);
            $query->bindParam(':masv',$idst);
            $query->bindParam(':mamh',$idsb);
            $query->bindParam(':diemso',$point);
            $query->bindParam(':lanthi',$num);
            $query->execute();
        }
        public function ReadP()
        {
            $cn=$this->connect();
            $sql="SELECT * FROM diemthi";
            $result=$cn->query($sql);
            return $result;
        }
        public function UpdateP($idst,$idsb,$point,$num)
        {
            $cn=$this->connect();
            $sql="UPDATE diemthi SET mamh='$idsb',diemso='$point',lanthi='$num' WHERE masv='$idst'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;

        }
        public function DeleteP($idst)
        {
            $cn=$this->connect();
            $sql="DELETE FROM diemthi WHERE masv='$idst'";
            $query=$cn->prepare($sql);
            $result=$query->execute();
            return $result;
        }
        public function Reexamstatistics()
        {
            $cn=$this->connect();
            $sql="SELECT sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso 
            FROM sinhvien INNER JOIN diemthi ON sinhvien.masv=diemthi.masv 
                          INNER JOIN monhoc ON diemthi.mamh=monhoc.mamh
            WHERE diemthi.lanthi>1
            GROUP BY sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso";
            $result=$cn->query($sql);
            return $result;
        }
        public function Statisticsunder5()
        {
            $cn=$this->connect();
            $sql="SELECT sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso 
            FROM sinhvien INNER JOIN diemthi ON sinhvien.masv=diemthi.masv 
                          INNER JOIN monhoc ON diemthi.mamh=monhoc.mamh
            WHERE diemthi.diemso<5.0
            GROUP BY sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso";
            $result=$cn->query($sql);
            return $result;
        }   
        public function Statisticsover8()
        {
            $cn=$this->connect();
            $sql="SELECT sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso 
            FROM sinhvien INNER JOIN diemthi ON sinhvien.masv=diemthi.masv 
                          INNER JOIN monhoc ON diemthi.mamh=monhoc.mamh
            WHERE diemthi.diemso>8.0 AND diemthi.lanthi=1
            GROUP BY sinhvien.masv,monhoc.mamh,monhoc.tenmonhoc,sinhvien.hoten,diemthi.diemso";
            $result=$cn->query($sql);
            return $result;
        }
        public function Descendingsort()
        {
            $cn=$this->connect();
            $sql="SELECT sinhvien.masv,sinhvien.hoten,monhoc.mamh,monhoc.tenmonhoc,monhoc.sotinchi, ROUND(AVG(diemthi.diemso),2) AS DTB
                FROM monhoc INNER JOIN diemthi ON diemthi.mamh=monhoc.mamh
                            INNER JOIN sinhvien ON sinhvien.masv=diemthi.masv
                GROUP BY sinhvien.masv,sinhvien.hoten,monhoc.mamh,monhoc.tenmonhoc,monhoc.sotinchi
                ORDER BY DTB DESC";
            $result=$cn->query($sql);
            return $result;
        }
    }
?>