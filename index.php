<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #000000;
        }
        .container {
            margin-top: 100px;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        header {
            
            background-color: #ec90e8;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        header h1 {
            margin: 0;
        }
        nav {
            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #ddd;
            color: black;}
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #c070ee;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #005f73;
        }
    </style>
</head>
<header>
    <h1>Educação para Todos</h1>
    <p><h2>Promovendo o conhecimento e a aprendizagem acessível a todos</h2></p>
</header>

<nav>
    <a href="index.momo.html">Sobre</a>
    <a href="index.html">Inicio</a>
</nav>
<body>


    <div class="container">
        <h1>Entre em contato</h1>
        <form action="/enviar-mensagem" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
