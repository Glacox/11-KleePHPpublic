<?php 
require_once "../config.php";

if (session_status() === PHP_SESSION_NONE) {
    header("../pages/newNewLogin.php");
}

if ($_POST["store-topology"]='Toutes' && $_POST["store-category"] = 'Toutes'){
    $sql = "SELECT * FROM shops";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location:../pages/search.php');
}
elseif ($_POST["store-topology"] != 'Toutes'){
    $sql = "SELECT * FROM shops WHERE store-topology = :store-topology";
    $dataBinded = array(
        ':store-topology' => $_POST['store-topology'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location:../pages/search.php');
}
elseif ($_POST["store-category"] != 'Toutes'){
    $sql = "SELECT * FROM shops WHERE store-category = :store-category";
    $dataBinded = array(
        ':store-category' => $_POST['store-category'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location:../pages/search.php');
}
elseif ($_POST["store-topology"] != 'Toutes' && $_POST["store-category"] != 'Toutes'){
    $sql = "SELECT * FROM shops WHERE store-topology = :store-topology AND store-category = :store-category";
    $dataBinded = array(
        ':store-topology' => $_POST['store-topology'],
        ':store-category' => $_POST['store-category'],
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $data = $pre->fetch(PDO::FETCH_ASSOC);
    header('Location:../pages/search.php');
};