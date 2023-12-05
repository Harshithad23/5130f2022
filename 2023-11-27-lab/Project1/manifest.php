<?php
header('Content-Type: application/json');

$manifest = [
    "name" => "Lab Activity",
    "short_name" => "Lab",
    "description" => "Will allow user to open signup and then signin to the page",
    "start_url" => "/index.php",
    "display" => "standalone",
    "background_color" => "#ffffff",
    "theme_color" => "#000000",
    "icons" => [
        [
            "src" => "C:\xampp\htdocs\Project1\image.jpg",
            "sizes" => "192x192",
            "type" => "image/jpg"
        ]
    ]
];

echo json_encode($manifest, JSON_PRETTY_PRINT);
