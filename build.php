<?php

$result = '<?php';
foreach (
    array(
        'ecwid_product_api', 'ecwid_catalog', 'ecwid_platform', 'ecwid_misc', 'run'
    ) as $file) {
    $contents = file_get_contents(__DIR__ . '/' . $file . '.php');
    $result .= preg_replace('!^<\?php!', '', $contents);
}

echo $result;
