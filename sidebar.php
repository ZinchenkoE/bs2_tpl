<div class="w_sidebar">
    <div class="w_nav1">
        <h4>All</h4>
        <ul>
            <li><a href="/women.php">women</a></li>
            <li><a href="/women.php">new arrivals</a></li>
            <li><a href="/women.php">trends</a></li>
            <li><a href="/women.php">boys</a></li>
            <li><a href="/women.php">girls</a></li>
            <li><a href="/women.php">sale</a></li>
        </ul>
    </div>
    <h3>filter by</h3>
    <section class="sky-form">
        <h4>catogories</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>kurtas</label>
            </div>
            <div class="col col-4">
                <?
                $arr = [
                    'kutis',
                    'churidar kurta',
                    'salwar',
                    'printed sari',
                    'shree',
                    'Anouk',
                    'biba',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                    'fashion sari',
                ];
                ?>
                <? foreach($arr as $item): ?>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?= $item ?></label>
                <? endforeach; ?>
            </div>
        </div>
    </section>
    <section class="sky-form">
        <h4>brand</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <?
                $arr = [
                    'shree',
                    'Anouk',
                    'biba',
                    'vishud',
                    'amari',
                    'shree',
                    'Anouk',
                    'biba',
                    'shree',
                    'Anouk',
                    'biba',
                    'shree',
                    'Anouk',
                    'biba',
                ];
                ?>
                <? foreach($arr as $item): ?>
                    <label class="checkbox"><input type="checkbox"><i></i><?= $item ?></label>
                <? endforeach; ?>
            </div>
        </div>
    </section>
    <section class="sky-form">
        <h4>colour</h4>
        <ul class="w_nav2">
            <? for($i = 1; $i <= 15; $i++ ): ?>
                <li><a class="color<?= $i ?>" href="#"></a></li>
            <? endfor; ?>
        </ul>
    </section>
    <section class="sky-form">
        <h4>discount</h4>
        <div class="row1 scroll-pane">
            <div class="col col-4">
                <label class="radio"><input type="radio" name="radio" checked><i></i>60 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
            </div>
            <div class="col col-4">
                <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
            </div>
        </div>
    </section>
</div>