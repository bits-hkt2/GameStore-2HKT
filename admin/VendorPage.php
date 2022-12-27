<?php
session_start();

    //AUTHENTICATION VERIFYCATION 
    
// if (!defined('_INCODE'))
//     die('You are not allowed to access this page, Please comback to Login Page !');     // Kiểm tra xem hằng số có tồn tại hay không 
    
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/vendorPage.css">
    <link rel="icon" href="/images/Logo.svg">
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>2HKT | ADMIN PAGE ️🛒️📦📱</title>
</head>

<body>

    <!-- NAVBAR SECTION -->
    <div class="container">
        <nav>
            <div class="nav">
                <ul>
                    <li class="logo">
                        <a class="logo__a" href="./VendorPage.php">
                            <img src="/images/Logo (1).png" alt="">
                            <span class="nav-item">2HKT</span>
                        </a>
                    </li>
                    <li><a href="./VendorPage.php">
                            <i class="fa-solid fa-house-chimney"></i>
                            <span class="nav-item">Home</span>
                        </a></li>
                    <li><a href="./insert_product.php">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="nav-item">Send Email</span>
                        </a></li>
                    <li><a href="./view_product.php">
                            <i class="fa-solid fa-box-open"></i>
                            <span class="nav-item">View Product</span>
                        </a></li>
                    <li><a href="./vendorHelp.php">
                            <i class="fa-solid fa-circle-info"></i>
                            <span class="nav-item">Help</span>
                        </a></li>
                    <li class="logout"><a href="/admin.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span class="nav-item">Log Out</span>
                        </a></li>

                </ul>
                <p class="copyright">&copy; Copyright 2022 - 2HKT.com</p>
            </div>

        </nav>

        <!-- MAIN SECTION -->
        <section class="main">
            <div class="header">
                

                <h4> Hi, Welcome <span class='user_namephp'><?php echo $_SESSION["username"]; ?></span> to Admin page !
                </h4>



                <div class="dropdown-content" id="dropdown-content">
                    <a href="./edit_profile.php">
                        <i class="fa-solid fa-user"></i> Edit Profile </a>
                    <a href="./edit_image.php" tyle=" cursor:pointer;"><i class="fa-solid fa-image"></i>Edit Image</a>
                    <p2>(click image <br> to exit menu)</p2>
                </div>

            </div>
        </section>

        <!-- CARD-BOX SECTION -->
        <div class=" cardBox">
            <div class="card">
                <!-- 1 -->
                <div class="card__feature">
                    <div>
                        <div class="numbers">1.042</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa-solid fa-eye"></i>
                    </div>
                </div>
                <!-- 2 -->
                <div class="card__feature">
                    <div>
                        <div class="numbers">12</div>
                        <div class="cardName">Sales</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                </div>
                <!-- 3 -->
                <div class="card__feature">
                    <div>
                        <div class="numbers">42</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                </div>
                <!-- 4 -->
                <div class="card__feature">
                    <div>
                        <div class="numbers">$120</div>
                        <div class="cardName">Earnings</div>
                    </div>

                    <div class="iconBox">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                    </div>
                </div>

            </div>

        </div>

        <!-- DETAILS SECTION -->
        <div class="details">
            <div class="recentOrders" style="display:none">
               

                <table class="item-list">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Payment</td>
                            <td>Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sony WH-1000XM4 </td>
                            <td>$92</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>Apple AirPods</td>
                            <td>$200</td>
                            <td>Due</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>Sennheiser HD 800</td>
                            <td>$250</td>
                            <td>Paid</td>
                            <td><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>ATH-M50x</td>
                            <td>$170</td>
                            <td>Due</td>
                            <td><span class="status inprogress">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Beyerdynamic DT </td>
                            <td>$300</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>
                        <tr>
                            <td>JBL CLUB PRO</td>
                            <td>$53</td>
                            <td>Bank</td>
                            <td><span class="status return">Return</span></td>
                        </tr>
                        <tr>
                            <td>Beats Fit Pro</td>
                            <td>$125</td>
                            <td>Paid</td>
                            <td><span class="status inprogress">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>Jabra Elite 7 </td>
                            <td>$87</td>
                            <td>Paid</td>
                            <td><span class="status delivered">Delivered</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="topSellingProduct">
                <h2>Top Sold Games (12 <span>|</span> 2022) &nbsp <span class="icon-fire"><i
                            class="fa-solid fa-fire fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i></i>&nbsp
                        <i class="fa-solid fa-fire fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i></i>&nbsp
                        <i id='desktop' class="fa-solid fa-fire fa-beat-fade"
                            style="--fa-beat-fade-opacity: 0.1; --fa-beat-fade-scale: 1.25;"></i></i></span>
                </h2>
                <div class="product-list">
                    <ul>
                        <li class="product-items">
                            <div class="info">
                                <img src="/images/Bayonetta3.png" alt="">
                                <p>Bayonetta</p>
                            </div>
                            <span>$75</span>
                        </li>
                        <li class="product-items">
                            <div class="info">
                                <img src="/images/Casual.png" alt="">
                                <p>Casual </p>
                            </div>
                            <span>$105</span>
                        </li>
                        <li class=" product-items">
                                <div class="info">
                                    <img src="/images/football.png" alt="">
                                    <p> Football</p>
                                </div>
                                <span>$15</span>
                        </li>
                        <li class="product-items">
                            <div class="info">
                                <img src="/images/doom3.jpg" alt="">
                                <p>Chant</p>
                            </div>
                            <span>$67</span>
                        </li>
                        <li class="product-items">
                            <div class="info">
                                <img src="/images/god-of-war.png" alt="">
                                <p>God of War</p>
                            </div>
                            <span>$88</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- FOOTER SECTION -->

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="column">
                            <div class="footer-widget about-widget">
                                <h2 class="widget-title about-title">About</h2>
                                <p>Since the beginning, we have grown both our global <br> presence and our skill in
                                    product design. We concentrate <br> on how customers connect to and engage with the
                                    <br> digital environment for each product. To create really <br> distinctive and
                                    impactful experiences, we place <br> design at the center of everything we do,
                                    across all teams and disciplines.
                                </p>

                                <div class="cards">
                                    <i class="fa-brands fa-cc-paypal"></i>
                                    <i class="fa-brands fa-cc-mastercard"></i>
                                    <i class="fa-brands fa-cc-visa"></i>
                                    <i class="fa-brands fa-cc-amex"></i>
                                    <i class="fa-brands fa-cc-discover"></i>
                                </div>

                                <p> <span><i class="fa-solid fa-lock"></i></span>Secure Online Payment</p>
                            </div>
                            <div class="copy-right">
                                <div class="container">
                                    <p>Copy right &copy; <script type="text/javascript">
                                        document.write(new Date().getFullYear());
                                        </script>
                                        - 2HKT.com</p>
                                </div>
                            </div>
                        </div>

                        <div class="column" style="">
                            <div class="footer-widget categories-widget">
                                <h2 class="widget-title categories-title">Categories</h2>
                                <ul>
                                    <li>Advanture</li>
                                    <li>Rough-like</li>
                                    <li>Casual</li>
                                    <li>Role-playing</li>

                                </ul>
                            </div>
                        </div>

                        <div class="column">
                            <div class="footer-widget information-widget">
                                <h2 class="widget-title information-title">Information</h2>
                                <ul>
                                    <li><a href="./about_us2.php">About Us</a></li>
                                    <li><a href="./refund_policy2.php">Private Policy</a></li>
                                    <li><a href="./term2.php">Term Of Use</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="column">
                            <div class="footer-widget contact-widget">
                                <h2 class="widget-title contact-title">Contact</h2>

                                <div class="contact-address">
                                    <i class="fa-solid fa-location-dot"></i> Address: XYZ, District 7, Ho Chi Minh City,
                                    Vietnam . Pin Code: 750000
                                </div>

                                <div class="contact-number">
                                    <i class="fa-solid fa-phone"></i> Phone: 028 3776 1300
                                </div>

                                <div class="contact-email">
                                    <i class="fa-solid fa-envelope"></i> Email : khangtgr@gmail.com
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </footer>
            <script src="./scripts/vendorPage.js"></script>
</body>

</html>