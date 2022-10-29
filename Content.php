<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/images1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
      </div>
    <div class="carousel-item">
      <img src="image/images2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
    </div>
    <div class="carousel-item">
      <img src="image/images3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                           <?php
                              $sql = "SELECT * FROM Product";
                              $re = pg_query($conn, $sql);
                              while ($row = pg_fetch_assoc($re)){
                            ?>
          <div class="col-md-4">
            <div class="card" style="text-align:center;">
                <img
                src="./image/<?=$row['Pro_image']?>"
                class="card-img-top"
                alt="Product1>" style="margin: auto;
                width: max-content; "
                width="200" height="200"
                />
                <div class="card-body" style="display:inline-block">
                <a href="#" class="text-decoration-none"><h5 class="card-title"><?=$row['Product_Name']?></h5></a>
                <h6 class="card-subtitle mb-2 text-muted"><span>&#8363;</span><?=$row['Price']?></h6>
                <a href="#" class="btn btn-warning" style="color:black">Buy</a>
                </div>
            </div>
      </div>
      <?php
    }
      ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>