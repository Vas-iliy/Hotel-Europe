<section class="search-filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="reservation" method="post" class="check-form" name="reservation">
                    <h4>Check Availability</h4>
                    <div class="datepicker">
                        <p>From</p>
                        <input type="text" name="from" class="datepicker-1" value="<?=(!empty($_SESSION['params']['from']) ? $_SESSION['params']['from'] : '')?>" placeholder="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="datepicker">
                        <p>To</p>
                        <input type="text" name="to" class="datepicker-2" value="<?=(!empty($_SESSION['params']['to']) ? $_SESSION['params']['to'] : '')?>" placeholder="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="room-quantity">
                        <div class="single-quantity">
                            <p>Adults</p>
                            <div class="pro-qty"><input type="number" class="adults" min="1" name="adults" value="<?=(!empty($_SESSION['params']['adults']) ? $_SESSION['params']['adults'] : '1')?>"></div>
                        </div>
                        <div class="single-quantity">
                            <p>Children</p>
                            <div class="pro-qty"><input type="number" class="children" name="children" value="<?=(!empty($_SESSION['params']['children']) ? $_SESSION['params']['children'] : '0')?>"></div>
                        </div>
                        <div class="single-quantity last">
                            <p>Rooms</p>
                            <div class="pro-qty"><input type="number" class="countRoom" min="1" max="<?=$this->count['count']?>" name="countRoom" value="<?=(!empty($_SESSION['params']['countRoom']) ? $_SESSION['params']['countRoom'] : '1')?>"></div>
                        </div>
                    </div>
                    <div class="room-selector">
                        <p>Price</p>
                        <input style="width: 100%" name="price" class="price" type="number" min="<?=$this->price[0]?>" max="<?=$this->price[1]?>" value="<?=(!empty($_SESSION['params']['price']) ? $_SESSION['params']['price'] : '')?>" placeholder="$<?=$this->price[0]?> - $<?=$this->price[1]?>">
                    </div>
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
</section>