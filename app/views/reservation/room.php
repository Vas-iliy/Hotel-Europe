<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="facilities-item set-bg" data-setbg="<?=PATH?>/img/rooms/<?=$room['img']['img']?>">
                <div class="fi-title">
                    <h2><?=$room['title']?></h2>
                    <div class="room-price">
                        <p>From $<?=$room['price']?></p>
                    </div>
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
                <a href="reservation/<?=$room['alias']?>" class="primary-btn">Make a Reservation</a>
            </div>
        </div>
    </div>
</div>
