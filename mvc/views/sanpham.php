
<?php 
  $arr=explode("/", filter_var(trim($_GET["url"], "/")));
  if (!empty($arr[1]))
    header("Location: ../Sanpham"); 
?>
<?php require "components/header.php"; ?>



<!--body ======================================================================= -->

<div class="container-fluid">
  <div class="row">
    <!-- Chỗ này là sidebar -->
    <div class="col-sm-2 left">
        <?php require "components/sidebar.php"; ?>
    </div>

    <!-- Chỗ này để sản phẩm -->
    <div class="col-sm-10 right">
          <div class="row">
              <div class="col-1"></div>
              <div class="col-11">
                <div class="text-large-right2 text-center">DÂY CHUYỀN</div>
                  <div class="row">
                    <?php foreach ($data["DC"] as $row): ?>
                      <div class="col-3">
                          <div class="card" style="width: 15rem; ">
                              <img src=<?= $row['linkdc'] ?> class="card-img-top" alt="Dây chuyền">
                              <div class="card-body">
                                  <div class="tensp"><?= $row['tendc']?></div>
                                  <div class="giasp"><?= 
                                        ((int)($row['giadc']/1000000)).".".((int)($row['giadc']%1000000)/1000).".000đ"?></div>
                                  <div class="group-button">
                                      <i class="fa-solid fa-cart-shopping"></i>
                                      <button class="mua">Mua hàng</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
              </div>
          </div>
          <div class="pagi">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link disabled" href="">Previous</a></li>
                    <li class="page-item"><a class="page-link active" href="Sanpham">1</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Matdaychuyen">2</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Bongtai">3</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Nhan">4</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Vongtay">5</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Vangmieng">6</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham/Matdaychuyen">Next</a></li>
                </ul>
            </nav>
          </div> 
          

    </div>
    

    </div>
</div>


<?php require "components/footer.php"; ?>
