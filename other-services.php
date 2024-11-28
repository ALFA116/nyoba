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
                <li><a href="index.php#work">Work</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Product & Solutions <span class="arrow-down">▼</span></a>
                    <div class="dropdown-content">
                        <a href="ip-telephony-solution.php">IP Telephony Solution</a>
                        <a href="network-connectivity.php" class="active">Network & Connectivity Solution</a>
                        <a href="other-services.php">Other IT Services</a>
                    </div>
                </li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
            <a href="https://wa.me/6285972510714" class="navbar-button">Contact Sales</a>
        </nav>
    </header>

    <main>
        <section class="other-nav">
            <h1 class="other-title">OTHER IT SERVICES</h1>
            <h2 class="other-subtitle"><strong>Let's Fix Issues</strong> with Innovation</h2>
            <nav>
                <ul class="other-telephony-nav">
                    <li><a href="#vapt" class="other-telephony-nav-link-active" onclick="showSection('vapt')">VAPT</a></li>
                    <li><a href="#phising-simulation" class="other-telephony-nav-link" onclick="showSection('phising-simulation')">PHISING SIMULATION</a></li>
                    <li><a href="#datacenter-design-audit" class="other-telephony-nav-link" onclick="showSection('datacenter-design-audit')">DATACENTER & DESIGN AUDIT</a></li>
                    <li><a href="#web-mobile-apps-development" class="other-telephony-nav-link" onclick="showSection('web-mobile-apps-development')">WEB & MOBILE APPS DEVELOPMENT</a></li>
                    <li><a href="#contact-center-solution" class="other-telephony-nav-link" onclick="showSection('contact-center-solution')">CONTACT CENTER SOLUTION</a></li>
                </ul>
            </nav>

            <div id="vapt" class="tab-content" style="display: block;">
                <div class="vapt-content">
                    <img src="photo/vapt.png" alt="Vapt Diagram" class="vapt-image">
                    <div class="vapt-details">
                        <h2 class="vapt-title">
                            <bold>Vulnerability Assessment</bold> and Penetration Testing.
                        </h2>
                        <p class="vapt-description">In today’s internet age, protecting organization’s information systems is critical.</br>
                            That is where Vulnerability Assessment Penetration Testing (VAPT) takes part.</br>
                            VAPT service covers the process of identifying, exploiting, and reporting security vulnerabilities to ensure they can be patched before attackers can exploit them. At First Routes, our team of security experts has high qualification and broad experience in conducting comprehensive VAPT assessments to identify vulnerabilities in any organizations.</br>
                            We cover internal and external infrastructure testing not limited to web application testing, wireless network testing, mobile application testing, build and network infrastructure testing, and social engineering testing.</p>
                    </div>
                </div>
            </div>
            <div id="phising-simulation" class="tab-content" style="display: none;">
                <div class="phising-content">
                    <img src="photo/phising.jpg" alt="Phising Diagram" class="phising-image">
                    <div class="phising-details">
                        <h2 class="phising-title1">
                            <bold>Phishing Simulation</bold>
                        </h2>
                        <p class="phising-description">is a test that organizations can utilize to send realistic phishing email to employees in order to gauge their awareness of attacks and what to do with phishing emails when they receive them.</p>
                    </div>
                </div>
            </div>
            <div id="datacenter-design-audit" class="tab-content" style="display: none;">
                <div class="vapt-content">
                    <img src="photo/data.png" alt="Data Diagram" class="vapt-image">
                    <div class="vapt-details">
                        <h2 class="vapt-title1">
                            <bold>Data center is</bold> core assets in organization’s information system.
                        </h2>
                        <p class="vapt-description">Using proper knowledge and standard like TIA-942, our team can carry out a comprehensive audit of your data center facility and provide a completed analysis to identify the weakness and propose changes.</p>
                    </div>
                </div>
            </div>
            <div id="web-mobile-apps-development" class="tab-content" style="display: none;">
                <div class="vapt-content">
                    <img src="photo/webnew.jpg" alt="Apps Diagram" class="vapt-image">
                    <div class="vapt-details">
                        <h2 class="vapt-title1">
                            <bold>We are passionate to</bold> bring compelling website for each client.
                        </h2>
                        <p class="vapt-description">We will help you to build the website that is not only look great, but also meet target audiences. Our services range from custom WordPress design, logo design and branding, to more complicated web.</br>
                            A mobile software applications or mobile apps is a software application designed to run on a mobile device such as a mobile phones or tablet computer. With experience in handling corporate customers, we are able to design the proper mobile apps both for internal company and commercial uses.</br>
                            We want small medium business to have a compelling website; if you can envision it, we will work with you and bring your idea to life.</p>
                    </div>
                </div>
            </div>
            <div id="contact-center-solution" class="tab-content" style="display: none;">
                <div class="vapt-content">
                    <img src="photo/csnew.jpg" alt="Contact Diagram" class="vapt-image">
                    <div class="vapt-details">
                        <h2 class="vapt-title1">
                            <bold>For those Company</bold> who become call center provider.
                        </h2>
                        <p class="vapt-description">we have solutions for network setup, telephony system and special number 0-800 or 1-500, and CRM application for agents. we also have customized offer for brand owners who likely fully outsource call center services include manpower and premises. Scalable for large number of call center agents and available in city-center/urban location.</p>
                    </div>
                </div>
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
                </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showSection(tabId) { // Changed function name from showTab to showSection
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.style.display = 'none'; // Hide all tabs
            });
            document.getElementById(tabId).style.display = 'block'; // Show the selected tab

            // Update active link
            const links = document.querySelectorAll('.other-telephony-nav-link');
            links.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`a[href="#${tabId}"]`).classList.add('active');
        }
    </script>
</body>

</html>