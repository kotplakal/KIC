<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EchoSoul</title>
    <!-- Подключаем стилевые файлы -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>
    <?php require "../header.php" ?>

    <main id="main" class="main">
        <section class="logistr common-section common-section--dark">
            <div class="logistr__cont container">
                <form class="logistr__form " action="authorization.php" method="post">
                    <p>Authorization</p>
                    <p>Enter your login:</p><input name="login" type="text" placeholder="Login">
                    <p>Enter your password:</p><input name="password" type="password" placeholder="Password"> <br>
                    <input class=" logbtn link-primary" type="submit">
                </form>
            </div>
        </section>
    </main>
    <?php require "../footer.php" ?>
    <script src="../js/scrip.js"></script>
</body>

</html>