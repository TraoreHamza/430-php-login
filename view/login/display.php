<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titrePage ?></title>
    <link rel="stylesheet" href="/asset/css/styles.css">
</head>
<body>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . '/view/partial/header.php'; ?>
    <main>
        <fieldset>
            <legend>Authentification</legend>
        <form action="/ctrl/login/login.php" method="post">
            <!-- E-mail -->
            <div class="user">
                <label for="code">E-mail :</label>
                <input type="text" name="mail" id="code" placeholder="e-mail">
            </div>
            <br>
            <!-- PASSWORD -->
            <div class="user">
                <label for="label">Mot de passe :</label>
                <input type="password" name="password" id="label" placeholder="password">
            </div>
            <div class="submit">
                <input type="submit" value="LOGIN"></input>
            </div>
        </form>
        </fieldset>
    </main>
</body>
</html>