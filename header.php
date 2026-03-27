<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<header class="header">
    <nav class="nav">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
        <button class="nav-toggle" aria-label="Menu" aria-expanded="false">📖</button>
        
        <ul class="nav-list">
            <li><a href="#hero">Start</a></li>
            <li><a href="#about">O nas</a></li>
            <li><a href="#offers">Oferta</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </nav>
</header>

<main>