<?php 
define('ENCRYPTION_KEY', '!@@#%_my_serect_key_for_encryption_@#$!&');
if (!function_exists('encrypt_password')) {
    function encrypt_password($password){
        $options = [
            'cost' =>12,
        ];
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }
}
if (!function_exists('check_login')) {
    function check_login()
    {
        return  !empty($_SESSION['user']);
    }
}
if (!function_exists('authenticate')) {
    function authenticate($credentials, $db)
    {
       
        $username = $credentials['username'] ?? null;
        $password = $credentials['password'] ?? null;

        if ($username == null || $password == null) return false;
        $sql = "SELECT username, password, user_grant from users
                WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $username,
            //'password' => $password
        ]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$user) return false;
        if ($user[0]['username'] == 'admin' && $user[0]['password'] ==$password) return $user; 
        if (!password_check($password, $user[0]['password']))  return false;
        return $user;
        
    }
}
if (!function_exists('password_check')) {
    function password_check($password, $password_hash){
        return password_verify($password, $password_hash);
    }
}
if (!function_exists('encrypt')) {
    function encrypt($pure_string, $encrytion_key)
    {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);

        $options = 0;
        $encrytion_iv = '1234567891011121';
        $encryption = openssl_encrypt($pure_string, $ciphering, $encrytion_key, $options, $encrytion_iv);

        return $encryption;
    }
}

if (!function_exists('decrypt')) {
    function decrypt($pure_string, $encrytion_key)
    {
        $ciphering = "AES-128-CTR";
        $iv_length = openssl_cipher_iv_length($ciphering);

        $options = 0;
        $decryption_iv = '1234567891011121';

        $decryption = openssl_decrypt($pure_string, $ciphering, $encrytion_key, $options, $decryption_iv);

        return $decryption;
    }
}
if (!function_exists('auto_login')) {
    function auto_login()
    {
        $credential = $_COOKIE['credentials'] ?? null;
        if (empty($credential)) return;
        $user = unserialize(decrypt($credential, ENCRYPTION_KEY));

        if (!empty($user)) {
            $_SESSION['user'] = $user;
        }
    }
}
if (!function_exists('khongdau')){
    function khongdau($str=null)
    {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);
        return $str;
    }
}
if (!function_exists('capquyen')){
    function capquyen($username, $db){
        if ($username == null) return false;
        $sql = "SELECT username from users
        WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $username,
        ]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$user) return false;
        $sql = "UPDATE users
                SET user_grant = 'admin'
                WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $username,
        ]);
       return true;
    }
}
if (!function_exists('xoaquyen')){
    function xoaquyen($username, $db){
        if ($username == null) return false;
        $sql = "SELECT username from users
        WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $username,
        ]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (!$user) return false;
        $sql = "UPDATE users
                SET user_grant = 'user'
                WHERE username = :username";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            'username' => $username,
        ]);
       return true;
    }
}
?>