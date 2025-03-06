<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $baguettes = $_POST['baguettes'];
    $bollos = $_POST['bollos'];
    $sandwich = $_POST['sandwich'];

    echo "<h1>Pedido realizado con el método POST</h1>";

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {

    $nombre = $_GET['nombre'];
    $baguettes = $_GET['baguettes'];
    $bollos = $_GET['bollos'];
    $sandwich = $_GET['sandwich'];

    echo "<h1>Pedido realizado con el método GET</h1>";

} else {

    echo "Método invalido.";
    exit;
}

echo "<h2>Resumen del Pedido</h2>";
echo "<p>Pedido realizado por : $nombre</p>";
echo "<p>Número de Baguettes: $baguettes</p>";
echo "<p>Número de Bollos: $bollos</p>";
echo "<p>Número de panes de Sándwich: $sandwich</p>";
?>
