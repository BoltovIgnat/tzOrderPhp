<?

function getProducts()
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'tzorder');
    $sql = "SELECT * FROM products";
    
    if (!$result = $mysqli->query($sql)) {
        echo "Извините, возникла проблема в работе сайта.";
        exit;
    }
    
    while ($product = $result->fetch_assoc()) {
        $products[] = $product;
    }
    
    $result->free();
    $mysqli->close();

    return $products;
}

function getProductById($id)
{

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'tzorder');
    $id = $mysqli->real_escape_string($id);
    $sql = "SELECT * FROM `products` WHERE `id` = ".$id;
    
    if (!$result = $mysqli->query($sql)) {
        echo "Извините, возникла проблема в работе сайта.";
        exit;
    }
    
    while ($product = $result->fetch_assoc()) {
        $products[] = $product;
    }
    
    $result->free();
    $mysqli->close();

    return $products[0];
}
