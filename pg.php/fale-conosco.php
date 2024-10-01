<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="style.css"> <!-- Link para o CSS -->
</head>
<body>
    
    <?php include_once 'topo.php'; ?>
    <?php include_once 'menu.php'; ?>

    <main>
        <h1>Fale Conosco</h1>
        <form action="processar-formulario.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>

            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php include_once 'rodape.php'; ?>

</body>
</html>
