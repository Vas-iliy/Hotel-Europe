<section class="search-filter">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="reservation" method="post" class="check-form" name="reservation">
                    <h4>Check Availability</h4>
                    <div class="datepicker">
                        <p>From</p>
                        <input type="text" name="from" class="datepicker-1" value="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="datepicker">
                        <p>To</p>
                        <input type="text" name="to" class="datepicker-2" value="dd / mm / yyyy">
                        <img src="img/calendar.png" alt="">
                    </div>
                    <div class="room-quantity">
                        <div class="single-quantity">
                            <p>Adults</p>
                            <div class="pro-qty"><input type="number" class="adults" name="adults" value="1"></div>
                        </div>
                        <div class="single-quantity">
                            <p>Children</p>
                            <div class="pro-qty"><input type="number" class="children" name="children" value="0"></div>
                        </div>
                        <div class="single-quantity last">
                            <p>Rooms</p>
                            <div class="pro-qty"><input type="number" class="countRoom" min="1" max="<?=$this->count['count']?>" name="countRoom" value="1"></div>
                        </div>
                    </div>
                    <div class="room-selector">
                        <p>Price</p>
                        <input name="price" class="price" type="text" placeholder="$<?=$this->price[0]?> - $<?=$this->price[1]?>">
                    </div>
                    <button type="submit">Go</button>
                </form>
            </div>
        </div>
    </div>
</section>