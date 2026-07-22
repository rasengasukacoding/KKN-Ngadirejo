<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Panel Admin Desa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f6;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px; /* Tambahan padding untuk mobile */
        }
        .login-card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            overflow: hidden;
            width: 100%;
            max-width: 900px;
        }
        .bg-desa { background-color: #1a472a; }
        .btn-desa { background-color: #1a472a; color: white; border-radius: 8px; padding: 10px; font-weight: 500; }
        .btn-desa:hover { background-color: #12351f; color: white; }
        .form-control { border-radius: 8px; padding: 12px 15px; background-color: #f8f9fa; border: 1px solid #e9ecef; }
        .form-control:focus { box-shadow: none; border-color: #1a472a; background-color: #fff; }
    </style>
</head>
<body>

    <div class="container p-0">
        <!-- Perubahan d-flex flex-column flex-md-row agar responsif di HP -->
        <div class="card login-card mx-auto d-flex flex-column flex-md-row">
            
            <!-- Sisi Kiri (Branding & Logo Karanganyar) -->
            <div class="col-12 col-md-6 bg-desa text-white d-flex flex-column justify-content-center align-items-center p-4 p-md-5 text-center">
                <!-- Pastikan file logo sudah kamu masukkan ke folder public/images/ -->
                <img src="{{ asset('storage/logo/logo-karanganyar.png') }}" alt="Logo Kabupaten Karanganyar" class="img-fluid mb-3" style="max-width: 120px;">
                
                <h3 class="fw-bold mt-2">Portal Admin</h3>
                <!-- d-none d-md-block menyembunyikan deskripsi ini di HP agar tidak terlalu panjang -->
                <p class="text-white-50 mt-2 d-none d-md-block">Sistem Informasi Manajemen Konten Website Desa</p>
            </div>
            
            <!-- Sisi Kanan (Form Login) -->
            <div class="col-12 col-md-6 p-4 p-md-5 bg-white">
                <div class="mb-4 mb-md-5 text-center text-md-start">
                    <h4 class="fw-bold text-dark">Selamat Datang</h4>
                    <p class="text-muted">Silakan masuk ke akun Anda.</p>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger rounded-3 border-0 bg-danger bg-opacity-10 text-danger small">
                        <i class="bi bi-exclamation-circle me-2"></i> {{ $errors->first() }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-muted fw-semibold small">Alamat Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="bi bi-envelope text-muted"></i></span>
                            <input type="email" name="email" class="form-control border-start-0" placeholder="admin@desa.com" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i class="bi bi-lock text-muted"></i></span>
                            <input type="password" name="password" class="form-control border-start-0" placeholder="••••••••" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-desa w-100 mt-2">Masuk ke Dashboard</button>
                    
                    <div class="text-center mt-4">
                        <a href="/" class="text-muted text-decoration-none small"><i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda Publik</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>