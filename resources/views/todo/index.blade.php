<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | ToDo</title>
    <style>
        body{
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }
        h1{
            font-size: 40px;
            color: #1093eb;
        }
        h3{
            font-size: 24px;
            font-weight: 400;
        }
        h3 a{
            text-decoration: none;
            border: none;
            border-radius: 10px;
            float: right;
            background-color: #0cc4ed;
            color: white;
            padding: 15px 20px 15px 20px;
            margin-right: 10px;
            box-shadow: 1px 2px 5px black;
            transition: 0.5s all;
        }
        h3 a:hover{
            font-size: 22px;
            box-shadow: none;
        }
        li{
            list-style: none;
            width: 50%;
            height: 30px;
            padding: 20px;
            font-size: 20px;
            margin-top: 20px;
            color: #1093eb;
            background-color: #c5eafa;
            border: none;
            box-shadow: 1px 2px 5px black;
            border-radius: 10px;
        }
        li a{
            text-decoration: none;
            border: none;
            border-radius: 5px;
            float: right;
            background-color: #0cc4ed;
            color: white;
            padding: 5px 15px 5px 15px;
            margin-right: 10px;
        }
    </style>

</head>
<body>
    <h1>Your Tasks List</h1>
    <h3><a href="/create">Create New Task</a></h3>
    <h4><x-alert /></h4>
    @foreach ($todos as $todo)
        <li>

            @if ($todo->completed)
                <span style="text-decoration: line-through">{{ $todo->title }}</span>
            @else
                {{ $todo->title }}

            @endif

            <a href="{{ asset('/' . $todo->id . '/edit') }}">Edit</a>
            <a href="{{ asset('/' . $todo->id . '/completed') }}">Completed</a>
            <a href="{{ asset('/' . $todo->id . '/delete') }}">Delete</a>
        </li>
    @endforeach

</body>
</html>
