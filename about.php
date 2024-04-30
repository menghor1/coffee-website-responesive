<?php
    include("header.php")
?>

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
                    <img src="./assets/image/ice_coffee.webp" alt="">
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

    <!-- about  -->
    <section class="about" id="about">
        <h1 class="heading"><span>about</span> us</h1>
        <div class="row">
            <div class="image">
                <img src="./assets/image/background.jpg" alt="kk">
            </div>
            <div class="content">
                <h3>what makes our coffee special?</h3> <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ducimus 
                    architecto error quis totam ratione distinctio obcaecati tempore suscipit quod? 
                    Dicta quas qui sapiente nisi itaque nobis quisquam, possimus ipsum.
                </p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ducimus 
                    architecto error quis totam ratione distinctio obcaecati tempore suscipit quod? 
                    Dicta quas qui sapiente nisi itaque nobis quisquam, possimus ipsum.
                </p> <br> <br>
                <a href="#" class="btn">Learn more</a>
            </div>
        </div>
    </section>

 


</body>

<!-- custom js link  -->
<script src="./assets/script/script.js"></script>

</html>