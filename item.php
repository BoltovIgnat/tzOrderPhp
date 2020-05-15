<?
    require_once $_SERVER['DOCUMENT_ROOT'].'\helpers\header.php';
    // ТуДу заполнять при выборке
    require_once $_SERVER['DOCUMENT_ROOT'].'\sql\getProducts.php';

    $id = htmlspecialchars($_GET["id"]);
    $product = getProductById($id);

    if(empty($product)){
        $productEmpty = true;
    }else{
        $productEmpty = false;
    }
    
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
                    <a href="#" class="breadcrumbs-link active">Детальная страница</a>
                </div>
            </div>
        </div>
        <h1>Наименование товара</h1>
        <div class="content-cols">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <?if($productEmpty):?>
                            <div class="empty-content">
                                <div class="products-empty">
                                    <div class="products-empty-text">
                                        Товаров, соответствующих вашему запросу, нет
                                    </div>
                                </div>
                            </div>
                        <?else:?>
                            <div class="products-item item-page" ibc-id="<?=$product['img']?>">
                                <a href="/item.php?id=<?=$product['id']?>" class="products-item-image">
                                    <img src="<?=$product['img']?>" alt="">
                                </a>
                                <div class="products-item-title">
                                    <a href="/item.php?id=<?=$product['id']?>"><?=$product['name']?></a>
                                </div>
                                <div class="products-item-bottom">
                                    <div class="products-item-price">
                                        <?=$product['price']?>
                                    </div>
                                    <div class="products-item-button">
                                        <a href="#" class="to-basket"></a>
                                    </div>
                                </div>
                            </div>
                        <?endif;?>
                        
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <div class="ibc-property-block" id="filter-block">
                            <div class="ibc-property-inner">
                                <div class="ibc-property-item">
                                    <div class="ibc-property-item-title">Тип</div>
                                    <div class="ibc-property-item-tags">
                                        <a href="#" class="ibc-property-tag">Тип</a>
                                    </div>
                                </div>
                                <div class="ibc-property-item">
                                    <div class="ibc-property-item-title">Бренд</div>
                                    <div class="ibc-property-item-tags">
                                        <a href="#" class="ibc-property-tag">Бренд</a>
                                    </div>
                                </div>   
                            </div>
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
    