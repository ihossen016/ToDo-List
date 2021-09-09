<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit | ToDo</title>

    <style>
        body{
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }
        a{
            text-decoration: none;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            background-color: #0cc4ed;
            color: white;
            padding: 10px 20px 10px 20px;
            margin-right: 10px;
            box-shadow: 1px 2px 5px black;
            transition: 0.5s all;
        }
        a:hover{
            font-size: 13px;
            box-shadow: none;
        }
        #title{
            width: 600px;
            height: 50px;
            font-size: 20px;
        }
        #btn{
            width: 100px;
            height: 40px;
            margin-left: 20px;
            text-decoration: none;
            border: none;
            border-radius: 10px;
            font-size: 20px;
            background-color: #0cc4ed;
            color: white;
            padding: 10px 20px 10px 20px;
            margin-right: 10px;
            box-shadow: 1px 2px 5px black;
            transition: 0.5s all;
            cursor: pointer;
        }
        #btn:hover{
            font-size: 18px;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <h1>Edit your Task</h1>
    <h3><x-alert /></h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $todo->title }}" id="title">
        <input style="display: none;" type="number" name="id" value="{{ $todo->id }}">
        <input type="submit" value="Update" id="btn">
    </form>
    <br>
    <a href="/index">Back</a>
</body>
</html>
