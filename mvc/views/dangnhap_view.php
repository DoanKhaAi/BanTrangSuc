<?php 
  $arr=explode("/", filter_var(trim($_GET["url"], "/")));
  if (!empty($arr[1]))
    header("Location: ../Dangnhap"); 
?>
<?php require "components/header.php"; ?>  
    
    <div class="back2"><img src="public/image/Login/login10.jpg" alt=""></div>
    <div class="container ">
        <form class="w-50-2 mx-auto py-5 shadow p-4" method="post" action="Dangnhap">
            <h3>Đăng nhập</h3> <hr>
            <?php  if ($isPost ==true && !empty($errors)) : ?>
                  <div class="nhapsai">
                      <ul>
                        <?php
                            foreach ($errors as $err){
                              echo "<p>$err</p>";
                            } 
                        ?>
                      </ul>

                  </div>
              <?php endif; ?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
              <div class="nhapsai"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
              <div class="nhapsai"></div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
              <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
            </div>
            <div class="mb-3 d-flex">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                <p class="form-label ms-auto mt-2">Bạn chưa có tài khoản?<a href="Dangky" style="color:rgb(105, 2, 125);">Đăng ký</a></p>
            </div>
          </form>
    </div>
  <?php require "components/footer.php"; ?>