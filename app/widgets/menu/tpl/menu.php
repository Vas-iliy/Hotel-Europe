<?if(!empty($this->data)):?>
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?=PATH?>"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="nav-right">
                    <a href="reservation" class="primary-btn">Make a Reservation</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <?foreach ($this->data as $menu):?>
                        <li>
                            <a href="<?=($menu['alias'] === 'home' ? PATH : PATH  . '/'. $menu['alias'])?>"><?=$menu['title']?></a>
                        </li>
                        <?endforeach;?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<?endif;?>