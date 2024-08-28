

<?php require "components/header2.php"; ?>



<!--body ======================================================================= -->

<div class="container-fluid">
  <div class="row">
    <!-- Chỗ này là sidebar -->
    <div class="col-sm-2 left">
        <?php require "components/sidebar2.php"; ?>
    </div>

    <!-- Chỗ này để sản phẩm -->
    <div class="col-sm-10 right">
          <div class="row">
              <div class="col-1"></div>
              <div class="col-11">
                <div class="text-large-right2  text-center">VÀNG MIẾNG</div>
                  <div class="row">
                    <?php foreach ($data["VM"] as $row): ?>
                      <div class="col-3">
                          <div class="card" style="width: 15rem; ">
                              <img src=<?= "../".$row['linkvm'] ?> class="card-img-top" alt="...">
                              <div class="card-body">
                                  <div class="tensp"><?= $row['tenvm']?></div>
                                  <div class="giasp"><?= 
                                        ((int)($row['giavm']/1000000)).".".((int)($row['giavm']%1000000)/1000).".000đ"?></div>
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
                    <li class="page-item"><a class="page-link" href="Vongtay">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="Sanpham">1</a></li>
                    <li class="page-item"><a class="page-link" href="Matdaychuyen">2</a></li>
                    <li class="page-item"><a class="page-link" href="Bongtai">3</a></li>
                    <li class="page-item"><a class="page-link" href="Nhan">4</a></li>
                    <li class="page-item"><a class="page-link" href="Vongtay">5</a></li>
                    <li class="page-item"><a class="page-link active" href="Vangmieng">6</a></li>
                    <li class="page-item"><a class="page-link disabled" href="">Next</a></li>
                </ul>
            </nav>
          </div> 

    </div>
    

    </div>
</div>


<?php require "components/footer.php"; ?>
