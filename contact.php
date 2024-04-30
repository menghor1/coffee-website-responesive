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

      <!-- contact us  -->
    <section class="contact" id="contact">
        <h1 class="heading"><span>Contact </span>US</h1>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7818.461537851765!2d104.8837436!3d11.535296800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2skh!4v1711628957119!5m2!1sen!2skh" 
            width="600" class="map" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>get in touch</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="Phone number">
                </div>
                    <button type="submit" id="button">Contact now</button>
            </form>
        </div>

    </section>



 


</body>

<!-- custom js link  -->
<script src="./assets/script/script.js"></script>

</html>