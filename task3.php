<?php
//1-й вариант
//header('Location: http://google.com');
// exit();

//переход через 5 секунд
// header('Refresh: 5; url=http://google.com');
//exit();

//2-й вариант
/*echo '<script type="text/javascript">
           window.location = "http://www.google.com/"
      </script>';*/

//вместо window.location можно использовать:
/*
 1)self.location="http://www.example.com/index.php";

 2)window.location.href="http://www.example.com/index.php";

 3)document.location.href = 'http://www.example.com/index.php';

 4)window.location.replace("http://www.example.com/index.php");
 * */

//3-й вариант
?>
<a href="http://google.com" target="_blank">перейти</a>