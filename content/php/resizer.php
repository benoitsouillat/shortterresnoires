<?php

extension_loaded('gd') or die('GD extension not available');
function resizeimage($picture, $destination_name = null, $destination_folder = null)
{
    $infos = getimagesize($picture);
    $max_size = 500000; // 500 Ko

    $new_width = $infos[0]; // On récupère la width et la height de l'image
    $new_height = $infos[1];

    $witdh_step = 0.7; // On multiplie par 100x%
    $height_step = 0.7;

    if ($destination_folder === null) {
        $destination_folder = __DIR__ . '/../..' . '/src/img/diapos/tmp/';
    } else {
        $destination_folder = __DIR__ . $destination_folder;
    }
    if ($destination_name === null) {
        $destination_name = substr($picture, -10, 10);
        $new_image_name = $destination_folder . $destination_name;
    } else {
        $new_image_name = $destination_folder . $destination_name . '.jpg';
    }

    // Charge l'image à partir du fichier en fonction de son MIME
    switch ($infos['mime']) {
        case 'image/png':
            $image = imagecreatefrompng($picture);
            break;
        case 'image/jpeg':
            $image = imagecreatefromjpeg($picture);
            break;
        case 'image/webp':
            $image = imagecreatefromwebp($picture);
            break;
        case 'image/wbmp':
            $image = imagecreatefromwbmp($picture);
            break;
        case 'image/avif':
            $image = imagecreatefromavif($picture);
            break;
        default;
            echo "Une erreur s'est produite, le format d'image n'est pas compatible !";
            break;
    }
    do {
        // On multiplie par x(step)% pour réduire au fur et à mesure
        $new_width *= $witdh_step;
        $new_height *= $height_step;
        // On créé l'image vierge
        $new_image = imagecreatetruecolor($new_width, $new_height);

        // On copie l'image dans l'image vierge
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $infos[0], $infos[1]);

        // On enregistre la nouvelle image à l'emplacement prévu
        imagejpeg($new_image, $new_image_name);

        switch ($infos['mime']) {
            case 'image/png':
                imagepng($new_image, $new_image_name);
                break;
            case 'image/jpeg':
                imagejpeg($new_image, $new_image_name);
                break;
            case 'image/webp':
                imagewebp($new_image, $new_image_name);
                break;
            case 'image/wbmp':
                imagewbmp($new_image, $new_image_name);
                break;
            case 'image/avif':
                imageavif($new_image, $new_image_name);
                break;
            default;
                echo "Une erreur s'est produite, le format d'image n'est pas compatible !";
                break;
        }

        $new_image_size = filesize($new_image_name);
        clearstatcache();
    } while ($new_image_size > $max_size && $new_width > 200);
    imagedestroy($new_image);
}
