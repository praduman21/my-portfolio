<style>
    .project-animate-hidden {
        opacity: 0;
        transform: translateY(60px);
        transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .project-animate-show {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Optional Hover upgrade for project cards to make them pop out more */
    .project-card-hover {
        transition: transform 0.4s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.4s ease;
    }
    .project-card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8) !important;
    }
</style>

<section id="projects" class="py-5"">
    <div class="container py-5">
        
        <div class="text-center mb-5 project-animate-hidden project-observe" style="transition-delay: 0.1s;">
            <span class="badge rounded-pill mb-2 px-3 py-2 fs-5" style="background: rgba(0, 242, 254, 0.1); border: 1px solid rgba(0, 242, 254, 0.3); color: #00f2fe;">My Work</span>
            <h2 class="fw-bold display-6">Featured <span class="text-gradient">Projects</span></h2>
        </div>

        <div class="row g-4 mt-3">
        
            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #00f2fe, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-cash-stack text-info fs-2"></i>
                            <a href="#" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Payroll Insightfulstores</h3>
                        <p class="text-info small mb-3">Jan, 2025 - Present</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Designed comprehensive modules for letter templates, detailed management of employee leaves (remaining, paid, and unpaid), minimum wage calculations, secure storage of additional employee data and still contributing to the project.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">PHP</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Back-end Development</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.2s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #0d6efd, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-briefcase text-primary fs-2"></i>
                            <a href="https://drishticonsultancy.com/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Drishti Consultancy CRM</h3>
                        <p class="text-info small mb-3">Oct, 2025 - Mar, 2026</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Backend development of a CRM system for a Chartered Accountant firm. Designed and implemented modules for designation management, 
                            salary breakup, earned leave reports, detailed attendance tracking and many more.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">PHP</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">CRM Architecture</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Back-End Integration</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row g-4 mt-1">
            
            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.2s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #27c93f, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-gear-wide-connected text-success fs-2"></i>
                            <a href="https://kapishydro.com/" target="_blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Kapishydro</h3>
                        <p class="text-info small mb-3">Nov, 2025 - Dec, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Designed and implemented multiple backend components including Installation 
                            Report Export, Banner, Testimonials, and dynamic Page modules ensuring secure 
                            and optimized database operations following MVC architecture including frontend development.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">PHP</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel MVC</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Database Optimization</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Front-End Integration</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #ffbd2e, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-shield-check text-warning fs-2"></i>
                            <a href="https://www.heavy-armor.com/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Heavy Armor Power</h3>
                        <p class="text-info small mb-3">Sep, 2025 - Oct, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Developed backend modules including Partner Brands, Part Microsite, and Home Sections. Implemented front-end components using Laravel and seamlessly integrated them with the backend for efficient data handling.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Data Workflow</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Front-End Integration</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const projectObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Trigger the animation when the element comes into view
                    entry.target.classList.add('project-animate-show');
                }
            });
        }, {
            threshold: 0.1 // Triggers when 10% of the element is visible
        });

        // Target all elements with .project-observe
        const projectElements = document.querySelectorAll('.project-observe');
        projectElements.forEach((el) => projectObserver.observe(el));
    });
</script>