<?php 
  $arr=explode("/", filter_var(trim($_GET["url"], "/")));
  if (!empty($arr[1]))
    header("Location: ../Dangky"); 
?>
<?php require "components/header.php"; ?>


    <div class="back"><img src="public/image/Login/login1.jpg" alt=""></div>
    <div class="container my-2 p-2 khung_input" >
        <form class="row col-md-6 g-2 mx-auto shadow p-4 " id="form_input" method="POST"  onsubmit="return formValidate();"> 
            <h3>Đăng ký</h3> <hr>
            <div class="col-12">
              <label for="inputHoTen" class="form-label">Họ và tên</label>
              <input name="fullname" type="text" class="form-control" id="inputHoTen" value="<?= $params['fullname'] ?? null ?>">
              <div class="nhapsai"> </div>
            </div>
            <div class="col-12">
                <label for="username" class="form-label">Tên đăng nhập</label>
                <input name="username" type="text" class="form-control" id="username" value="<?= $params['username'] ?? null ?>">
                <div class="nhapsai" id= "nhapsai_tendn"><?php echo ($errors['username'] ?? null )?></div>
            </div>
              <div class="col-12">
                <label for="phone" class="form-label">Số điện thoại</label>
                <input name="phone" type="tel" class="form-control" id="phone" value="<?= $params['phone'] ?? null ?>">
                <div class="nhapsai" id= "nhapsai_sdt"><?php echo ($errors['phone'] ?? null )?></div>
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Địa chỉ</label>
                <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Số nhà, tên đường, phường/xã/thị trấn, quận/huyện, tỉnh/thành phố" value="<?= $params['address'] ?? null ?>">
                <div class="nhapsai"></div>
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Mật khẩu</label>
              <input name="password" type="password" class="form-control" id="password" value="<?= $params['password'] ?? null ?>">
              <div class="nhapsai" id= "nhapsai_mk"><?php echo ($errors['password'] ?? null )?></div>
            </div>
            <div class="col-12">
                <label for="confirm_password" class="form-label">Xác nhận mật khẩu</label>
                <input name="confirm_password" type="password" class="form-control" id="confirm_password" value="<?= $params['password'] ?? null ?>">
                <div class="nhapsai" id= "nhapsai_mk2"><?php echo ($errors['confirm_password'] ?? null )?></div>
            </div>
            <div class="mb-3 d-flex">
                <button type="submit" class="btn btn-primary">Đăng ký</button>
                <p class="form-label ms-auto mt-2">Bạn đã có tài khoản?<a href="Dangnhap" style="color:rgb(105, 2, 125);">Đăng nhập</a></p>
            </div>
        </form>
    </div>

<?php require "components/footer.php"; ?>

<script>
       //const form_register = document.getElementById("form_register");
       const username= document.getElementById("username");
       const phone= document.getElementById("phone");
       const password= document.getElementById("password");
       const confirm_password= document.getElementById("confirm_password");
     
       function formValidate(){
         const pattern_username= /^[a-zA-Z0-9_]{6,20}$/;
         const pattern_phone= /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
         const pattern_password= /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/;

       var kt=true;
         if (!pattern_username.test(username.value)){
            document.getElementById('nhapsai_tendn').textContent="Tên đăng nhập chỉ bao gồm số, kí tự và dấu gạch dưới, tối thiểu 6 và tối đa 20 kí tự!";  
            kt=false;
         }
         if (!pattern_phone.test(phone.value)){
            document.getElementById('nhapsai_sdt').textContent="Số điện thoại không hợp lệ!";  
            kt=false;
         }
         if (!pattern_password.test(password.value)){
            document.getElementById('nhapsai_mk').textContent="Mật khẩu phải bao gồm kí tự hoa thường, số và kí tự đặt biệt và có chiều dài tối thiểu là 8 kí tự!";  
            kt=false;
         }
         if(password.value!==confirm_password.value) {
            document.getElementById('nhapsai_mk2').textContent= 'Mật khẩu nhập lại không khớp!';
            //alert('Password does not match.');
            //return false;
            kt=false;
         }
        
         return kt;
       };
       
    </script>