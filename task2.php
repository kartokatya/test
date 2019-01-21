<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Задание 2</title>
</head>
<body>

<?php
//обрамление ссылкой с помощью PHP
$html = <<<HTML
<img width="200" height="200" src="/images/image2.jpg" alt=""/>
<img width="200" height="200" src="/images/image3.jpg" alt="">
HTML;
$new_html = preg_replace('#<img.+?src="([^"]*)".*?/?>#i', '<a href="$1" target="_blank">$0</a>', $html);
echo $new_html;
//обрамление ссылкой с помощью JS
?>

<img  width="200" height="200" src="/images/image1.jpg" alt="">

<script type="text/javascript">
    var item = document.getElementsByTagName('img');
    for (var i = 0; i < item.length; i++) {
        item[i].outerHTML = '<a target="_blank" href='+item[i].getAttribute('src')+'>' + item[i].outerHTML + '</a>';
    }
</script>

</body>
</html>




