<header class="header ">
    <div class="container header__container">
        <h1 class="logo"><a href="/index.php">EchoSoul</a></h1>
        <div class="menu-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav aria-label="Main Navigation" class="header__nav">
            <ul>
                <li><a href="#main">Main</a></li>
                <li>
                    <a href="/users/login.php">
                        <?php
                        session_start();
                        if (isset($_SESSION['user'])) {
                            echo ("" . $_SESSION['user']['nick']);
                        } else {
                            echo ("Login");
                        } ?>
                    </a>
                </li>
                <li>
                    <a href="/users/registrat.php">
                        <?php
                        if (isset($_SESSION['user']['nick'])) {
                            // Если пользователь вошел в систему, показать кнопку "Exit"
                            echo '<a href="/users/logout.php">Go out</a>';
                        } else {
                            // Если пользователь не вошел в систему, показать кнопку "SignUp"
                            echo 'Sign up';
                        }
                        ?>
                    </a>
                </li>
                <li><a href="/news/news.php">News</a></li>
                <li><a href="#footer">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
<script src="../js/scrip.js"></script>