<?php
    $InputFlag = $_GET['flag'];
    $fr = fopen("flag.txt", 'r');
    $TrueFlag = fgets($fr);
    $TrueFlag = str_replace(PHP_EOL, '', $TrueFlag); 
    fclose($fr);
    $fr = fopen("name", 'r');
    $user = str_replace(PHP_EOL, '', fgets($fr));
    fclose($fr);
    if($InputFlag == $TrueFlag) {
        if(file_exists("ans.txt")) {
            $fr = fopen("ans.txt", 'r');
            $al = 0;
            while(!feof($fr)) {
                $line = fgets($fr);
                if($line != "" && $line == $user) {
                    $al = 1;
                }
            }
            fclose($fr);
        }
        if($al == 0) {
            file_put_contents("ans.txt", $user . "\n", FILE_APPEND);
        } 
    }
    header("location:index.php");
?>