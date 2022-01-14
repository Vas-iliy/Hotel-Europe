<!-- About Us Section Begin -->
<?if(!empty($about)):?>
<section class="about-us spad">
    <div class="container">
        <?foreach ($about as $item):?>
        <div class="row">
            <div class="col-lg-7">
                <div class="about-left">
                    <div class="section-title">
                        <span>a memorable holliday</span>
                        <h2><?=$item['title']?></h2>
                    </div>
                    <p class="second-text"><?=$item['text']?></p>
                    <a href="reservation" class="primary-btn">Make a Reservation</a>
                </div>
            </div>
            <?if($item['img']):?>
            <div class="col-lg-5">
                <div class="row">
                    <?foreach ($item['img'] as $img):?>
                        <div class="col-sm-6">
                            <div class="about-img">
                                <img src="<?=PATH?>/img/about/<?=$img['img']?>" alt="">
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <?endif;?>
        </div>
        <?endforeach;?>
    </div>
</section>
<?endif;?>
<!-- About Us Section End -->
<!-- Milestone Counter Section Begin -->
<?if(!empty($us)):?>
<section class="milestone-counter spad set-bg" data-setbg="img/about/milestone-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mc-item">
                    <div class="mc-num">
                        <span class="counter"><?=$us['count']?></span>
                    </div>
                    <div class="mc-text">
                        <h3>Luxury Suites</h3>
                        <p>From $<?=$us['price']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mc-item">
                    <div class="mc-num">
                        <span class="counter"><?=$us['guests']?></span>
                    </div>
                    <div class="mc-text">
                        <h3>Happy Clients</h3>
                        <p>all year long</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mc-item">
                    <div class="mc-num">
                        <span class="counter">365</span>
                    </div>
                    <div class="mc-text">
                        <h3>Days/ Year</h3>
                        <p>From $<?=$us['price']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?endif;?>
<!-- Milestone Counter Section End -->
<!-- Award Section Begin -->
<?if(!empty($awards)):?>
<section class="award-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Awards</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?foreach ($awards as $award):?>
            <div class="col-lg-4 col-sm-6">
                <div class="award-item">
                    <h4><?=$award['title']?></h4>
                    <h5><?=$award['year']?></h5>
                    <span>Elite Hotel award</span>
                    <p><?=$award['descr']?></p>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
<?endif;?>
<!-- Award Section End -->

<!-- Call To Action Begin -->
<section class="callto-section">
    <div class="container">
        <div class="callto-text">
            <h2>Book your stay with us now!</h2>
        </div>
        <a href="reservation" class="primary-btn">Make a Reservation</a>
    </div>
</section>
<!-- Call To Action End  -->