
<header id="header">
<nav class="navbar navbar-expand-lg" style="background: #6c9aa9;">
<a href="index.php" class="navbar-brand">
    <h3 class="px-5">
        <img class="logotip" src="img/logo.svg" alt="">
    </h3>
</a>
<button style="background:white;color: #6c9aa9;" class="navbar-toggler"
    type="button"
        data-toggle="collapse"
        data-target = "#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
>
    <i class="fa fa-bars" aria-hidden="true"></i>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
<div class="mr-auto"></div>
<div class="navbar-nav korzina">
<a href="cart.php" class="nav-item nav-link active">
<h5 style="color:white;" class="px-5 cart">
<i style="margin-right: 10px; position: relative;" class="fas fa-shopping-cart"></i> Корзина
<?php

if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
}

?>
</h5>
</a>
</div>
</div>
</nav>
</header>









