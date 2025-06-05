@include('navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ARMAN Soft</title>
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
            border: 1px solid var(--primary);
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, 
                rgba(79, 70, 229, 0.08) 0%, 
                rgba(16, 185, 129, 0.04) 35%,
                rgba(255, 255, 255, 1) 100%);
            padding: 6rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.08) 0%, rgba(79, 70, 229, 0) 70%);
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 60%;
            height: 120%;
            background: radial-gradient(ellipse, rgba(16, 185, 129, 0.06) 0%, rgba(16, 185, 129, 0) 70%);
            z-index: 0;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
        }

        .page-header-content {
            position: relative;
            z-index: 1;
        }

        .page-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--darker);
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: slideInUp 0.8s ease-out;
        }

        .page-subtitle {
            font-size: 1.3rem;
            color: var(--gray);
            max-width: 650px;
            margin: 0 auto;
            animation: slideInUp 0.8s ease-out 0.2s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Contact Section */
        .contact-section {
            padding: 8rem 0;
            position: relative;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 20%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.03) 0%, rgba(79, 70, 229, 0) 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulse 4s ease-in-out infinite;
        }

        .contact-section::after {
            content: '';
            position: absolute;
            bottom: 10%;
            right: -3%;
            width: 200px;
            height: 200px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.04) 0%, rgba(16, 185, 129, 0) 70%);
            border-radius: 50%;
            z-index: 0;
            animation: pulse 3s ease-in-out infinite reverse;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1) rotate(0deg); opacity: 0.5; }
            50% { transform: scale(1.1) rotate(180deg); opacity: 0.8; }
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
            position: relative;
            z-index: 1;
        }

        .contact-info {
            padding: 3rem 0;
            position: relative;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: -2rem;
            left: -2rem;
            width: calc(100% + 4rem);
            height: calc(100% + 4rem);
            background: linear-gradient(135deg, 
                rgba(79, 70, 229, 0.02) 0%, 
                rgba(255, 255, 255, 0.8) 50%,
                rgba(16, 185, 129, 0.02) 100%);
            border-radius: 20px;
            z-index: -1;
            animation: morphing 10s ease-in-out infinite;
        }

        @keyframes morphing {
            0%, 100% { border-radius: 20px 40px 30px 50px; }
            25% { border-radius: 40px 20px 50px 30px; }
            50% { border-radius: 30px 50px 20px 40px; }
            75% { border-radius: 50px 30px 40px 20px; }
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--darker);
        }

        .contact-info p {
            color: var(--gray);
            margin-bottom: 2rem;
            line-height: 1.7;
        }

        .contact-details {
            list-style: none;
            margin-bottom: 2rem;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.02) 100%);
            border-radius: 16px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            animation: fadeInLeft 0.6s ease-out;
        }

        .contact-detail:nth-child(2) { animation-delay: 0.1s; }
        .contact-detail:nth-child(3) { animation-delay: 0.2s; }
        .contact-detail:nth-child(4) { animation-delay: 0.3s; }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .contact-detail::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(79, 70, 229, 0.1) 50%, 
                transparent 100%);
            transition: left 0.5s ease;
        }

        .contact-detail:hover::before {
            left: 100%;
        }

        .contact-detail:hover {
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.05) 100%);
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.1);
            transform: translateY(-5px) scale(1.02);
        }

        .contact-icon {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.3rem;
            position: relative;
            overflow: hidden;
            animation: iconPulse 2s ease-in-out infinite;
        }

        .contact-icon::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.3) 50%, transparent 70%);
            transform: rotate(45deg);
            animation: iconShine 3s linear infinite;
        }

        @keyframes iconPulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(79, 70, 229, 0.4); }
            50% { box-shadow: 0 0 0 10px rgba(79, 70, 229, 0); }
        }

        @keyframes iconShine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .contact-text {
            flex: 1;
        }

        .contact-text h4 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--darker);
            margin-bottom: 0.25rem;
        }

        .contact-text span {
            color: var(--gray);
            font-size: 0.95rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-link {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.1) 0%, rgba(79, 70, 229, 0.05) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            position: relative;
            overflow: hidden;
        }

        .social-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            border-radius: 50%;
            transform: scale(0);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 0;
        }

        .social-link i {
            position: relative;
            z-index: 1;
            transition: color 0.3s ease;
        }

        .social-link:hover::before {
            transform: scale(1);
        }

        .social-link:hover {
            transform: translateY(-5px) rotate(5deg);
            box-shadow: 0 10px 25px rgba(79, 70, 229, 0.3);
        }

        .social-link:hover i {
            color: var(--white);
        }

        /* Contact Form */
        .contact-form {
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.01) 100%);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(79, 70, 229, 0.1);
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(79, 70, 229, 0.1);
        }

        .contact-form::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(79, 70, 229, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.03) 0%, transparent 50%);
            z-index: 0;
        }

        .contact-form > * {
            position: relative;
            z-index: 1;
        }

        .form-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--darker);
        }

        .form-group {
            margin-bottom: 2rem;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 600;
            color: var(--darker);
            transition: var(--transition);
        }

        .form-input,
        .form-textarea,
        .form-select {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid var(--light-gray);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.01) 100%);
            position: relative;
        }

        .form-input:focus,
        .form-textarea:focus,
        .form-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
            transform: translateY(-2px);
            background: var(--white);
        }

        .form-input:focus + .form-label,
        .form-textarea:focus + .form-label,
        .form-select:focus + .form-label {
            color: var(--primary);
            transform: translateY(-2px);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: var(--white);
            padding: 1.25rem 2.5rem;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(79, 70, 229, 0.3);
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(255, 255, 255, 0.2) 50%, 
                transparent 100%);
            transition: left 0.5s ease;
        }

        .submit-btn:hover::before {
            left: 100%;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary) 100%);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(79, 70, 229, 0.4);
        }

        .submit-btn:active {
            transform: translateY(-1px) scale(0.98);
        }

        .submit-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
            background: var(--gray);
        }

        /* Success Message */
        .success-message {
            background: linear-gradient(135deg, #10B981 0%, #34D399 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            text-align: center;
            display: none;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
        }

        .success-message::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(255, 255, 255, 0.2) 50%, 
                transparent 100%);
            animation: successShine 2s ease-in-out infinite;
        }

        @keyframes successShine {
            0% { left: -100%; }
            50% { left: 100%; }
            100% { left: 100%; }
        }

        .success-message.show {
            display: block;
            animation: successSlide 0.5s ease-out;
        }

        @keyframes successSlide {
            from {
                opacity: 0;
                transform: translateY(-20px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* FAQ Section */
        .faq-section {
            padding: 8rem 0;
            background: linear-gradient(135deg, 
                rgba(79, 70, 229, 0.02) 0%, 
                var(--light) 30%,
                rgba(16, 185, 129, 0.02) 100%);
            position: relative;
            overflow: hidden;
        }

        .faq-section::before {
            content: '';
            position: absolute;
            top: 10%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(79, 70, 229, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            animation: floatReverse 8s ease-in-out infinite;
        }

        .faq-section::after {
            content: '';
            position: absolute;
            bottom: 10%;
            left: -10%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.05) 0%, transparent 70%);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes floatReverse {
            0%, 100% { transform: translateY(0px) translateX(0px) rotate(0deg); }
            50% { transform: translateY(-30px) translateX(20px) rotate(180deg); }
        }

        .faq-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .faq-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--darker);
        }

        .faq-subtitle {
            font-size: 1.1rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 1.5rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .faq-item {
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.02) 100%);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(79, 70, 229, 0.08);
        }

        .faq-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 0;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            transition: height 0.3s ease;
        }

        .faq-item:hover::before {
            height: 100%;
        }

        .faq-item:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 15px 40px rgba(79, 70, 229, 0.12);
            background: linear-gradient(135deg, var(--white) 0%, rgba(79, 70, 229, 0.04) 100%);
        }

        .faq-question {
            font-weight: 600;
            color: var(--darker);
            margin-bottom: 0.75rem;
        }

        .faq-answer {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.6;
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

        .footer-social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: var(--transition);
            text-decoration: none;
        }

        .footer-social-link:hover {
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
            .contact-container {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            
            .contact-form {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2.5rem;
            }

            .page-subtitle {
                font-size: 1.1rem;
            }

            .faq-title {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }

            .auth-buttons {
                display: none;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                font-size: 2rem;
            }

            .contact-form {
                padding: 1.5rem;
            }

            .faq-title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title">Contact Us</h1>
                <p class="page-subtitle">Get in touch with our team. We're here to help you succeed with our software solutions.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Let's Start a Conversation</h3>
                    <p>Ready to transform your business? Our team of experts is here to help you find the perfect solution for your needs. Reach out to us and let's discuss how ARMAN Soft can drive your business forward.</p>
                    
                    <ul class="contact-details">
                        <li class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <span>+92 333 810 7788</span>
                            </div>
                        </li>
                        <li class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <span>shazabjamildhami@gmail.com</span>
                            </div>
                        </li>
                        <li class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <span>Gujranwala, Punjab, Pakistan</span>
                            </div>
                        </li>
                        <li class="contact-detail">
                            <div class="contact-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Business Hours</h4>
                                <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
                            </div>
                        </li>
                    </ul>

                    <div class="social-links">
                        <a href="#" class="social-link">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <div class="contact-form">
                    <div class="success-message" id="successMessage">
                        <i class="fas fa-check-circle"></i> Thank you! Your message has been sent successfully. We'll get back to you soon.
                    </div>
                    
                    <h3 class="form-title">Send us a Message</h3>
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName" class="form-label">First Name *</label>
                                <input type="text" id="firstName" name="firstName" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName" class="form-label">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" class="form-input" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" id="email" name="email" class="form-input" required>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="form-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="company" class="form-label">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="subject" class="form-label">Subject *</label>
                            <select id="subject" name="subject" class="form-select" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="demo">Request Demo</option>
                                <option value="pricing">Pricing Information</option>
                                <option value="support">Technical Support</option>
                                <option value="partnership">Partnership</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Tell us about your project or how we can help you..." required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <span class="btn-text">Send Message</span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="faq-header">
                <h2 class="faq-title">Frequently Asked Questions</h2>
                <p class="faq-subtitle">Find quick answers to common questions about our services and platform.</p>
            </div>

            <div class="faq-grid">
                <div class="faq-item">
                    <h4 class="faq-question">How quickly can we get started?</h4>
                    <p class="faq-answer">Most clients can be up and running within 24-48 hours. Our team will work with you to ensure a smooth onboarding process.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">Do you offer custom integrations?</h4>
                    <p class="faq-answer">Yes, we provide custom integrations with your existing systems. Our technical team will assess your needs and provide a tailored solution.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">What kind of support do you provide?</h4>
                    <p class="faq-answer">We offer 24/7 support through multiple channels including chat, email, and phone. Our dedicated support team is always ready to help.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">Is there a free trial available?</h4>
                    <p class="faq-answer">Yes, we offer a 14-day free trial with full access to all features. No credit card required to get started.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">Can I cancel my subscription anytime?</h4>
                    <p class="faq-answer">Absolutely. You can cancel your subscription at any time with no penalties. We believe in flexible, commitment-free service.</p>
                </div>
                <div class="faq-item">
                    <h4 class="faq-question">Do you provide training for our team?</h4>
                    <p class="faq-answer">Yes, we offer comprehensive training sessions for your team to ensure everyone can make the most of our platform.</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = document.querySelector('.submit-btn');
            const btnText = submitBtn.querySelector('.btn-text');
            const successMessage = document.getElementById('successMessage');
            
            // Disable button and show loading state
            submitBtn.disabled = true;
            btnText.textContent = 'Sending...';
            
            // Simulate form submission (replace with actual API call)
            setTimeout(() => {
                // Show success message
                successMessage.classList.add('show');
                
                // Reset form
                this.reset();
                
                // Reset button
                submitBtn.disabled = false;
                btnText.textContent = 'Send Message';
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.classList.remove('show');
                }, 5000);
            }, 1500);
        });

        // Add smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add input focus animations
        document.querySelectorAll('.form-input, .form-textarea, .form-select').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>
@include('footer')