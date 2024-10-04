<?php 
    include '_scripts/output.php';
    $produtos = dadosProdutos($mysqli);
?>

<div class="container my-4">
    <h1>Lista de Produtos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço de Compra</th>
                <th>Preço de Venda</th>
                <th>Nome do Fornecedor</th>
                <th>Código</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($produto = $produtos->fetch_assoc()): ?>
            <tr>
                <td><?php echo $produto['id']; ?></td>
                <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                <td><?php echo number_format($produto['preco_c'], 2, ',', '.'); ?></td>
                <td><?php echo number_format($produto['preco_v'], 2, ',', '.'); ?></td>
                <td><?php echo htmlspecialchars($produto['nome_f']); ?></td>
                <td><?php echo htmlspecialchars($produto['codigo']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
