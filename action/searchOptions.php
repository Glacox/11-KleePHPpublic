<?php
require_once "../config.php";

 // Récupérer les valeurs distinctes de la colonne "topology"
 $sql_topology = "SELECT DISTINCT topology FROM shops";
 $stmt_topology = $pdo->query($sql_topology);
 $topologies = $stmt_topology->fetchAll(PDO::FETCH_COLUMN);

// Récupérer les valeurs distinctes de la colonne "category"
$sql_category = "SELECT DISTINCT category FROM shops";
$stmt_category = $pdo->query($sql_category);
$categories = $stmt_category->fetchAll(PDO::FETCH_COLUMN);