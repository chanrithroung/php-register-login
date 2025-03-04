<?php include('layout.php') ?>
      <div class="col" >
        <div class="container p-5 shadow" style="height: 100vh">
            <h2 class="mb-4">Form Create Post</h2>
            <form action="">
                <div class="row">
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control" name="name" type="text" placeholder="Product name...">
                  </div>
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="regular_price" type="text" placeholder="Regular price...">
                    <label id="errorMessage" class="text-danger mt-2 errorMessage" style="display: none;" for="">This field allow only number</label>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="regular_price" type="text" placeholder="Sale price...">
                  </div>
                  <div class="col-sm-12 col-lg-6">
                    <input class="form-control numberInput" name="regular_price" type="text" placeholder="Sale price...">
                  </div>

                  <div class="row mt-4">
                    <div class="col-sm-12 col-lg-6">
                      <input class="form-control numberInput" name="regular_price" type="text" placeholder="Sale price...">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <select  class="form-select" name="" id="">
                          <option value="">S</option>
                          <option value="">M</option>
                          <option value="">L</option>
                          <option value="">Xl</option>
                          <option value="">XXl</option>
                        </select>
                    </div>
                  </div>

                  <div class="row mt-4">
                  <div class="col-sm-12 col-lg-6">
                        <select  class="form-select"  name="" id="">
                          <option value="">Red</option>
                          <option value="">White</option>
                          <option value="">Gray</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                      <input class="form-control" name="regular_price" type="text" placeholder="Product info">
                    </div>
                  </div>

                  <div class="row mt-4">
                    <div class="col">
                      <textarea rows="5" class="form-control" name="" id="" placeholder="Product detail...."></textarea>
                    </div>
                  </div>

                  <div class="mt-4">
                      <button id="custom-btn" class="btn btn-primary shadow-lg">Save Product <i class="bi bi-cloud-upload-fill"></i></button>
                  </div>
            </form>
        </div>
      </div>

    </div>
</div>

</body>
</html>