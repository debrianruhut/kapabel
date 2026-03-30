@extends('layouts.app')
@push('styles')
<style>
    :root { --primary-color: #0F172A; --accent-color: #3B82F6; --text-color: #334155; }
    body { font-family: 'Roboto', sans-serif; color: var(--text-color); }
    h1, h2, h3, h4, h5, h6 { font-family: 'Raleway', sans-serif; font-weight: 700; }
    /* 1. Gunakan Poppins hanya untuk menu & tombol */
    .nav-link, .btn, .badge { 
        font-family: 'Poppins', sans-serif;
    }

    /* 2. Gunakan Raleway khusus untuk Logo */
    .navbar-brand { 
        font-family: 'Raleway', sans-serif; 
        font-weight: 600; /* Extra Bold agar tegas seperti logo */
        letter-spacing: -0.5px; /* Sedikit dirapatkan agar elegan */
    }
    .navbar { background-color: white; box-shadow: 0 1px 15px rgba(0,0,0,0.04); padding: 15px 0; }
    .nav-link { font-weight: 500;color: var(--primary-color) !important; margin: 0 10px; }
    .nav-link:hover, .nav-link.active { color: var(--accent-color) !important; }
    
    .form-control, .form-select { padding: 15px; border: 1px solid #E2E8F0; border-radius: 8px; font-family: 'Roboto', sans-serif; }
    .form-control:focus { box-shadow: 0 0 0 3px rgba(59,130,246,0.1); border-color: var(--accent-color); }
    
    .contact-card { background: #F8FAFC; padding: 40px; border-radius: 16px; height: 100%; border: 1px solid #E2E8F0; }
    .icon-wrapper { width: 50px; height: 50px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 2px 5px rgba(0,0,0,0.05); margin-right: 20px; color: var(--accent-color); font-size: 1.25rem; }

    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; }

    footer { background-color: #0F172A; color: #94A3B8; padding-top: 80px; padding-bottom: 30px; font-family: 'Roboto', sans-serif; }
    footer h5 { color: white; font-family: 'Poppins', sans-serif; margin-bottom: 20px; }
    footer a { color: #94A3B8; text-decoration: none; transition: 0.3s; }
    footer a:hover { color: var(--accent-color); }
</style>
@endpush
@section('content')
<section class="py-5 mt-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-primary fw-bold text-uppercase">Contact Us</h6>
            <h1 class="display-5 fw-bold">Let's Discuss Your Strategy</h1>
            <p class="text-muted col-md-6 mx-auto">Whether you need a tax audit, financial planning, or just general advice, our team is ready to assist you.</p>
        </div>

        <div class="row g-5 align-items-stretch">
            <div class="col-lg-5">
                <div class="contact-card">
                    <h3 class="mb-4">Get in Touch</h3>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-wrapper"><i class="bi bi-geo-alt-fill"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Headquarters</h6>
                            <p class="text-muted mb-0 small">SCBD District 8, Treasury Tower<br>South Jakarta, Indonesia 12190</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-wrapper"><i class="bi bi-envelope-fill"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Us</h6>
                            <p class="text-muted mb-0 small">kapabel.indonesia@gmail.com</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="icon-wrapper"><i class="bi bi-telephone-fill"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Call Us</h6>
                            <p class="text-muted mb-0 small">+62 82 11499 4207<br>Mon - Fri, 9am - 5pm</p>
                        </div>
                    </div>

                    <hr>
                    <h6 class="fw-bold mt-4 mb-3">Connect Socially</h6>
                    <div class="d-flex gap-3">
                        <a href="#" class="btn btn-outline-primary rounded-circle" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-primary rounded-circle" style="width:40px;height:40px;display:flex;align-items:center;justify-content:center"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border h-100">
                    <h3 class="mb-4">Send a Message</h3>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-uppercase text-muted">Full Name</label>
                                <input type="text" class="form-control" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold text-uppercase text-muted">Email Address</label>
                                <input type="email" class="form-control" placeholder="name@company.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-uppercase text-muted">Service Interest</label>
                                <select class="form-select">
                                    <option>General Inquiry</option>
                                    <option>Tax Consultation</option>
                                    <option>Audit Services</option>
                                    <option>Management Consulting</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-bold text-uppercase text-muted">Message</label>
                                <textarea class="form-control" rows="6" placeholder="Tell us about your project or inquiry..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3 text-white">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection