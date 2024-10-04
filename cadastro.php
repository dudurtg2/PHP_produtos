

    <div class="container">
        <h1>Digite os dados do produto a ser cadastrado</h1>
        <form class="row g-3" method="POST" action="_scripts/input.php">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome do produto</label>
                <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Preço de Compra</label>
                <input type="decimal" class="form-control" name="preco_c" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Preço de Venda</label>
                <input type="decimal" class="form-control" name="preco_v" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nome do Fornecedor</label>
                <input type="text" class="form-control" name="nome_f" required>
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Código do Produto</label>
                <input type="text" class="form-control" name="codigo" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
