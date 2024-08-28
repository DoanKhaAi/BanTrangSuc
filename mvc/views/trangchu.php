<?php
$arr = explode("/", filter_var(trim($_GET["url"], "/")));
if (!empty($arr[1]))
  header("Location: ../Trangchu");
if (empty($arr[0]))
  header("Location: Trangchu");
?>
<?php require "components/header.php"; ?>

<?php
require_once './helpers/helpers.php';
if (!check_login()) {
  auto_login();
}
?>

<!--body ======================================================================= -->

<div class="container-fluid">
  <div class="row">
    <!-- Chỗ này là sidebar -->
    <div class="col-sm-2 left">
      <?php require "components/sidebar.php"; ?>
    </div>


    <!-- Bên đây là nội dung nè Thùy -->


    <div class="col-sm-10">

      <div class="right">
        <!-- Slide -->
        <div id="carouselExampleAutoplaying" class="carousel slide slides" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="image-right" src="public/image/Banner/banner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img class="image-right" src="public/image/Banner/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img class="image-right" src="public/image/Banner/banner3.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


        <!-- Biểu tượng sản phẩm -->
        <div class="text-large-right text-center">DANH MỤC SẢN PHẨM</div>
        <div class="list-image">
          <div class="">
            <a href="Sanpham" class="hinh_chuyen">
              <img src="public/image/List/daychuyen.jpg" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Dây chuyền, kiềng</div>
            </a>
          </div>
          <div class="">
            <a href="Sanpham/Matdaychuyen" class="hinh_chuyen">
              <img src="public/image/List/matdaychuyen.png" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Mặt dây chuyền</div>
            </a>
          </div>
          <div class="">
            <a href="Sanpham/Bongtai" class="hinh_chuyen">
              <img src="public/image/List/bongtai.jpg" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Bông tai</div>
            </a>
          </div>
          <div class="">
            <a href="Sanpham/Nhan" class="hinh_chuyen">
              <img src="public/image/List/nhan.jpg" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Nhẫn</div>
            </a>
          </div>
          <div class="">
            <a href="Sanpham/Vongtay" class="hinh_chuyen">
              <img src="public/image/List/vong.jpg" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Lắc, vòng tay</div>
            </a>
          </div>
          <div class="">
            <a href="Sanpham/Vangmieng" class="hinh_chuyen">
              <img src="public/image/List/vangmieng.jpg" class="rounded-circle list-right" alt="...">
              <div class="text-center text-list-image">Vàng miếng, vàng nhẫn</div>
            </a>
          </div>

        </div>

        <!-- Chỗ này là Tin nổi bật -->
        <div class="text-large-right text-center">TIN TỨC NỔI BẬT</div>
        <div class="row ">
          <div class="col-4 news-content">
            <p>Từ ngày 22/6 đến 1/7/2018, khi khách hàng mua trang sức đá quý với hóa đơn từ 5.000.000Đ, sẽ được nhận ngay
              thẻ cào với cơ hội trúng thưởng 100% bao gồm: Vòng charm kim khuyển vàng khối 24K, hộp quà Purite,
              phiếu quà tặng 300.000Đ hoặc 100.000Đ (Được trừ trực tiếp vào hóa đơn mua hàng).</p>

            <p>Quý khách hàng sẽ được
              trải nghiệm đại tiệc trang sức đá quý lộng lẫy với hàng loạt bộ sưu tập vốn đã tạo nên dấu ấn thương hiệu ATJ.</p>
          </div>
          <div class="col-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="public/image/News/n1.png" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                  <img src="public/image/News/n2.png" class="d-block w-100" alt="..." height="400px">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

        <!-- Chỗ này là giá vàng -->
        <div id="giavang" class="text-large-right text-center">GIÁ VÀNG HÔM NAY</div>
        <div class="gia">
          <table class="table">
            <thead>
              <tr>

                <th class="bang1" scope="col">Loại</th>
                <th class="bang1" scope="col">Mua vào</th>
                <th class="bang1" scope="col">Bán ra</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1;
              foreach ($data["Gia"] as $row) : ?>
                <?php if ($i % 2 != 0) : ?>
                  <tr>
                    <td class="bang le"><?= $row['loai'] ?></td>
                    <td class="bang le"><?= $row['muavao'] ?></td>
                    <td class="bang le"><?= $row['banra'] ?></td>
                  </tr>
                <?php else : ?>
                  <td class="bang"><?= $row['loai'] ?></td>
                  <td class="bang"><?= $row['muavao'] ?></td>
                  <td class="bang"><?= $row['banra'] ?></td>
                <?php endif;
                $i = $i + 1; ?>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>

      </div>
    </div>

  </div>
</div>


<?php require "components/footer.php"; ?>