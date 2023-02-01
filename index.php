<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo List</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- FONT-AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- AXIOS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- VUE -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- CSS -->
        <link rel='stylesheet' href='./css/style.css'>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="d-flex flex-column align-items-center justify-content-center form-container">
                    <h1 class="display-1">Todo List</h1>
                    <div class="form">
                        <ul class="d-flex flex-column">
                            <li v-for="(item, index) in list" class="todo" :class="item.done ? 'done' : ''" @click="taskDone(index)">
                                {{ item.text }} 
                                <span class="icon float-end" @click.stop="deleteTask(index)">
                                    <i class="fa-solid fa-trash float-end"></i>
                                </span>
                            </li>
                        </ul>
                        <div>
                            <input type="text" v-model="newTask" placeholder="Inserisci Elemento..." name="newTask" @keyup.enter='send()'>
                            <button class="button" @click='send()'>Inserisci</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS LINK -->
        <script type="text/javascript" src='./js/script.js'></script>
    </body>
</html>