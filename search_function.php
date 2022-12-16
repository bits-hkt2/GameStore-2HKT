<?php

  require_once 'db/db.php';

if (isset($_POST["action"])) {
    $search_name = $_POST["search_name"];
    $sql = "SELECT * FROM `products` WHERE name_search LIKE '%$search_name%'";
    $result = mysqli_query($con, $sql);
    $output = "";

    foreach ($result as $value) {
        $output .='
            
            <li class="list_group">

            <div class="game-offer">
            <a href="Detail.php?id=<?php echo $value["id"];   ?>
<img src="'.$value['image'].'" alt="">

<div class="game-infor">

    <a href="">'.$value['name_product'].'</a>

    <div class="game-price">
        <div class="game-tags">
            <a href=""> '.$value['price'].'</a>
        </div>

        <div class="game-discount">


            <a href=""> '.$value['old price'].'</a>
            <a href=""> '.number_format($value['price']).'</a>


        </div>

        <div class="game-configuration">
            <i class="fa-brands fa-windows"></i>
        </div>

    </div>
</div>

</a>
</div>
</li>
';
}
echo $output;
}

?>