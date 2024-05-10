<!DOCTYPE html>
<html>
<head>
    <title>Lembaga Survei Skenda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Lembaga Survei Skenda</h3>
        <table class="table table-bordered table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Calon</th>
                    <th>Jumlah Suara</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vote_counts as $candidate => $count)
                    <tr>
                        <td>{{ $candidate }}</td>
                        <td>{{ $count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('index') }}" class="btn btn-secondary"> Kembali Kehalaman </a>
    </div>
</body>
</html>
