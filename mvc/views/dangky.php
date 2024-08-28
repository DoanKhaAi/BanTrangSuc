<?php 
require_once './helpers/helpers.php';

$isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$isSuccess = false;
$params = [];
$errors = [];

if ($isPost){
    $params['fullname'] = $_POST['fullname'] ?? null;
    $params['username'] = $_POST['username'] ?? null;
    $params['phone'] = $_POST['phone'] ?? null;
    $params['address'] = $_POST['address'] ?? null;
    $params['password'] = $_POST['password'] ?? null;
    $params['confirm_password'] = $_POST['password'] ?? null;
    
    
    //validate username 
    //ký tự, số và _, tối thiểu 6, tối đa 20 ký tự

    // $pattern = '/^[a-zA-Z0-9_]{6,20}$/';
    // if (!preg_match($pattern, $params['username'])){
    //     $errors['username'] = 'Tên đăng nhập chỉ bao gồm số, kí tự và dấu gạch dưới, tối thiểu 6 và tối đa 20 kí tự!';
    // }

    //Validate phone number
    // $pattern = '/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/';
    // if (!preg_match($pattern, $params['phone'])){
    //     $errors['phone'] = 'Số điện thoại không hợp lệ!';
    // }

     //validate password
    //  $pattern='/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/';
    //  if (!preg_match($pattern, $params['password'])){
    //      $errors['password'] ='Mật khẩu phải bao gồm kí tự, số và kí tự đặt biệt và có chiều dài tối thiểu là 8 kí tự!';
    //  }
     //validate confirm password
    //  if ($params['password'] !== $params['confirm_password']){
    //      $errors['confirm_password'] ='Mật khẩu nhập lại không khớp!';
    //  }



     //Kiểm tra username đã được sử dụng chưa
    
    $sql = "SELECT username FROM users WHERE username= :username";
    $stmt =  $data["DL"]->prepare($sql);
    $stmt->execute(['username' => $params['username']]);
    if ($stmt->fetch()){
        $errors['username'] = 'Tên đăng nhập đã tồn tại, vui lòng chọn lại!';
    }
     //if valildate ok
     if (empty($errors)){
        // băm mật khẩu trước khi lưu
        $params['password'] = encrypt_password($params ['password']);

        //remove confirm_password
        //unset ($params['confirm_password']);
        $sql = "INSERT INTO users (username, fullname, phone, address, password, user_grant) VALUES (:username, :fullname, :phone, :address, :password, 'user')";
        unset($params['confirm_password']);
        $stmt= $data["DL"]->prepare($sql);
        if($stmt->execute($params)){
            header("Location: Thanhcong");
        }
        
     
    }
    
}

require_once "dangky_view.php";


?>