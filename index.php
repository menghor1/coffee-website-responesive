<?php
    include("header.php");
?>

<style>
    .home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(./image/background3.png) no-repeat;
    background-size: cover;
    background-position: center;
    min-width:max-content ;
    /* background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed; */
    }
    .home .content{
        margin-bottom: 150px;
    }
</style>

    <!-- header section starts -->
    <header class="header-container">

        <div class="logo">
            <a href="#"><img src="./assets/image/logo.jpg" alt=""></a>
        </div>

        <div class="menu">
            <ul>
            <li>
                    <a href="index.php">home</a>
                </li>
                <li>
                    <a href="about.php">about</a>
                </li>
                <li>
                    <a href="menu.php">menu</a>
                </li>
                <li>
                    <a href="products.php">products</a>
                </li>
                <li>
                    <a href="review.php">review</a>
                </li>
                <li>
                    <a href="contact.php">Contact us</a>
                </li>
                <li>
                    <a href="blogs.php">blogs</a>
                </li>
            </ul>
        </div>
        <div class="icons">
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-bars" id="menu-btn"></div>
            <span id="shop">0</span>
        </div>
        
    </header>

    <!-- cart-items-container -->
        <div class="cart-items-container">
            <div class="box-item">
                <div class="image">
                    <img src="./assets/image/ice_coffee.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iced Caramel <br/> Macchiato Recipe</h2>
                    <span>$15.5/- <p>$20.00</p> </span>
                </div>
                <div class="fas fa-xmark"></div>
            </div>
            <div class="box-item">
                <div class="image">
                    <img src="./assets/image/ice_coffee.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iced Caramel <br/> Macchiato Recipe</h2>
                    <span>$15.5/- <p>$20.00</p> </span>
                </div>
                <div class="fas fa-xmark"></div>
            </div>
            <div class="box-item">
                <div class="image">
                    <img src="./assets/image/ice_coffee.webp" alt="">
                </div>
                <div class="title">
                    <h2>Iced Caramel <br/> Macchiato Recipe</h2>
                    <span>$15.5/- <p>$20.00</p> </span>
                </div>
                <div class="fas fa-xmark"></div>
            </div>
                
                <a href="#" class="btn">Checkout now</a>
                <div class="total">Total = $45/-</div>
            
        </div>

    <!-- search-form -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

    <!-- home section starts  -->
<section class="home" id="home">

    <div class="content">
        <h3>fresh coffee in <br> the morning</h3>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita error <br>
             nulla voluptatibus saepe, est enim, aspernatur, reiciendis incidunt veniam
             <br> voluptatem fuga exercitationem a ratione! Fugit repudiandae neque
        </p>
        <a href="#" class="btn">get yours now</a>
    </div>
</section>

    


</body>

<!-- custom js link  -->
<script src="./assets/script/script.js"></script>

</html>