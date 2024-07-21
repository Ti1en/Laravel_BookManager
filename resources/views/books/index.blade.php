<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Books List</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('books.create') }}">Create New Book</a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <br>
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<br>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th width="280px">Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $book->cover_image }}" width="100"></td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
            <td>
                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('books.show', $book->id)  }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('books.edit', $book->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>
