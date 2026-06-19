<style>
    /* Smooth transitions for the navbar */
    #main-navbar {
        transition: all 0.4s cubic-bezier(0.25, 1, 0.5, 1);
    }

    /* Scrolled state (Triggered by JS) */
    .navbar-scrolled {
        background: rgba(5, 5, 5, 0.95) !important;
        backdrop-filter: blur(20px) !important;
        box-shadow: 0 10px 40px rgba(0, 242, 254, 0.15) !important;
        border-color: rgba(0, 242, 254, 0.3) !important;
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }

    /* Active link style */
    .nav-link {
        position: relative;
        font-weight: 500;
        transition: color 0.3s ease;
    }
    
    /* Jab link active ho (ScrollSpy se) */
    .nav-link.active {
        color: #00f2fe !important;
        opacity: 1 !important;
    }

    /* Tumhari purani custom-hover line ko active rehne denge */
    .nav-link.active::after {
        width: 100% !important;
    }

    /* Responsive Mobile Menu Fix */
    @media (max-width: 991px) {
        .navbar-collapse {
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 12px;
            padding: 15px;
            margin-top: 15px;
            border: 1px solid rgba(255,255,255,0.05);
        }
    }
</style>

<div class="fixed-top mt-3" id="navbar-container" style="z-index: 1050; transition: margin 0.4s ease;">
    <div class="container">
        <nav id="main-navbar" class="navbar navbar-expand-lg px-4" style="background: rgba(10, 10, 10, 0.75); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);">
            
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <div class="d-flex justify-content-center align-items-center w-100" style="width: 36px; height: 36px; margin-right: -70px; margin-top: 10px;">
                    {{-- <span style="color: #00f2fe; font-weight: 800; font-size: 1.1rem; letter-spacing: 0;">VS</span> --}}
                    <span>
                        <img src="{{ asset('assets/images/two.png') }}" 
                        class="" style="width: 270px; height: 120px;"
                        alt="Praduman Yadav">
                    </span>
                </div>
            </a>

            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="bi bi-list text-white fs-1"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center gap-2 gap-lg-4 mt-3 mt-lg-0 text-center text-lg-start">
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-light opacity-75 custom-hover nav-scroll-link" href="#contact">Contact</a></li>
                    
                    {{-- <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="{{ asset('assets/docs/Praduman_Software_Developer.pdf') }}" target="_blank" class="btn px-4 py-2 fw-bold text-white d-inline-flex align-items-center justify-content-center" style="background: rgba(0, 242, 254, 0.1); border: 1px solid rgba(0, 242, 254, 0.5); border-radius: 8px; transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1); box-shadow: 0 0 15px rgba(0,242,254,0);" onmouseover="this.style.background='#00f2fe'; this.style.color='#000'; this.style.boxShadow='0 0 20px rgba(0,242,254,0.5)';" onmouseout="this.style.background='rgba(0, 242, 254, 0.1)'; this.style.color='#fff'; this.style.boxShadow='0 0 15px rgba(0,242,254,0)';">
                            Resume <i class="bi bi-download ms-2 fs-6"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </nav>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('main-navbar');
    const navContainer = document.getElementById('navbar-container');
    const sections = document.querySelectorAll('section'); // Make sure all your sections have <section id="...">
    const navLinks = document.querySelectorAll('.nav-scroll-link');

    window.addEventListener('scroll', () => {
        // 1. Shrink & Glow effect on Scroll
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
            navContainer.classList.remove('mt-3');
            navContainer.classList.add('mt-1'); // Upar shift hoga
        } else {
            navbar.classList.remove('navbar-scrolled');
            navContainer.classList.remove('mt-1');
            navContainer.classList.add('mt-3'); // Wapas normal margin
        }
        
        // 2. ScrollSpy (Active Link Tracker)
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            // Agar user section ke 1/3 hisse me aa gaya hai
            if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').includes(current)) {
                link.classList.add('active'); // Highlight current section
            }
        });
    });
});
</script>