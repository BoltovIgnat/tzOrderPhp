<?

    $name = $_POST['name'];
    $count = $_POST['count'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $idOrder = $_POST['idOrder'];
    $idproduct = $_POST['idproduct'];

    $mysqli = new mysqli('127.0.0.1', 'root', '', 'tzorder');
    $id = $mysqli->real_escape_string($id);
    $sql = "INSERT INTO `ordersrows` (`id`, `idorder`, `idproduct`, `count`, `price`, `amount`)
     VALUES (NULL, '".$idOrder."', '".$idproduct."', '".$count."', '".$price."', '".$amount."');";
    
    $result = $mysqli->query($sql);
    
    $result->free();
    $mysqli->close();
?>
