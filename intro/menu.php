<?php

$menu = [
    [
        'url' => '/',
        'label' => 'Home',
        'is_active' => false
    ],
    [
        'url' => '/about',
        'label' => 'About Us',
        'is_active' => true
    ],
    [
        'url' => '/contact',
        'label' => 'Contact',
        'is_active' => false
    ]
];

echo '<ul>';
foreach ($menu as $item) {
    $class = $item['is_active'] ? 'active' : '';
    echo "<li class='{$class}'><a href='{$item['url']}'>{$item['label']}</a></li>";
}
echo '</ul>';
