<?php
class Model extends Database{
    
    public function GetGiaVang(){
        $stmt= $this->conn->prepare("SELECT * FROM giavang");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetDayChuyen(){
        $stmt= $this->conn->prepare("SELECT * FROM daychuyen");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetBongTai(){
        $stmt= $this->conn->prepare("SELECT * FROM bongtai");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetNhan(){
        $stmt= $this->conn->prepare("SELECT * FROM nhan");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetMatDayChuyen(){
        $stmt= $this->conn->prepare("SELECT * FROM matdc");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetVongTay(){
        $stmt= $this->conn->prepare("SELECT * FROM vongtay");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetVangMieng(){
        $stmt= $this->conn->prepare("SELECT * FROM vangmieng");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetNguoiDung(){
        $stmt= $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        //return $stmt->fetchAll();
        return $stmt;
    }
    public function GetCSDL(){
        return $this->conn;
    }

}   
?>
