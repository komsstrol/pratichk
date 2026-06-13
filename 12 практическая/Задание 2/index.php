<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Регулярные выражения</title>
</head>
<body>
	<h1>Регулярные выражения</h1>
	<h2>Русская народная сказка "Теремок"</h2>

	<?php
		// читаем текст файла в переменную
		$text = file_get_contents("text.txt");

		// заменяем символы переноса строки на HTML-тег новой строки
		$text = preg_replace("/\n/", "<br>", $text);

		// массив шаблонов для поиска
		$patterns[] = "/{pict1}/";
		$patterns[] = "/{pict2}/";
		$patterns[] = "/{pict3}/";
		$patterns[] = "/{pict4}/";
		$patterns[] = "/{pict5}/";
		$patterns[] = "/{pict6}/";

		// массив элементов для замены
		$pictures[] = "<p><img src='pictures/pict1.jpg' width='500px'></p>";
		$pictures[] = "<p><img src='pictures/pict2.jpg' width='500px'></p>";
		$pictures[] = "<p><img src='pictures/pict3.jpg' width='500px'></p>";
		$pictures[] = "<p><img src='pictures/pict4.jpg' width='500px'></p>";
		$pictures[] = "<p><img src='pictures/pict5.jpg' width='500px'></p>";
		$pictures[] = "<p><img src='pictures/pict6.jpg' width='500px'></p>";

		// заменяем шаблоны на изображения
		$text = preg_replace($patterns, $pictures, $text);

		// выводим результат в браузер
		echo $text;
	?>

</body>
</html>
