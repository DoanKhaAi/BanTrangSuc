<?php
class Trangchu extends Controller{
    public function Show(){
        $gia= $this->model ("Model");
       $this->view("trangchu", ["Gia"=> $gia->GetGiaVang()]);
    }
}
?>
