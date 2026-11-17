<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop List</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM (GB)</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($laptops as $laptop)
                <tr>
                    <td>{{ $laptop->brand }}</td>
                    <td>{{ $laptop->model }}</td>
                    <td>{{ $laptop->processor }}</td>
                    <td>{{ $laptop->ram }}</td>
                    <td>
                        <a href="{{ route('edit-laptop', $laptop->id) }}">Edit</a>
                        <form method="POST" action="{{ route('delete-laptop') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $laptop->id }}">
                            <input style="background: pink;" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
