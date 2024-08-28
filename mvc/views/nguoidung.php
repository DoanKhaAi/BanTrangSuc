<?php
require_once './helpers/helpers.php';
$arr = explode("/", filter_var(trim($_GET["url"], "/")));
if (!empty($arr[1]))
  header("Location: ../Nguoidung");
require "components/header.php";

$isPost = $_SERVER['REQUEST_METHOD'] == 'POST';
$errors = [];
$OK_cap=false;
$OK_xoa=false;

if ($isPost) {
        $username_cap = $_POST['cap_quyen'] ?? null;
        $username_xoa = $_POST['xoa_quyen'] ?? null;
        $db= $data["DL"];
        if ($username_cap)
        {
          $OK_cap=capquyen($username_cap, $db);
          if (!$OK_cap) $errors['cap']='Lỗi khi cấp quyền, vui lòng kiểm tra lại tên người dùng!';
        }
           
        if ($username_xoa)
        {
          $OK_xoa=xoaquyen($username_xoa, $db);
          if (!$OK_xoa) $errors['xoa']='Lỗi khi xóa quyền, vui lòng kiểm tra lại tên người dùng!';
        }
            
  }
?>
<div class="row">
  <div class="col-6">
    <div class="text-large-right text-center"><b style="color:red;">CẤP</b> QUYỀN ADMIN CHO NGƯỜI DÙNG</div>
    <div class="nguoidung2">
        <form class="form-nguoidung" method="POST">
          <div>
            <label for="">Nhập tên người dùng muốn cấp quyền Admin</label>
          </div>
          <input type="text" name="cap_quyen">
          <button class="submit-user-grant" type="submit">Cấp</button>
          <div class="nhapsai"><?php echo $errors['cap'] ?? null ?></div>
          <div class="good"><?php  if ($OK_cap) echo "Cấp quyền thành công, tải lại trang để xem kết quả!";?></div>
        </form>
    </div>
  </div>
  <div class="col-6">
    <div class="text-large-right text-center"><b style="color:red;">XÓA</b> QUYỀN ADMIN CỦA NGƯỜI DÙNG</div>
    <div class="nguoidung2">
      <form class="form-nguoidung" action="" method="POST">
        <div>
          <label for="">Nhập tên người dùng muốn xóa quyền Admin</label>
        </div>
        <input type="text" name="xoa_quyen">
        <button class="submit-user-grant" type="submit">Xóa</button>
        <div class="nhapsai"><?php echo $errors['xoa'] ?? null ?></div>
        <div class="good"><?php  if ($OK_xoa) echo "Xóa quyền thành công, tải lại trang để xem kết quả!";?></div>
      </form>
    </div>
  </div>
</div>

<div class="text-large-right text-center">THÔNG TIN CÁC NGƯỜI DÙNG TRÊN HỆ THỐNG</div>
<div class="nguoidung">
  <table class="table">
    <thead>
      <tr>
        <th class="bang1" scope="col">Tên đăng nhập</th>
        <th class="bang1" scope="col">Họ và tên</th>
        <th class="bang1" scope="col">Số điện thoại</th>
        <th class="bang1" scope="col">Địa chỉ</th>
        <th class="bang1" scope="col">Quyền sử dụng</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($data["ND"] as $row) : ?>
        <?php if ($i % 2 != 0) : ?>
          <tr>
            <td class="bang le"><?= $row['username'] ?></td>
            <td class="bang le"><?= $row['fullname'] ?></td>
            <td class="bang le"><?= $row['phone'] ?></td>
            <td class="bang le"><?= $row['address'] ?></td>
            <td class="bang le"><?= $row['user_grant'] ?></td>
          </tr>
        <?php else : ?>
          <tr>
            <td class="bang"><?= $row['username'] ?></td>
            <td class="bang"><?= $row['fullname'] ?></td>
            <td class="bang"><?= $row['phone'] ?></td>
            <td class="bang"><?= $row['address'] ?></td>
            <td class="bang"><?= $row['user_grant'] ?></td>
          </tr>
        <?php endif;
        $i = $i + 1; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



<?php require "components/footer.php"; ?>