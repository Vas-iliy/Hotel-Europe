<?if(!empty($rooms)):?>
    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <?foreach ($rooms as $room):?>
                    <div class="col-lg-3 row-flex">
                        <div class="card">
                            <div class="card-header">
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
                            <div class="card-body">
                                <div class="section-title">
                                    <div class="section-title">
                                        <h2><?=$room['title']?></h2>
                                    </div>
                                    <p><?=mb_strimwidth($room['descr'], 0, 100, '...', 'UTF8')?></p>
                                    <?foreach ($room['count'] as $count):?>
                                        <p>Room: <?=$count['count']?> Price: $<?=$count['factor']*$room['price']?></p>
                                    <?endforeach;?>
                                    <form action="reservation/<?=$room['alias']?>" method="post">
                                        <?foreach ($room['count'] as $count):?>
                                            <input type="hidden" name="count[]" value="<?=$count['count'] . ',' . $count['factor']?>">
                                        <?endforeach;?>
                                        <input type="submit" class="primary-btn count-btn" value="Make a Reservation">
                                    </form>
                                    <!--<a href="reservation/<?/*=$room['alias']*/?>" class="primary-btn count-btn">Make a Reservation</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </section>
<?endif;?>