 <?php 

// use App\Models\Book;
// $books = Book::all();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }
        h2 {
            text-align:center;
        }
        a{
            text-decoration: none;
            font-weight: bold;
        }
        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>
<body>

    <h2>All reader books</h2><br>
    <button type="submit">
        <a href="{{route('book.create')}}">ADD BOOK</a>
    </button><br><br><br>
    <table>
    <tr>
        <th>Author</th>
        <th>Title</th>
        <th>Pages</th>
        <th>Year</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($books as $book)
    <tr>
        <td>{{$book->author}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->pages}}</td>
        <td>{{$book->year}}</td>
        <td>
            <form action="{{route('book.edit')}}" method="get">
                <input type="hidden" name="edit" value="{{$book->id}}">
                <input type="submit" value="EDIT">
                
            </form>
        </td>
        <td>
            <form action="{{route('book.destroy')}}" method="get">
                <input type="hidden" name="delete" value="{{$book->id}}">
                <input type="submit" value="DELETE">
                @csrf
            </form>
        </td>
    </tr>
    @endforeach
    </table>    
</body>
</html>