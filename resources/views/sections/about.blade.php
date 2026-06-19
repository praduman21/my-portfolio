<style>
    /* Initial state: Hidden and pushed to the sides */
    .slide-hidden-left {
        opacity: 0;
        transform: translateX(-150px);
        transition: all 1s cubic-bezier(0.25, 1, 0.5, 1);
    }
    
    .slide-hidden-right {
        opacity: 0;
        transform: translateX(150px);
        transition: all 1s cubic-bezier(0.25, 1, 0.5, 1);
    }

    /* Active state: Visible and at original position (Added by JS when user scrolls) */
    .slide-show {
        opacity: 1;
        transform: translateX(0);
    }
</style>

<section id="about" class="py-5 vh-90" style="background: #080808; border-top: 1px solid rgba(255,255,255,0.02); border-bottom: 1px solid rgba(255,255,255,0.02);">
    <div class="container py-5 mt-5">
        <div class="row align-items-center mt-5">
            
            <div class="col-lg-6 mb-4 mb-lg-0 slide-hidden-left">
                <div class="card bg-transparent border-0 rounded-4 overflow-hidden" style="box-shadow: 0 0 20px rgba(0,0,0,0.8);">
                    <div class="card-header border-0 d-flex gap-2 align-items-center" style="background: #1a1a1a; padding: 12px 20px;">
                        <div class="rounded-circle" style="width: 12px; height: 12px; background: #ff5f56;"></div>
                        <div class="rounded-circle" style="width: 12px; height: 12px; background: #ffbd2e;"></div>
                        <div class="rounded-circle" style="width: 12px; height: 12px; background: #27c93f;"></div>
                        <span class="ms-2 text-muted" style="font-family: monospace; font-size: 0.85rem;">developer_profile.php</span>
                    </div>
                    <div class="card-body" style="background: #0d0d0d; font-family: monospace; font-size: 0.95rem; line-height: 1.7; color: #d4d4d4;">
                        <span style="color: #c678dd;">class</span> <span style="color: #e5c07b;">Developer</span> {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">public</span> <span style="color: #e06c75;">$name</span> = <span style="color: #98c379;">'Praduman Yadav'</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">public</span> <span style="color: #e06c75;">$role</span> = <span style="color: #98c379;">'Software Developer'</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">public</span> <span style="color: #e06c75;">$education</span> = <span style="color: #98c379;">'MCA (2023 - 2025)'</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">public</span> <span style="color: #e06c75;">$company</span> = <span style="color: #98c379;">'Abhisan Technology'</span>;<br><br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">public function</span> <span style="color: #61afef;">getGoal</span>() {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #c678dd;">return</span> <span style="color: #98c379;">'Building scalable CRM, E-commerce, Role-based permissions & logical architectures.'</span>;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                        }
                    </div>
                </div>
            </div>

            <div id="about-code-box" class="col-lg-5 offset-lg-1 slide-hidden-right">
                <h2 class="fw-bold mb-4">Behind the <span class="text-gradient">Logic</span></h2>
                <p class="text-light opacity-75 mb-4 gsap-reveal-text" style="line-height: 1.8;">
                    My journey in software development is driven by a passion for solving complex business problems, developing elegant frontend & backend solutions, and structuring data. I thrive in the PHP/Laravel ecosystem with 1+ year of experience, crafting robust softwares, managing databases, and building custom CRM modules from scratch.
                </p>
                <p class="text-light opacity-75 mb-4 gsap-reveal-text" style="line-height: 1.8;">
                    Beyond writing code, I have a keen interest in business logic, financial algorithms, and leveraging generative AI to streamline modern web applications.
                </p>
                
                <div class="row mt-4">
                    <div class="col-6">
                        <h3 class="fw-bold text-white mb-1">8+</h3>
                        <p class="text-muted small text-uppercase tracking-wider">Projects Completed</p>
                    </div>
                    <div class="col-6">
                        <h3 class="fw-bold text-white mb-1">0</h3>
                        <p class="text-muted small text-uppercase tracking-wider">Compromise on Quality</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Observer banaya jo check karega ki element screen par dikha ya nahi
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Jab element screen ke andar aa jaye (intersect kare)
                if (entry.isIntersecting) {
                    entry.target.classList.add('slide-show');
                    // Ek baar animate hone ke baad observe karna band kar de (optional)
                    // observer.unobserve(entry.target); 
                }
            });
        }, {
            threshold: 0.2 // Jab 20% element screen par dikhe tab animation trigger ho
        });

        // Left aur Right dono hidden elements ko observe karna shuru karo
        const hiddenElements = document.querySelectorAll('.slide-hidden-left, .slide-hidden-right');
        hiddenElements.forEach((el) => observer.observe(el));
    });
</script>