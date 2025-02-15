<x-layouts.app>
    <!-- Page Header -->
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="fw-bold">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('patient.home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Contact Information Cards -->
    <div class="container py-5">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block mb-3">
                            <i class="bi bi-geo-alt text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Visit Us</h5>
                        <p class="text-muted mb-0">123 Healthcare St, Medical City<br>State, Country 12345</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block mb-3">
                            <i class="bi bi-telephone text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Call Us</h5>
                        <p class="text-muted mb-0">Emergency: (123) 456-7890<br>General: (123) 456-7891</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-block mb-3">
                            <i class="bi bi-envelope text-primary fs-4"></i>
                        </div>
                        <h5 class="fw-bold">Email Us</h5>
                        <p class="text-muted mb-0">info@medcare.com<br>support@medcare.com</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form and Map -->
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Send Us a Message</h4>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Our Location</h4>
                        <!-- Placeholder for map -->
                        <div class="bg-light rounded" style="height: 400px;">
                            <img src="https://assets.dunked.com/assets/prod/76966/800x600-9_cropped_1666863279_p1ggaf84kk1vt88k8182t1t781kfpa.jpg" alt="Map" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Frequently Asked Questions</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    What are your working hours?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We are open Monday through Friday from 8:00 AM to 8:00 PM, and Saturday from 9:00 AM to 5:00 PM. Sunday services are for emergencies only.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm mb-3">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    How can I schedule an appointment?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can schedule an appointment through our online booking system, by calling our appointment line, or by visiting our facility in person.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-0 shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    What insurance plans do you accept?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept most major insurance plans. Please contact our billing department for specific information about your insurance coverage.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
