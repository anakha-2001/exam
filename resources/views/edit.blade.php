<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ route('update-student')}}">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
        Name <input type="text" name ="name" value="{{ $data->name}}"><br>
        <button type="submit">submit</button>
    </form>
</body>
</html>