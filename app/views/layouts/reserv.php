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
<div class="clearfix"> </div>
<!-- Search Filter Section End -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?if(isset($_SESSION['error'])):?>
                <div class="alert alert-danger">
                    <?=$_SESSION['error']; unset($_SESSION['error']);?>
                </div>
            <?endif;?>
            <?if(isset($_SESSION['success'])):?>
                <div class="alert alert-success">
                    <?=$_SESSION['success']; unset($_SESSION['success']);?>
                </div>
            <?endif;?>
        </div>
    </div>
</div>


<?=$content?>
<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<script src="js/europa.js"></script>
</body>

</html>