
<?php require "components/header2.php"; ?>  
    
    <div class="back2"><img src="../public/image/Login/doimk.jpg" alt=""></div>
    <div class="container ">
        <form class="w-50-2 mx-auto py-5 shadow p-4" method="POST"  onsubmit="return formValidate2();">
            <h3>Đổi mật khẩu</h3> <hr>
            <div class="mb-3">
              <label  class="form-label">Mật khẩu hiện tại</label>
              <input type="password" class="form-control"  name="old-password" id="old-password1">
              <div class="nhapsai" id="old-password2">
                    <?php echo  $errors['old-password'] ?? null;  ?>
              </div>
            </div>
            <div class="mb-3">
              <label  class="form-label">Mật khẩu mới (Tối thiểu 8 kí tự)</label>
              <input type="password" id="new-password1" class="form-control"  name="new-password" placeholder="Bao gồm kí tự hoa thường, số và kí hiệu đặc biệt">
              <div class="nhapsai" id="new-password2">

              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nhập lại mật khẩu mới</label>
              <input type="password" class="form-control" id="confirm-new-password1" name="confirm-new-password">
              <div class="nhapsai" id="confirm-new-password2">

              </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" id="phai">Đổi mật khẩu</button> 
            </div>
      </form>
    </div>
  <?php require "components/footer.php"; ?>

<script>
       const old_password= document.getElementById("old-password1");
       const new_password= document.getElementById("new-password1");
       const confirm_new_password= document.getElementById("confirm-new-password1");
       function formValidate2(){
         const pattern_password= /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/;

        var kt=true;
        
         if (!pattern_password.test(new_password.value)){
            document.getElementById('new-password2').textContent="Mật khẩu phải bao gồm kí tự, số và kí tự đặt biệt và có chiều dài tối thiểu là 8 kí tự!";  
            kt=false;
         }
         if(new_password.value!==confirm_new_password.value) {
            document.getElementById('confirm-new-password2').textContent= 'Mật khẩu nhập lại không khớp!';
            kt=false;
         }
         
         return kt;
       };  
</script>


