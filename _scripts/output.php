<?php
include 'config.php';
    function dadosProdutos($conn) {
    $sql = "SELECT * FROM produtos";
    $query = $conn->query($sql);
    
    if (!$query) {
        die("Erro na consulta: " . $conn->error);
    }

    return $query; 
}
?>