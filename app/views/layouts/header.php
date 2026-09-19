<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $pageTitle ?? 'Pro Loco Zagarolo' ?></title>

    <meta
        name="description"
        content="Pro Loco di Zagarolo — territorio, cultura, iniziative e comunicazioni."
    >

    <link rel="stylesheet" href="<?= url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= url('/assets/css/turismo.css') ?>">
</head>

<body>

<header class="site-header">

    <div class="container nav">

        <a class="brand" href="<?= url('/') ?>">
            <span>PRO LOCO</span>
            <strong>ZAGAROLO</strong>
        </a>

        <button class="menu-toggle" type="button">
            ☰
        </button>

        <nav>

            <a href="<?= url('/chi-siamo') ?>">
                Chi siamo
            </a>

            <a href="<?= url('/news') ?>">
                News
            </a>

            <div class="nav-item">
                <a href="<?= url('/turismo') ?>">
                    Turismo ▾
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?= url('/turismo/monumenti') ?>">Monumenti</a></li>
                    <li><a href="<?= url('/turismo/dove-dormire') ?>">Dove dormire</a></li>
                    <li><a href="<?= url('/turismo/dove-mangiare') ?>">Dove mangiare</a></li>
                </ul>
            </div>

            <a href="<?= url('/orari') ?>">
                Orari
            </a>

            <a href="<?= url('/contatti') ?>">
                Contatti
            </a>

            <a
                class="nav-admin"
                href="<?= url('/admin/login') ?>"
            >
                Area admin
            </a>

        </nav>

    </div>

</header>

<main>
