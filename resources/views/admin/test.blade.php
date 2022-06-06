<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/deletetabungan/1" method="POST">
        @csrf
        @method('delete')
        <button type="Submit">Test</button>
    </form>
</body>
</html>