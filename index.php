<?
    require_once $_SERVER['DOCUMENT_ROOT'].'\helpers\header.php';
    
    $productEmpty = false;
    require_once $_SERVER['DOCUMENT_ROOT'].'\sql\getProducts.php';
    $products = getProducts();
    //print_r($products);
?>
    <div class="content">
        <div class="wrapper">
            <div class="products index-products">
                <?foreach($products as $arItem):?>
                    <div class="products-item" ibc-id="<?=$arItem['id']?>">
                        <a href="/item.php?id=<?$arItem['id']?>" class="products-item-image">
                            <img src="<?=$arItem['img']?>" alt="">
                        </a>
                        <div class="products-item-title">
                            <a href="/item.php?id=<?=$arItem['id']?>"><?=$arItem['name']?></a>
                        </div>
                        <div class="products-item-bottom">
                            <div class="products-item-price">
                                <?=$arItem['price']?>
                            </div>
                            <div class="products-item-button">
                                <a href="#" class="to-basket"></a>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
<?
    require_once $_SERVER['DOCUMENT_ROOT'].'\helpers\footer.php';
?>
   