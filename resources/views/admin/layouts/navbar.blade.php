<nav class="navbar navbar-expand-lg navbar-light bg-white px-4 py-3 shadow-sm sticky-top">
    <div class="container-fluid">
        <span class="navbar-text fw-bold text-dark">Portal Desa Ngadirejo</span>
        <div class="d-flex">
            <!-- Form Logout -->
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm px-3 rounded-pill">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>   
            </form>
        </div>
    </div>
</nav>