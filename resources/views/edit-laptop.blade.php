<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop</title>
</head>
<body>
    <form method="POST" action="{{ route('update-laptop') }}">
        @csrf <!-- wajib ada di bawah tag form -->
        <input type="hidden" name="id" value="{{ $laptop->id }}">
        <div>Edit Brand:</div>
        <input type="text" name="brand" value="{{ $laptop->brand }}">
        <div>Edit Model:</div>
        <input type="text" name="model" value="{{ $laptop->model }}">
        <div>Edit Processor:</div>
        <input type="text" name="processor" value="{{ $laptop->processor }}">
        <div>Edit RAM (GB):</div>
        <input type="number" name="ram" value="{{ $laptop->ram }}">
        <div><input type="submit" value="Update Laptop"></div>
    </form>
</body>
</html>
