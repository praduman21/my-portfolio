<style>
    /* 1. Slide In From Left Animation for the Badge */
    @keyframes slideInFromLeft {
        0% { transform: translateX(-100px); opacity: 0; }
        100% { transform: translateX(0); opacity: 1; }
    }
    .slide-in-left {
        animation: slideInFromLeft 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards;
    }

    /* 2. Fade In Up Animation for H1 and Buttons (taaki sab ek sath smooth lage) */
    @keyframes fadeInUp {
        0% { transform: translateY(20px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }
    .fade-in-up {
        opacity: 0; /* Start hidden */
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    /* Delay classes taaki ek ke baad ek aaye */
    .delay-1 { animation-delay: 0.3s; }
    .delay-2 { animation-delay: 0.6s; }

    /* 3. Blinking Cursor for Typing Effect */
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
    .typing-cursor::after {
        content: '|';
        color: #00f2fe;
        animation: blink 1s step-end infinite;
        margin-left: 2px;
    }

    /* Cinematic Masked Reveal Animation for H1 */
    .reveal-wrapper {
        display: inline-block;
        overflow: hidden; 
        vertical-align: top;
    }
    
    .reveal-text {
        display: inline-block;
        transform: translateY(100%); /* Start me text mask ke neeche chupa hoga */
        opacity: 0;
        animation: slideUpReveal 0.8s cubic-bezier(0.50, 1, 0.5, 1) forwards;
    }

    @keyframes slideUpReveal {
        0% { transform: translateY(100%); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }

    /* Sync Animation for the Image */
    @keyframes imageSlideUp {
        0% { transform: translateY(100px); opacity: 0; }
        100% { transform: translateY(0); opacity: 1; }
    }
    .image-sync-reveal {
        opacity: 0; /* Start me invisible rahega */
        /* animation: Name | Duration | Timing Function | Fill Mode */
        animation: imageSlideUp 0.8s cubic-bezier(0.50, 1, 0.5, 1) forwards;
    }
</style>

<section id="home" class="min-vh-100 d-flex align-items-center" style="padding-top: 80px;">
    <div class="container">
        <div class="row align-items-center">
            
            <div class="col-md-6 order-2 order-md-1 mt-5 mt-md-0">

                <h1 class="display-3 fw-bold mb-3 pt-3" style="line-height: 1.2;">
                    <span class="reveal-wrapper">
                        <span class="reveal-text" style="animation-delay: 0.1s;">Crafting Robust</span>
                    </span> 
                    
                    <span class="reveal-wrapper">
                        <span class="reveal-text text-gradient" style="animation-delay: 0.3s;">Backend, Frontend</span>
                    </span> 
                    <br>
                    
                    <span class="reveal-wrapper pb-2">
                        <span class="reveal-text" style="animation-delay: 0.5s;">& CRM Systems!</span>
                    </span>
                </h1>
                
                <p id="typing-paragraph" class="lead mb-4 typing-cursor" style="max-width: 500px; font-weight: 300; color: #a0a0a0; min-height: 80px;">
                </p>

                <p class="small mb-4 fade-in-up delay-2" style="color: #00f2fe; font-family: monospace;">
                    <i class="bi bi-arrow-right-short animate-pulse"></i> Looking for a Custom Web App, CRM, or Enterprise Software? Let's build it.
                </p>

                <div class="row g-2 g-md-3 mt-4 mb-4 fade-in-up delay-2">
                    <div class="col-12 col-xl-auto">
                        <a href="#contact" class="btn btn-primary w-100 px-4 py-3 rounded-3 fw-bold d-flex align-items-center justify-content-center" style="background: linear-gradient(90deg, #0d6efd, #00c6ff); border: none; box-shadow: 0 4px 20px rgba(13, 110, 253, 0.4); letter-spacing: 0.5px; transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 6px 25px rgba(13, 110, 253, 0.6)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 20px rgba(13, 110, 253, 0.4)';">
                            Let's Build Your Web App <i class="bi bi-chat-square-text ms-2"></i>
                        </a>
                    </div>
                    <div class="col-6 col-xl-auto">
                        <a href="#projects" class="btn btn-outline-light w-100 px-3 py-3 rounded-3 fw-bold d-flex align-items-center justify-content-center text-nowrap" style="border-color: rgba(255,255,255,0.15); background: rgba(255,255,255,0.02); transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.08)'; this.style.borderColor='rgba(255,255,255,0.4)';" onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(255,255,255,0.15)';">
                            Explore My Work
                        </a>
                    </div>
                    <div class="col-6 col-xl-auto">
                        <a href="{{ asset('assets/documents/PRADUMAN YADAV.pdf') }}" target="_blank" class="btn btn-outline-light w-100 px-3 py-3 rounded-3 fw-bold d-flex align-items-center justify-content-center text-nowrap" style="border-color: rgba(255,255,255,0.15); background: rgba(255,255,255,0.02); transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.08)'; this.style.borderColor='rgba(255,255,255,0.4)';" onmouseout="this.style.background='rgba(255,255,255,0.02)'; this.style.borderColor='rgba(255,255,255,0.15)';">
                            Resume <i class="bi bi-download ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class=" col-md-6 order-2 order-md-2 d-flex justify-content-center justify-content-md-end align-items-center my-3 mb-md-0">
                <div class="image-sync-reveal position-relative w-100 rounded-4" style="max-width: 480px; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 10px 30px rgba(0,0,0,0.5); animation-delay: 0.4s; animation-duration: 0.8s;">
                    
                    <div class="position-absolute w-100 h-100 rounded-circle" style="background: #0d6efd; filter: blur(85px); opacity: 0.25; top: 0; left: 0; z-index: -1;"></div>
                    
                    <img src="{{ asset('assets/images/hero-avatar.webp') }}" 
                         alt="Developer Avatar" 
                         class="img-fluid w-100" 
                         style="object-fit: cover;" 
                         onerror="this.src='https://placehold.co/600x700/1a1a1a/0d6efd?text=AI+Avatar';">
                         
                </div>
            </div> --}}
            <div class="col-md-6 order-1 order-md-2 d-flex justify-content-center justify-content-md-end align-items-center my-3 mb-md-0">
                <div class="position-relative" style="max-width: 350px; width: 100%;">
                    
                    <div class="position-absolute w-100 h-100" style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.2), rgba(0, 242, 254, 0.2)); border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; transform: scale(1.05) rotate(10deg); filter: blur(5px); z-index: 1;"></div>
                    
                    <div class="overflow-hidden shadow-lg" style="border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; border: 2px solid rgba(255,255,255,0.1); background: #111; transition: all 0.5s ease-in-out; z-index: 2;" onmouseover="this.style.borderRadius='40% 60% 70% 30% / 40% 40% 60% 60%'; this.style.borderColor='#00f2fe';" onmouseout="this.style.borderRadius='60% 40% 30% 70% / 60% 30% 70% 40%'; this.style.borderColor='rgba(255,255,255,0.1)';">
                        <img src="{{ asset('assets/images/profile.png') }}" 
                            alt="Developer Avatar" 
                            class="img-fluid w-100" 
                            style="object-fit: cover;"
                            onerror="this.src='https://placehold.co/600x700/1a1a1a/0d6efd?text=AI+Avatar';">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>  

<script>
    document.addEventListener("DOMContentLoaded", function() {
        
        const typingSpeed = 35; 
        
        const pElement = document.getElementById('typing-paragraph');
        
        // Tumhara original paragraph text
        const textToType = "Hey! I am Praduman Yadav, a Software Developer specializing in Backend development. Currently building scalable enterprise solutions and seamless logic structures.";
        
        let charIndex = 0;

        // Function to type text letter by letter
        function typeWriter() {
            if (charIndex < textToType.length) {
                pElement.innerHTML += textToType.charAt(charIndex);
                charIndex++;
                setTimeout(typeWriter, typingSpeed);
            } else {
                // Jab typing khatam ho jaye toh cursor blink karta rahega
                pElement.classList.add('typing-complete');
            }
        }

        setTimeout(() => {
            typeWriter();
        }, 800);
    });
</script>