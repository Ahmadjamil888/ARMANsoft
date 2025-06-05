@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMAN Soft - Innovative Software Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4F46E5;
            --primary-light: #6366F1;
            --primary-dark: #4338CA;
            --secondary: #10B981;
            --dark: #1F2937;
            --darker: #111827;
            --light: #F9FAFB;
            --gray: #6B7280;
            --light-gray: #E5E7EB;
            --white: #FFFFFF;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 25px rgba(0,0,0,0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--dark);
            background-color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1, h2, h3, h4 {
            font-family: 'Manrope', sans-serif;
            font-weight: 700;
            line-height: 1.2;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow-sm);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .logo-img {
            height: 40px;
            width: auto;
        }

        .logo-text {
            font-family: 'Manrope', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
            border: none;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 1px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.03) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.05) 0%, rgba(79, 70, 229, 0) 70%);
            z-index: 0;
        }

        .hero-content {
            display: flex;
            align-items: center;
            gap: 4rem;
            position: relative;
            z-index: 1;
        }

        .hero-text {
            flex: 1;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--darker);
        }

        .hero-title span {
            color: var(--primary);
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 2.5rem;
            max-width: 600px;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            font-family: 'Manrope', sans-serif;
        }

        .stat-text {
            font-size: 0.9rem;
            color: var(--gray);
        }

        .hero-image {
            flex: 1;
            position: relative;
        }

        .hero-img {
            width: 100%;
            max-width: 600px;
            border-radius: 12px;
            box-shadow: none;
            filter: grayscale(100%);    
        }

        

        .shape-1 {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-dark) 100%);
            border-radius: 30px;
            transform: rotate(45deg);
            opacity: 0.1;
            z-index: -1;
        }

        .shape-2 {
            position: absolute;
            bottom: -30px;
            right: -30px;
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--secondary) 0%, #34D399 100%);
            border-radius: 20px;
            transform: rotate(15deg);
            opacity: 0.1;
            z-index: -1;
        }

        /* Features Section */
        .features {
            padding: 6rem 0;
            background-color: var(--light);
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--darker);
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: var(--white);
            border-radius: 12px;
            padding: 2.5rem 2rem;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(79, 70, 229, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: var(--primary);
            font-size: 1.5rem;
        }

        .feature-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--darker);
        }

        .feature-text {
            color: var(--gray);
            font-size: 0.95rem;
        }

        /* CTA Section */
        .cta {
            padding: 6rem 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd' opacity='0.1'%3E%3Cg fill='%23FFFFFF' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 0;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta-text {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .cta-button {
            background-color: var(--white);
            color: var(--primary);
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 700;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: var(--transition);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        /* Footer */
        footer {
            background-color: var(--darker);
            color: var(--light-gray);
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
            text-decoration: none;
        }

        .footer-logo-img {
            height: 36px;
            width: auto;
        }

        .footer-logo-text {
            font-family: 'Manrope', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--white);
        }

        .footer-about {
            font-size: 0.95rem;
            line-height: 1.7;
            opacity: 0.8;
            margin-bottom: 1.5rem;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: var(--transition);
        }

        .social-link:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        .footer-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.75rem;
        }

        .footer-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-link {
            margin-bottom: 0.75rem;
        }

        .footer-link a {
            color: var(--light-gray);
            text-decoration: none;
            font-size: 0.95rem;
            opacity: 0.8;
            transition: var(--transition);
        }

        .footer-link a:hover {
            color: var(--white);
            opacity: 1;
            padding-left: 5px;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            text-align: center;
            font-size: 0.9rem;
            opacity: 0.7;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .hero-content {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-stats {
                justify-content: center;
            }

            .hero-image {
                margin-top: 3rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .cta-title {
                font-size: 2rem;
            }

            .nav-links {
                display: none;
            }

            .auth-buttons {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-stats {
                flex-direction: column;
                gap: 1.5rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .cta-title {
                font-size: 1.75rem;
            }
        }
        .orange{
            background-color: #4338ca;
            width: 100%;
            height: 100px;
            margin-top: -102px;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Transform Your Business With <span>ARMAN Soft</span></h1>
                    <p class="hero-subtitle">Powerful, intuitive software solutions designed to streamline your operations and drive growth. Join thousands of businesses that trust our platform.</p>
                    
                    <div class="hero-buttons">
                        <a href="/contact" class="btn btn-primary">Get Started</a>
                        <a href="/about" class="btn btn-outline">Learn More</a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">10K+</span>
                            <span class="stat-text">Happy Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">24/7</span>
                            <span class="stat-text">Support</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">99.9%</span>
                            <span class="stat-text">Uptime</span>
                        </div>
                    </div>
                </div>

                <div class="hero-image">
                    <img src="https://aurionsoft.site/wp-content/uploads/revslider/startup-features-2/woman3.png" alt="ARMAN Soft Dashboard" class="hero-img">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="orange"></div>
    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Why Choose ARMAN Soft?</h2>
                <p class="section-subtitle">Our comprehensive suite of tools is designed to help your business thrive in the digital age.</p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3 class="feature-title">Lightning Fast Performance</h3>
                    <p class="feature-text">Optimized for speed with cutting-edge technology to ensure your operations run smoothly without delays.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Enterprise-Grade Security</h3>
                    <p class="feature-text">Military-grade encryption and regular security audits to keep your data safe from threats.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="feature-title">Customizable Solutions</h3>
                    <p class="feature-text">Tailor our platform to your specific needs with flexible modules and configurations.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Actionable Analytics</h3>
                    <p class="feature-text">Powerful reporting tools that turn your data into actionable business insights.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3 class="feature-title">Cloud & On-Premise</h3>
                    <p class="feature-text">Deployment options to suit your infrastructure preferences and compliance needs.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Dedicated Support</h3>
                    <p class="feature-text">Our expert team is available around the clock to ensure your success with our platform.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Transform Your Business?</h2>
                <p class="cta-text">Join thousands of businesses that trust ARMAN Soft to power their operations. Get started with a free 14-day trial - no credit card required.</p>
                <a href="/contact" class="btn cta-button">Start Free Trial</a>
            </div>
        </div>
    </section>
</body>
</html>
@include('footer')