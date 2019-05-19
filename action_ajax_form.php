<?php

function logFile($textLog) {

    $file = './logFile.txt';
    $text = '=======================' . PHP_EOL;
    $text .= $textLog;//Выводим переданную переменную
    $text .= PHP_EOL . date('Y-m-d H:i:s') . PHP_EOL; //Добавим актуальную дату после текста или дампа массива
    $fOpen = fopen($file,'a');
    fwrite($fOpen, $text);
    fclose($fOpen);
}

if (isset($_POST["name"]) && isset($_POST["subject"]) ) { 

	// Формируем массив для JSON ответа
    $result = array(
    	'name' => $_POST["name"],
    	'subject' => $_POST["subject"]
    );

    logFile(json_encode($result));

    // Переводим массив в JSON
    echo json_encode($result);
}

?>