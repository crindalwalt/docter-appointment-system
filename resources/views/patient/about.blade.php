<x-layouts.app>

        <!-- About Page -->
        <section id="about">
            <!-- About Header -->
            <div class="bg-primary text-white py-4">
                <div class="container">
                    <h1 class="fw-bold">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('patient.home') }}" class="text-white text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- About Content -->
            <div class="container py-5">
                <!-- Mission and Vision -->
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <img src="https://www.arcare.net/wp-content/uploads/2017/10/primary-care-physician-near-me-in-Arkansas-primary-care-doctor-near-me-in-Arkansas-local-medical-clinic-in-Arkansas.jpg" alt="About Us" class="img-fluid rounded-3 shadow">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-4">Our Mission & Vision</h2>
                        <p class="text-muted mb-4">At MedCare, we are dedicated to providing exceptional healthcare services to our community. Our mission is to deliver compassionate, high-quality care that improves the health and well-being of our patients.</p>
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <p class="mb-0">Excellence in patient care and safety</p>
                        </div>
                        <div class="d-flex mb-3">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <p class="mb-0">Advanced medical technology and facilities</p>
                        </div>
                        <div class="d-flex">
                            <i class="bi bi-check-circle-fill text-primary me-2"></i>
                            <p class="mb-0">Continuous improvement and innovation</p>
                        </div>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="row mb-5">
                    <div class="col-12 text-center mb-4">
                        <h2 class="fw-bold">Why Choose MedCare?</h2>
                        <p class="text-muted">Experience healthcare excellence with our comprehensive services and dedicated team</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                                <h4 class="fw-bold mb-3">Expert Team</h4>
                                <p class="text-muted mb-0">Our healthcare professionals are leaders in their respective fields with years of experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-gear-fill text-primary fs-1 mb-3"></i>
                                <h4 class="fw-bold mb-3">Modern Technology</h4>
                                <p class="text-muted mb-0">We invest in the latest medical technology to provide the best possible care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body text-center p-4">
                                <i class="bi bi-heart-fill text-primary fs-1 mb-3"></i>
                                <h4 class="fw-bold mb-3">Patient-Centered Care</h4>
                                <p class="text-muted mb-0">Your health and comfort are our top priorities throughout your healthcare journey.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Section -->
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2 class="fw-bold">Our Leadership Team</h2>
                        <p class="text-muted">Meet the experienced professionals who guide our healthcare facility</p>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEA73ktz7L0PvXzdnY7sIHOjEApM_dU8iLKA&s" class="card-img-top" alt="Doctor">
                            <div class="card-body text-center">
                                <h5 class="fw-bold mb-1">Dr. John Smith</h5>
                                <p class="text-muted">Chief Medical Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://cdn-clife.nitrocdn.com/ftCvgIygQEyRyIWBdgWdsCPtIQtBhwFo/assets/images/optimized/rev-c56e805/yourdoctors.online/wp-content/uploads/2024/09/10924151_978675605479004_1583876340070417574_o-1-300x300.webp" class="card-img-top" alt="Doctor">
                            <div class="card-body text-center">
                                <h5 class="fw-bold mb-1">Dr. Sarah Johnson</h5>
                                <p class="text-muted">Medical Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcToVSI4FZvSAt-sdfoIUha3-5PaZgLDoFGEzg&s" class="card-img-top" alt="Doctor">
                            <div class="card-body text-center">
                                <h5 class="fw-bold mb-1">James Wilson</h5>
                                <p class="text-muted">Operations Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card border-0 shadow-sm">
                            <img src="https://www.skncosmetics.com/wp-content/uploads/2024/08/Dr-Mariam-300x300.webp" class="card-img-top" alt="Doctor">
                            <div class="card-body text-center">
                                <h5 class="fw-bold mb-1">Emily Brown</h5>
                                <p class="text-muted">Patient Care Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-layouts.app>
