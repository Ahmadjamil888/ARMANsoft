@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - ARMAN Soft</title>
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
            --accent: #F59E0B;
            --purple: #8B5CF6;
            --pink: #EC4899;
            --dark: #1F2937;
            --darker: #111827;
            --light: #F9FAFB;
            --gray: #6B7280;
            --light-gray: #E5E7EB;
            --white: #FFFFFF;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.12);
            --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
            --shadow-lg: 0 10px 25px rgba(0,0,0,0.1);
            --shadow-xl: 0 20px 40px rgba(0,0,0,0.15);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --gradient-1: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            --gradient-2: linear-gradient(135deg, var(--secondary) 0%, #34D399 100%);
            --gradient-3: linear-gradient(135deg, var(--accent) 0%, #FBBF24 100%);
            --gradient-4: linear-gradient(135deg, var(--purple) 0%, #A855F7 100%);
            --gradient-5: linear-gradient(135deg, var(--pink) 0%, #F472B6 100%);
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
            border: none;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--white);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
        }

        /* Hero Section */
        .services-hero {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
        }

        .hero-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .floating-shape {
            position: absolute;
            border-radius: 20px;
            opacity: 0.1;
            animation: float 8s ease-in-out infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            background: var(--gradient-1);
            top: 15%;
            left: 5%;
            animation-delay: 0s;
            transform: rotate(45deg);
        }

        .shape-2 {
            width: 80px;
            height: 80px;
            background: var(--gradient-2);
            top: 70%;
            right: 10%;
            animation-delay: 2s;
            border-radius: 50%;
        }

        .shape-3 {
            width: 120px;
            height: 120px;
            background: var(--gradient-3);
            top: 30%;
            right: 25%;
            animation-delay: 4s;
        }

        .shape-4 {
            width: 60px;
            height: 60px;
            background: var(--gradient-4);
            top: 60%;
            left: 20%;
            animation-delay: 6s;
            border-radius: 50%;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            25% { transform: translateY(-15px) rotate(90deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
            75% { transform: translateY(-15px) rotate(270deg); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .breadcrumb a {
            color: var(--primary);
            text-decoration: none;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--darker);
            background: linear-gradient(135deg, var(--darker) 0%, var(--primary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--gray);
            margin-bottom: 3rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-features {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .hero-feature {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--gray);
            font-weight: 500;
        }

        .hero-feature i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        /* Services Grid */
        .services-main {
            padding: 8rem 0;
            background-color: var(--white);
        }

        .section-header {
            text-align: center;
            margin-bottom: 5rem;
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

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
        }

        .service-card {
            background-color: var(--white);
            border-radius: 24px;
            padding: 3rem 2.5rem;
            box-shadow: var(--shadow-sm);
            border: 1px solid rgba(79, 70, 229, 0.08);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--gradient-1);
            transition: var(--transition);
        }

        .service-card:nth-child(2)::before { background: var(--gradient-2); }
        .service-card:nth-child(3)::before { background: var(--gradient-3); }
        .service-card:nth-child(4)::before { background: var(--gradient-4); }
        .service-card:nth-child(5)::before { background: var(--gradient-5); }
        .service-card:nth-child(6)::before { background: var(--gradient-1); }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .service-card:hover::before {
            height: 12px;
        }

        .service-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--white);
            background: var(--gradient-1);
            flex-shrink: 0;
        }

        .service-card:nth-child(2) .service-icon { background: var(--gradient-2); }
        .service-card:nth-child(3) .service-icon { background: var(--gradient-3); }
        .service-card:nth-child(4) .service-icon { background: var(--gradient-4); }
        .service-card:nth-child(5) .service-icon { background: var(--gradient-5); }
        .service-card:nth-child(6) .service-icon { background: var(--gradient-1); }

        .service-title {
            font-size: 1.5rem;
            color: var(--darker);
            margin-bottom: 0.5rem;
        }

        .service-subtitle {
            color: var(--primary);
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .service-description {
            color: var(--gray);
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 2.5rem;
        }

        .service-features li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            color: var(--dark);
        }

        .service-features li i {
            color: var(--secondary);
            font-size: 0.9rem;
            width: 16px;
        }

        .service-price {
            display: flex;
            align-items: baseline;
            gap: 0.5rem;
            margin-bottom: 2rem;
        }

        .price-amount {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            font-family: 'Manrope', sans-serif;
        }

        .price-period {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .service-cta {
            display: flex;
            gap: 1rem;
        }

        .btn-service {
            flex: 1;
            justify-content: center;
            padding: 1rem;
            font-weight: 600;
        }

        /* Process Section */
        .process-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--light) 0%, rgba(79, 70, 229, 0.02) 100%);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .process-step {
            text-align: center;
            position: relative;
        }

        .process-step::before {
            content: '';
            position: absolute;
            top: 40px;
            left: 50%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary), var(--primary-light));
            transform: translateX(-50%);
            z-index: 0;
        }

        .process-step:last-child::before {
            display: none;
        }

        .step-number {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--gradient-1);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 auto 2rem;
            position: relative;
            z-index: 1;
            font-family: 'Manrope', sans-serif;
        }

        .process-step:nth-child(2) .step-number { background: var(--gradient-2); }
        .process-step:nth-child(3) .step-number { background: var(--gradient-3); }
        .process-step:nth-child(4) .step-number { background: var(--gradient-4); }

        .step-title {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--darker);
        }

        .step-description {
            color: var(--gray);
            line-height: 1.6;
        }

        /* Technologies Section */
        .tech-section {
            padding: 8rem 0;
            background-color: var(--white);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .tech-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 2rem 1rem;
            background-color: var(--light);
            border-radius: 16px;
            transition: var(--transition);
        }

        .tech-item:hover {
            transform: translateY(-5px);
            background-color: var(--white);
            box-shadow: var(--shadow-md);
        }

        .tech-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: var(--gradient-1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.5rem;
        }

        .tech-item:nth-child(2) .tech-icon { background: var(--gradient-2); }
        .tech-item:nth-child(3) .tech-icon { background: var(--gradient-3); }
        .tech-item:nth-child(4) .tech-icon { background: var(--gradient-4); }
        .tech-item:nth-child(5) .tech-icon { background: var(--gradient-5); }
        .tech-item:nth-child(6) .tech-icon { background: var(--gradient-1); }
        .tech-item:nth-child(7) .tech-icon { background: var(--gradient-2); }
        .tech-item:nth-child(8) .tech-icon { background: var(--gradient-3); }

        .tech-name {
            font-weight: 600;
            color: var(--darker);
            text-align: center;
        }

        /* FAQ Section */
        .faq-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--light) 0%, rgba(79, 70, 229, 0.02) 100%);
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: var(--white);
            border-radius: 12px;
            margin-bottom: 1.5rem;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .faq-question {
            width: 100%;
            background: none;
            border: none;
            padding: 2rem;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--darker);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }

        .faq-question:hover {
            background-color: rgba(79, 70, 229, 0.02);
        }

        .faq-answer {
            padding: 0 2rem 2rem;
            color: var(--gray);
            line-height: 1.7;
            display: none;
        }

        .faq-answer.active {
            display: block;
        }

        .faq-icon {
            color: var(--primary);
            transition: var(--transition);
        }

        .faq-question.active .faq-icon {
            transform: rotate(45deg);
        }

        /* CTA Section */
        .cta-section {
            padding: 8rem 0;
            background: var(--gradient-1);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFFFFF' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
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
            margin-bottom: 3rem;
            opacity: 0.9;
        }

        .cta-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-white {
            background-color: var(--white);
            color: var(--primary);
            border: 2px solid var(--white);
        }

        .btn-white:hover {
            background-color: transparent;
            color: var(--white);
        }

        .btn-outline-white {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-outline-white:hover {
            background-color: var(--white);
            color: var(--primary);
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .services-grid {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 2rem;
            }

            .process-step::before {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .service-card {
                padding: 2rem 1.5rem;
            }

            .hero-features {
                flex-direction: column;
                gap: 1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .nav-links {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .section-title {
                font-size: 1.75rem;
            }

            .service-cta {
                flex-direction: column;
            }

            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    
    <!-- Hero Section -->
    <section class="services-hero">
        <div class="hero-shapes">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
            <div class="floating-shape shape-4"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Services</span>
                </div>
                <h1 class="hero-title">Comprehensive Software Solutions</h1>
                <p class="hero-subtitle">From custom development to cloud migration, we provide end-to-end technology services that transform your business operations and accelerate growth.</p>
                
                <div class="hero-features">
                    <div class="hero-feature">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-shield-alt"></i>
                        <span>Enterprise Security</span>
                    </div>
                    <div class="hero-feature">
                        <i class="fas fa-rocket"></i>
                        <span>Rapid Deployment</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-main">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Service Portfolio</h2>
                <p class="section-subtitle">Choose from our comprehensive range of services designed to meet every aspect of your digital transformation journey.</p>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Custom Development</h3>
                            <div class="service-subtitle">Tailored Solutions</div>
                        </div>
                    </div>
                    <p class="service-description">Build powerful, scalable applications tailored to your unique business requirements. Our full-stack development team creates solutions that grow with your business.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Full-stack web applications</li>
                        <li><i class="fas fa-check"></i> Mobile app development</li>
                        <li><i class="fas fa-check"></i> API integration & development</li>
                        <li><i class="fas fa-check"></i> Database design & optimization</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-amount">$2,500</span>
                        <span class="price-period">starting from</span>
                    </div>
                    <div class="service-cta">
                        <a href="/contact" class="btn btn-primary btn-service">Get Quote</a>
                        <a href="/about" class="btn btn-outline btn-service">Learn More</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Cloud Solutions</h3>
                            <div class="service-subtitle">Scale & Secure</div>
                        </div>
                    </div>
                    <p class="service-description">Migrate to the cloud with confidence. We handle everything from infrastructure setup to data migration, ensuring zero downtime and maximum security.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Cloud migration services</li>
                        <li><i class="fas fa-check"></i> Infrastructure management</li>
                        <li><i class="fas fa-check"></i> Auto-scaling solutions</li>
                        <li><i class="fas fa-check"></i> 99.9% uptime guarantee</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-amount">$500</span>
                        <span class="price-period">per month</span>
                    </div>
                    <div class="service-cta">
                        <a href="/contact" class="btn btn-primary btn-service">Get Quote</a>
                        <a href="/about" class="btn btn-outline btn-service">Learn More</a>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div>
                            <h3 class="service-title">Business Analytics</h3>
                            <div class="service-subtitle">Data-Driven Insights</div>
                        </div>
                    </div>
                    <p class="service-description">Transform your data into actionable insights with our advanced analytics platform. Make informed decisions with real-time reporting and predictive analytics.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Cloud migration services</li>
                        <li><i class="fas fa-check"></i> Infrastructure management</li>
                        <li><i class="fas fa-check"></i> Auto-scaling solutions</li>
                        <li><i class="fas fa-check"></i> 99.9% uptime guarantee</li>
                    </ul>
                    <div class="service-price">
                        <span class="price-amount">$750</span>
                        <span class="price-period">per month</span>
                    </div>
                    <div class="service-cta">
                        <a href="/contact" class="btn btn-primary btn-service">Get Quote</a>
                        <a href="/about" class="btn btn-outline btn-service">Learn More</a>
                    </div>
                </div>
                        </section>
                        </body></html>
                        @include('footer')