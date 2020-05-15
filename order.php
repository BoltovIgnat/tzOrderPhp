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
                        <a href="#" class="breadcrumbs-link active">Оформление заказа</a>
                    </div>
                </div>
            </div>
            <h1>Оформление заказа</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="exampleInputName">Имя</label>
                            <input type="email" class="form-control" id="exampleInputName" placeholder="Введите имя">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Адрес</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Ленина 1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTelefon">Телефон</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                        <div class="input-group-text">+7</div>
                                </div>
                                <input type="text" class="form-control" id="exampleInputTelefon" placeholder="Телефон">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_start_datetime">12hr Date-Time:</label>
                            <div class="input-group date" id="id_0">
                                <input type="text" value="05/16/2018 12:31:00 AM" id="id_start_datetime" class="form-control" required/>
                                <div class="input-group-addon input-group-append">
                                    <div class="input-group-text">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="basket-order-page-list">
                            <div class="basket-popup-bottom ibc-order">
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
   