<?

    $name = $_POST['name'];
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $adressdelivery = $_POST['adress'];
    $datedelivery = $_POST['date'];
    $timedelivery = $_POST['time'];
    $amount = $_POST['amount'];
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'tzorder');
    $id = $mysqli->real_escape_string($id);
    $sql = "INSERT INTO `orders` (`id`, `amount`, `name`, `telefon`, `email`, `adressdelivery`, `datedelivery`, `timedelivery`) 
            VALUES (NULL, '".$amount."', '".$name."', '".$telefon."', '".$email."', '".$adressdelivery."', '".$datedelivery."', '".$timedelivery."');";
    $rez= $mysqli->query($sql);
    print_r($mysqli->insert_id);
    $mysqli->close();

    $to      = 'uncelpeter@gmail.com, '.$email;
    $subject = 'Создан заказ';
    $message = 'Создан заказ';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
?>