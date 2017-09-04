<?/** @var $data array */?><? require 'db.php' ?><? require 'head.php' ?><? require 'header.php' ?>

<div class="container">
    <div class="women_main">

        <div class="col-md-3 s-d">
            <? require 'sidebar.php' ?>
        </div>

        <!-- start content -->
        <div class="col-md-9 w_content">
            <div class="women">
                <a href="#"><h4>Enthecwear - <span>4449 itemms</span></h4></a>
                <ul class="w_nav">
                    <li>Sort :</li>
                    <li><a class="active" href="#">popular</a></li>
                    |
                    <li><a href="#">new </a></li>
                    |
                    <li><a href="#">discount</a></li>
                    |
                    <li><a href="#">price: Low High </a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clearfix"></div>
            </div>

            <!-- grids_of_4 -->
            <?
                $chunk_arr = array_chunk($data['products'], 4);
            ?>
            <? foreach($chunk_arr as $chunk): ?>
                <div class="grids_of_4">
                    <? foreach($chunk as $item): ?>
                        <div class="grid1_of_4">
                            <div class="content_box">
                                <a href="details.php">
                                    <img src="images/<?= $item['image'] ?>" class="img-responsive">
                                </a>
                                <h4><a href="details.php"><?= $item['title'] ?></a></h4>
                                <p>It is a long established fact that</p>
                                <div class="grid_1 simpleCart_shelfItem">

                                    <div class="item_add"><span class="item_price"><h6>ONLY $<?= $item['price'] ?></h6></span></div>
                                    <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                                </div>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <div class="clearfix"></div>
                </div>
            <? endforeach; ?>
        </div>
        <div class="clearfix"></div>

        <!-- end content -->
    </div>
</div>

<? require 'foot.php' ?>