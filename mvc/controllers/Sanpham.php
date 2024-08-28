<?php
class Sanpham extends Controller{
    public function Show(){
        $dc= $this->model ("Model");
        $this->view("sanpham", ["DC"=> $dc->GetDayChuyen()]);
    }
    public function Bongtai(){
        $bt= $this->model ("Model");
        $this->view("bongtai", ["BT"=> $bt->GetBongTai()]);
    }
    public function Nhan(){
        $n= $this->model ("Model");
        $this->view("nhan", ["N"=> $n->GetNhan()]);
    }
    public function Matdaychuyen(){
        $mdc= $this->model ("Model");
        $this->view("matdaychuyen", ["MDC"=> $mdc->GetMatDayChuyen()]);
    }
    public function Vongtay(){
        $vt= $this->model ("Model");
        $this->view("vongtay", ["VT"=> $vt->GetVongTay()]);
    }
    public function Vangmieng(){
        $vm= $this->model ("Model");
        $this->view("vangmieng", ["VM"=> $vm->GetVangMieng()]);
    }
}
?>
