
<!-- PHP -->

<?php 
  $arr=explode("/", filter_var(trim($_GET["url"], "/")));
  if (!empty($arr[1]))
    header("Location: ../Thongtin"); 

    require "components/header.php";
    $db= $data["DL"];
    $username= $_SESSION['user']['username'] ?? null;
    $sql = "SELECT username, fullname, phone, address, password from users
    WHERE username = :username";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        'username' => $username,
        //'password' => $password
        ]);
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- GIAO DIỆN -->

<div class="back2 "><img src="public/image/Profile/profile.jpg"></div>
<div class="body-info shadow khung">
        <div class="text-large-right2 text-center">THÔNG TIN CỦA BẠN</div>

        <div class="row">
            <div class="col-4 thongtin-trai">
                    <i class="fa-solid fa-user"></i>
            </div>
            <div class="col-8 thongtin-phai chuto">
                    <?php echo $user[0]['fullname'] ?? null ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4 thongtin-trai">Username:</div>
            <div class="col-8 thongtin-phai">
                    <?php echo $user[0]['username'] ?? null ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4 thongtin-trai">Số điện thoại:</div>
            <div class="col-8 thongtin-phai">
                    <?php echo $user[0]['phone'] ?? null ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4 thongtin-trai">Địa chỉ:</div>
            <div class="col-8 thongtin-phai">
                    <?php echo $user[0]['address'] ?? null ?>
            </div>
        </div>

        <?php  if ($username) : ?>
            <div class="change-pass"><a href="Thongtin/Doimatkhau">Đổi mật khẩu</a></div>
        <?php endif; ?>
        
</div>

<?php require "components/footer.php"; ?>