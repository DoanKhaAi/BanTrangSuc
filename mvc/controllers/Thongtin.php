<?php
class Thongtin extends Controller{
    public function Show(){
        $user = $this->model ("Model");
        $this->view("thongtin", ["DL"=>$user->GetCSDL()]);
    }
    public function Doimatkhau(){
        $user = $this->model ("Model");
        $this->view("doimatkhau", ["DL"=>$user->GetCSDL()]);
    }
}
?>
