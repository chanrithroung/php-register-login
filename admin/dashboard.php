<?php 
require_once('layout.php');
require_once('function.php');
?>
      <div class="col" >
        <div class="container p-5 shadow" style="height: 100vh">
            <h2 class="mb-4">Form Create Post</h2>
            <form action="" method="post">
              <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                  creatPost();
                }
              ?>  
                <div class="row">
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control" name="name" type="text" placeholder="Product name...">
                  </div>
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="regular_price" type="text" placeholder="Regular price...">
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="sale_price" type="text" placeholder="Sale price...">
                  </div>
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="quantity" type="text" placeholder="Quantity">
                  </div>

                  <div class="row mt-4">
                    <div class="col-sm-12 col-lg-6">
                    <select  class="form-select"  name="color" id="">
                          <option value="red">Red</option>
                          <option value="white">White</option>
                          <option value="gray">Gray</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <select class="form-select" name="size" id="">
                          <option value="s">S</option>
                          <option value="m">M</option>
                          <option value="l">L</option>
                          <option value="xl">Xl</option>
                          <option value="xxl">XXl</option>
                        </select>
                    </div>
                  </div>

                  <div class="row mt-4">
                  <div class="col-sm-12 col-lg-6">
                      <input class="form-control" name="model_info" type="text" placeholder="Product info">
                       
                    </div>
                    
                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <textarea rows="5" class="form-control" name="product_detail" id="" placeholder="Product detail...."></textarea>
                    </div>
                  </div>

                  <div class="mt-4">
                      <button id="custom-btn" class="btn btn-primary shadow-lg">Save Product <i class="bi bi-cloud-upload-fill"></i></button>
                  </div>
                </div>
            </form>
        </div>
      </div>

    </div>
</div>

</body>
</html>