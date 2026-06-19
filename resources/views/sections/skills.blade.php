<style>
    /* Initial Hidden State for Header and Cards */
    .skill-animate-hidden {
        opacity: 0;
        transform: translateY(60px);
        transition: all 0.8s cubic-bezier(0.25, 1, 0.5, 1);
    }

    /* Visible State triggered by JS */
    .skill-animate-show {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<section id="skills" class="py-5">
    <div class="container py-5">
        
        <div class="text-center mb-5 skill-animate-hidden skill-observe" style="transition-delay: 0.1s;">
            <span class="badge rounded-pill mb-2 px-3 py-2 fs-5" style="background: rgba(13, 110, 253, 0.1); border: 1px solid rgba(13, 110, 253, 0.3); color: #0d6efd;">Tech Stack</span>
            <h2 class="fw-bold display-6">Languages & <span class="text-gradient">Tools</span></h2>
        </div>

        <div class="row g-4">
            <div class="col-md-4 skill-animate-hidden skill-observe" style="transition-delay: 0.2s;">
                <div class="card h-100 bg-transparent border rounded-4 p-4" style="border-color: rgba(255,255,255,0.1) !important; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 0 20px rgba(13, 110, 253, 0.2)'; this.style.transform='translateY(-10px)';" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <i class="bi bi-hdd-network text-primary fs-1 mb-3"></i>
                    <h4 class="text-white">Backend</h4>
                    <p class="text-muted small mb-3">Core logic and framework expertise.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark border" style="border-color: #333 !important;">PHP</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Laravel</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">MVC</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 skill-animate-hidden skill-observe" style="transition-delay: 0.4s;">
                <div class="card h-100 bg-transparent border rounded-4 p-4" style="border-color: rgba(255,255,255,0.1) !important; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 0 20px rgba(0, 242, 254, 0.2)'; this.style.transform='translateY(-10px)';" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <i class="bi bi-database text-info fs-1 mb-3"></i>
                    <h4 class="text-white">Database</h4>
                    <p class="text-muted small mb-3">Data structuring and optimization.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark border" style="border-color: #333 !important;">MySQL</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Eloquent ORM</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Query Builder</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 skill-animate-hidden skill-observe" style="transition-delay: 0.6s;">
                <div class="card h-100 bg-transparent border rounded-4 p-4" style="border-color: rgba(255,255,255,0.1) !important; transition: transform 0.3s, box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 0 20px rgba(255, 255, 255, 0.1)'; this.style.transform='translateY(-10px)';" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)';">
                    <i class="bi bi-tools text-light fs-1 mb-3"></i>
                    <h4 class="text-white">Tools & UI</h4>
                    <p class="text-muted small mb-3">Bringing everything together.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark border" style="border-color: #333 !important;">HTML/CSS/JS</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Bootstrap 5</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Git</span>
                        <span class="badge bg-dark border" style="border-color: #333 !important;">Gen AI Tools</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Naya observer setup kiya
        const skillsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Jab element screen par aaye toh usme show class lag do
                    entry.target.classList.add('skill-animate-show');
                    // skillsObserver.unobserve(entry.target); // Optional: if you only want it to animate once
                }
            });
        }, {
            threshold: 0.1 // Jab 10% dikhe tab trigger hoga
        });

        // Jin elements par .skill-observe class hai unko target karo
        const skillElements = document.querySelectorAll('.skill-observe');
        skillElements.forEach((el) => skillsObserver.observe(el));
    });
</script>