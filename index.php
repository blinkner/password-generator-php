<?php require_once 'controller.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator PHP</title>
</head>
<body>
    <main>
        <header>
            <h1>Password Generator PHP</h1>
        </header>
        <section>
            <form action="" method="post">
                <input type="number" name="tamanho" id="tamanho" value="<?= $tamanho; ?>" required>
                <input type="submit" value="Gerar senha">
            </form>
        </section>
        <section>
            <p><strong>A senha gerada é:</strong> <?= $senha ?? '' ?></p>
        </section>
    </main>
</body>
</html>