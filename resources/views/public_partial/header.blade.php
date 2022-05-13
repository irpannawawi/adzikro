            <!-- Full Screen Search Start -->
            <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 sticky-top shadow-sm">
                    <a href="/" class="navbar-brand p-0">
                        <h1 class="m-0"><i class="fa fa-moon me-2"></i>MT<span class="fs-5">Adz-Zikro</span></h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="#about" class="nav-item nav-link">Tentang</a>
                            <a href="/layanan" class="nav-item nav-link">layanan</a>
                            <a href="/donasi" class="nav-item nav-link">Donasi</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Adz-Zikro</a>
                                <div class="dropdown-menu m-0">
                                    <a href="/sejarah" class="dropdown-item">Sejarah</a>
                                    <a href="/pengajar" class="dropdown-item">Pengajar</a>
                                    <a href="/organisasi" class="dropdown-item">Struktur Organisasi</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                        <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Pro Version</a>
                    </div>
                </nav>
            </div>
            <!-- Navbar End -->