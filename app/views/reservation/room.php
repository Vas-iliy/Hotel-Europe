<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="<?=PATH?>"><img src="img/logo.png" alt=""></a>
            </div>
        </div>
    </div>
</header>
<?if(!empty($room)):?>
    <section class="room-section">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <?if(!empty($imgs)):?>
                            <div class="ri-slider-item">
                                <div class="ri-sliders owl-carousel">
                                    <?foreach ($imgs as $img):?>
                                        <div class="single-img set-bg" data-setbg="<?=PATH?>/img/rooms/<?=$img['img']?>"></div>
                                    <?endforeach;?>
                                </div>
                            </div>
                        <?endif;?>
                    </div>
                    <div class="col-lg-6">
                        <div class="ri-text">
                            <div class="section-title">
                                <div class="section-title">
                                    <h2><?=$room['title']?></h2>
                                </div>
                                <p><?=$room['descr']?></p>
                                <?if(!empty($enabled)):?>
                                    <div class="ri-features">
                                        <?foreach ($enabled as $item):?>
                                            <div class="ri-info">
                                                <i class="<?=$item['sign']?>"></i>
                                                <p><?=$item['title']?></p>
                                            </div>
                                        <?endforeach;?>
                                    </div>
                                <?endif;?>
                                <div class="room-price">
                                    <h5 class="price" style="padding-bottom: 10px">$ <?=$room['price']*$count[0][1]?></h5>
                                    <select class="count">
                                        <?foreach ($count as $item):?>
                                            <option data-price="<?=$room['price']*$item[1]?>" value="<?=$item[0]?>"><?=$item[0] . 'Room'?></option>
                                        <?endforeach;?>
                                    </select>
                                </div>
                                <a href="reservation/<?=$room['alias']?>" class="primary-btn">Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
<?endif;?>