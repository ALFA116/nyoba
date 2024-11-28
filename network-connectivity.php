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
        <section class="network-nav">
            <h1 class="network-title">NETWORK CONNECTIVITY SOLUTION</h1>
            <h2 class="network-subtitle"><strong>Let's Fix Issues</strong> with Innovation</h2>
            <nav>
                <ul class="network-telephony-nav">
                    <li><a href="#network-setup" class="network-telephony-nav-link active" onclick="showSection('network-setup')">Network Design and Installation</a></li>
                    <li><a href="#it-managed-service" class="network-telephony-nav-link" onclick="showSection('it-managed-service')">IT Network Managed Service</a></li>
                </ul>
            </nav>

            <div id="network-setup" class="tab-content" style="display: block;">
                <div class="network-content">
                    <img src="photo/networknew.jpg" alt="Network Diagram" class="network-image">
                    <div class="network-details">
                        <h2 class="network-title1"><strong>We specialize in network setup</strong> and troubleshooting for businesses.</h2>
                        <p class="network-description">Whether you need a basic local area network (LAN), wide area network (WAN), or wireless network, our networking engineers are ready to help.</br>
                            For small and medium companies, setup IT and telecommunication system will be time-consuming as it requires more than one department of information technology.
                            For us, vast experience in helping customers to develop their local and wide area network is our passion.</p>
                    </div>
                </div>
            </div>

            <div id="it-managed-service" class="tab-content" style="display: none;">
                <div class="it-network-content">
                    <img src="photo/networking.png" alt="Managed Service 1" class="it-network-image">
                    <div class="it-network-details">
                        <h2 class="it-network-title"><strong>IT Network Managed Service</strong></h2>
                        <p class="it-network-description">As company grows, the IT requirements get complex since it covers many aspects range from desktop service, network, internal application etc. Our service is to help small medium enterprises to handle this works to improve operations and cutting expenses while let clients focus on their businesses.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" style="display: none; margin-top: 50px; display: flex; justify-content: center; align-items: flex-start;">
            <div style="flex: 1; padding: 20px;">
                <img src="photo/contact-us.png" alt="Contact Us" style="width: 100%; max-width: 400px; border-radius: 10px;">
            </div>
            <div class="contact-section" style="flex: 2; padding: 40px; margin: 0 20px; background: linear-gradient(135deg, #CCFBFF, #EF96C5); border-radius: 25px; border: 2px solid #ddd; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h2 style="text-align: center; font-size: 36px; font-weight: bold; margin-bottom: 10px;">OUR CONTACT<h2>
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
            const links = document.querySelectorAll('.network-telephony-nav-link');
            links.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`a[href="#${tabId}"]`).classList.add('active');
        }
    </script>
</body>

</html>