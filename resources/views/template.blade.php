<!DOCTYPE html>
<html lang="en">

<head>
    <title>5026241136 - Muhammad Hanifiansyah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h3>Muhammad Hanifiansyah - 5026241136</h3>
            <h6>@yield('title')</h6>
        </div>
        <!-- Grey with black text -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/pegawai">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/siswa">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/eas">PR 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/nilaikuliah">PR 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/bagian">PR 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/penggajian">EAS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            @yield('konten')
        </div>
    </div>

</body>

</html>
