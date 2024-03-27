<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            justify-content: space-around;
            width: 600px; 
        }
        .square {
            width: 200px; 
            height: 200px;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .square:hover {
            background-color: #f9f9f9;
        }
        .square a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            font-size: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="square">
            <a href="LoginCliente.php">SOU CLIENTE</a>
        </div>
        <div class="square">
            <a href="LoginLanchonete.php">LANCHONETE</a>
        </div>
    </div>
</body>
</html>
