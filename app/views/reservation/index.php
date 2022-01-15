<?if(!empty($searches)):?>
    <section class="room-section">
        <div class="container-fluid">
            <?foreach ($searches as $room):?>
                <div class="row">
                    <div class="col-lg-6">
                        <?if(!empty($room['img'])):?>
                            <div class="ri-slider-item">
                                <div class="ri-sliders owl-carousel">
                                    <?foreach ($room['img'] as $img):?>
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
                                    <span>a memorable holliday</span>
                                    <h2><?=$room['title']?></h2>
                                    <h3>Cont Room: <?=$room['count']?></h3>
                                    <h5>Max Guest: <?=2*$room['count']?></h5>
                                </div>
                                <p><?=$room['descr']?></p>
                                <?if(!empty($room['enabled'])):?>
                                    <div class="ri-features">
                                        <?foreach ($room['enabled'] as $enabled):?>
                                            <div class="ri-info">
                                                <i class="<?=$enabled['sign']?>"></i>
                                                <p><?=$enabled['title']?></p>
                                            </div>
                                        <?endforeach;?>
                                    </div>
                                <?endif;?>
                                <a href="reservation/<?=$room['alias']?>?count=<?=$room['count']?>" class="primary-btn">Make a Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </section>
<?endif;?>