<style>
    /* Timeline Layout Container */
    .timeline {
        position: relative;
        padding-left: 40px;
        margin-left: 20px;
        border-left: 2px solid rgba(13, 110, 253, 0.2); /* Subtle blue line */
    }

    @media (max-width: 768px) {
        .timeline {
            padding-left: 30px;
            margin-left: 10px;
        }
    }

    /* The Glowing Dots */
    .timeline-dot {
        position: absolute;
        left: -41px; /* Center the dot on the border */
        top: 0;
        width: 20px;
        height: 20px;
        background: #080808;
        border: 2px solid #00f2fe;
        border-radius: 50%;
        box-shadow: 0 0 15px rgba(0, 242, 254, 0.6);
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .timeline-dot { left: -31px; }
    }

    /* Hover effect on Timeline Item */
    .timeline-item {
        position: relative;
        padding-bottom: 3rem;
    }
    .timeline-item:last-child {
        padding-bottom: 0;
    }
    
    .timeline-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: linear-gradient(145deg, rgba(20,20,20,0.6), rgba(10,10,10,0.8));
    }
    .timeline-item:hover .timeline-card {
        transform: translateX(10px);
        box-shadow: 0 10px 30px rgba(13, 110, 253, 0.15) !important;
        border-color: rgba(0, 242, 254, 0.3) !important;
    }
    .timeline-item:hover .timeline-dot {
        background: #00f2fe;
        box-shadow: 0 0 20px #00f2fe;
    }

    /* Animation Classes */
    .experience-animate-hidden {
        opacity: 0;
        transform: translateX(-50px);
        transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .experience-animate-show {
        opacity: 1;
        transform: translateX(0);
    }
</style>

<section id="experience" class="py-5" style="background: #080808; border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02);">
    <div class="container py-5">
        
        <div class="text-center mb-5 experience-animate-hidden experience-observe" style="transition-delay: 0.1s;">
            <span class="badge rounded-pill mb-2 px-3 py-2 fs-5" style="background: rgba(13, 110, 253, 0.1); border: 1px solid rgba(13, 110, 253, 0.3); color: #0d6efd;">Career Path</span>
            <h2 class="fw-bold display-6">Professional <span class="text-gradient">Experience</span></h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="timeline mt-4">

                    <div class="timeline-item experience-animate-hidden experience-observe" style="transition-delay: 0.2s;">
                        <div class="timeline-dot"></div>
                        <div class="card timeline-card border-0 rounded-4 p-4 p-md-5" style="border: 1px solid rgba(255,255,255,0.05) !important;">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                                <div>
                                    <h3 class="fw-bold text-white mb-1">Software Developer</h3>
                                    <h5 class="text-info mb-0" style="font-weight: 400;">Abhisan Technology</h5>
                                </div>
                                <span class="badge mt-2 mt-md-0" style="background: rgba(255,255,255,0.1); color: #ccc; font-family: monospace; font-size: 0.9rem;">April, 2025 - Present</span>
                            </div>
                            <p class="text-muted" style="line-height: 1.7;">
                                {{-- Designed, developed, and maintained scalable web applications using PHP, Laravel, and MVC architecture, secure authentication, role-based permissions across multiple dynamic projects. Performed debugging, testing, and performance optimization, improving application reliability, code quality, and efficiency while following best coding practices and version control (Git). --}}
                                <p>Built CRM and E-commerce applications using Laravel, implementing secure authentication, role-based
                                permissions, RESTful APIs, and dynamic admin dashboards with Blade.</p>
                                <p>Improved application performance by implementing server-side validation, session management, structured
                                error handling, and resolving complex debugging issues across modules.</p>
                                <p>Enhanced development efficiency by creating reusable components, automating CRM workflows, and delivering
                                clean, scalable, and maintainable code for long-term project stability.</p>

                            </p>
                        </div>
                    </div>

                    <div class="timeline-item experience-animate-hidden experience-observe" style="transition-delay: 0.4s;">
                        <div class="timeline-dot"></div>
                        <div class="card timeline-card border-0 rounded-4 p-4 p-md-5" style="border: 1px solid rgba(255,255,255,0.05) !important;">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                                <div>
                                    <h3 class="fw-bold text-white mb-1">Software Developer Intern</h3>
                                    <h5 class="text-info mb-0" style="font-weight: 400;">Abhisan Technology</h5>
                                </div>
                                <span class="badge mt-2 mt-md-0" style="background: rgba(255,255,255,0.1); color: #ccc; font-family: monospace; font-size: 0.9rem;">Jan, 2025 - March, 2025</span>
                            </div>
                            <p class="text-muted" style="line-height: 1.7;">
                                {{-- Collaborated as a Software Developer Intern, facilitating innovation across different dynamic projects. Assisted in debugging and testing to ensure high-performance softwares and web applications. --}}
                                <p>Collaborated with the development team to design and implement frontend features using HTML, CSS, and
                                JavaScript, and backend functionality using Php and Laravel. Built efficient CRUD modules to manage application
                                data seamlessly.</p>
                                <p>Utilized MySQL for structured database design, query optimization, and maintaining high data integrity, resulting
                                in improved application performance and reliability.</p>
                                <p>Worked closely with senior developers to enhance the UI/UX, improving user interaction, layout consistency, and
                                overall usability across the platform.</p>

                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const experienceObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('experience-animate-show');
                }
            });
        }, { threshold: 0.1 });

        const experienceElements = document.querySelectorAll('.experience-observe');
        experienceElements.forEach((el) => experienceObserver.observe(el));
    });
</script>