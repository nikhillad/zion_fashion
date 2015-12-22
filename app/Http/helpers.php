<?php

function thumbnailImage($imagePath) {
    $imagick = new \Imagick(realpath($imagePath));
    $imagick->setbackgroundcolor('rgb(64, 64, 64)');
    $imagick->thumbnailImage(300, 300, true, true);
    header("Content-Type: image/jpg");
    return $imagick->getImageBlob();
}

?>