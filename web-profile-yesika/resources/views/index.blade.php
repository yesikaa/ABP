<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Yesika Widiyani | Editorial Portfolio</title>
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <div id="welcome-screen">
        <div style="text-align: center;">
            <h1 style="color: white; font-size: 3.5rem; font-weight: 900; margin-bottom: 30px; letter-spacing: -2px;">YESIKA.W</h1>
            <button onclick="openPortfolio()" class="open-btn">OPEN PORTFOLIO</button>
        </div>
    </div>

    <div id="main-content" style="display: none;">
        <div class="main-wrapper">
            
            <header class="hero">
                <h1 class="giant-text" data-aos="zoom-out">PORTFOLIO</h1>

                <div class="hero-container" data-aos="fade-up" data-aos-delay="400">
                    <div class="hero-photo">
                        <img src="{{ asset('asset/profile-utama.png') }}" alt="Yesika Widiyani">
                    </div>
                    <div class="hero-intro-card">
                        <span class="badge">Informatics Student</span>
                        <h2>Yesika Widiyani</h2>
                        <p>Mahasiswa Informatika di Telkom University Purwokerto.</p>
                        <div class="quote-box">
                            <p>"Saya berpengalaman sebagai Technical Writer selama 1 tahun, mengutamakan dokumentasi yang mudah dimengerti audiens."</p>
                        </div>
                    </div>
                </div>
            </header>

            <h2 class="section-title" data-aos="fade-up">Experience</h2>
            <div class="visual-bento">
                <div class="box" onclick="lihatDetail('hima')" data-aos="fade-up">
                    <img src="{{ asset('asset/yesika2.jpeg') }}" class="box-bg">
                    <div class="box-overlay"><span>2024 - 2025</span><h3>Secretary General</h3></div>
                </div>
                
                <div class="box" onclick="lihatDetail('solu_tw')" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('asset/solu.jpeg') }}" class="box-bg">
                    <div class="box-overlay"><span>2022 - 2023</span><h3>Technical Writer</h3></div>
                </div>

                <div class="box" onclick="lihatDetail('astra')" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('asset/yesika.jpeg') }}" class="box-bg">
                    <div class="box-overlay"><span>2023</span><h3>Quality Assurance</h3></div>
                </div>

                <div class="box" onclick="lihatDetail('solu_hd')" data-aos="fade-up">
                    <img src="{{ asset('asset/helpdesk.jpeg') }}" class="box-bg">
                    <div class="box-overlay"><span>2022 - 2023</span><h3>Helpdesk Support</h3></div>
                </div>

                <div class="box" onclick="lihatDetail('nusantara')" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('asset/nusantara.jpeg') }}" class="box-bg"> 
                    <div class="box-overlay">
                        <span>2025</span>
                        <h3>Sekretaris Event</h3>
                    </div>
                </div>

                <div class="box" onclick="lihatDetail('cazh_qa')" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('asset/Cazh.jpeg') }}" class="box-bg"> 
                    <div class="box-overlay">
                        <span>Jan - Feb 2026</span>
                        <h3>Quality Assurance</h3>
                    </div>
                </div>
            </div>

            <div class="cv-section">
                <a href="/cv" class="sleek-btn">VIEW FULL CV →</a>
            </div>
        </div>

        <footer class="footer-dark" data-aos="fade-up">
            <div class="footer-wrap">
                <div class="footer-info">
                    <h3>Let's work <span>Together</span></h3>
                    <div class="footer-action">
                        <a href="mailto:yesikawidi40@gmail.com" class="email-btn">
                            yesikawidi40@gmail.com <span class="arrow-icon">→</span>
                        </a>
                    </div>
                    <div class="footer-social-links">
                        <a href="https://www.linkedin.com/in/yesika-widiyani-a83446235/" target="_blank" class="social-item"><span class="dot"></span> LinkedIn</a>
                        <a href="https://instagram.com/yesikawd" target="_blank" class="social-item"><span class="dot"></span> Instagram</a>
                        <a href="https://github.com/yesikaa" target="_blank" class="social-item"><span class="dot"></span> GitHub</a>
                    </div>
                </div>
                <div class="footer-img">
                    <img src="{{ asset('asset/footer.jpeg') }}" alt="Yesika Widiyani" onclick="nanjakPopOut()" style="cursor: pointer;">
                </div>
            </div>
        </footer>
    </div>

    <div id="project-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="close-modal" onclick="closeDetail()">&times;</button>
            <div id="modal-body">
                </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('script.js') }}"></script>

</body>
</html>