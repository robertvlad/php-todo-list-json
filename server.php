<?php

    // LINK FILE JSON
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-Requested-With");

    $file_url = './data.json';

    $file_text = file_get_contents($file_url);
    $list = json_decode($file_text); 

    // IF PER CONTROLLARE SE E' PRESENTE UN NUOVO ELEMENTO DA AGGIUNGERE
    if(isset($_POST['newTask'])) {

        $newTodo = [
            'text' => $_POST['newTask'],
            'done' => false,
        ];

        array_push($list, $newTodo);

        file_put_contents($file_url, json_encode($list));

    } else if(isset($_POST['index'])) {

        $todoIndex = $_POST['index'];
    
        $list[$todoIndex]->done = !$list[$todoIndex]->done;

        file_put_contents($file_url, json_encode($list));   

    } else if(isset($_POST['indexDelete'])) {

        $todoIndex = $_POST['indexDelete'];
    
        array_splice($list, $todoIndex, 1);

        file_put_contents($file_url, json_encode($list));

    } else {

        header('Content-Type: application/json');

        echo json_encode($list);

    }

?>