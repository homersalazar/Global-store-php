<?php 
    include_once("../partials/connection.php");
    require("../layouts/header.php");
?>
<div class="main">
    <div class="nav-main">
        <div class="logo-container">
            <img src="../assets/home-logo.png" alt="home logo"/>
        </div>
        <ul class="menu-container">
            <li><a href="">Home</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Contacts</a></li>
            <li><span></span></li>
            <li><a href=""> <img src="../assets/home-cart.png" alt="home cart icon" class="imgs" /></a></li>
            <li><a href=""> <img src="../assets/home-user.png" alt="home user icon" class="imgs"/></a></li>
        </ul>
    </div>
    <div class="home-section">
        <div class="hero-main">
            <div class="hero-text-container">
                <h1 class="store"><span>Global</span> Store</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <button class="text-light">Order Now!</button>
            </div>
            <div class="hero-image-container">
                <img src="../assets/home-office-supplies.png" alt="home office supplies" style="width: 600px; height:600px;" />
            </div>
        </div>
    </div>
    <div class="product-section">
        <h2>START YOUR<span> ORDER TODAY</span></h2>
        <div class="product-list">
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> A4</span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> Legal</span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> Letter </span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> Letter </span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>            
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> Letter </span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="supply-container">
                    <div class="image-container">
                        <img id="items" src="../product/1.png" alt="bond paper">
                    </div>
                    <p>Bond paper <span> Letter </span></p>
                </div>
                <div class="price-container">
                    <p>PhP 235.00</p>
                    <div class="image-container">
                        <img class="cart" src="../assets/product-add-to-cart.png" alt="add to cart">
                    </div>
                </div>
            </div>        
        </div>
    </div>
    <div class="contact-section">
        <div class="image-container">
          <img id="contact-logo" src="../assets/contact-supply.png" alt="contact supply" />
        </div>
        <div class="form-container">
          <form class="form-wrapper">
            <h1><span>Leave</span> us a message</h1>
            <input type="text" placeholder="First Name" />
            <input type="text" placeholder="Last Name" />
            <input type="text" placeholder="Phone" />
            <input type="email" placeholder="Email" />
            <textarea placeholder="Message"></textarea>
            <button>SEND</button>
          </form>
        </div>
    </div>
    <div class="footer-section">
        <div class="content">
          <div class="about-wrapper">
            <h2>ABOUT</h2>
            <a href="#">FAQs</a>
            <a href="#">Terms & Conditions</a>
          </div>
          <div class="logo-wrapper">
            <div class="image-container">
              <img src="../assets/home-logo.png" alt="footer logo" />
            </div>
            <a href="#">www.globalheavyequipment.net</a>
          </div>
          <div class="contacts-wrapper">
            <div class="content">
              <h2>CONTACTS</h2>
              <p>(+63) 9123456789</p>
                <!-- <div class="icon-wrapper">
                    <div class="icon-container">
                        <img src="../assets/footer-facebook-logo.png" alt="fb logo" style="width: 70px; height: 50px;" />
                    </div>
                    <div class="icon-container">
                        <img src="../assets/footer-yt-logo.png" alt="yt logo" style="width: 50px; height: 50px;" />
                    </div>
                </div> -->
            </div>
        </div>
        <div class="divider"></div>
          <p class="copyright">© Copyright 2022 </p>
        </div>
    </div>
</div>
<?php
require_once("../layouts/footer.php");
?>
