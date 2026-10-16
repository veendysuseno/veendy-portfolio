<?php $c = config(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?= e($c['title']) ?></title>
<meta name="description" content="<?= e($c['description']) ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($c['title']) ?>">
<meta property="og:description" content="<?= e($c['og_description']) ?>">
<meta name="color-scheme" content="dark">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap">
<link rel="stylesheet" href="<?= e(asset('assets/css/style.css')) ?>">
</head>
<body>
