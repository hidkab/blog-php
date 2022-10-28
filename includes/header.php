<?php
require __DIR__ . '/../database/database.php';
$currentUser = $currentUser ?? false;
?>
<header>
    <a href="/" class="logo">HidBlog</a>
    <div class="header-mobile">
        <div class="header-mobile-icon">
            <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="header-mobile-list">
            <?php if ($currentUser) : ?>
                <li class=<?= $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
                    <a href="/form-article.php">Écrire un article</a>
                </li>
                <li>
                    <a href="/auth-logout.php">Déconnexion</a>
                </li>
                <li class="<?= $_SERVER['REQUEST_URI'] === '/auth-profile.php' ? 'active' : '' ?>">
                    <a href="/auth-profile.php">Mon espace</a>
                </li>
            <?php else  : ?>
                <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-register.php' ? 'active' : '' ?>>
                    <a href="/auth-register.php">Inscription</a>
                </li>
                <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-login.php' ? 'active' : '' ?>>
                    <a href="/auth-login.php">Connexion</a>
                </li>
            <?php endif ; ?>
        </ul>
    </div>
    <ul class="header-menu">
        <?php if ($currentUser) : ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/form-article.php' ? 'active' : '' ?>>
                <a href="/form-article.php">Écrire un article</a>
            </li>
            <li>
                <a href="/auth-logout.php">Déconnexion</a>
            </li>
            <li class="<?= $_SERVER['REQUEST_URI'] === '/auth-profile.php' ? 'active' : '' ?> header-profile">
                <a href="/auth-profile.php"><?= $currentUser['firstname'][0] . $currentUser['lastname'][0] ?></a>
            </li>
        <?php else  : ?>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-register.php' ? 'active' : '' ?>>
                <a href="/auth-register.php">Inscription</a>
            </li>
            <li class=<?= $_SERVER['REQUEST_URI'] === '/auth-login.php' ? 'active' : '' ?>>
                <a href="/auth-login.php">Connexion</a>
            </li>
        <?php endif ; ?>
    </ul>
</header>