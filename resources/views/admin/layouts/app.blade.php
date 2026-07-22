<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        /* Menggunakan warna hijau khusus (bg-desa) untuk sidebar */
        .bg-desa { background-color: #198754; }
        .sidebar .nav-link { 
            color: rgba(255, 255, 255, 0.8); 
            transition: 0.3s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active { 
            background-color: #157347; 
            color: #ffffff;
            border-radius: 6px;
        }
    </style>
</head>
<body class="bg-light">
    <div class="d-flex">
        
        <!-- Memanggil komponen Sidebar -->
        @include('admin.layouts.sidebar')
        
        <!-- Area Utama (Kanan) -->
        <div class="flex-grow-1 d-flex flex-column" style="min-width: 0; min-height: 100vh;">
            
            <!-- Memanggil komponen Navbar -->
            @include('admin.layouts.navbar')
            
            <!-- ============================================== -->
            <!-- BLOK NOTIFIKASI SUKSES / ERROR UTAMA -->
            <!-- ============================================== -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 bg-success text-white" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <strong>Berhasil!</strong> {{ session('success') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0 bg-danger text-white" role="alert">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    <strong>Gagal!</strong> {{ session('error') }}
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <!-- Area Konten Dinamis -->
            <main class="p-4 flex-grow-1">
                @yield('content')
            </main>
            
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>