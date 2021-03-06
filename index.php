<?/** @var $data array */?><? require 'db.php' ?><? require 'head.php' ?><? require 'header.php' ?>

<div class="arriv">
    <div class="container">
        <div class="arriv-top">
            <div class="col-md-6 arriv-left" onclick="location.href = 'details.php'">
                <img src="assets/images/1.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>ДЛЯ ДЕВОЧЕК</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.php">ЗА ПОКУПКАМИ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 arriv-right">
                <img src="assets/images/2.jpg" class="img-responsive" alt="">
                <div class="arriv-info">
                    <h3>ДЛЯ МАЛЬЧИКОВ</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.php">ЗА ПОКУПКАМИ</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="arriv-bottm">
            <div class="col-md-8 arriv-left1">
                <img src="assets/images/3.jpg" class="img-responsive" alt="">
                <div class="arriv-info1">
                    <h3>SWEATER</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.php">ЗА ПОКУПКАМИ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right1">
                <img src="assets/images/4.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.php"><h3>Trekking Shoes<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="arriv-las">
            <div class="col-md-4 arriv-left2">
                <img src="assets/images/5.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.php"><h3>Casual Glasses<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="col-md-4 arriv-middle">
                <img src="assets/images/6.jpg" class="img-responsive" alt="">
                <div class="arriv-info3">
                    <h3>FRESH LOOK T-SHIRT</h3>
                    <div class="crt-btn">
                        <a href="details.php">ЗА ПОКУПКАМИ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right2">
                <img src="assets/images/7.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.php"><h3>Elegant Watches<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="special">
    <div class="container">
        <h3>Популярные товары</h3>
        <div class="specia-top">
            <ul class="grid_2">
                <? foreach($data['specialOffers'] as $item): ?>
                    <li>
                        <a href="details.php"><img src="assets/images/<?= $item['image'] ?>" class="img-responsive"></a>
                        <div class="special-info grid_1 simpleCart_shelfItem">
                            <h5><?= $item['title'] ?></h5>
                            <div class="item_add"><span class="item_price"><?= $item['price'] ?> грн.</span></div>
                            <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                        </div>
                    </li>
                <? endforeach; ?>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>

<? require 'foot.php' ?>