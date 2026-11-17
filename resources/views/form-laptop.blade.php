<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="POST" action="{{ route('save-laptop') }}">
        @csrf <!-- wajib ada di bawah tag form -->
        <div>Input Brand:</div>
        <input type="text" name="brand">
        <div>Input Model:</div>
        <input type="text" name="model">
        <div>Input Processor:</div>
        <input type="text" name="processor">
        <div>Input RAM (GB):</div>
        <input type="number" name="ram">
        <div><input type="submit" value="Save Laptop"></div>
    </form>
</body>
</html>