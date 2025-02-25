<x-layouts.app>

    <!-- Page Header -->
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="fw-bold">Our Doctors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('patient.home') }}"
                            class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Doctors</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="container py-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Search doctor name...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Select Department</option>
                            <option>Cardiology</option>
                            <option>Neurology</option>
                            <option>Pediatrics</option>
                            <option>Orthopedics</option>
                            <option>Dermatology</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option value="">Available Days</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Doctors Listing -->
    <div class="container py-4">
        <div class="row g-4">
            <!-- Doctor Card 1 -->
            @if ($doctors->isNotEmpty())
                @foreach ($doctors as $item)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="position-relative">
                                <img src="https://picsum.photos/300/300"
                                    class="card-img-top" alt="Doctor">
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3">{{ $item->department->name }}</span>
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <h4 class="fw-bold mb-1">{{ $item->name }}</h4>
                                    <p class="text-muted mb-2">{{ $item->speciality }}</p>
                                    <div class="d-flex justify-content-center gap-2 mb-3">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span class="ms-1">(127 reviews)</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="row text-center mb-3">
                                    <div class="col">
                                        <p class="text-muted mb-1">Experience</p>
                                        <p class="fw-bold mb-0">15+ Years</p>
                                    </div>
                                    <div class="col">
                                        <p class="text-muted mb-1">Patients</p>
                                        <p class="fw-bold mb-0">10,000+</p>
                                    </div>
                                </div>
                                <div class="d-grid gap-2">
                                    <a href="{{ route("patient.appointment",$item->slug) }}" class="btn btn-primary">Book Appointment</a>
                                    <a href="#" class="btn btn-outline-primary">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <!-- TODO:  junaid fix the no show design -->
                No data to show
            @endif

            {{-- <!-- Doctor Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEA73ktz7L0PvXzdnY7sIHOjEApM_dU8iLKA&s" class="card-img-top" alt="Doctor">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">Neurology</span>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h4 class="fw-bold mb-1">Dr. Michael Chen</h4>
                                <p class="text-muted mb-2">Neurologist</p>
                                <div class="d-flex justify-content-center gap-2 mb-3">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star text-warning"></i>
                                    <span class="ms-1">(89 reviews)</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center mb-3">
                                <div class="col">
                                    <p class="text-muted mb-1">Experience</p>
                                    <p class="fw-bold mb-0">12+ Years</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-1">Patients</p>
                                    <p class="fw-bold mb-0">8,000+</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-primary">Book Appointment</a>
                                <a href="#" class="btn btn-outline-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://www.skncosmetics.com/wp-content/uploads/2024/08/Dr-Mariam-300x300.webp" class="card-img-top" alt="Doctor">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">Pediatrics</span>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h4 class="fw-bold mb-1">Dr. Emily Brown</h4>
                                <p class="text-muted mb-2">Pediatrician</p>
                                <div class="d-flex justify-content-center gap-2 mb-3">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                    <span class="ms-1">(156 reviews)</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row text-center mb-3">
                                <div class="col">
                                    <p class="text-muted mb-1">Experience</p>
                                    <p class="fw-bold mb-0">10+ Years</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-1">Patients</p>
                                    <p class="fw-bold mb-0">12,000+</p>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-primary">Book Appointment</a>
                                <a href="#" class="btn btn-outline-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            <!-- More Doctor Cards -->
            <!-- Similar structure repeated for other doctors -->

        </div>

        <!-- Pagination -->
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Join Our Team Section -->
    <section class="bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start">
                    <h2 class="fw-bold mb-3">Want to Join Our Medical Team?</h2>
                    <p class="lead mb-lg-0">We're always looking for talented healthcare professionals to join our team.
                    </p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="#" class="btn btn-light btn-lg">Join Our Team</a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
