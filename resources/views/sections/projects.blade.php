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
                        <p class="text-info small mb-3">Mar, 2026 - Present</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Co-developed a robust, full-stack CRM platform utilizing Laravel and MySQL to streamline comprehensive enterprise operations. The system features secure role-based permissions and automates critical financial and 
                            HR workflows—ranging from everyday attendance and leave tracking to sophisticated salary breakup structures, TDS/statutory deductions, payroll execution, and dynamic challan report generation.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">PHP</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">MySQL</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">CRM / Payroll</span>
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
                        <p class="text-info small mb-3">Dec, 2025 - Mar, 2026</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            A robust subscription-driven CRM platform built for multi-client operations with advanced role-based isolation. It provides distinct corporate clients with complete staff management capabilities across various departments and designations. 
                            The core engine fully automates enterprise-level operations, enabling autonomous monthly payroll generation, dynamic employee salary tracking, leave management, and direct compliance challan reporting.
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
                        <p class="text-info small mb-3">Oct, 2025 - Dec, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            A dedicated solar commerce and operational CRM engineered to streamline customer acquisition and technical field deployments. The system features multi-role authentication for staff, supervisors, and field technicians to manage leads, 
                            execute customer KYC, and process site surveys for tailored solar installations. Additionally, it offers an interactive client-facing interface, providing homeowners and corporate clients with full visibility over technician assignments and real-time project updates.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">PHP</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Laravel MVC</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Lead Management CRM</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Field Service / Audit</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Customer Portal</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Database Optimization</span>
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
                            A specialized, full-stack industrial ERP built for a major China-based defense manufacturing enterprise. Functioning as a Full-Stack Developer across the front-end and back-end, I helped engineer a secure ecosystem designed to manage the global lifecycle of defense equipment. 
                            The core application serves as a central hub for the sales of heavy tracked and wheeled military vehicles, as well as the modernization, overhaul, and repair logistics for active tactical defense fleets. From tracking heavy-duty tank engine research and variant testing to spare parts inventory, 
                            the platform automates complex, mission-critical operations.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Full-Stack Development</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Military Vehicle Sales</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Defense Overhaul & Repair</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #ffbd2e, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-tools fs-2"></i>
                            <a href="https://engine-family.com/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Engine Family</h3>
                        <p class="text-info small mb-3">July, 2025 - Aug, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            A global B2B Industrial E-commerce and Supply Chain platform engineered for a premier Shanghai-based distributor of heavy-duty diesel engines and genuine spare parts. Contributed to building a 
                            high-performance web architecture featuring a massive, searchable product catalog that supports major international brands like MTU, Cummins, and Deutz. The platform streamlines international B2B logistics, 
                            product sourcing, and multi-category part verification for global marine, defense, and power-generation sectors.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Global B2B E-commerce</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Industrial Supply Chain</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Catalog Engineering</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Backend Integration</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #ffbd2e, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-shop-window fs-2"></i>
                            <a href="https://insightfulstores.com/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">InsightFul Stores</h3>
                        <p class="text-info small mb-3">May, 2025 - June, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            A specialized Backend Engine developed for a comprehensive Retail Operations and Business Intelligence CRM platform. Engineered the robust server-side architecture to manage multi-role authentication, 
                            precise role-based access control, and dynamic multi-tier store management workflows. Built high-performance data processing using PhpSpreadsheet to handle bulk Excel/XLSX imports and validation 
                            loops for store-user mapping, alongside generating automated analytics reports for corporate tracking.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Backend Engineering</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Excel Data Processing</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">RBAC / Multi-Login</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Retail Store Architecture</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #ffbd2e, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-fire fs-2"></i>
                            <a href="https://siddhmandir.com/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Siddh Mandir</h3>
                        <p class="text-info small mb-3">Jun, 2025 - July, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Developed the backend for a devotional CRM platform that simplifies temple services for users. The system enables devotees to easily book online pujas at various 
                            temples and buy spiritual products or offerings (prasad) through an integrated e-commerce system. I handled the core database logic, multi-login security, 
                            and user roles to ensure smooth and secure order processing.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Backend Development</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Online Puja Booking</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">E-Commerce Store</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Role-Based Security</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 project-animate-hidden project-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border-0 rounded-4 overflow-hidden position-relative project-card-hover" style="box-shadow: 0 0 30px rgba(0,0,0,0.5); border: 1px solid rgba(255,255,255,0.05) !important;">
                    <div style="height: 3px; background: linear-gradient(90deg, #ffbd2e, transparent); width: 100%;"></div>
                    
                    <div class="card-body p-4 p-md-5 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-shop fs-2"></i>
                            <a href="https://cakeanytime.in/" target="blank" class="text-light opacity-50 custom-hover"><i class="bi bi-box-arrow-up-right fs-4"></i></a>
                        </div>
                        <h3 class="fw-bold text-white mb-1">Cake Anytime</h3>
                        <p class="text-info small mb-3">Feb, 2025 - Apr, 2025</p>
                        <p class="text-muted mb-4" style="line-height: 1.6;">
                            Contributed as a core backend developer within a full engineering team to build a multi-vendor E-Commerce administration platform. The system is designed to allow local bakery shopkeepers to link their storefronts, 
                            manage dynamic product inventories, and process incoming customer orders. I collaborated on writing scalable server-side logic to handle automated order dispatching, delivery status tracking, 
                            and seamless synchronization between vendors and delivery nodes.
                        </p>
                        <div class="d-flex flex-wrap gap-2 mt-auto">
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Backend Development</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Backend Team Collaboration</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Multi-Vendor E-Commerce</span>
                            <span class="badge" style="background: rgba(255,255,255,0.05); color: #ccc;">Role-Based Security</span>
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
            threshold: 0.1 
        });

        // Target all elements with .project-observe
        const projectElements = document.querySelectorAll('.project-observe');
        projectElements.forEach((el) => projectObserver.observe(el));
    });
</script>