<style>
    .contact-animate-hidden {
        opacity: 0;
        transform: translateY(50px);
        transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1);
    }
    .contact-animate-show {
        opacity: 1;
        transform: translateY(0);
    }
    
    .custom-input:focus {
        box-shadow: 0 0 15px rgba(13, 110, 253, 0.3) !important;
        border-color: #0d6efd !important;
        background-color: #111 !important;
    }
    
    .form-floating > label { color: #888; }
    .form-floating > .form-control:focus ~ label,
    .form-floating > .form-control:not(:placeholder-shown) ~ label {
        color: #00f2fe;
    }

    /* --- NEW BACKGROUND EFFECTS --- */
    
    /* 1. Cyber Grid Pattern */
    .bg-cyber-grid {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
        background-size: 35px 35px;
        z-index: 0;
        pointer-events: none; /* Taaki clicks block na hon */
    }

    /* 2. Floating Animation for Orbs */
    @keyframes floatOrb {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(30px, -40px) scale(1.1); }
        66% { transform: translate(-20px, 20px) scale(0.9); }
    }
    
    /* Blue Orb (Top Left) */
    .bg-orb-1 {
        position: absolute;
        width: 350px; height: 350px;
        background: #0d6efd;
        border-radius: 50%;
        filter: blur(120px);
        opacity: 0.15;
        animation: floatOrb 10s infinite ease-in-out;
        top: -100px; left: -100px;
        z-index: 0;
    }
    
    /* Cyan Orb (Bottom Right) */
    .bg-orb-2 {
        position: absolute;
        width: 400px; height: 400px;
        background: #00f2fe;
        border-radius: 50%;
        filter: blur(130px);
        opacity: 0.12;
        animation: floatOrb 14s infinite ease-in-out reverse;
        bottom: -150px; right: -100px;
        z-index: 0;
    }
</style>

