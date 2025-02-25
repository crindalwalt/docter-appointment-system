<x-layouts.app>
    <!-- Page Header -->
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="fw-bold">Book an Appointment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('patient.home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Book Appointment</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Appointment Form Section -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Appointment Details</h4>

                        <!-- TODO: make the form functional and add hiden field for doctor (Sadaqat) -->
                        <form>
                            <!-- Personal Information -->
                            <div class="row mb-4">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" required>
                                </div>
                            </div>

                            <!-- Appointment Details -->
                            <div class="row mb-4">
                                {{-- <div class="col-md-6 mb-3">
                                    <label class="form-label">Department</label>
                                    <select class="form-select" required>
                                        <option value="">Select Department</option>
                                        <option>Cardiology</option>
                                        <option>Neurology</option>
                                        <option>Pediatrics</option>
                                        <option>Orthopedics</option>
                                        <option>Dermatology</option>
                                        <option>General Medicine</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Doctor</label>
                                    <select class="form-select" required>
                                        <option value="">Select Doctor</option>
                                        <option>Dr. Sarah Johnson</option>
                                        <option>Dr. Michael Chen</option>
                                        <option>Dr. Emily Brown</option>
                                        <option>Dr. James Wilson</option>
                                    </select>
                                </div> --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Preferred Date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Preferred Time</label>
                                    <select class="form-select" required>
                                        <option value="">Select Time Slot</option>
                                        <option>09:00 AM</option>
                                        <option>10:00 AM</option>
                                        <option>11:00 AM</option>
                                        <option>02:00 PM</option>
                                        <option>03:00 PM</option>
                                        <option>04:00 PM</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Medical Information -->
                            <div class="mb-4">
                                <label class="form-label">Reason for Visit</label>
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>

                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newPatient">
                                    <label class="form-check-label" for="newPatient">
                                        I am a new patient
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Book Appointment</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 mt-4 mt-lg-0">
                <!-- Opening Hours -->
                <!-- TODO: fetch doctor data form controller and make this dynamics -->
                <div class="col-md-12 col-lg-12">
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
                                <a href="#" class="btn btn-outline-primary">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-clock me-2 text-primary"></i>Opening Hours</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between mb-2">
                                <span>Monday - Friday</span>
                                <span>8:00 AM - 8:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between mb-2">
                                <span>Saturday</span>
                                <span>9:00 AM - 5:00 PM</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Sunday</span>
                                <span>Emergency Only</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Emergency Contact -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-telephone-fill me-2 text-primary"></i>Emergency Contact
                        </h5>
                        <p class="mb-2">For emergency cases only:</p>
                        <h4 class="text-primary mb-0">(123) 456-7890</h4>
                    </div>
                </div>

                <!-- Important Notes -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="fw-bold mb-3"><i class="bi bi-info-circle me-2 text-primary"></i>Important Notes</h5>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Please arrive 15 minutes
                                before your appointment</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Bring your medical records
                                if available</li>
                            <li class="mb-2"><i class="bi bi-check2 text-primary me-2"></i>Wear a mask during your
                                visit</li>
                            <li><i class="bi bi-check2 text-primary me-2"></i>Cancel or reschedule 24 hours in advance
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
