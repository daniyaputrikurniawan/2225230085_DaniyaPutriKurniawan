<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>UAS Daniya Putri Kurniawan</title>
  </head>
  <body>
    <h1 class="text-center">Data Siswa-siswi Kelas B SMP Ki Hajar Dewantoro Tangerang</h1>
    <h2 class="text-center">Tahun Ajaran 2023/2024</h2>
        <div class="container">
        <a href="/tambahsiswa" class="btn btn-success">Tambah</a>
            <div class="row">
              @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                  {{ $message }}
                </div>
              @endif
            <table class="table">
    <thead>
        <tr>
        <th scope="col", class="text-center">No Absen</th>
        <th scope="col">Nama</th>
        <th scope="col">Foto</th>
        <th scope="col">NISN</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">No Handphone</th>
        <th scope="col">Email</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
      @php
        $no = 1;
      @endphp
        @foreach ($data as $row)
            <tr>
                <th scope="row", class="text-center">{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <img src="{{ asset('fotosiswa/'.$row->foto) }}" alt="" style="width: 40px; " >
                </td>
                <td>{{ $row->nisn }}</td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>{{ $row->nohandphone }}</td>
                <td>{{ $row->email }}</td>
                <td>
                    <a href="tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                    <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
  </tbody>
</table>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>