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

        .candidates {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .candidate {
            flex: 0 0 calc(33.33% - 20px); /* 33.33% untuk tiga card dalam satu baris */
            margin: 10px;
            text-align: left; /* Atur teks menjadi rapi dari kiri */
            background-color: #ffffff;
            border: 1px solid #dcdcdc;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .candidate h4{
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }
        .candidate img {
            max-width: 300px;
            max-height: 400px;
            border-radius: 10%;
            display: block;
            margin: 0 auto;
        }

        .btn-vote {
        margin-top: 10px;
        color: #fff;
        border: none;
        padding: 15px 30px; /* Atur padding untuk memperbesar tombol */
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        position: relative;
        left: 41%;
    }

        .btn-vote:hover {
            background-color:darkgray;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">Lembaga Survei Skenda</h3>
        <form action="{{ route('vote') }}" method="post" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="class">Kelas:</label>
                <input type="text" name="class" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="position">Jabatan:</label>
                <input type="text" name="position" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="candidate">Silahkan Pilih Survei Skenda Calon Ketua & Wakil Ketua OSIS SMKN 2 Banjarmasin:</label>
                <div class="candidates">
                    <div class="candidate card">
                        <img src="{{ asset('images/1.jpg') }}" alt="Candidate 1" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Fajar Arifin 11 PPLG A & Danisya Nayla Azahra 11 PS A</h4><br>
                            <br>
                            <ul>
                                <li>Visi: Menjadikan OSIS yang jujur, berakhlak, dan berkarakter.</li><br>
                                <li>Misi: Mengadakan program pengembangan diri bagi siswa secara rutin,
                                Menggelar acara-acara keagamaan yang dapat meningkatkan silaturahmi.</li>
                            </ul>
                            <button type="submit" name="candidate" value="Fajar Arifin 11 PPLG A dan Danisya Nayla Azahra 11 PS A" class="btn btn-secondary" style="position: relative; left: 32%; font-size: 20px; padding: 5px 30px;">Vote</button>
                        </div>
                    </div>
                    <div class="candidate card">
                        <img src="{{ asset('images/2.jpg') }}" alt="Candidate 2" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Tiara Shafira Meisyaluna Putri 11 ANM B & Zaskia Medina 11 ANM B</h4><br>
                            <br>
                            <ul>
                                <li>Visi: Menjadikan OSIS yang jujur, berakhlak, dan berkarakter.</li><br>
                                <li>Misi: Mengadakan program pengembangan diri bagi siswa secara rutin,
                                Menggelar acara-acara keagamaan yang dapat meningkatkan silaturahmi.</li>
                            </ul>
                            <button type="submit" name="candidate" value="Tiara Shafira Meisyaluna Putri 11 ANM B dan Zaskia Medina 11 ANM B" class="btn btn-secondary" style="position: relative; left: 32%; font-size: 20px; padding: 5px 30px;">Vote</button>
                        </div>
                    </div>
                    <div class="candidate card">
                        <img src="{{ asset('images/3.JPG') }}" alt="Candidate 3" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title">Muhammad Sandy 11 BCT B & Zefanya Shallommesta Pendani 11 PPLG B</h4>
                            <br>
                            <ul>
                                <li>Visi: Menjadikan OSIS yang jujur, berakhlak, dan berkarakter.</li><br>
                                <li>Misi: Mengadakan program pengembangan diri bagi siswa secara rutin,
                                Menggelar acara-acara keagamaan yang dapat meningkatkan silaturahmi.</li>
                            </ul>
                            <button type="submit" name="candidate" value="Muhammad Sandy 11 BCT B dan Zefanya Shallommesta Pendani 11 PPLG B" class="btn btn-secondary" style="position: relative; left: 32%; font-size: 20px; padding: 5px 30px;">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="{{ route('result') }}" class="btn btn-secondary" style="margin-left:10px;"> Ke Halaman Hasil Vote</a>
        <a href="{{ route('welcome') }}" class="btn btn-secondary"> Ke halaman Awal</a>
    </div>
    @include('sweetalert::alert')
</body>
</html>