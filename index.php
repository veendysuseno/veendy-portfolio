<?php
declare(strict_types=1);
require __DIR__ . '/includes/functions.php';

$sections = ['home', 'about', 'skills', 'projects', 'workflow', 'experience', 'education', 'github', 'contact'];

require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
echo "<main>\n";
foreach ($sections as $name) {
    require __DIR__ . "/sections/{$name}.php";
}
echo "</main>\n";
require __DIR__ . '/includes/footer.php';
