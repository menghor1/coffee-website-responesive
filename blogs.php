<?php
    include("header.php")
?>

    <!-- header section starts -->
    <header class="header-container">

        <div class="logo">
            <a href="#"><img src="../article/assets/image/logo.jpg" alt=""></a>
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
            
            <div class="item">
                <div class="box-item">
                    <div class="image" >
                    <img src="./image/ice_coffee.webp" alt="">
                    </div>
                    <div class="title" >
                        <div class="center">
                            <h2>Iced Caramel Macchiato Recipe</h2>
                            <span class="price">$15.5/-</span>
                            
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="image" >
                    <img src="./image/ice_coffee.webp" alt="">
                    </div>
                    <div class="title" >
                        <div class="center">
                            <h2>Iced Caramel Macchiato Recipe</h2>
                            <span class="price">$15.5/-</span>
                            
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="image" >
                    <img src="./image/ice_coffee.webp" alt="">
                    </div>
                    <div class="title" >
                        <div class="center">
                            <h2>Iced Caramel Macchiato Recipe</h2>
                            <span class="price">$15.5/-</span>
                            
                        </div>
                    </div>
                </div>
                
                <div class="btn">Checkout now</div>
                <!-- <a href="#" class="btn">Checkout now</a> -->
                <div class="total">Total = $45/-</div>
            </div>
        </div>

    <!-- search-form -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>

    <!-- blog  -->
    <section class="blogs" id="blogs">
        <h1 class="heading">our <span>blog</span></h1>
        <div class="box-container">

            
            <div class="box">
                <div class="image">
                    <img src="./assets/image/blogs01.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Taste of Nature</a>
                    <span>by admin / 21st may, 2024</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam dolor dicta ut ullam animi alias praesentium iste.
                    </p>
                    <br>
                        <a href="#" class="btn" id="btn-read-more">Read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./assets/image/blogs01.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Taste of Nature</a>
                    <span>by admin / 21st may, 2024</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam dolor dicta ut ullam animi alias praesentium iste.
                    </p>
                    <br>
                        <a href="#" class="btn" id="btn-read-more">Read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./assets/image/blogs01.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Taste of Nature</a>
                    <span>by admin / 21st may, 2024</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam dolor dicta ut ullam animi alias praesentium iste.
                    </p>
                    <br>
                        <a href="#" class="btn" id="btn-read-more">Read more</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="./assets/image/blogs01.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Taste of Nature</a>
                    <span>by admin / 21st may, 2024</span>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Quibusdam dolor dicta ut ullam animi alias praesentium iste.
                    </p>
                    <br>
                        <a href="#" class="btn" id="btn-read-more">Read more</a>
                </div>
            </div>
            
        </div>
    </section>

    



 


</body>

<!-- custom js link  -->
<script src="./assets/script/script.js"></script>

</html>