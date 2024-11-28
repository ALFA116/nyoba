<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NYOBA GAMING</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header class="navbar-fixed" id="navbar">
        <nav class="navbar">
            <div class="navbar-logo">
                <img src="photo/logo-fr.png" alt="Company Logo">
            </div>
            <ul class="navbar-menu">
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#work" class="active">Work</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Product & Solutions <span class="arrow-down">▼</span></a>
                    <div class="dropdown-content">
                        <a href="ip-telephony-solution.php">IP Telephony Solution</a>
                        <a href="network-connectivity.php">Network & Connectivity Solution</a>
                        <a href="other-services.php">Other IT Services</a>
                    </div>
                </li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
            <a href="https://wa.me/6285972510714" class="navbar-button">Contact Sales</a>
        </nav>
    </header>

    <main>
        <section class="ip-telephony-solution">
            <div class="ip-telephony-container">
                <h1 class="ip-telephony-title">IP TELEPHONY SOLUTION</h1>
                <h2 class="ip-telephony-subtitle">Let's Fix Issues with Innovation</h2>
                <nav>
                    <ul class="ip-telephony-nav">
                        <li><a href="#sip-trunking" class="ip-telephony-nav-link active" onclick="showSection('sip-trunking')">SIP TRUNKING</a></li>
                        <li><a href="#hosted-pabx" class="ip-telephony-nav-link" onclick="showSection('hosted-pabx')">HOSTED PABX</a></li>
                    </ul>
                </nav>

                <section id="sip-trunking" class="ip-telephony-section">
                    <img src="photo/siptrunk.png" alt="SIP Trunking Diagram" class="ip-telephony-image">
                    <h3 class="ip-telephony-feature-title">SIP Trunk enables your business to reduce costs and simplify IT management</h3>
                    <p class="ip-telephony-description">SIP Trunk enables your business to reduce costs and simplify IT management by combining voice and Internet access using existing IP PBX system or hosted PBX. Scalable for large number of lines and for multi-location business, more features without additional equipment.</p>
                    <p class="ip-telephony-feature-benefit"><strong>Benefit:</strong> scalable for large number of lines and for multi-location business, more features without additional equipment.</p>
                    <p class="ip-telephony-feature-market"><strong>Target Market:</strong> multi-national companies, call center, virtual office.</p>
                </section>

                <section id="hosted-pabx" class="ip-telephony-section" style="display: none;">
                    <img src="photo/hostedpbx-sollution.png" alt="Hosted PBX Diagram" class="ip-telephony-image">
                    <h3 class="ip-telephony-feature-title">Hosted PBX is a cloud-based PBX system.</h3>
                    <p class="ip-telephony-description">Accessible via an IP network. It also provides businesses with the ability to manage their phone systems and has more features than traditional PBX.</p>
                    <p class="ip-telephony-feature-benefit"><strong>Benefit:</strong> eliminate investment costs of PBX and maintenance.</p>
                    <p class="ip-telephony-feature-market"><strong>Target Market:</strong> small to medium-sized business owners.</p>
                </section>
            </div>
        </section>

        <section id="contact" style="display: none; margin-top: 50px; display: flex; justify-content: center; align-items: flex-start;">
            <div style="flex: 1; padding: 20px;">
                <img src="photo/contact-us.png" alt="Contact Us" style="width: 100%; max-width: 400px; border-radius: 10px;">
            </div>
            <div class="contact-section" style="flex: 2; padding: 40px; margin: 0 20px; background: linear-gradient(135deg, #CCFBFF, #EF96C5); border-radius: 25px; border: 2px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; font-size: 36px; font-weight: bold; margin-bottom: 10px;">OUR CONTACT</h2>
                <p style="text-align: center; font-size: 20px; color: #666; margin-bottom: 20px;">Get Schedule with Us.</p>
                <div style="text-align: center; margin-bottom: 30px;">
                    <i class="fas fa-map-marker-alt" style="font-size: 30px; margin-right: 10px; color: #4CAF50; margin-bottom: 10px;"></i>
                    <p style="font-size: 18px; color: #333;">Jl. Guntur No.20C, Limo, Kec. Limo, Kota Depok, Jawa Barat 16514</p>
                    <div style="margin-top: 15px; text-align: center;">
                        <a href="https://wa.me/6285972510714" target="_blank" style="text-decoration: none; color: #25D366;">
                            <i class="fab fa-whatsapp" style="font-size: 30px; margin-right: 10px;"></i> Contact via WhatsApp
                        </a>
                    </div>
                </div>S
                <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                    <form style="width: 100%; max-width: 750px; padding: 30px; background-color: #fff; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <input type="text" placeholder="Full Name" style="width: 48%; padding: 15px; border-radius: 5px; border: 1px solid #ccc; font-size: 16px;">
                            <input type="email" placeholder="Email" style="width: 48%; padding: 15px; border-radius: 5px; border: 1px solid #ccc; font-size: 16px;">
                        </div>
                        <textarea placeholder="Enter your message.." style="width: 100%; padding: 15px; height: 120px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 20px; font-size: 16px;"></textarea>
                        <button type="submit" style="background-color: #4CAF50; color: white; padding: 15px 30px; border-radius: 5px; border: none; font-size: 18px; cursor: pointer; width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark text-light pt-5 pb-3" style="background: linear-gradient(to right, #000000, #302f2f); margin-top: 50px;">
        <div class="container text-left">
        <img src="../nyoba/photo/logo-fr.png" alt="Company Logo" class="img-fluid mb-4" style="width: 100px; height: 100px;">
            <div class="row">
                <div class="col-md-3">
                    <h6>PT. MEISSA BERKAH TEKNOLOGI</h6>
                    <p>We provide a range of IT and telecommunication services consisting of telecom consultancy, SIP Trunk provider, Call Center Solution, LAN setup.</p>
                    <p>We do the concept, technical design, and implementation that fits customers' need both effective cost-efficient.</p>
                </div>
                <div class="col-md-2">
                    <h6>About Us</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">About</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Overview</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Awards & Recognitions</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Contact Team</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6>Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Our Work</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Our Solution</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Follow Us</h6>
                    <p>Take your favorite fandoms with you and never miss a beat.</p>
                    <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-light me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <p>© 2024 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.ip-telephony-section');
            sections.forEach(section => {
                section.style.display = 'none'; 
            });
            document.getElementById(sectionId).style.display = 'block'; 

            const links = document.querySelectorAll('.ip-telephony-nav-link');
            links.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`a[href="#${sectionId}"]`).classList.add('active');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>