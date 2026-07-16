<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f5f5f5;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            max-width: 900px;
            margin: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a, button {
            padding: 6px 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn {
            background: #333;
            color: white;
            border-radius: 4px;
            display: inline-block;
            margin: 2px;
        }

        .btn-danger {
            background: #c0392b;
            color: white;
        }

        .btn-biru {
            background: #2b3cc0;
            color: white;
        }

        .btn-warning {
            background: #f39c12;
            color: white;
        }

        .btn-success {
            background: #27ae60;
            color: white;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        .success {
            background: #d4edda;
            padding: 10px;
            color: #155724;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>