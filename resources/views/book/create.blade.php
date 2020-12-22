<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
        }
        form {
            display: inline-block;
            margin-top: 15em;
        }
    </style>
</head>
<body>
    <form action="{{route('book.store')}}" method="get">
    <label for="author">Author:</label><br>
    <input type="text" id="author" name="author" value=""><br>
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" value=""><br>
    <label for="pages">Pages:</label><br>
    <input type="text" id="pages" name="pages" value=""><br>
    <label for="year">Release date:</label><br>
    <input type="text" id="year" name="year" value=""><br><br>
    <input type="submit" value="Submit">
    @csrf
    </form> 
</body>
</html>