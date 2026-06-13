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

		// заменяем символы "#" на " - "
		$text = preg_replace("/#/", " - ", $text);

		// выводим результат в браузер
		echo $text;
	?>

</body>
</html>
