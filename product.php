

<?php
session_start();
require 'config.php';


if (isset($_GET['id_produit'])) {
  $id_produit = $_GET['id_produit'];}

$sql = "SELECT id_produit, type, calories, description, price, nom, protein, carbs, facts, benefits, image FROM produit WHERE id_produit = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_produit);
$stmt->execute();
$result = $stmt->get_result();

$product = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Product</title>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/product.css">
  </head>
  <body>
    <div class="loading-image">
      <img src="img/loading1.gif" alt="Loading Animation">
  </div>

    <div class="login" id="element-to-hide" >
        <img src="img/engin-akyurt-Y5n8mCpvlZU-unsplash.jpg" alt="login image" class="login__img">
        
        </form>
        <div class="navigator" id="navigator">
            <div class="containerTop">
                <button class="icon-button">
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-github"></i>
                </button>
                <button class="click-mail">
                    <i class="fa-solid fa-envelope"></i>
                    <p class="mail">email@example.com</p>
                </button>
                
            </div>
            <div class="navigator__bar" id="navigator__bar">
                <div class="logo"><img src="/img/logo.png" alt=""></div>
                <nav id="navbar">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="#About">About Me</a></li>
                        <li><a href="#Diet">Diet Plans</a></li>
                        <li><a href="products.php">Shop</a></li>
                        <li><a href="#contact">contact us</a></li>
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </ul>
                </nav>
            </div>
            
        </div>
        
            <div class="titleAccount"><p>PRODUCT</p>
              </div>
            <div class="home__account"><a href="home.php">Home</a>/Product</div>

        <div class="container">
            
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src='<?php echo htmlspecialchars($product['image']); ?>' alt="image">

                        </div>
                    </div>
                 
                </div>
                <!-- card right -->
                <div class="product-content">
                    <?php if ($product): ?>
                        <h2 class="product-title"><?php echo htmlspecialchars($product['nom']); ?></h2>
                        

                        <p class="price"><?php echo htmlspecialchars($product['price']); ?> DA</p>
                        <div class="types">
                            <ul>
                                <li>Type <span><?php echo htmlspecialchars($product['type']); ?></span></li>
                                <li>Calories <span><?php echo htmlspecialchars($product['calories']); ?> kcals</span></li>
                                <li>Protein <span><?php echo htmlspecialchars($product['protein']); ?> g</span></li>
                                <li>Carbs <span><?php echo htmlspecialchars($product['carbs']); ?> g</span></li>
                            </ul>
                        </div>
                        
                    <?php else: ?>
                        <p>Product not found.</p>
                    <?php endif; ?>
                    <div class="purchase-info">
                        <a href="commande.php"><button type="button" class="btn">
                            Buy it now <i class="fas fa-shopping-cart"></i>
                        </button></a>
                    </div>

                    <div class="social-links">
                        <p>Share At: </p>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    <div class="sizedbox"></div>
    <div id="commentBox">
      <div class="display">
        <textarea id="commentText" rows="3" cols="30"></textarea>
        <button onclick="addComment()"><i class="fa-regular fa-message"></i> Submit</button>
        <div class="star" >
          <a href="#star" class = "bi-star-fill"></a>
          <a href="#star" class = "bi-star-fill"></a>
          <a href="#star" class = "bi-star-fill"></a>
          <a href="#star" class = "bi-star-fill"></a>
          <a href="#star" class = "bi-star-fill"></a>
        </div>
      </div>
      </div>
    <div class="button">
      <button id="description">Description:</button>
      <button id="reviews">Reviews:</button>
    </div>
    <div class="countainer_2">
      <section class="sec_1 show-animate">
        <p class="animate"><?php echo htmlspecialchars($product['description']); ?></section>
      <section class="sec_2 show-animate">
        <h1>Nutritional facts about this dish :</h1>
        <p class="animate"><?php echo htmlspecialchars($product['facts']); ?></section>
      <section class="sec_3 show-animate">
        <h1>Benefits of the ingredients :</h1>
        <p class="animate"><?php echo htmlspecialchars($product['benefits']); ?></section>
    </div>
    <div class="container_3">
      <div class="card_2">
        <div class="content">
          <div class="stars"><i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fa-regular fa-star"></i>
            <i class = "fa-regular fa-star"></i></div>
          <h3>@user</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <div id="comments">
            <button onclick="toggleCommentBox()">Add Review</button>
            
        </div>
        </div>
      </div>
      <div class="card_2">
        <div class="content">
          <div class="stars"><i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i></div>
          <h3>@user</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <div id="comments">
            <button onclick="toggleCommentBox()">Add Review</button>
        </div>
        </div>
      </div>
      <div class="card_2">
        <div class="content">
          <div class="stars"><i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i></div>
          <h3>@user</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          <div id="comments">
            <button onclick="toggleCommentBox()">Add Review</button>
        </div>
        </div>
      </div>
    <div id="commentList">
        <!-- Comment items will be appended here -->
    </div>
    </div>
    <div class="randplat"><h2>You may also like</h2></div>
    <div class="container_4">
      <div class="card_3">
        <div class="imgBx">
          <img src="../../img/pic1.jpg">
        </div>
        <div class="content_2">
          <h2>Boiled Rice</h2>
          <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <h3>300.00DA</h3>
            <a href="#">Read More</a>
        </div>
      </div>
      <div class="card_3">
        <div class="imgBx">
          <img src="img/pic2.jpg">
        </div>
        <div class="content_2">
          <h2>Couscous</h2>
          <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <h3>300.00DA</h3>
            <a href="#">Read More</a>
        </div>
      </div>
      <div class="card_3">
        <div class="imgBx">
          <img src="img/pic3.jpg">
        </div>
        <div class="content_2">
          <h2>Ramen</h2>
          <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <h3>300.00DA</h3>
            <a href="#">Read More</a>
        </div>
      </div>
    </div>


    <main class="main flow" id="sub">
      <h1 class="main__heading">Monthly Subscription</h1>
      <div class="main__cards cards">
        <div class="cards__inner">
          <div class="cards__card cardp">
            <h2 class="card__heading">Basic</h2>
            <p class="card__price">500.00DA</p>
            <ul role="list" class="card__bullets flow">
              <li>Access to standard workouts and nutrition plans</li>
              <li>Email support</li>
            </ul>
            <a href="#basic" class="card__cta cta">Get Started</a>
          </div>
    
          <div class="cards__card cardp">
            <h2 class="card__heading">Pro</h2>
            <p class="card__price">1200.00DA</p>
            <ul role="list" class="card__bullets flow">
              <li>Access to advanced workouts and nutrition plans</li>
              <li>Priority Email support</li>
              <li>Exclusive access to live Q&A sessions</li>
            </ul>
            <a href="#pro" class="card__cta cta">Upgrade to Pro</a>
          </div>
    
          <div class="cards__card cardp">
            <h2 class="card__heading">Ultimate</h2>
            <p class="card__price">2000.00DA</p>
            <ul role="list" class="card__bullets flow">
              <li>Access to all premium workouts and nutrition plans</li>
              <li>24/7 Priority support</li>
              <li>1-on-1 virtual coaching session every month</li>
              <li>Exclusive content and early access to new features</li>
            </ul>
            <a href="#ultimate" class="card__cta cta">Go Ultimate</a>
          </div>
        </div>
    
        <div class="overlay cards__inner"></div>
      </div>
    </main>


      <div class="footer" id="footer">
          <div class="footer-content">
              <p>© 2024 Design by Yacine | The Startup University</p>
          </div>
      </div>
  </div>
  <button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">&#8593</button>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="js/product.js"></script>
  </body>
</html>
