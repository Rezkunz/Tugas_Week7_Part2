<!DOCTYPE html>
<html>
<head>
    <title>Daftar Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px;
            background-color: rgb(30, 135, 240);
            color: white;
            margin: 0;
        }

        .logout-container {
            text-align: right;
            padding: 10px 20px;
            background-color: #f4f7fc;
        }

        .logout-container form {
            display: inline;
        }

        .logout-container button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-container button:hover {
            background-color: #e60000;
        }

        table {
            width: 80%;
            margin: 30px auto;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(9, 130, 201, 0.1);
        }

        th, td {
            padding: 12px 20px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(221, 224, 47);
            color: white;
            font-size: 16px;
        }

        td {
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ecf0f1;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 8px 16px;
            margin: 0 5px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .pagination a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Daftar Users</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($biodata as $biodatas)
                <tr>
                    <td>{{ $biodatas->id }}</td>
                    <td>{{ $biodatas->nama }}</td>
                    <td>{{ $biodatas->umur }}</td>
                    <td>{{ $biodatas->NIM }}</td>
                    <td>{{ $biodatas->jurusan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <div class="logout-container">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
