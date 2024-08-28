<?php
class Dangky extends Controller{
    public function Show(){
        $user = $this->model ("Model");
       //$this->view("register", ["DL"=> $user->GetCSDL()]);
       $this->view("dangky", ["DL"=>$user->GetCSDL()]);
    }
}
?>
