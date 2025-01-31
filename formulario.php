<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Formulário de contato">
    <meta name="revisit-after" content="3 days"/>
    <meta name="robots" content="index,follow"/>
    <meta name="dc.language" content="pt-br">
    <meta name="geo.region" content="BR-MG"> 
    <meta name="geo.country" content="br"/>
    <meta name="geo.placename" content="Belo Horizonte"/>
    <title>Questão 3</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
</head>

<body>

    <!-- Barra de navegação -->
    <div id="nav">
        <img id="imgLogo" src="logo-construsite-brasil.svg" alt="Logo da Construsite Brasil">
    </div>

    <!-- Seção Central -->
    <div id="divcentral">
        <!-- Div esquerda -->
        <div id="divesquerda">
            <div class="nomealinhamento">
                <h2>Nome:</h2>
                <p>Daniel Augusto</p>
            </div>
        </div>

        <!-- Div direita com o formulário -->
        <div id="divdireita">
            <h2>Mensagem</h2>
            <form id="formContato" action="emailenviar.php" method="POST">
                <label class="lblInput" for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>

                <label class="lblInput" for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" required>

                <label class="lblInput" for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>

                <label class="lblInput" for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem" rows="4" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <!-- Script personalizado -->
    <script src="src/script.js"></script>

</body>
</html>
