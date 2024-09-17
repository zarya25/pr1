<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pr 1</title>
</head>

<body>
    <div class="container">
        <h1>Задание 1</h1>
        <div class="one">
            <?
            $students = ['Зиннатуллина', 'Сидоров', 'Иванов', 'Козлов', 'Кошечкин', 'Лермонтов'];
            foreach ($students as $elements) {
                echo $elements;
                echo '<br>';
            }

            $num_students = count($students);
            echo "Количество студентов: $num_students";
            if (in_array('Сидоров', $students)) {
                echo '<br>Есть такой';
            } else {
                echo '<br>Нет такого';
            }

            $expelled = array_pop($students);
            echo "<br>Студент $expelled удален.<br>";
            ?>

        </div>
    </div>

    <div class="container">
        <div class="two">
            <?
            $circles = array(
                "Спортивный" => "Сидоров",
                "Художественный" => "Емелина",
                "Музыкальный" => "Иванова",
                "Литературный" => "Петров",
                "Биологический" => "Антонова"
            );
            asort($circles);
            foreach ($circles as $circle => $student) {
                echo "$circle - $student<br>";
            }

            ?>
        </div>
    </div>

    <div class="container">
        <div class="three">
            <?
            $student = [
                'имя' => 'Зарина(Заря)',
                'фамилия' => 'Зиннатуллина',
                'группа' => '425 веб(самая лучшая)',
                'хобби' => 'готовить с даваникой',
                'инстаграмм' => '@untoouchabllle',
            ];

            echo "имя: " . $student['имя'] . "<br>";
            echo "фамилия: " . $student['фамилия'] . "<br>";
            echo "группа: " . $student['группа'] . "<br>";
            echo "хобби: " . $student['хобби'] . "<br>";
            echo "инстаграмм: " . $student['инстаграмм'] . "<br>";
            ?>
        </div>
    </div>

</body>

</html>