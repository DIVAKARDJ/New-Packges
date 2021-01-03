<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="alert alert-success">
        @if(session('message'))
            <strong>{{ session('message') }}</strong>
        @endif
    </div>
    <form method="POST" action="{{ route('pkg') }}">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>