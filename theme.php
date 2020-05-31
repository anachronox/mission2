<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

		<link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">

		<?= $Wcms->css() ?>

	</head>

	<body id="start">
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>
        <div class="header">
            <div class="section-inner">
                <a href="<?= $Wcms->url() ?>" class="logo no-underline">
                    <span class="logo-h1"><?= $Wcms->siteTitle() ?></span> <img src="<?=wCMS::asset('data/logo.png')?>" alt="" />
                </a>
                <div class="nav">
                    <ul>
                        <?= $Wcms->menu() ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="section-inner">
                <?= $Wcms->page('content') ?>
            </div>
        </div>
        
        <div class="aside">
            <div class="section-inner">
                <?= $Wcms->block('subside') ?>
            </div>
        </div>
        
        <div class="footer">
            <div class="section-inner">
                <div class="footer-nav">
                    <span class="logo"><?= $Wcms->siteTitle() ?></span>
                    <?= $Wcms->footer() ?>
                </div>
            </div>
            <a href="#start">
                <div class="beam-up">
                    <div class="button-up"></div>
                </div>
            </a>
        </div>
        
        <?= $Wcms->js() ?>

	</body>
</html>
