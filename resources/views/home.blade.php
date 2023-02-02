<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewprot" content="width=device-width, initial-scale=1.0">
        <title>Todo List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <body class="bg-info">
        <div class="container w-25 mt-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>To-do List</h3>
                    <form action="{{ route('store') }}" method="POST" autocomplete = "off">
                        @csrf
                        @method('POST')
                       <i class="fa fa-cc-stripe" aria-hidden="true"></i> 
                       <div class="input-group">
                            <input type="text" name="content" class="form-controll" placeholder="Add your new todo">
                            <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                        </div>
                    </form>
                    {{--if tasks count--}}
                    @if (count($todolists))
                    <ul class="list-group list-group-flush mt-4">
                        @foreach($todolists as $todolist)
                    
                        <li class="list-group-item">
                            <form action="route('destroy', $todolist->id)" method="POST">
                                @csrf
                                {{$todolist->content}}
                            <i class="fa fa-cc-stripe" aria-hidden="true"></i> 
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                            </form>
                        </li>
                    
                        @endforeach
                    </ul>
                    @else
                    <p class="text-center mt-3"> No tasks</p>
                    @endif
                </div>
                @if(count($todolists))
                <div class="card-footer">
                    You have {{count($todolists) }} pending tasks
                </div>
                @endif
            </div>
        </div>

    </body>

</html>
