<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LARA-KLINIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 220px;
            background-color: #343a40;
            padding: 20px 10px;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar .active {
            background-color: #495057;
        }
        .content {
            flex-grow: 1;
            padding: 30px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center">LARA-KLINIK</h4>
        <a href="/kelurahan" class="{{ request()->is('kelurahan*') ? 'active' : '' }}">Kelurahan</a>
        <a href="/paramedik" class="{{ request()->is('paramedik*') ? 'active' : '' }}">Paramedik</a>
        <a href="/pasien" class="{{ request()->is('pasien*') ? 'active' : '' }}">Pasien</a>
        <a href="/periksa" class="{{ request()->is('periksa*') ? 'active' : '' }}">Periksa</a>
        <a href="/unitkerja" class="{{ request()->is('unitkerja*') ? 'active' : '' }}">Unit Kerja</a>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

</body>
</html>
