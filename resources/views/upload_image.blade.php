<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Compress Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            box-sizing: border-box;
        }

        h1 {
            margin-top: 0;
            color: #555;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 4px;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="file"] {
            margin-bottom: 1rem;
        }

        button {
            padding: 0.75rem 1.5rem;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .compress-btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #28a745;
            border-radius: 4px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 1rem;
            display: block;
        }

        .compress-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload and Compress Image</h1>

        @if ($errors->any())
            <div class="alert error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" accept="image/*">
            <button type="submit">Compress</button>
        </form>

        <!-- Display the download link only after an image is uploaded and processed -->
        @if(session('image_id'))
            <a href="{{ route('image.download', ['id' => session('image_id')]) }}" class="compress-btn">Download Image</a>
        @endif
    </div>
</body>
</html>
