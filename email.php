<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete responssive grocery website</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
   <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/df2ae20128.js" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</head>
<body>

    <div class="search-form <?php if(isset($_POST['search-form-active'])) echo 'active'; ?>">
        <!-- Your search form content here -->
    </div>

    <div class="shopping-cart <?php if(isset($_POST['cart-btn'])) echo 'active'; ?>">
        <!-- Your shopping cart content here -->
        <?php
            // Check if the shopping cart form is submitted
            if(isset($_POST['add-to-cart'])) {
                $item = $_POST['item-name'];
                $quantity = $_POST['quantity'];
                // You can process the data here (e.g., add the item to the cart session)
                // Example: $_SESSION['cart'][] = array('item' => $item, 'quantity' => $quantity);
            }
        ?>
        <form method="post">
            <input type="text" name="item-name" placeholder="Item Name">
            <input type="number" name="quantity" placeholder="Quantity">
            <button type="submit" name="add-to-cart">Add to Cart</button>
        </form>
    </div>

    <div class="login-form <?php if(isset($_POST['login-btn'])) echo 'active'; ?>">
        <!-- Your login form content here -->
        <?php
            // Check if the login form is submitted
            if(isset($_POST['login-submit'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                // You can process the login data here (e.g., check credentials against a database)
                // Example: if($username === 'demo' && $password === 'demo123') { /* Login successful */ }
                // else { /* Login failed */ }
            }
        ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
    </div>

    <div class="navbar <?php if(isset($_POST['menu-btn'])) echo 'active'; ?>">
        <!-- Your navigation bar content here -->
    </div>

    <!-- Your HTML content here -->
    <header class="header">
        <a href="#" class="logo"><i class="fa-solid fa-basket-shopping"></i></i>groco</a>
    
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#features">features</a>
            <a href="#products">products</a>
            <a href="#categories">categories</a>
            <a href="#review">review</a>
            <a href="#blogs">blogs</a>
        </nav>
<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-user" id="login-btn"></div>

</div>
  <form action="" class="search-form">
    <input type="search" id="search-box" placeholder="search here....">
    <label for="search-box" class="fas fa-search"></label>
  </form>

<div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="wat.png" alt="" >
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="wat.png" alt="">
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="wat.png" alt="">
        <div class="content">
            <h3>watermelon</h3>
            <span class="price">$4.99/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>

    <div class="total">total:$19.68/-</div>
    <a href="#" class="btn">checkout</a>
</div> 

<form action="" class="login-form">
     <h3>login now</h3>
     <input type="email" placeholder="enter your email" class="box">
     <input type="password" placeholder="enter your password" class="box">

     <p>forgot your password <a href="#">click here</a></p>
     <p>dont have an account <a href="#">create now</a></p>

<input type="submit" value="login now" class="btn">
</form>
    </header>

<section class="home" id="home">
    <div class="content">
        <h3>fresh and <span>organic </span>products for your</h3>
         <p>so fresh and good for health</p>
         <a href="#" class="btn">shop now</a>


      
    </div>
</section>
<section class="features" id="features">
    <h1 class="heading">our<span>features</span></h1>
    <div class="box-container">
<div class="box">
    <img src="fre.avif" alt="im" width="200px" height="200px">
    <h3>fresh and organic</h3>
    <p>so fresh and good for health</p>
    <a href="#" class="btn">readmore</a>
</div>


<div class="box">
    <img src="del.avif" alt="im width=200px" height="200px">
    <h3>free delivery</h3>
    <p>so fresh and good for health</p>
    <a href="#" class="btn">readmore</a>
</div>

<div class="box">
    <img src="easy.avif" alt="im" height="200px" width="200px">
    <h3>easy payments</h3>
    <p>so fresh and good for health</p>
    <a href="#" class="btn">readmore</a>
</div>
</div>
</section>




<section class="products" id="products">
    <h1 class="heading">our<span>products</span></h1>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="ora.avif" alt="">
                <h3>fresh orange</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="onion.avif" alt="">
                <h3>fresh orange</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="meat.avf.avif" alt="">
                <h3>fresh orange</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="cabb.avif" alt="">
                <h3>fresh cabbage</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

        </div>
    </div>





    <div class="swiper product-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <img src="pota.avif" alt="">
                <h3>fresh potato</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>


            <div class="swiper-slide box">
                <img src="toma.avif" alt="">
                <h3>fresh tomato</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="cucu.avif" alt="">
                <h3>fresh cucumber</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="swiper-slide box">
                <img src="cabb.avif" alt="">
                <h3>fresh cabbage</h3>
                <div class="price">$4.99/- -10.99/-</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"> </i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="#" class="btn">add to cart</a>
            </div>





























        </div>
    </div>
</section>


<section class="categories" id="categories">
    <h1 class="heading">product<span>categories</span></h1>
    <div class="box-container">


        <div class="box">
            <img src="fru.avif" alt="img">
            <h3>fresh fruits</h3>
            <p>upto 45%off</p>
            <a href="#" class="btn"> shop now</a>
            </div>

 <div class="box">
            <img src="ve.jpeg" alt="img">
            <h3>fresh vegetables</h3>
            <p>upto 45%off</p>
            <a href="#" class="btn"> shop now</a>
            </div>

        
            <div class="box">
                <img src="dia.avif" alt="img">
                <h3>diary products</h3>
                <p>upto 45%off</p>
                <a href="#" class="btn"> shop now</a>
                </div>


                <div class="box">
                    <img src="m.avif" alt="img">
                    <h3>fresh meat</h3>
                    <p>upto 45%off</p>
                    <a href="#" class="btn"> shop now</a>
                    </div>


       
 </div>
</section>
  

<section class="review" id="review">
    <h1 class="heading">customers<span>review</span></h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="sh.jpeg" alt="">
                <p>these are just amazing and products are amazing and my wife and kids are enjoying this products</p>
                <h3>shannu</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

            </div>

            <div class="swiper-slide box">
                <img src="sha.jpeg" alt="">
                <p>these are just amazing and products are amazing and my wife and kids are enjoying this products</p>
                <h3>khadarbee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

            </div>

            <div class="swiper-slide box">
                <img src="shan.jpeg" alt="">
                <p>these are just amazing and products are amazing and my wife and kids are enjoying this products</p>
                <h3>siri</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

            </div>
            <div class="swiper-slide box">
                <img src="sid.jpeg" alt="">
                <p>these are just amazing and products are amazing and my wife and kids are enjoying this products</p>
                <h3>Siddhardh</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

            </div>

        </div>
    </div>
</section>
    





<section class="blogs" id="blogs">
    <h1 class="heading">our<span>blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="blog1.avif" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fas fa-user"></i>by user</a>
                    <a href="#"><i class9="fas fa-calender"></i>1st may,2021</a>


                </div>
                <h3>fresh and organic fruits and vegetables</h3>
                <p>these are delicious and healthy</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>
        




        <div class="box">
            <img src="br.jpeg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fas fa-user"></i>by user</a>
                    <a href="#"><i class="fas fa-calender"></i>1st may,2021</a>


                </div>
                <h3>fresh and organic fruits and vegetables</h3>
                <p>dont miss this...you cant find products like this</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <img src="blog2.jpeg" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fas fa-user"></i>by user</a>
                    <a href="#"><i class="fas fa-calender"></i>1st may,2021</a>


                </div>
                <h3>fresh and organic fruits and vegetables</h3>
                <p>jsut try them ...no use of fertilizers</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>














    </div>



</section>




<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>groco <i class="fas fa-shopping-basket"></i></h3>
            <p>lorefsdvgfhgj</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

<div class="box">
    <h3>contact info</h3>
    <a href="#" class="links"><i class="fas fa-phone"></i>+123-45-789</a>
    <a href="#" class="links"><i class="fas fa-phone"></i>+123-45-789</a>
    <a href="#" class="links"><i class="fas fa-envelope"></i>shaik@gmail.com</a>
    <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>vijayawada india</a>

</div>


<div class="box">
    <h3>quick links</h3>
    <a href="#" class="links"><i class="fas fa-arrow-right"></i>home</a>
    <a href="#" class="links"><i class="fas fa-arrow-right"></i>features</a>
    <a href="#" class="links"><i class="fas fa-arrow-right"></i>products</a>
   <a href="#" class="links"><i class="fas fa-arrow-right"></i>categories</a>
   <a href="#" class="links"><i class="fas fa-arrow-right"></i>reviews</a>
   <a href="#" class="links"><i class="fas fa-arrow-right"></i>blogs</a>


</div>


<div class="box">
    <h3>newsletter</h3>
    <p>subscribe for lastest updates</p>
  <input type="email" placeholder="your email" class="email">
  <input tyoe="submit" value="subscribe" class="btn">
  <img src="" class="payment-img" alt="">
</div>
    </div>
        </section>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
