<!DOCTYPE html>
<html>
<head>
    <title>Lembaga Survei Skenda</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f0f0;
            text-align: center;
        }

        #logo {
            width: 200px; /* Sesuaikan dengan ukuran logo Anda */
            height: 200px; /* Sesuaikan dengan ukuran logo Anda */
            margin-top: 100px;
        }

        #title {
            font-size: 24px;
            margin-top: 20px;
        }

        #button {
            background-color: #c0c0c0; /* Warna abu-abu terang */
            padding: 10px 20px;
            font-size: 16px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <br>
    <img id="logo" src="images/icon.png" alt="Garuda Logo"> <!-- Ganti "garuda_logo.png" dengan sumber logo Anda -->
    <div id="title">Lembaga Survei<br>SMKN 2 Banjarmasin</div>
    <br>
    <a href="{{ route('index') }}" class="btn btn-secondary"> Masuk</a>
</body>
</html>
