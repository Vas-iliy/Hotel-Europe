<?if(!empty($this->data)):?>
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?=PATH?>"><img src="img/logo.png" alt=""></a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <?foreach ($this->data as $menu):?>
                        <li <?=(($_SERVER['REQUEST_URI'] === '/' . $menu['alias']) || ($menu['alias'] === 'home') ? 'class="active"' : '')?>>
                            <a href="<?=($menu['alias'] === 'home' ? PATH: '/' . $menu['alias'])?>"><?=$menu['title']?></a>
                        </li>
                        <?endforeach;?>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
<?endif;?>