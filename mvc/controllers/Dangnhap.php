<?php
class Dangnhap extends Controller{
    public function Show(){
        $user = $this->model ("Model");
        $this->view("dangnhap", ["DL"=>$user->GetCSDL()]);
    }
}
?>
