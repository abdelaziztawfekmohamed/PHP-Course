<?php
include "../assets/include/header.php";
?>

<h1>product page</h1>
<div>
    <?php include '../assets/include/data.php';     ?>
    <?php foreach ($products as $product) : ?>
        <div class="card w-75 mb-3">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo  $product['name']; ?>
                    </h5>
                    <p class="card-text">
                        price :
                        <?php echo $product['price']; ?>
                    </p>
                    <a  href="#" class="btn btn-primary">
                        color :
                        <?php echo $product['clr']; ?>
                    </a>
                </div>
            </div>
    <?php endforeach ?>
            
</div>


<?php
include "../assets/include/footer.php";
?>
