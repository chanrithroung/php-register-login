<?php 
    include('layout.php');
?>


    <div class="col px-5">
        <div class="container p-5">
            <h4>List Products</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>CODE</th>
                        <th>NAME</th>
                        <th>REGULAR PRICE</th>
                        <th>SALE PRICE</th>
                        <th>QUANTITY</th>
                        <th>THUMBNAIL</th>
                        <th>CREATE AT</th>
                        <th>ACITON</th>
                    </tr>
                </thead>
                <tbody>
                    <?php listProduct(); ?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>