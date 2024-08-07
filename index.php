<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- vue JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>php-todo-list-json</title>
</head>
<body>

<div id="app">
    <div class="cont py-5">
        <h1 class="text-center mb-5">ToDo List</h1>
        <ul class="border px-4 pb-4">
            <li class="d-flex justify-content-between align-items-center fs-4 border-bottom py-4" v-for="(task, index) in list">
                {{task}}
                <i class="fa-solid fa-trash-can btn btn-danger" @click="removeItem(index)"></i>
            </li>
        </ul>
    </div>

    <div class="cont text-center">
        <div class="input-group mb-3">
            <input @keyup.enter="updateList" type="text" class="form-control" placeholder="Inserisci una task" v-model.trim="todoItem">
            <button @click="updateList" class="btn btn-primary" type="button" id="button-addo">Inserisci</button>
        </div>
    </div>
</div>


<!-- javascript -->
<script type="text/javascript" src="main.js"></script>
</body>
</html>