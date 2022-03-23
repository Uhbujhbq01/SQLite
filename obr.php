<?php
// Выводим HTML-заголовки:
echo '<html>'; echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf8">';
echo '<title>Тест</title>';
echo '</head>'; echo '<body>';
echo '<h3>Тестовая форма</h3>';
$n=0;
for($i=1; $i<=5; $i++)
{ $index=(string)$i; $vr=$_POST[$index]; $cm=strcmp($vr, 'aa');
 if ($cm==0) $n++;
}
echo "Правильных ответов: ".$n; echo '</body>';
echo '</html>';
?>