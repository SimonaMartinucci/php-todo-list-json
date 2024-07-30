<?php 

// prendo e salvo come stringa il file json
$string = file_get_contents('todolist.json');

// trasformo stringa in elemento php
$list = json_decode($string);


// se in POST viene inviata la chiave 'todoItem', aggiungi elemento alla lista
if(isset($_POST['todoItem'])) {
    $todoItem = $_POST['todoItem'];
    $list[] = $todoItem;
    file_put_contents('todolist.json', json_encode($list));
}

// se in POST viene inviata la chiave 'indexToDelete', elimina elemento dalla lista
if(isset($_POST['indexToDelete'])) {
    $index = $_POST['indexToDelete'];
    array_splice($list, $index, 1);
    file_put_contents('todolist.json', json_encode($list));
}


// modifico l'header in modo che venga interpretato come JSON
header('Content-Type: application/json');

// stampo elemento php sotto forma di stringa
echo json_encode($list);