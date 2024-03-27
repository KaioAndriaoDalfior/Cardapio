<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 90%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .container-edicao {
            width: 100%;
            margin-bottom: 20px;
        }
        .container-cardapio {
            width: 100%;
        }
        @media only screen and (min-width: 1366px) {
            .container {
                flex-wrap: nowrap;
            }
            .container-edicao {
                width: calc(33% - 20px);
            }
            .container-cardapio {
                width: calc(66% - 20px);
            }
        }
        .item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        .item h3 {
            margin-top: 0;
        }
        .item p {
            margin-top: 5px;
            font-size: 14px;
        }
        .item button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        .item button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="container-edicao">
    <h1>Edição</h1>
    <div class="item">
        <h2>Hamburguer</h2>
        <input type="text" id="novoPreco-Hamburguer" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('Hamburguer')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>X-Burguer</h2>
        <input type="text" id="novoPreco-X-Burguer" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('X-Burguer')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>EggBurguer</h2>
        <input type="text" id="novoPreco-EggBurguer" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('EggBurguer')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>X-Tudo</h2>
        <input type="text" id="novoPreco-X-Tudo" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('X-Tudo')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>XeggBacon</h2>
        <input type="text" id="novoPreco-XeggBacon" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('XeggBacon')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>Xcalabresa</h2>
        <input type="text" id="novoPreco-Xcalabresa" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('Xcalabresa')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>Xsalada</h2>
        <input type="text" id="novoPreco-Xsalada" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('Xsalada')">Editar Preço</button>
    </div>
    <div class="item">
        <h2>Misto Quente</h2>
        <input type="text" id="novoPreco-MistoQuente" placeholder="Novo Preço">
        <button class="btn-editar-preco" onclick="editarPreco('Misto Quente')">Editar Preço</button>
    </div>
</div>
        <div class="container-cardapio">
            <h2>Cardápio</h2>
            <div class="item">
                <h3>Hamburguer</h3>
                <p>Pão, carne de hambúrguer, alface, tomate, queijo, maionese, ketchup, mostarda</p>
                <p id="preco-Hamburguer">Preço: R$ 10,00</p>
                
            </div>
            <div class="item">
                <h3>X-Burguer</h3>
                <p>Pão, carne de hambúrguer, queijo, alface, tomate, maionese, ketchup, mostarda</p>
                <p id="preco-X-Burguer">Preço: R$ 12,00</p>
                
            </div>
         
            <div class="item">
                <h3>EggBurguer</h3>
                <p>Pão, carne de hambúrguer, ovo frito, queijo, alface, tomate, maionese, ketchup, mostarda</p>
                <p id="preco-EggBurguer">Preço: R$ 13,00</p>
              
            </div>
            <div class="item">
                <h3>X-Tudo</h3>
                <p>Pão, 2 carnes de hambúrguer, presunto, queijo, ovo frito, bacon, alface, tomate, maionese, ketchup, mostarda</p>
                <p id="preco-X-Tudo">Preço: R$ 15,00</p>
             
            </div>
            <div class="item">
                <h3>XeggBacon</h3>
                <p>Pão, carne de hambúrguer, ovo frito, bacon, queijo, alface, tomate, maionese, ketchup, mostarda</p>
                <p id="preco-XeggBacon">Preço: R$ 14,00</p>
               
            </div>
            <div class="item">
                <h3>Xcalabresa</h3>
                <p>Pão, linguiça calabresa, queijo, alface, tomate, maionese, ketchup, mostarda</p>
                <p id="preco-Xcalabresa">Preço: R$ 12,00</p>
               
            </div>
            <div class="item">
                <h3>Xsalada</h3>
                <p>Pão, carne de hambúrguer, alface, tomate, queijo, maionese, ketchup, mostarda</p>
                <p id="preco-Xsalada">Preço: R$ 11,00</p>
                
            </div>
            <div class="item">
                <h3>Misto Quente</h3>
                <p>Pão de forma, presunto, queijo</p>
                <p id="preco-MistoQuente">Preço: R$ 8,00</p>
               
            </div>
        </div>
    </div>

    <script>
        function adicionarAoCarrinho(lanche) {
            alert('Adicionado ao carrinho: ' + lanche);
        }

        function editarPreco(lanche) {
            var novoPreco = document.getElementById('novoPreco-' + lanche).value;
            if (novoPreco !== '') {
                document.getElementById('preco-' + lanche).textContent = 'Preço: R$ ' + novoPreco;
            } else {
                alert('Por favor, insira um novo preço.');
            }
        }
    </script>
</body>
</html>

