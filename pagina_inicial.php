
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com 3 Divs</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 50px;
        }
        .box {
            width: 30%;
            text-align: center;
        }
        .box img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <a href="pagina1.html">
                <img src="imagem1.jpg" alt="Imagem 1">
            </a>
            <h1>Título da Imagem 1</h1>
            <p>Texto explicativo sobre a imagem 1.</p>
        </div>
        <div class="box">
            <a href="pagina2.html">
                <img src="imagem2.jpg" alt="Imagem 2">
            </a>
            <h1>Título da Imagem 2</h1>
            <p>Texto explicativo sobre a imagem 2.</p>
        </div>
        <div class="box">
            <a href="pagina3.html">
                <img src="imagem3.jpg" alt="Imagem 3">
            </a>
            <h1>Título da Imagem 3</h1>
            <p>Texto explicativo sobre a imagem 3.</p>
        </div>
    </div>
</body>
</html>
