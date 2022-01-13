<!-- Intro Text Section Begin -->
<?if(!empty($descr)):?>
<section class="intro-section spad">
    <div class="container">
        <div class="row intro-text">
            <div class="section-title">
                <span>a memorable holliday</span>
                <h2><?=$descr->title?></h2>
            </div>
            <p><?=$descr->descr?></p>
            <div class="intro-right">
                <a href="#" class="primary-btn">Make a Reservation</a>
            </div>
        </div>
    </div>
</section>
<?endif;?>
<!-- Intro Text Section End -->

<!-- Facilities Section Begin -->
<?if(!empty($topRooms)):?>
<section class="facilities-section">
    <div class="container-fluid">
        <div class="row">
            <?foreach ($topRooms as $room):?>
                <div class="col-lg-6">
                    <div class="facilities-item set-bg" data-setbg="<?=PATH?>/img/rooms/<?=$room['img']['img']?>">
                        <div class="fi-title">
                            <h2><?=$room['title']?></h2>
                            <p>From $<?=$room['price']?></p>
                        </div>
                        <?if(!empty($room['enabled'])):?>
                            <div class="fi-features">
                                <?foreach ($room['enabled'] as $enabled):?>
                                <div class="fi-info">
                                    <i class="<?=$enabled['sign']?>"></i>
                                    <p><?=$enabled['title']?></p>
                                </div>
                                <?endforeach;?>
                            </div>
                        <?endif;?>
                        <a href="/rooms/<?=$room['alias']?>" class="primary-btn">Make a Reservation</a>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</section>
<?endif;?>
<!-- Facilities Section End -->

<!-- Testimonial Section Begin -->
<?if(!empty($comments)):?>
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Guestbook</h2>
            </div>
        </div>
        <div class="row">
            <?foreach ($comments as $comment):?>
            <div class="col-lg-6">
                <div class="testimonial-item">
                    <div class="ti-time">
                        <?=date('d / m/ Y', strtotime($comment['data_room']))?>
                    </div>
                    <h4><?=$comment['title']?></h4>
                    <div class="rating">
                        <?for ($i=0; $i < $comment['rating']; $i++):?>
                            <i class="fa fa-star"></i>
                        <?endfor;?>
                    </div>
                    <p><?=$comment['descr']?></p>
                    <div class="ti-author">
                        <div class="author-pic">
                            <img src="<?=PATH?>/img/guests/<?=$comment['img']?>" alt="">
                        </div>
                        <div class="author-text">
                            <h6><?=$comment['name']?> <span><?=$comment['surname']?></span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
</section>
<?endif;?>
<!-- Video Section Begin -->
<div class="video-section">
    <div class="video-bg set-bg" data-setbg="img/video-bg.jpg"></div>
    <div class="container">
        <div class="video-text set-bg" data-setbg="img/video-inside-bg.jpg">
            <a href="https://www.youtube.com/watch?v=j56YlCXuPFU" class="pop-up"><i class="fa fa-play"></i></a>
        </div>
    </div>
</div>
<!-- Video Section End -->

<!-- Home Page About Section Begin -->
<section class="homepage-about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <h2>“Customers love our <br />facilities”</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus libero mauris, bibendum eget
                        sapien ac, ultrices rhoncus ipsum. Donec nec sapien in urna fermentum ornare. Morbi vel
                        ultrices leo. Sed eu turpis eu arcu vehicula fringilla ut vitae orci. Suspendisse maximus
                        malesuada. </p>
                    <a href="#" class="primary-btn">Make a Reservation</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="img/home-about-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="img/home-about-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="img/home-about-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-img">
                            <img src="img/home-about-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Page About Section End -->