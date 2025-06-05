<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMAN Soft - Footer Example</title>
    <style>
        :root {
            --primary-color: #0056b3;
            --secondary-color: #003366;
            --accent-color: #00a0e9;
            --text-color: #333;
            --light-text: #777;
            --background: #f8f9fa;
            --footer-bg: #2c3e50;
            --footer-text: #ecf0f1;
            --footer-link: #bdc3c7;
            --footer-link-hover: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--background);
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .footer-container {
            background-color: var(--footer-bg);
            color: var(--footer-text);
            padding: 60px 0 30px;
            font-size: 14px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }
        
        .footer-column h3 {
            color: var(--footer-text);
            font-size: 18px;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column ul li {
            margin-bottom: 15px;
        }
        
        .footer-column ul li a {
            color: var(--footer-link);
            text-decoration: none;
            transition: color 0.3s;
            display: block;
        }
        
        .footer-column ul li a:hover {
            color: var(--footer-link-hover);
            padding-left: 5px;
        }
        
        .footer-about p {
            color: var(--footer-link);
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .footer-social a {
            color: var(--footer-text);
            background-color: rgba(255, 255, 255, 0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        
        .footer-social a:hover {
            background-color: var(--accent-color);
        }
        
        .footer-contact p {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            color: var(--footer-link);
        }
        
        .footer-contact i {
            margin-right: 10px;
            color: var(--accent-color);
            font-size: 16px;
            margin-top: 3px;
        }
        
        .footer-newsletter input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--footer-text);
        }
        
        .footer-newsletter input::placeholder {
            color: var(--footer-link);
        }
        
        .footer-newsletter button {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .footer-newsletter button:hover {
            background-color: var(--primary-color);
        }
        
        .footer-bottom {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 20px 0;
            margin-top: 40px;
        }
        
        .footer-bottom-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .footer-copyright {
            color: var(--footer-link);
        }
        
        .footer-legal-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-legal-links a {
            color: var(--footer-link);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-legal-links a:hover {
            color: var(--footer-link-hover);
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 40px;
            margin-right: 10px;
        }
        
        .footer-logo span {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        
        @media (max-width: 768px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
            
            .footer-bottom-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .footer-legal-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
        
        @media (max-width: 480px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Main content would go here -->
    
    <footer class="footer-container">
        <div class="footer-content">
            <div class="footer-column footer-about">
                <div class="footer-logo">
                    
                    <span>ARMAN Soft</span>
                </div>
                <p>ARMAN Soft is a global leader in enterprise software solutions, helping organizations transform their operations through innovative technology. Founded in 2005, we serve clients in over 50 countries.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Products</h3>
                <ul>
                    <li><a href="#">ARMAN Enterprise Suite</a></li>
                    <li><a href="#">ARMAN Analytics</a></li>
                    <li><a href="#">ARMAN Cloud Platform</a></li>
                    <li><a href="#">ARMAN AI Solutions</a></li>
                    <li><a href="#">ARMAN Security</a></li>
                    <li><a href="#">ARMAN IoT Platform</a></li>
                    <li><a href="#">ARMAN CRM</a></li>
                    <li><a href="#">View All Products</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Solutions</h3>
                <ul>
                    <li><a href="#">For Healthcare</a></li>
                    <li><a href="#">For Financial Services</a></li>
                    <li><a href="#">For Retail</a></li>
                    <li><a href="#">For Manufacturing</a></li>
                    <li><a href="#">For Government</a></li>
                    <li><a href="#">For Education</a></li>
                    <li><a href="#">Industry Solutions</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Leadership</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Newsroom</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Corporate Responsibility</a></li>
                    <li><a href="#">Partners</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="footer-column footer-contact">
                <h3>Contact</h3>
                <p>
                    <i class="fas fa-map-marker-alt"></i>
                    ARMAN Soft Headquarters<br>
                    123 Tech Park Drive, Silicon Valley<br>
                    San Francisco, CA 94107, USA
                </p>
                <p>
                    <i class="fas fa-globe"></i>
                    Global Offices in 12 countries
                </p>
                <p>
                    <i class="fas fa-phone"></i>
                    +1 (800) 555-ARMAN
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    info@armansoft.com
                </p>
            </div>
            
            <div class="footer-column footer-newsletter">
                <h3>Newsletter</h3>
                <p>Subscribe to our newsletter for the latest updates and insights.</p>
                <input type="email" placeholder="Your email address">
                <button>Subscribe</button>
                <div style="margin-top: 20px;">
                    <h3>Download</h3>
                    <div style="display: flex; gap: 10px;">
                        <a href="#" style="display: block; background: #000; padding: 8px 12px; border-radius: 5px; color: white; text-decoration: none;">
                            <i class="fab fa-apple"></i> App Store
                        </a>
                        <a href="#" style="display: block; background: #000; padding: 8px 12px; border-radius: 5px; color: white; text-decoration: none;">
                            <i class="fab fa-google-play"></i> Google Play
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="footer-copyright">
                    &copy; 2025 ARMAN Soft Technologies Inc. All rights reserved.
                </div>
                <div class="footer-legal-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookie Policy</a>
                    <a href="#">GDPR Compliance</a>
                    <a href="#">Accessibility</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>