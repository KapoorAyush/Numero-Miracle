<?php 
    $file=fopen("record.csv","w");
    fputcsv($file,$_POST["name"]);
    fputcsv($file,$_POST["ques"]);
    header('Location:index.html');
?>