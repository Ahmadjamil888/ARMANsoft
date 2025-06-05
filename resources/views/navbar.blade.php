<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARMAN Soft - Professional Software Solutions</title>
    <style>
        :root {
            --primary-color: #6e48aa;
            --primary-hover: #5d3a8f;
            --secondary-color: #28a745;
            --secondary-hover: #218838;
            --dashboard-color: #4f46e5;
            --dashboard-hover: #4338ca;
            --text-light: #ffffff;
            --text-dark: #1b1b18;
            --bg-light: #ffffff;
            --bg-dark: #121212;
            --border-light: #e0e0e0;
            --border-dark: #2c2c2c;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
            --transition: all 0.3s ease;
            --nav-link-color: #444;
            --nav-link-hover: #6e48aa;
        }

        .custom-header {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto 1.5rem auto;
            padding: 1rem 2rem;
            background-color: var(--bg-light);
            border: 1px solid var(--border-light);
            border-radius: 12px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            font-family: "Segoe UI", -apple-system, BlinkMacSystemFont, sans-serif;
            margin-top: 10px;
        }
        
        .custom-header.dark {
            background-color: var(--bg-dark);
            border-color: var(--border-dark);
            color: var(--text-light);
        }

        .custom-header.dark .nav-main a {
            color: var(--text-light);
        }

        .custom-header.dark .nav-main a:hover {
            color: #b389f5;
        }

        .custom-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .site-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .site-logo {
            height: 32px;
            width: auto;
        }

        .site-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
            letter-spacing: -0.5px;
        }

        .custom-header.dark .site-title {
            color: var(--text-light);
        }

        .site-tagline {
            font-size: 0.85rem;
            color: #666;
            margin-top: 0.25rem;
        }

        .custom-header.dark .site-tagline {
            color: #aaa;
        }

        .nav-container {
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .nav-main {
            display: flex;
            gap: 1.5rem;
        }

        .nav-main a {
            color: var(--nav-link-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: var(--transition);
            padding: 0.5rem 0;
            position: relative;
        }

        .nav-main a:hover {
            color: var(--nav-link-hover);
        }

        .nav-main a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-main a:hover::after {
            width: 100%;
        }

        .nav-main a.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-main a.active::after {
            width: 100%;
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .nav-actions a {
            padding: 0.6rem 1.2rem;
            font-size: 0.95rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .btn-login {
            color: var(--text-light);
            border: 1px solid transparent;
            background-color: var(--primary-color);
        }

        .btn-login:hover {
            background-color: var(--primary-hover);
            transform: translateY(-1px);
        }

        .btn-register {
            color: var(--text-light);
            background-color: var(--secondary-color);
            border: none;
        }

        .btn-register:hover {
            background-color: var(--secondary-hover);
            transform: translateY(-1px);
        }

        .btn-dashboard {
            color: var(--text-light);
            background-color: var(--dashboard-color);
            border: none;
        }

        .btn-dashboard:hover {
            background-color: var(--dashboard-hover);
            transform: translateY(-1px);
        }

        .theme-toggle {
            background: none;
            border: none;
            cursor: pointer;
            color: inherit;
            font-size: 1.2rem;
            padding: 0.5rem;
            border-radius: 50%;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--nav-link-color);
        }

        .custom-header.dark .mobile-menu-btn {
            color: var(--text-light);
        }

        @media (max-width: 992px) {
            .nav-main {
                gap: 1rem;
            }
        }

        @media (max-width: 768px) {
            .custom-header {
                padding: 0.8rem 1.2rem;
                border-radius: 8px;
            }
            
            .custom-nav {
                gap: 1rem;
            }
            
            .site-title {
                font-size: 1.2rem;
            }
            
            .nav-container {
                gap: 1rem;
            }
            
            .nav-main {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: var(--bg-light);
                flex-direction: column;
                padding: 1rem;
                gap: 0.5rem;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .custom-header.dark .nav-main {
                background-color: var(--bg-dark);
                border: 1px solid var(--border-dark);
            }
            
            .nav-main.active {
                display: flex;
            }
            
            .nav-main a {
                padding: 0.75rem;
            }
            
            .mobile-menu-btn {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .custom-header {
                margin-bottom: 1rem;
            }
            
            .site-tagline {
                display: none;
            }
            
            .nav-actions a {
                padding: 0.5rem 0.8rem;
                font-size: 0.85rem;
            }
        }
        

    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <header class="custom-header">
        <nav class="custom-nav">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="{{ url('/') }}" class="site-brand">
                    
                    <div>
                        <div class="site-title">ARMAN Soft</div>
                        <div class="site-tagline">Innovative Software Solutions</div>
                    </div>
                </a>
            </div>

            <div class="nav-container">
                <div class="nav-main" id="mainNav">
                    <a href="{{ url('/') }}" class="active"><i class="fas fa-home"></i> Home</a>
                    <a href="{{ url('/about') }}"><i class="fas fa-info-circle"></i> About</a>
                    <a href="{{ url('/services') }}"><i class="fas fa-cogs"></i> Services</a>
                    
                    <a href="{{ url('/contact') }}"><i class="fas fa-envelope"></i> Contact</a>
                </div>

                <div class="nav-actions">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn-dashboard">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-login">
                            <i class="fas fa-sign-in-alt"></i> Log in
                        </a>

                       {{--  @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-register">
                                <i class="fas fa-user-plus"></i> Register
                            </a>
                        @endif--}}
                    @endauth
                    
                    <button class="theme-toggle" id="themeToggle">
                        <i class="fas fa-moon"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <script>
        
        // Theme toggle functionality
        document.getElementById('themeToggle').addEventListener('click', function() {
            const header = document.querySelector('.custom-header');
            header.classList.toggle('dark');
            
            const icon = this.querySelector('i');
            if (header.classList.contains('dark')) {
                icon.classList.remove('fa-moon');
                icon.classList.add('fa-sun');
            } else {
                icon.classList.remove('fa-sun');
                icon.classList.add('fa-moon');
            }
        });

        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.getElementById('mainNav').classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        const navLinks = document.querySelectorAll('.nav-main a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mainNav').classList.remove('active');
            });
        });

        // Set active link based on current page
        const currentPage = window.location.pathname;
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>