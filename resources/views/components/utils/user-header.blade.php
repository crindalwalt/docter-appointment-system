    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('patient.home') }}">
                <i class="bi bi-heart-pulse-fill text-primary me-2"></i>
                <span class="fw-bold fs-4">MedCare</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patient.home') }}">Home</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patient.doctors') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patient.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patient.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="{{ route('login') }}">Sign In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
