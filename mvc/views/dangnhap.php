<?php

//session_start();

 require_once './helpers/helpers.php';
 if (check_login()){
    header("Location: Trangchu");
    exit();
}



$isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$errors = [];


if ($isPost) {
    $credentials =[
        'username' =>$_POST['username'] ?? null,
        'password' =>$_POST['password'] ?? null
        
    ];
   
    $db= $data["DL"];
    $user =authenticate($credentials, $db);

 

    if ($user){
        $_SESSION['user'] = $user;
        $_SESSION['user']['username'] =  $credentials['username'];
        //$_SESSION['user']['password'] =  $credentials['password'];
        if (isset($_POST['remember_me'])){
            $str=serialize($credentials);

            $encrypted = encrypt ($str, ENCRYPTION_KEY);
            setcookie('credentials', $encrypted, mktime(23, 59, 59, 12, 1, 2024));
        }
        header("Location: Trangchu");
        exit();
    }else{
        $errors[] = 'Tên đăng nhập hoặc mật khẩu không đúng!';
    }
}

 require_once "dangnhap_view.php";
// $data=[
//    'isPost' =>$isPost,
//      'errors' =>$errors
// ];
 

    
?>