<?
    require_once $_SERVER['DOCUMENT_ROOT'].'\helpers\header.php';
    // ТуДу заполнять при выборке
    $productEmpty = false;
?>
    <div class="content">
        <div class="wrapper">
            <div class="breadcrumbs-wrapper">
                <div class="breadcrumbs">
                    <div class="breadcrumbs-level">
                        <a href="/" class="breadcrumbs-link">
                            Главная
                        </a>
                    </div>
                    <div class="breadcrumbs-level">
                        <a href="#" class="breadcrumbs-link active">Корзина</a>
                    </div>
                </div>
            </div>
            <h1>Корзина</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="basket-order-page-list">
                            <div class="basket-popup-bottom">
                                <a href="/order.php" class=""><div class="basket-popup-btn red-btn">Оформить заказ на сумму ~ 0 &#8381;</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?
    require_once $_SERVER['DOCUMENT_ROOT'].'\helpers\footer.php';
?>
   