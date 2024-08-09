<!-- resources/views/invoice.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <h3>Invoice Details</h3>

    <!-- Assuming $image->image_path contains the relative path to the image -->
    <p><strong>Image:</strong></p>
    <p><strong>Image URL:</strong> {{ asset('storage/' . $image->image_path) }}</p>

    <!-- Add more data from the $image object if needed -->
</body>
</html>
