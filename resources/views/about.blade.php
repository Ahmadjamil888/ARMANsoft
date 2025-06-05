@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ARMAN Soft</title>
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

        /* Hero Section */
        .about-hero {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05) 0%, rgba(255, 255, 255, 1) 100%);
            padding: 8rem 0 6rem;
            position: relative;
            overflow: hidden;
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 120px;
            height: 120px;
            background: var(--gradient-1);
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 80px;
            height: 80px;
            background: var(--gradient-2);
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            background: var(--gradient-3);
            top: 10%;
            right: 20%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .hero-content {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
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
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
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

        /* Story Section */
        .story-section {
            padding: 8rem 0;
            background-color: var(--white);
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .story-text {
            position: relative;
        }

        .story-text::before {
            content: '"';
            position: absolute;
            top: -2rem;
            left: -1rem;
            font-size: 8rem;
            color: var(--primary);
            opacity: 0.1;
            font-family: serif;
        }

        .story-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: var(--darker);
        }

        .story-subtitle {
            font-size: 1.1rem;
            color: var(--gray);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .story-highlight {
            background-color: rgba(79, 70, 229, 0.05);
            padding: 2rem;
            border-radius: 12px;
            border-left: 4px solid var(--primary);
            margin: 2rem 0;
        }

        .story-visual {
            position: relative;
        }

        .timeline {
            position: relative;
            padding: 2rem 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            flex: 1;
            background-color: var(--white);
            padding: 1.5rem;
            border-radius: 12px;
            box-shadow: var(--shadow-sm);
            margin: 0 2rem;
            transition: var(--transition);
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
        }

        .timeline-year {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .timeline-text {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .timeline-dot {
            position: absolute;
            left: 50%;
            width: 16px;
            height: 16px;
            background-color: var(--primary);
            border-radius: 50%;
            transform: translateX(-50%);
            z-index: 1;
        }

        /* Values Section */
        .values-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, var(--light) 0%, rgba(79, 70, 229, 0.02) 100%);
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

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .value-card {
            background-color: var(--white);
            border-radius: 20px;
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
            border: 1px solid rgba(79, 70, 229, 0.1);
        }

        .value-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-1);
        }

        .value-card:nth-child(2)::before {
            background: var(--gradient-2);
        }

        .value-card:nth-child(3)::before {
            background: var(--gradient-3);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .value-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 2rem;
            background: var(--gradient-1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2rem;
        }

        .value-card:nth-child(2) .value-icon {
            background: var(--gradient-2);
        }

        .value-card:nth-child(3) .value-icon {
            background: var(--gradient-3);
        }

        .value-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--darker);
        }

        .value-text {
            color: var(--gray);
            line-height: 1.7;
        }

        /* Team Section */
        .team-section {
            padding: 8rem 0;
            background-color: var(--white);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .team-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background-color: var(--white);
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-xl);
        }

        .team-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-dark) 100%);
            position: relative;
            overflow: hidden;
        }

        .team-image::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120px;
            height: 120px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .team-image i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3rem;
            color: var(--white);
        }

        .team-info {
            padding: 2rem;
            text-align: center;
        }

        .team-name {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--darker);
        }

        .team-role {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .team-bio {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .team-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(79, 70, 229, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: var(--transition);
            text-decoration: none;
        }

        .social-link:hover {
            background-color: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* Stats Section */
        .stats-section {
            padding: 6rem 0;
            background: var(--gradient-1);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23FFFFFF' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 0;
        }

        .stats-content {
            position: relative;
            z-index: 1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-item {
            position: relative;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            font-family: 'Manrope', sans-serif;
            display: block;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .stat-description {
            font-size: 0.9rem;
            opacity: 0.7;
            margin-top: 0.5rem;
        }

        /* CTA Section */
        .cta-section {
            padding: 8rem 0;
            background-color: var(--darker);
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
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
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--white);
            border: 2px solid var(--white);
        }

        .btn-secondary:hover {
            background-color: var(--white);
            color: var(--darker);
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            .story-content {
                grid-template-columns: 1fr;
                gap: 4rem;
            }

            .timeline::before {
                left: 2rem;
            }

            .timeline-item {
                flex-direction: row !important;
                padding-left: 4rem;
            }

            .timeline-content {
                margin: 0 0 0 2rem;
            }

            .timeline-dot {
                left: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .story-title {
                font-size: 2rem;
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

            .value-card {
                padding: 2rem 1.5rem;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
        <div class="container">
            <div class="hero-content">
                <div class="breadcrumb">
                    <a href="#">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>About Us</span>
                </div>
                <h1 class="hero-title">Crafting Digital Excellence Since Day One</h1>
                <p class="hero-subtitle">We're not just another software company. We're innovators, problem-solvers, and partners in your digital transformation journey.</p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2 class="story-title">Our Journey Started With A Simple Belief</h2>
                    <p class="story-subtitle">Every business deserves access to powerful, intuitive software that doesn't break the bank or require a PhD to operate. That belief sparked the creation of ARMAN Soft in 2019.</p>
                    
                    <div class="story-highlight">
                        <p><strong>The Challenge:</strong> Small and medium businesses were stuck with either expensive enterprise solutions or inadequate basic tools. There had to be a better way.</p>
                    </div>

                    <p class="story-subtitle">What started as a weekend project between friends has grown into a platform trusted by over 10,000 businesses worldwide. But our core mission remains unchanged: democratizing access to enterprise-grade software solutions.</p>
                </div>

                <div class="story-visual">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-year">2019</div>
                                <div class="timeline-text">Founded ARMAN Soft with our first product launch</div>
                            </div>
                            <div class="timeline-dot"></div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-year">2020</div>
                                <div class="timeline-text">Reached 1,000 active users and launched mobile app</div>
                            </div>
                            <div class="timeline-dot"></div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-year">2022</div>
                                <div class="timeline-text">Expanded internationally and introduced AI features</div>
                            </div>
                            <div class="timeline-dot"></div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-content">
                                <div class="timeline-year">2024</div>
                                <div class="timeline-text">10,000+ businesses trust ARMAN Soft platform</div>
                            </div>
                            <div class="timeline-dot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Drives Us Forward</h2>
                <p class="section-subtitle">Our values aren't just words on a wall. They're the principles that guide every decision, every feature, and every interaction.</p>
            </div>

            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Innovation First</h3>
                    <p class="value-text">We don't just follow trends, we set them. Our team constantly pushes boundaries to deliver solutions that are years ahead of the competition.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="value-title">Customer Obsession</h3>
                    <p class="value-text">Your success is our success. Every feature we build, every update we release, starts with understanding what you actually need.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="value-title">Trust & Transparency</h3>
                    <p class="value-text">No hidden fees, no confusing terms, no compromises on security. We believe in honest relationships built on mutual respect.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Meet The Minds Behind ARMAN Soft</h2>
                <p class="section-subtitle">A diverse team of dreamers, builders, and problem-solvers working together to revolutionize how businesses operate.</p>
            </div>

            <div class="team-grid">
                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Ahmad Dhami</h3>
                        <div class="team-role">CEO & Co-Founder</div>
                        <p class="team-bio">Former Google engineer with 10+ years of experience building scalable platforms. Sarah leads our vision and strategy.</p>
                        <div class="team-social">
                            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Ameer Hamza</h3>
                        <div class="team-role">CTO & Co-Founder</div>
                        <p class="team-bio">Full-stack architect who believes great software should be invisible to the user but powerful under the hood.</p>
                        <div class="team-social">
                            <a href="https://pk.linkedin.com/in/ameer-hamza-b7a59a216?trk=people-guest_people_search-card" class="social-link"><i class="fab fa-linkedin"></i></a>
                            <a href="https://www.facebook.com/ameer.hamzahksa" class="social-link"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="team-info">
                        <h3 class="team-name">Elena Petrov</h3>
                        <div class="team-role">Head of Design</div>
                        <p class="team-bio">Award-winning UX designer who turns complex workflows into delightfully simple experiences that users actually love.</p>
                        <div class="team-social">
                            <a href="#" class="social-link"><i class="fab fa-dribbble"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   </body>
   </html>
                        @include('footer')