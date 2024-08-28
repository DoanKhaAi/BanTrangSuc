<?php 
 require_once './helpers/helpers.php';
$isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$errors = [];


 if ($isPost){
    $db= $data["DL"];
    $credentials =[
        'username' =>$_SESSION['user']['username'] ?? null,
        'password' =>$_POST['old-password'] ?? null
        
    ];
    $db= $data["DL"];
    $user =authenticate($credentials, $db);
    
    if ($user) 
    {  
        $new_password = $_POST['new-password'];
        $new_password=encrypt_password($new_password);
        $sql = "UPDATE users SET password = :password WHERE username = :username;";
        $stmt = $db->prepare($sql);
        $stmt->execute([
                'username' => $credentials['username'],
                'password' => $new_password
        ]);
        header("Location: Thongtin");    
    }
    else $errors['old-password']= 'Mật khẩu hiện tại không đúng!';
}
require_once "doimatkhau_view.php";
?>
