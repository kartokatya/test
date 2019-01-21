<?php
$array=["Беларусь","Литва","Литва1","Латвия","Польша","Франция","Италия","Германия"];
if(!empty($_POST["referal"])){
    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));

    $result = array_filter($array, function ($val) use ($referal) {
        return stristr($val, $referal);
    });

    foreach ($result as $res){
        echo "<li>".$res."</li>";
    }
}
?>