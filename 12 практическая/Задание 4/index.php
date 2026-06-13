<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h1>Отправка данных на сервер</h1>
	<h2>Регулярные выражения, часть 1</h2>
	
	<?php
		// входная строка
		$list = <<<HERE
		<ul>
		<li>PostgreSQL. Мастерство разработки</li>
		<li>Сборник рецептов MySQL</li>
		<li>Чертоги разума. Убей в себе идиота!</li>
		<li>Рефакторинг sql-приложений</li>
		<li>Python в веб приложениях</li>
		<li>SQL. Полное руководство</li>
		</ul>
		HERE;

		// выводим исходный список
		echo $list;

		// шаблон для извлечения элементов списка
		$pattern = "/<li>(.*?)<\/li>/i";

		// находим все элементы списка
		preg_match_all($pattern, $list, $matches);

		// массив всех пунктов списка
		$items = $matches[1];

		// шаблон для отбора пунктов, где есть упоминание SQL
		$pattern_sql = "/sql/i";

		// отбираем пункты, где упоминается технология SQL
		$results = preg_grep($pattern_sql, $items);

		// выводим отобранные элементы в виде нумерованного списка
		echo "<ol>";
		foreach ($results as $item) {
			echo "<li>" . $item . "</li>";
		}
		echo "</ol>";
	?>
	

</body>
</html>
