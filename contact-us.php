<?php include_once("assets/php/include/session.php");?>
<?php    
echo SuccessMessage();  
?>

<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Contact Us</title>
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/font/flaticon.css">
            <link rel="stylesheet" href="assets/css/all.min.css">
            <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
        </head>

        <body>
            <header>
                <div class="my-nav sub-01">
                    <div class="container">
                        <div class="nav-items">
                            <div class="menu-toggle">
                                <div class="menu-burger"></div>
                            </div>
                            <div class="logo">
                                <img src="assets/images/logo/logo.png">
                            </div>

                            <div class="menu-items">
                                <div class="menu">
                                    <ul>
                                       <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="ourwork.html">Our Work</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main>
                <section class="abt-01">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="seting">
                                    <h3>Contact Us</h3>
                                    <ol>
                                        <li>Home <i class="fas fa-chevron-double-right"></i></li>
                                        <li>Contact Us</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-001">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading">
                                    <h2>GET IN TOUCH</h2>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-box">
                                    <ul>
                                        <li>14 Pushparaj-2, Near ID Patel School, Ghatlodia, Ahmedabad -380061</li>
                                        <li>layantram@gmail.com</li>
                                        <li>+91 9925554577</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="contact-box" >
                                    <form class="my-form"  id="contactForm" method="post" action="send1.php">
                                        <div class="form-group">
                                            <input type="senderName" class="form-control" name="f_name" placeholder="Full Name" autocomplete="off" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="senderEmail" class="form-control" name="email" placeholder="Email Address"
                                            autocomplete="off" required>
                                        </div>

<!--
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
-->

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                        </div>
                                        
                                        <div class="col-sm-12 mt10 text-center">
                                            <button type="submit" name="sendMessage" id="sendMessage" class="button button-white button-md button-block button-pasific hover-ripple-out">Send Message</button>
                                        </div>
                                        
<!--
                                        <div class="form-group">
                                            <div class="link">
                                                <a href="#">Send</a>
                                            </div>
                                        </div>

-->
                                        <div id="sendingMessage" class="statusMessage sending-message"><p></p></div>
<!--
                                <div id="successMessage" class="statusMessage success-message"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
                                <div id="failureMessage" class="statusMessage failure-message"><p>There was a problem sending your message. Please try again.</p></div>
                                <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>
-->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <h2>About Us</h2>
                                    <p>Our Prophecy is to be trusted & Cherished as a superlative web and mobile development company in delivering and developing ultramodern, innovative IT Solutions for our clients to improve profits as well as to build competence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <h2>Quick Links</h2>
                                    <ul>
                                         <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="ourwork.html">Our Work</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <h2>contact us</h2>
                                    <ol>
                                        <li>layantram@gmail.com</li>
                                        <li>14 Pushparaj-2, Near ID Patel School, Ghatlodia, Ahmedabad -380061</li>
                                        <li>+91 9925554577</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="wrapper">
                                <div class="content">
                                    <h2>follow us</h2>
                                    <div class="social-media">
                                        <ol>
                                            <li><a href="https://www.linkedin.com/in/la-yantram-34055625a/"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href=""><i class="fab fa-google"></i></a></li>
                                            <li><a href="https://www.facebook.com/layantrm"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="https://twitter.com/layantramtech"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="https://www.instagram.com/layantramtechnologies"><i class="fab fa-instagram"></i></a></li>

                                            
                                        </ol>
                                    </div>
<!--
                                    <h2>subscribe</h2>
                                    <div class="submit-card">
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Your Email">
                                            <i class="fal fa-chevron-right"></i>
                                        </div>
                                    </div>
-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div class="end-footer">
                <div class="container">
                        
                            <div class="copy-right">
                                <p>&copy; LaYantram Technologies 2023</p>
                            </div>
                   
                </div>
            </div>
        </body>
         <!-- JQuery Core
        =====================================-->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>
    </html>