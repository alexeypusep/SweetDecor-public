<?php

    foreach(glob( 'storage/app/public/img/*') as $file) {
        $files[] = basename($file);
    }

    $connect = mysqli_connect('localhost', 'u1536859_sweet', 'aS4iQ1oR9sdE0w', 'u1536859_sweetdecor_test');

    mysqli_set_charset($connect, "utf8");

    if (!$connect) {
        die('Error connect to DataBase');
    }

    $tovars = mysqli_query($connect, "SELECT `photo1`, `photo2`, `photo3`, `photo4` FROM `tovars`");

    if (mysqli_num_rows($tovars) > 0) {
        foreach ($tovars as $tovar){
            $tovarsss[] = $tovar;
        }
    }

    foreach ($files as $file) {
        foreach ($tovarsss as $tov){
            if (strpos($tov['photo1'], $file) != false){
                $chek = $file;
                break;
            }
            if (strpos($tov['photo2'], $file) != false){
                $chek = $file;
                break;
            }
            if (strpos($tov['photo3'], $file) != false){
                $chek = $file;
                break;
            }
            if (strpos($tov['photo4'], $file) != false){
                $chek = $file;
                break;
            }
        }
        if (empty($chek)){
            $dellfile[] = $file;
        }
        else{
            $chek = "";
        }
    }
    foreach ($dellfile as $file){
        unlink('storage/app/public/img/' . $file);
    }
    
?>