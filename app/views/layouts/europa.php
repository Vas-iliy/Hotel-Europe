<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="<?=PATH?>/">

    <?=$this->getMeta();?>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<? new \app\widgets\menu\Menu();?>
<!-- Header End -->

<!-- Hero Area Section Begin -->
<?if($this->meta['title'] === 'Europa Hotel'):?>
<section class="hero-area set-bg" data-setbg="img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="hero-text">
                    <h1>A Luxury Stay</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<?else:?>
    <div class="hero-area set-bg other-page" data-setbg="img/about_bg.jpg"></div>
<?endif;?>

<!-- Search Filter Section Begin -->
<section class="search-filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="#" class="check-form">
                    <h4>Check Availability</h4>
                    <div class="datepicker">
                        <p>From</p>
                        <input type="text" class="datepicker-1" value="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="datepicker">
                        <p>To</p>
                        <input type="text" class="datepicker-2" value="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="room-quantity">
                        <div class="single-quantity">
                            <p>Adults</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                        <div class="single-quantity">
                            <p>Children</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                        <div class="single-quantity last">
                            <p>Rooms</p>
                            <div class="pro-qty"><input type="text" value="0"></div>
                        </div>
                    </div>
                    <div class="room-selector">
                        <p>Room</p>
                        <select class="suit-select">
                            <option>Eg. Master suite</option>
                            <option value="">Double Room</option>
                            <option value="">Single Room</option>
                            <option value="">Special Room</option>
                        </select>
                    </div>
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Search Filter Section End -->
<?=$content?>
<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="#"><img src="img/logo.png" alt=""></a>
                    </div>
                    <p>Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-item">
                    <h5>Newsletter</h5>
                    <div class="newslatter-form">
                        <input type="text" placeholder="Your Email Here">
                        <button type="submit">Subscribe</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-item">
                    <h5>Contact Info</h5>
                    <ul>
                        <li><img src="img/placeholder.png" alt="">1525 Boring Lane,<br />Los Angeles, CA</li>
                        <li><img src="img/phone.png" alt="">+1 (603)535-4592</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Rooms</a></li>
                        <li><a href="#">Facilities</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-12 ">
                    <div class="small text-white text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>