<section id="contact" class="py-5" style="background: #050505; border-top: 1px solid rgba(255,255,255,0.02); position: relative; overflow: hidden;">
    
    <div class="bg-cyber-grid"></div>
    <div class="bg-orb-1"></div>
    <div class="bg-orb-2"></div>

    <div class="container py-5 position-relative" style="z-index: 1;">
        <div class="row align-items-center">

            <div class="col-lg-5 mb-5 mb-lg-0 contact-animate-hidden contact-observe" style="transition-delay: 0.1s;">
                <span class="badge rounded-pill mb-3 px-3 py-2 fs-6" style="background: rgba(0, 242, 254, 0.1); border: 1px solid rgba(0, 242, 254, 0.3); color: #00f2fe;">Get In Touch</span>
                <h2 class="fw-bold display-5 mb-4">Let's Build Something <span class="text-gradient">Great</span></h2>
                <p class="text-muted mb-5" style="line-height: 1.8;">
                    Have a breakthrough business idea, or need a robust custom software, enterprise CRM, or scalable website for your company? Drop a message or directly reach out—let’s transform your requirements into high-performance architecture!
                </p>

                <a href="mailto:pradumanyadav514@gmail.com" class="text-decoration-none">
                    <div class="d-flex align-items-center mb-4 p-3 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.05); max-width: 400px; transition: transform 0.3s;" onmouseover="this.style.transform='translateX(10px)';" onmouseout="this.style.transform='translateX(0)';">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 55px; height: 55px;">
                                <i class="bi bi-envelope-fill text-primary fs-4"></i>
                            </div>
                        <div>
                            <p class="text-muted small mb-0 tracking-wider text-uppercase">Email Me Directly</p>
                            <a href="mailto:pradumanyadav514@gmail.com" class="text-white fw-bold text-decoration-none custom-hover fs-6">pradumanyadav514@gmail.com</a>
                        </div>
                    </div>
                </a>
                

                <div class="d-flex gap-3 mt-4">
                    <a href="https://github.com/praduman21" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-color: rgba(255,255,255,0.1); transition: all 0.3s;" onmouseover="this.style.background='#fff'; this.style.color='#000';" onmouseout="this.style.background='transparent'; this.style.color='#fff';" target="_blank">
                        <i class="bi bi-github fs-5"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/pradumanyadav/" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-color: rgba(255,255,255,0.1); transition: all 0.3s;" onmouseover="this.style.background='#0a66c2'; this.style.color='#fff'; this.style.borderColor='#0a66c2';" onmouseout="this.style.background='transparent'; this.style.color='#fff'; this.style.borderColor='rgba(255,255,255,0.1)';" target="_blank">
                        <i class="bi bi-linkedin fs-5"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-1 contact-animate-hidden contact-observe" style="transition-delay: 0.3s;">
                <div class="card bg-transparent border-0 rounded-4 p-4 p-md-5" style="box-shadow: 0 15px 40px rgba(0,0,0,0.8); background: linear-gradient(145deg, rgba(17,17,17,0.9), rgba(10,10,10,0.9)) !important; border: 1px solid rgba(255,255,255,0.08) !important; backdrop-filter: blur(10px);">
                    <h4 class="text-white mb-4 fw-bold">Send a Message</h4>
                    
                    <form id="contactForm">
                        
                        <div class="form-floating mb-4">
                            <input type="text" name="name" class="form-control bg-dark border-0 text-white custom-input shadow-none" id="nameInput" placeholder="Your Name" style="border-radius: 8px; background-color: rgba(255,255,255,0.03) !important;" required>
                            <label for="nameInput">Your Name</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <input type="email" name="email" class="form-control bg-dark border-0 text-white custom-input shadow-none" id="emailInput" placeholder="Your Email" style="border-radius: 8px; background-color: rgba(255,255,255,0.03) !important;" required>
                            <label for="emailInput">Your Email</label>
                        </div>
                        
                        <div class="form-floating mb-4">
                            <textarea name="message" class="form-control bg-dark border-0 text-white custom-input shadow-none" id="messageInput" placeholder="Your Message" style="border-radius: 8px; height: 130px; resize: none; background-color: rgba(255,255,255,0.03) !important;" required></textarea>
                            <label for="messageInput">Your Message</label>
                        </div>
                        
                        <button type="submit" id="submitBtn" class="btn w-100 py-3 fw-bold text-white d-flex align-items-center justify-content-center gap-2" style="background: linear-gradient(90deg, #0d6efd, #00f2fe); border: none; border-radius: 8px; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 25px rgba(13, 110, 253, 0.4)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
                            <span>Send Message</span> <i class="bi bi-send-fill"></i>
                        </button>

                        <div id="formResult" class="mt-3 text-center fw-bold" style="display: none;"></div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('contact-animate-show');
                }
            });
        }, { threshold: 0.1 });

        const contactElements = document.querySelectorAll('.contact-observe');
        contactElements.forEach((el) => contactObserver.observe(el));
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('contactForm');
        const result = document.getElementById('formResult');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = submitBtn.querySelector('span');
        const btnIcon = submitBtn.querySelector('i');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Button state change to "Sending..."
            btnText.innerHTML = "Sending...";
            btnIcon.className = "spinner-border spinner-border-sm"; 
            submitBtn.disabled = true;

            // Form data prepare karna
            const formData = {
                name: document.getElementById('nameInput').value,
                email: document.getElementById('emailInput').value,
                message: document.getElementById('messageInput').value
            };

            // Laravel backend controller ko hit karna
            // Note: '/send-contact' ki jagah apna actual web/api route URL dalo jo aapne routes/web.php ya api.php me banaya hai
            fetch('/send-contact', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Success Response Handle karna
                result.innerHTML = "Message Sent Successfully via SMTP! I'll get back to you soon.";
                result.className = "mt-3 text-center fw-bold text-success";
                result.style.display = "block";
                form.reset();
            })
            .catch(error => {
                // Error Handle karna
                console.error('Error:', error);
                result.innerHTML = "Something went wrong! Please try again.";
                result.className = "mt-3 text-center fw-bold text-danger";
                result.style.display = "block";
            })
            .finally(function() {
                // Reset Button to default state
                btnText.innerHTML = "Send Message";
                btnIcon.className = "bi bi-send-fill";
                submitBtn.disabled = false;
                
                // 5 seconds baad success/error message hide karna
                setTimeout(() => {
                    result.style.display = "none";
                }, 5000);
            });
        });
    });
</script>