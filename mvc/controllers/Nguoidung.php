<?php
class Nguoidung extends Controller{
    public function Show(){
        $user = $this->model ("Model");
        $this->view("nguoidung", ["ND"=>$user->GetNguoiDung(),
                                "DL"=>$user->GetCSDL()]);
    }
}
?>