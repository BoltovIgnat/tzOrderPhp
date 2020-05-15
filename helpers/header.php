<?
    $basketEmpty = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Коньяк, виски, бренди - Dobrocen</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/select2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css" type="text/css" media="all" />
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header-top">
            </div>
            <div class="header-middle">
                <div class="logotip">
                    <img src="images/dobrocen.png" alt="tz">
                </div>
                <div class="header-search">
                    <div class="catalog-button js-catalog-open">Каталог</div>
                    <div class="search">
                        <input type="text" class="search-input" placeholder="Поиск">
                    </div>
                </div>
                <div class="header-buttons">
                    <div class="header-buttons-item bordered-btn login-btn js-popup-open" data-popup="authorize-popup">Вход</div>
                    <?if($basketEmpty):?>
                        <div class="header-buttons-item bordered-btn basket-btn"></div>
                        <div class="basket-popup basket-empty">Корзина пуста</div>
                    <?else:?>
                        <div class="header-buttons-item bordered-btn basket-btn basket-full js-basket-open">
                            3453&#8381;
                            <span class="basket-quantity">13</span>
                        </div>
                        <div class="basket-popup" id="basket-popup">
                            <div class="basket-popup-top">
                                <div class="basket-popup-title h1">Ваш заказ</div>
                            </div>
                            <div class="basket-order-list">
                                <div class="basket-order-item">
                                    <div class="boi-image" >
                                        <img src="images/ariel.png" alt="">
                                    </div>
                                    <div class="boi-text">
                                        <div class="title">Стиральный порошок Tide Color автомат для цветного белья 4,5 кг</div>
                                        <div class="piece">671 &#8381; <span class="measure">4,5 кг</span></div>
                                    </div>
                                    <div class="boi-data">
                                        <div class="boi-quantity">
                                            <div class="buy-quantity">
                                                <input class="value js-quantity" type="text" value="1">
                                                <span class="minus js-minus"></span>
                                                <span class="plus js-plus"></span>
                                            </div>
                                            <div class="measure">шт</div>
                                        </div>
                                        <div class="boi-price">
                                            671 &#8381;
                                        </div>
                                        <div class="boi-delete"></div>
                                    </div>
                                </div>
                                <div class="basket-order-item">
                                    <div class="boi-image" >
                                        <img src="images/banana.png" alt="">
                                    </div>
                                    <div class="boi-text">
                                        <div class="title">Бананы, Эквадор</div>
                                        <div class="piece">67,20 &#8381; <span class="measure">1 кг</span></div>
                                    </div>
                                    <div class="boi-data">
                                        <div class="boi-quantity">
                                            <div class="buy-quantity">
                                                <input class="value js-quantity" type="text" value="10">
                                                <span class="minus js-minus"></span>
                                                <span class="plus js-plus"></span>
                                            </div>
                                            <div class="measure">шт</div>
                                        </div>
                                        <div class="boi-price">
                                            ~ 94,08 &#8381;<br>
                                            <span class="weight">~ 1,4 кг</span>
                                        </div>
                                        <div class="boi-delete"></div>
                                    </div>
                                </div>
                                <div class="basket-order-item">
                                    <div class="boi-image" >
                                        <img src="images/banana.png" alt="">
                                    </div>
                                    <div class="boi-text">
                                        <div class="title">Картофель для варки</div>
                                        <div class="piece">67,20 &#8381; <span class="measure">1 кг</span></div>
                                    </div>                                
                                    <div class="boi-data">
                                        <div class="boi-quantity">
                                            <div class="buy-quantity">
                                                <input class="value js-quantity" type="text" value="0,6">
                                                <span class="minus js-minus"></span>
                                                <span class="plus js-plus"></span>
                                            </div>
                                            <div class="measure">кг</div>
                                        </div>
                                        <div class="boi-price">
                                            ~ 40,32 &#8381;
                                        </div>
                                        <div class="boi-delete"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="basket-popup-bottom">
                                <a href="/order.php" class=""><div class="basket-popup-btn red-btn">Оформить заказ на сумму ~ 3453 &#8381;</div></a>
                                <div class="basket-popup-note">Точный счет на оплату будет выставлен после взвешивания некоторых&nbsp;продуктов</div>
                            </div>
                            <div class="basket-popup-close js-basket-close"></div>
                        </div>
                    <?endif;?>
                </div>
            </div>
            <div class="sections">
                <div class="sections-block">
                    <a href="#" class="super section-link">Суперэкономия</a>
                </div>
                <div class="sections-block">
                    <a href="#" class="section-link">Свежие овощи, фрукты</a>
                    <a href="#" class="section-link">Молочные продукты и яйца</a>
                    <a href="#" class="section-link">Алкоголь</a>
                    <a href="#" class="section-link">Табак</a>
                    <a href="#" class="section-link tablet-hide">Стирка, уборка, бытовая химия</a>
                </div>
                <div class="sections-block">
                    <a href="#" class="section-link">Аптека</a>
                </div>
                <div class="sections-block">
                    <a href="#" class="section-link">Автотовары</a>
                </div>
            </div>
        </div>
        <div class="catalog" id="catalog-popup">
            <div class="wrapper">
                <div class="catalog-col">
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-fruit">
                            Свежие овощи, фрукты
                        </div>
                        <a href="#" class="catalog-item">Овощи</a>
                        <a href="#" class="catalog-item">Фрукты</a>
                        <a href="#" class="catalog-item">Зелень</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-bread">
                            Хлеб, выпечка, снеки
                        </div>
                        <a href="#" class="catalog-item">Чипсы, сухарики, попкорн</a>
                        <a href="#" class="catalog-item">Хлеб,хлебцы, выпечка</a>
                        <a href="#" class="catalog-item">Торты, пирожное, кексы</a>
                        <a href="#" class="catalog-item">Печенье, вафли, пряники</a>
                        <a href="#" class="catalog-item">Конфеты, шоколад</a>
                        <a href="#" class="catalog-item">Зефир, пастила, мармелад</a>
                        <a href="#" class="catalog-item">Жевательная резинка, леденцы</a>
                        <a href="#" class="catalog-item">Восточные сладости</a>
                        <a href="#" class="catalog-item">Подарочные наборы</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-frozen">
                            Замороженные продукты
                        </div>
                        <a href="#" class="catalog-item">Мороженное</a>
                        <a href="#" class="catalog-item">Овощи, грибы</a>
                        <a href="#" class="catalog-item">Ягоды, фрукты</a>
                        <a href="#" class="catalog-item">Котлеты, наггетсы, тесто</a>
                        <a href="#" class="catalog-item">Рыба</a>
                        <a href="#" class="catalog-item">Морепродукты</a>
                        <a href="#" class="catalog-item">Готовые блюда</a>
                        <a href="#" class="catalog-item">Пицца, вареники, пельмени, блины</a>
                        <a href="#" class="catalog-item">Мясо, птица и субпродукты</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-meat">
                            Мясо, птица, колбасы
                        </div>
                        <a href="#" class="catalog-item">Колбасы, ветчина</a>
                        <a href="#" class="catalog-item">Деликатесы мясные</a>
                        <a href="#" class="catalog-item">Говядина</a>
                        <a href="#" class="catalog-item">Свинина</a>
                        <a href="#" class="catalog-item">Птица</a>
                        <a href="#" class="catalog-item">Сосиски, сардельки</a>
                        <a href="#" class="catalog-item">Полуфабрикаты и субпродукты</a>
                    </div>
                </div>
                <div class="catalog-col">
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-fish">
                            Рыба и морепродукты
                        </div>
                        <a href="#" class="catalog-item">Икра</a>
                        <a href="#" class="catalog-item">Вяленая рыба</a>
                        <a href="#" class="catalog-item">С/м рыба</a>
                        <a href="#" class="catalog-item">Копченая рыба</a>
                        <a href="#" class="catalog-item">Соленая рыба</a>
                        <a href="#" class="catalog-item">Полуфабрикаты рыбные</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-tea">
                            Чай, кофе, какао
                        </div>
                        <a href="#" class="catalog-item">Чай</a>
                        <a href="#" class="catalog-item">Кофе</a>
                        <a href="#" class="catalog-item">Какао, горячий шоколад, цикорий</a>
                        <a href="#" class="catalog-item">Подарочные наборы</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-juice">
                            Вода, соки, напитки
                        </div>
                        <a href="#" class="catalog-item">Вода</a>
                        <a href="#" class="catalog-item">Соки, нектары, кисель</a>
                        <a href="#" class="catalog-item">Газированные напитки и чай</a>
                        <a href="#" class="catalog-item">Квас</a>
                        <a href="#" class="catalog-item">Энергетические напитки</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-sauce">
                            Соусы, майонез, специи
                        </div>
                        <a href="#" class="catalog-item">Приправы</a>
                        <a href="#" class="catalog-item">Сахар, соль</a>
                        <a href="#" class="catalog-item">Соусы, майонез</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-jam">
                            Консервы, варенье, мед
                        </div>
                        <a href="#" class="catalog-item">Батончики</a>
                        <a href="#" class="catalog-item">Консервы мясные</a>
                        <a href="#" class="catalog-item">Консервы рыбные</a>
                        <a href="#" class="catalog-item">Консервы овощные</a>
                        <a href="#" class="catalog-item">Варенье</a>
                        <a href="#" class="catalog-item">Мед</a>
                        <a href="#" class="catalog-item">Орехи, сухофрукты</a>
                    </div>
                </div>
                <div class="catalog-col">
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-pasta">
                            Крупы, макароны, масло
                        </div>
                        <a href="#" class="catalog-item">Растительное масло</a>
                        <a href="#" class="catalog-item">Крупы</a>
                        <a href="#" class="catalog-item">Макаронные изделия</a>
                        <a href="#" class="catalog-item">Продукты быстрого приготовления</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-milk">
                            Молочные продукты и яйца
                        </div>
                        <a href="#" class="catalog-item">Масло, маргарин</a>
                        <a href="#" class="catalog-item">Молоко, сливки</a>
                        <a href="#" class="catalog-item">Сыры</a>
                        <a href="#" class="catalog-item">Яйцо</a>
                        <a href="#" class="catalog-item">Йогурты</a>
                        <a href="#" class="catalog-item">Кефир</a>
                        <a href="#" class="catalog-item">Сметана</a>
                        <a href="#" class="catalog-item">Творог</a>
                        <a href="#" class="catalog-item">Мороженое</a>
                        <a href="#" class="catalog-item">Детские молочные продукты</a>
                    </div>
                    <div class="catalog-block">
                        <div class="catalog-block-title catalog-alcohol">
                            Алкоголь
                        </div>
                        <a href="#" class="catalog-item">Вермут</a>
                        <a href="#" class="catalog-item">Вино</a>
                        <a href="#" class="catalog-item">Водка</a>
                        <a href="#" class="catalog-item">Кагор</a>
                        <a href="#" class="catalog-item">Портвейн</a>
                        <a href="#" class="catalog-item">Коньяк, виски, бренди</a>
                        <a href="#" class="catalog-item">Настойки</a>
                        <a href="#" class="catalog-item">Шампанское</a>
                        <a href="#" class="catalog-item">Пиво и пивные напитки</a>
                    </div>
                    <div class="catalog-block">
                        <a href="#" class="catalog-block-title catalog-tobacco">
                            Табак
                        </a>
                    </div>
                </div>
                <div class="catalog-col-2">
                    <div class="catalog-col">
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-home">
                                Товары для дома и дачи
                            </div>
                            <a href="#" class="catalog-item">Для дачи, бани и сада</a>
                            <a href="#" class="catalog-item">Электроника</a>
                            <a href="#" class="catalog-item">Посуда и кухонные принадлежности</a>
                            <a href="#" class="catalog-item">Ванна и туалет</a>
                            <a href="#" class="catalog-item">Инструмент</a>
                            <a href="#" class="catalog-item">Домашний текстиль и декор</a>
                        </div>
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-cosmetics">
                                Косметика и гигиена
                            </div>
                            <a href="#" class="catalog-item">Для ванны и душа</a>
                            <a href="#" class="catalog-item">Уход за волосами</a>
                            <a href="#" class="catalog-item">Туалетная бумага</a>
                            <a href="#" class="catalog-item">Уход за телом</a>
                            <a href="#" class="catalog-item">Уход за полостью рта</a>
                            <a href="#" class="catalog-item">Личная гигиена</a>
                            <a href="#" class="catalog-item">Подарочные наборы</a>
                        </div>
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-clothes">
                                Одежда, обувь и аксессуары
                            </div>
                            <a href="#" class="catalog-item">Для мужчин</a>
                            <a href="#" class="catalog-item">Для женщин</a>
                            <a href="#" class="catalog-item">Для детей</a>
                            <a href="#" class="catalog-item">Для сада</a>
                            <a href="#" class="catalog-item">Аксессуары для обуви</a>
                        </div>
                    </div>
                    <div class="catalog-col">
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-cleaning">
                                Стирка, уборка, бытовая химия
                            </div>
                            <a href="#" class="catalog-item">Стирка и уход за бельем и обувью</a>
                            <a href="#" class="catalog-item">Уборка и чистящие средства</a>
                        </div>
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-child">
                                Товары для мам и детей
                            </div>
                            <a href="#" class="catalog-item">Детское питание</a>
                            <a href="#" class="catalog-item">Подгузники, пеленки</a>
                            <a href="#" class="catalog-item">Детские игрушки</a>
                            <a href="#" class="catalog-item">Гигиена и уход</a>
                            <a href="#" class="catalog-item">Книги</a>
                        </div>
                        <div class="catalog-block">
                            <div class="catalog-block-title catalog-zoo">
                                Зоотовары
                            </div>
                            <a href="#" class="catalog-item">Для кошек</a>
                            <a href="#" class="catalog-item">Для собак</a>
                            <a href="#" class="catalog-item">Аксессуары</a>
                        </div>
                        <div class="catalog-block">
                            <a href="#" class="catalog-block-title catalog-pharmacy">
                                Аптека
                            </a>
                        </div>
                        <div class="catalog-block">
                            <a href="#" class="catalog-block-title catalog-auto">
                                Автотовары
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>