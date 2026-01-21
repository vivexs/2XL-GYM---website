<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="2XL GYM - vrhunska teretana u Banjolama. Pridružite se našim grupnim treninzima ili izradite personalni plan.">
    <meta name="keywords" content="2xl gym, 2xl gym banjole, kamik banjole 29, teretana Banjole, teretana Pula, teretana, Gym, grupni treninzi, personalni trener, 2xl gym fitness, 2XL GYM">
    <link rel="icon" href="Images/2XLlogo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>2XL GYM</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #222222;
            color: #fff;
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: 80px;  
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            color: white;
            z-index: 1000;
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            animation: slideDown 0.5s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo {
            width: 90px; 
            height: auto;
            transition: all 0.3s ease;
            animation: logoPulse 3s infinite alternate;
        }

        @keyframes logoPulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.03); }
            100% { transform: scale(1); }
        }

        .logo:hover {
            transform: scale(1.05);
            animation-play-state: paused;
        }

        .nav-container {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links li a {
            text-decoration: none;
            color: white;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 600;
            position: relative;
            padding: 5px 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-icon {
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .nav-links li a:hover .nav-icon {
            transform: translateY(-2px);
        }

        .nav-links li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #e7a53c;
            transition: width 0.3s ease;
        }

        .nav-links li a:hover {
            color: #e7a53c;
        }

        .nav-links li a:hover::after {
            width: 100%;
        } 
        .nav-contact {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            padding-left: 20px;
        }
 
        .nav-contact::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 30px;
            width: 1px;
            background-color: rgba(255, 255, 255, 0.3);
        }

        .instagram-link {
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            padding: 8px 15px;
            border-radius: 30px;
            background-color: rgba(231, 165, 60, 0.1);
            border: 1px solid rgba(231, 165, 60, 0.3);
        }

        .instagram-link:hover {
            background-color: rgba(231, 165, 60, 0.2);
            color: #e7a53c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 165, 60, 0.2);
        }

        .instagram-link i {
            color: #e7a53c;
            font-size: 1.2rem;
        }

        .instagram-text {
            display: inline-block;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            z-index: 1001;
            padding: 10px;
            transition: transform 0.3s;
        }

        .mobile-menu-btn:hover {
            transform: rotate(90deg);
            color: #e7a53c;
        }

        @media (max-width: 992px) {
            .nav-contact {
                display: none;
            }
            
            .nav-container {
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.98);
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                gap: 0;
                transform: translateY(-100%);
                opacity: 0;
                transition: all 0.3s ease;
                z-index: 999;
                height: calc(100vh - 80px);
                overflow-y: auto;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .nav-links li {
                width: 100%;
                text-align: center;
                padding: 15px 0;
                border-bottom: 1px solid rgba(231, 165, 60, 0.3);
            }
            
            .nav-links li:last-child {
                border-bottom: none;
            }
            
            .nav-links li a {
                font-size: 1.2rem; 
                padding: 15px 0;
                display: flex;
                justify-content: center;
                width: 100%;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .mobile-instagram {
                display: flex;
                justify-content: center;
                margin-top: 20px;
                padding: 15px 0;
                border-top: 1px solid rgba(231, 165, 60, 0.3);
            }
            
            .mobile-instagram .instagram-link {
                background-color: rgba(231, 165, 60, 0.2);
                padding: 10px 20px;
                font-size: 1.1rem;
            }
        }

        .hero {
            height: 80vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
            animation: videoFadeIn 2s ease-out forwards;
        }

        @keyframes videoFadeIn {
            0% {
                opacity: 0;
                transform: scale(1.05);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7));
            z-index: -1;
            animation: overlayFadeIn 1.5s ease-out 0.3s forwards;
            opacity: 0;
        }

        @keyframes overlayFadeIn {
            to {
                opacity: 1;
            }
        }

        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            z-index: 1;
            animation: contentFadeIn 1s ease-out 0.8s forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes contentFadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .hero h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            font-weight: 600;
            color: #e7a53c;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-block;
            background-color: #e7a53c;
            color: white;
            padding: 15px 40px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: 2px solid #e7a53c;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(231, 165, 60, 0.5); }
            70% { box-shadow: 0 0 0 10px rgba(231, 165, 60, 0); }
            100% { box-shadow: 0 0 0 0 rgba(231, 165, 60, 0); }
        }

        .cta-button:hover {
            background-color: transparent;
            color: #e7a53c;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(231, 165, 60, 0.3);
            animation-play-state: paused;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            text-transform: uppercase;
            margin-bottom: 15px;
            color: #e7a53c;
            font-weight: 700;
        }

        .section-title .divider {
            height: 4px;
            width: 80px;
            background-color: #e7a53c;
            margin: 0 auto;
            border-radius: 2px;
            animation: expandWidth 1s ease-out;
        }

        @keyframes expandWidth {
            from { width: 0; }
            to { width: 80px; }
        }

        .services {
            background-color: #0d0d0d;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .service-card {
            background-color: #222222;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            animation: fadeInUp 0.5s ease-out;
            animation-fill-mode: both;
        }

        .service-card:nth-child(1) { animation-delay: 0.2s; }
        .service-card:nth-child(2) { animation-delay: 0.4s; }
        .service-card:nth-child(3) { animation-delay: 0.6s; }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(231, 165, 60, 0.2);
        }

        .service-img {
            height: 200px;
            overflow: hidden; 
            background-color: #333;
            position: relative;
            background-size: cover;  
        }
        
        .service-img img {
            width: 100%;
            height: 100%; 
            display: block;
            background-color: #333; 
            object-fit: cover;
            object-position: center;
        }

        .loading-bars {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            display: flex;
            gap: 3px;
            padding: 0 10px;
        }

        .loading-bar {
            height: 100%;
            background: #e7a53c;
            flex: 1;
            animation: loading 1.5s infinite ease-in-out;
            transform-origin: bottom;
        }

        .loading-bar:nth-child(2) { animation-delay: 0.2s; }
        .loading-bar:nth-child(3) { animation-delay: 0.4s; }
        .loading-bar:nth-child(4) { animation-delay: 0.6s; }
        .loading-bar:nth-child(5) { animation-delay: 0.8s; }

        @keyframes loading {
            0%, 100% { transform: scaleY(0.3); }
            50% { transform: scaleY(1); }
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #e7a53c;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .service-icon {
            font-size: 1.3rem;
            animation: iconFloat 2s infinite ease-in-out;
        }

        @keyframes iconFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }

        .service-content p {
            color: #ccc;
            margin-bottom: 20px;
        }

        .service-badge {
            position: absolute;
            top: 20px;
            right: -30px;
            background-color: #e7a53c;
            color: white;
            padding: 5px 40px;
            transform: rotate(45deg);
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 10;
            animation: badgePulse 2s infinite;
        }

        @keyframes badgePulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        .gallery {
            background-color: #0d0d0d;
            position: relative;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .gallery-item {
            height: 250px;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            background-color: #333;
            transition: all 0.4s ease;
            animation: fadeIn 0.5s ease-out;
        }

        .gallery-item.hidden-mobile {
            display: block;
        }

        .gallery-toggle-btn {
            display: none;
            background-color: #e7a53c;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            cursor: pointer;
            margin: 30px auto;
            transition: all 0.3s ease;
            border: 2px solid #e7a53c;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-5px); }
            60% { transform: translateY(-3px); }
        }

        .gallery-toggle-btn:hover {
            background-color: transparent;
            color: #e7a53c;
            animation-play-state: paused;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(231, 165, 60, 0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-cta {
            text-align: center;
            margin-top: 50px;
        }

        .gallery-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background-color: transparent;
            color: #e7a53c;
            border: 2px solid #e7a53c;
            padding: 14px 35px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-size: 1rem;
        }

        .gallery-button:hover {
            background-color: #e7a53c;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(231, 165, 60, 0.3);
        }

        .gallery-button:hover i {
            transform: translateX(5px);
        }

        .gallery-button i {
            transition: transform 0.3s ease;
        }

        .lightbox-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 2000;
            overflow: hidden;
        }

        .lightbox-modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: zoomIn 0.4s ease;
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
            border-radius: 8px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.5);
        }

        .lightbox-caption {
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            text-align: center;
            color: white;
            font-size: 1.2rem;
            padding: 10px 0;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 2001;
            transition: all 0.3s ease;
        }

        .lightbox-close:hover {
            color: #e7a53c;
            transform: rotate(90deg);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(231, 165, 60, 0.8);
            color: white;
            border: none;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 2001;
        }

        .lightbox-nav:hover {
            background-color: #e7a53c;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 0 15px rgba(231, 165, 60, 0.5);
        }

        .lightbox-prev {
            left: 30px;
        }

        .lightbox-next {
            right: 30px;
        }

        .lightbox-counter {
            position: absolute;
            top: 20px;
            left: 30px;
            color: white;
            font-size: 1.2rem;
            z-index: 2001;
        }

        .pricing {
            background-color: #151515;
            overflow: hidden;
        }

        .pricing-carousel {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .pricing-track {
            display: flex;
            transition: transform 0.5s ease;
            gap: 25px;
            padding: 20px 0;
        }

        .pricing-card {
            background-color: #222222;
            border-radius: 8px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            flex: 0 0 calc(28% - 25px);
            min-width: 0;
            opacity: 0.7;
            transform: scale(0.9);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .pricing-card.active {
            opacity: 1;
            transform: scale(1);
            box-shadow: 0 10px 25px rgba(231, 165, 60, 0.2);
            border: 1px solid #e7a53c;
        }

        .pricing-card.popular {
            border: 2px solid #e7a53c;
        }

        .popular-badge {
            position: absolute;
            top: 20px;
            right: -30px;
            background-color: #e7a53c;
            color: white;
            padding: 5px 35px;
            transform: rotate(45deg);
            font-size: 0.7rem;
            font-weight: 600;
            animation: badgeFloat 3s infinite ease-in-out;
        }

        @keyframes badgeFloat {
            0%, 100% { transform: rotate(45deg) translateY(0); }
            50% { transform: rotate(45deg) translateY(-5px); }
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #e7a53c;
        }

        .price {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: white;
        }

        .price span {
            font-size: 0.9rem;
            color: #ccc;
        }

        .pricing-features {
            list-style: none;
            margin-bottom: 25px;
        }

        .pricing-features li {
            padding: 8px 0;
            border-bottom: 1px solid #333;
            color: #ccc;
            font-size: 0.9rem;
        }

        .pricing-features li:last-child {
            border-bottom: none;
        }

        .pricing-button {
            display: inline-block;
            background-color: #e7a53c;
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 0.3s ease;
            border: 2px solid #e7a53c;
            font-size: 0.9rem;
        }

        .pricing-button:hover {
            background-color: transparent;
            color: #e7a53c;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 165, 60, 0.2);
        }

        .carousel-controls {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 15px;
        }

        .carousel-btn {
            background-color: #e7a53c;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .carousel-btn:hover {
            background-color: #d1942e;
            transform: scale(1.1) rotate(10deg);
        }

        .carousel-indicators {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #555;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background-color: #e7a53c;
            transform: scale(1.2);
            box-shadow: 0 0 8px rgba(231, 165, 60, 0.5);
        }

        .contact {
            background-color: #0d0d0d;
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #e7a53c;
        }

        .contact-info p {
            margin-bottom: 15px;
            color: #ccc;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .contact-info i {
            color: #e7a53c;
            width: 20px;
        }

        .contact-form {
            background-color: #222222;
            padding: 30px;
            border-radius: 8px;
            animation: slideInRight 0.5s ease-out;
        }

        @keyframes slideInRight {
            from { transform: translateX(20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #ccc;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: #333;
            border: 1px solid #444;
            border-radius: 4px;
            color: white;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: #e7a53c;
            box-shadow: 0 0 0 2px rgba(231, 165, 60, 0.1);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: #e7a53c;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #d1942e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 165, 60, 0.2);
        }

        .map-container {
            margin-top: 50px;
            margin-left: 80px;
            margin-right: 80px;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            animation: slideInUp 0.5s ease-out;
        }

        @keyframes slideInUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            filter: grayscale(100%) contrast(90%) brightness(90%);
        }

        footer {
            background-color: #111;
            padding: 70px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 25px;
            color: #e7a53c;
            position: relative;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            height: 2px;
            width: 50px;
            background-color: #e7a53c;
            transition: width 0.3s ease;
        }

        .footer-col:hover h4::after {
            width: 70px;
        }

        .footer-col p {
            color: #ccc;
            margin-bottom: 15px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #333;
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: #e7a53c;
            transform: translateY(-3px) rotate(10deg);
        }

        .copyright {
            text-align: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #333;
            color: #ccc;
        }

        .copyright a {
            color: #e7a53c;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .copyright a:hover {
            text-decoration: underline;
        }

        @media (max-width: 1200px) {
            .pricing-card {
                flex: 0 0 calc(60% - 25px);
            }
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .hero h2 {
                font-size: 1.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .pricing-card {
                flex: 0 0 calc(45% - 15px);
            }

            .lightbox-nav {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .lightbox-prev {
                left: 15px;
            }

            .lightbox-next {
                right: 15px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.95);
                flex-direction: column;
                align-items: center;
                padding: 20px 0;
                gap: 0;
                transform: translateY(-100%);
                opacity: 0;
                transition: all 0.3s ease;
                z-index: 999;
            }
            
            .nav-links.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            .nav-links li {
                width: 100%;
                text-align: center;
                padding: 15px 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero h2 {
                font-size: 1.3rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .section {
                padding: 50px 0;
            }
            
            .map-container {
                margin-left: 20px;
                margin-right: 20px;
            }

            .lightbox-nav {
                width: 40px;
                height: 40px;
                font-size: 18px;
            }

            .lightbox-prev {
                left: 10px;
            }

            .lightbox-next {
                right: 10px;
            }

            .lightbox-close {
                top: 10px;
                right: 15px;
                font-size: 30px;
            }

            .lightbox-counter {
                top: 15px;
                left: 15px;
                font-size: 1rem;
            }

            .gallery-toggle-btn {
                display: block;
            }

            .gallery-item.hidden-mobile {
                display: none;
            }

            .pricing-card {
                flex: 0 0 calc(33.333% - 10px);
                padding: 20px 20px;
                opacity: 0.8;
                transform: scale(0.85);
            }
            
            .pricing-card.active {
                opacity: 1;
                transform: scale(0.95);
            }
            
            .pricing-card h3 {
                font-size: 1.1rem;
                margin-bottom: 12px;
            }
            
            .price {
                font-size: 1.8rem;
                margin-bottom: 15px;
            }
            
            .price span {
                font-size: 0.8rem;
            }
            
            .pricing-features {
                margin-bottom: 20px;
            }
            
            .pricing-features li {
                padding: 6px 0;
                font-size: 0.8rem;
            }
            
            .pricing-button {
                padding: 8px 20px;
                font-size: 0.8rem;
            }
            
            .popular-badge {
                font-size: 0.6rem;
                padding: 3px 25px;
                top: 15px;
                right: -25px;
            }
            
            .carousel-controls {
                margin-top: 25px;
            }
            
            .carousel-btn {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }
            
            .carousel-indicators {
                margin-top: 15px;
            }
            
            .indicator {
                width: 8px;
                height: 8px;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .pricing-card {
                padding: 30px 20px;
            }
            
            .logo {
                width: 60px; 
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .pricing-card {
                flex: 0 0 calc(33.333% - 8px);
                padding: 15px 10px;
                transform: scale(0.8);
            }
            
            .pricing-card.active {
                transform: scale(0.9);
            }
            
            .pricing-card h3 {
                font-size: 1rem;
            }
            
            .price {
                font-size: 1.5rem;
            }
            
            .pricing-features li {
                font-size: 0.75rem;
            }
            
            .pricing-button {
                padding: 6px 15px;
                font-size: 0.75rem;
            }
        }

        @media (max-width: 400px) {
            .pricing-card {
                flex: 0 0 calc(70% - 8px);
                padding: 20px 20px;
            }
        }
    </style>
</head>

<body>
    <header id="header">
        <nav>
            <a href="index.html" class="logo">
                <img src="Images/2XLlogo.png" alt="2XL GYM Logo" style="width: 100%; height: auto;">
            </a>
            
            <div class="nav-container">
                <ul class="nav-links">
                    <li><a href="#home"><i class="fas fa-home nav-icon"></i> Home</a></li>
                    <li><a href="#services"><i class="fas fa-dumbbell nav-icon"></i> Usluge</a></li>
                    <li><a href="#gallery"><i class="fas fa-images nav-icon"></i> Galerija</a></li>
                    <li><a href="#pricing"><i class="fas fa-tag nav-icon"></i> Cjenik</a></li>
                    <li><a href="#contact"><i class="fas fa-envelope nav-icon"></i> Kontakt</a></li>
                </ul>
                
                <div class="nav-contact">
                    <a href="https://www.instagram.com/2xlgym/" target="_blank" class="instagram-link">
                        <i class="fab fa-instagram"></i>
                        <span class="instagram-text">@2xlgym</span>
                    </a>
                </div>
            </div>
            
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
    </header>

    <section class="hero" id="home">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="Images/HERO_VID.mp4" type="video/mp4">
            Vaš preglednik ne podržava video tag.
        </video>
        
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1>2XL GYM</h1>
            <h2>Transformirajte svoje tijelo i um</h2>
            <p>Pridružite se vrhunskoj teretani s najmodernijom opremom, profesionalnim trenerima i motivirajućom atmosferom.</p>
            <a href="#pricing" class="cta-button">Pridruži se danas</a>
        </div>
    </section>

    <section class="section services" id="services">
        <div class="section-title">
            <h2>Naše Usluge</h2>
            <div class="divider"></div>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-img">
                     <img src="Images/loading2xl.jpg" alt="Grupni treninzi">
                    <div class="loading-bars">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                </div>
                
                <div class="service-content">
                    <h3><i class="fas fa-user-tie service-icon"></i> Personalni Treninzi</h3>
                    <p>Individualni pristup prema vašim ciljevima i mogućnostima s iskusnim trenerima.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-badge">USKORO</div>
                <div class="service-img">
                     <img src="Images/loading2xl.jpg" alt="Grupni treninzi">
                    <div class="loading-bars">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-users service-icon"></i> Grupni Treninzi</h3>
                    <p>Raznovrsni grupni treninzi za sve razine kondicije u motivirajućoj atmosferi.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <img src="Images/loading2xl.jpg" alt="Grupni treninzi">
                    <div class="loading-bars">
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                        <div class="loading-bar"></div>
                    </div>
                </div>
                <div class="service-content">
                    <h3><i class="fas fa-apple-alt service-icon"></i> Plan Prehrane</h3>
                    <p>Personalizirani planovi prehrane koji će vam pomoći da postignete optimalne rezultate.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section gallery" id="gallery">
        <div class="section-title">
            <h2>Galerija</h2>
            <div class="divider"></div>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item" data-index="0">
                <img src="Images/img1.jpg" alt="Teretana 2XL GYM">
            </div>
            <div class="gallery-item" data-index="1">
                <img src="Images/img8.jpg" alt="Oprema teretane">
            </div>
            <div class="gallery-item" data-index="2">
                <img src="Images/img3.jpg" alt="Oprema teretane">
            </div>
            
            <div class="gallery-item hidden-mobile" data-index="3">
                <img src="Images/img4.jpg" alt="Oprema teretane">
            </div>
            <div class="gallery-item hidden-mobile" data-index="4">
                <img src="Images/img5.jpg" alt="Oprema teretane">
            </div>
            <div class="gallery-item hidden-mobile" data-index="5">
                <img src="Images/img6.jpg" alt="Prostor teretane">
            </div>
        </div>
        
        <div class="gallery-cta">
            <a href="galerija.html" class="gallery-button">
                <span>Pogledajte kompletnu galeriju</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <div class="lightbox-modal" id="lightboxModal">
        <span class="lightbox-close" id="lightboxClose">&times;</span>
        <div class="lightbox-counter" id="lightboxCounter"></div>
        <button class="lightbox-nav lightbox-prev" id="lightboxPrev">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-nav lightbox-next" id="lightboxNext">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="lightbox-content">
            <img class="lightbox-image" id="lightboxImage" src="" alt="">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>
    </div>

    <section class="section pricing" id="pricing">
        <div class="section-title">
            <h2>Cjenik Članstva</h2>
            <div class="divider"></div>
        </div>
        
        <div class="pricing-carousel">
            <div class="pricing-track" id="pricingTrack">
                <div class="pricing-card" data-index="0">
                    <h3>UMIROVLJENICI</h3>
                    <div class="price">35€ <span>/mjesečno</span></div>
                    <ul class="pricing-features">
                        <li>Pristup svim spravama</li>
                        <li>PLACEHOLDER</li>
                        <li>PLACEHOLDER</li>
                        <li>Tuševi i ormarići</li>
                    </ul>
                    <a href="#contact" class="pricing-button">Odaberi</a>
                </div>
                
                <div class="pricing-card" data-index="1">
                    <h3>STUDENTSKA</h3>
                    <div class="price">35€ <span>/mjesečno</span></div>
                    <ul class="pricing-features">
                        <li>Pristup svim spravama</li>
                        <li>PLACEHOLDER</li>
                        <li>PLACEHOLDER</li>
                        <li>Tuševi i ormarići</li>
                    </ul>
                    <a href="#contact" class="pricing-button">Odaberi</a>
                </div>
                
                <div class="pricing-card popular active" data-index="2">
                    <div class="popular-badge">POPULAR</div>
                    <h3>MJESEČNA - NO LIMIT</h3>
                    <div class="price">50€ <span>/mjesečno</span></div>
                    <ul class="pricing-features">
                        <li>Pristup svim spravama</li>
                        <li>PLACEHOLDER</li>
                        <li>15% popusta na suplemente</li>
                        <li>Tuševi i ormarići</li>
                    </ul>
                    <a href="#contact" class="pricing-button">Odaberi</a>
                </div>
                
                <div class="pricing-card" data-index="3">
                    <h3>2X TJEDNO</h3>
                    <div class="price">40€ <span>/mjesečno</span></div>
                    <ul class="pricing-features">
                        <li>Pristup svim spravama</li>
                        <li>PLACEHOLDER</li>
                        <li>PLACEHOLDER</li>
                        <li>Tuševi i ormarići</li>
                    </ul>
                    <a href="#contact" class="pricing-button">Odaberi</a>
                </div>
                
                <div class="pricing-card" data-index="4">
                    <h3>DNEVNA</h3>
                    <div class="price">10€ <span>/dan</span></div>
                    <ul class="pricing-features">
                        <li>Pristup svim spravama</li>
                        <li>PLACEHOLDER</li>
                        <li>PLACEHOLDER</li>
                        <li>Tuševi i ormarići</li>
                    </ul>
                    <a href="#contact" class="pricing-button">Odaberi</a>
                </div>
            </div>
            
            <div class="carousel-controls">
                <button class="carousel-btn prev-btn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="carousel-btn next-btn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="carousel-indicators">
                <span class="indicator" data-index="0"></span>
                <span class="indicator" data-index="1"></span>
                <span class="indicator active" data-index="2"></span>
                <span class="indicator" data-index="3"></span>
                <span class="indicator" data-index="4"></span>
            </div>
        </div>
    </section>

    <section class="section contact" id="contact">
        <div class="section-title">
            <h2>Kontaktirajte Nas</h2>
            <div class="divider"></div>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Informacije</h3>
                <p><i class="fas fa-map-marker-alt"></i> <strong>Adresa:</strong> Kamik 29, 52100, Banjole</p>
                <p><i class="fas fa-phone"></i> <strong>Telefon:</strong> +385 98 335 987</p>
                <p><i class="fas fa-envelope"></i> <strong>Email:</strong> 2xlgymbanjole@gmail.com</p>
                <p><i class="fas fa-clock"></i> <strong>Radno vrijeme:</strong></p>
                <p>Ponedjeljak - Petak: 07:00 - 21:00</p>
                <p>Subota: 07:00 - 13:00</p>
                <p>Nedjelja i praznik: ZATVORENO</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/2xlgym/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <form id="contactForm" method="POST" action="">
                    <div class="form-group">
                        <label for="name">Ime i Prezime</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefon</label>
                        <input type="tel" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Poruka</label>
                        <textarea id="message" name="message" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Pošalji Poruku</button>
                </form>
            </div>
        </div>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1224.049172092293!2d13.876778126154674!3d44.82620904303902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47632b5fd8cf8bd3%3A0x67f1b2ef950bd905!2sKamik%2029%2C%2052100%2C%20Banjole!5e0!3m2!1shr!2shr!4v1746728598800!5m2!1shr!2shr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-col">
                <h4>O Nama</h4>
                <p>2XL GYM je vrhunska teretana smještena u Banjolama, opremljena najmodernijom opremom i stručnim trenerima.</p>
            </div>
            <div class="footer-col">
                <h4>Radno Vrijeme</h4>
                <p>Pon- Pet: 07:00 - 21:00</p>
                <p>Subota: 07:00 - 13:00</p>
                <p>Nedjelja i praznik: ZATVORENO</p>
            </div>
            <div class="footer-col">
                <h4>Kontakt</h4>
                <p>Kamik 29, 52100, Banjole</p>
                <p>+385 98 335 987</p>
                <p>2xlgymbanjole@gmail.com</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2025 2XL GYM. Sva prava pridržana. | Izradila <a href="https://vivexs.github.io/Portfolio-IVA/">Iva Sošić</a></p>
            <p><a href="https://www.freeprivacypolicy.com/live/c75778bf-ee1d-47d5-a4e2-4351000b9c39">Pravila privatnosti</a></p>
        </div>
    </footer>

    <script>
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        document.addEventListener('click', (e) => {
            if (!navLinks.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                navLinks.classList.remove('active');
            }
        });
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            
            fetch('send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
                if (data.success) {
                    document.getElementById('contactForm').reset();
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Došlo je do greške. Molimo pokušajte ponovno.');
            });
        });

        const pricingTrack = document.getElementById('pricingTrack');
        const pricingCards = document.querySelectorAll('.pricing-card');
        const indicators = document.querySelectorAll('.indicator');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        
        let currentIndex = 2;
        const cardCount = pricingCards.length;
        
        function updateCarousel() {
            pricingCards.forEach(card => card.classList.remove('active'));
            indicators.forEach(indicator => indicator.classList.remove('active'));
            
            pricingCards[currentIndex].classList.add('active');
            indicators[currentIndex].classList.add('active');
            
            const cardWidth = pricingCards[0].offsetWidth + 25;
            const trackWidth = pricingTrack.offsetWidth;
            const offset = (trackWidth / 2) - (cardWidth / 2) - (currentIndex * cardWidth);
            
            pricingTrack.style.transform = `translateX(${offset}px)`;
        }
        
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % cardCount;
            updateCarousel();
        });
        
        prevBtn.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + cardCount) % cardCount;
            updateCarousel();
        });
        
        indicators.forEach(indicator => {
            indicator.addEventListener('click', () => {
                currentIndex = parseInt(indicator.getAttribute('data-index'));
                updateCarousel();
            });
        });
        
        updateCarousel();
        
        let autoRotate = setInterval(() => {
            currentIndex = (currentIndex + 1) % cardCount;
            updateCarousel();
        }, 5000);
        
        pricingTrack.addEventListener('mouseenter', () => {
            clearInterval(autoRotate);
        });
        
        pricingTrack.addEventListener('mouseleave', () => {
            autoRotate = setInterval(() => {
                currentIndex = (currentIndex + 1) % cardCount;
                updateCarousel();
            }, 5000);
        });

        const lightboxModal = document.getElementById('lightboxModal');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const lightboxClose = document.getElementById('lightboxClose');
        const lightboxPrev = document.getElementById('lightboxPrev');
        const lightboxNext = document.getElementById('lightboxNext');
        const galleryItems = document.querySelectorAll('.gallery-item');
        
        let currentImageIndex = 0;
        const totalImages = galleryItems.length;
        
        function openLightbox(index) {
            currentImageIndex = index;
            updateLightbox();
            lightboxModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
        
        function closeLightbox() {
            lightboxModal.classList.remove('active');
            document.body.style.overflow = '';
        }
        
        function updateLightbox() {
            const currentItem = galleryItems[currentImageIndex];
            const imgSrc = currentItem.querySelector('img').src;
            const imgAlt = currentItem.querySelector('img').alt;
            
            lightboxImage.src = imgSrc;
            lightboxCaption.textContent = imgAlt;
            lightboxCounter.textContent = `${currentImageIndex + 1} / ${totalImages}`;
        }
        
        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % totalImages;
            updateLightbox();
        }
        
        function prevImage() {
            currentImageIndex = (currentImageIndex - 1 + totalImages) % totalImages;
            updateLightbox();
        }
        
        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                openLightbox(index);
            });
        });
        
        lightboxClose.addEventListener('click', closeLightbox);
        lightboxPrev.addEventListener('click', prevImage);
        lightboxNext.addEventListener('click', nextImage);
        
        document.addEventListener('keydown', (e) => {
            if (!lightboxModal.classList.contains('active')) return;
            
            switch(e.key) {
                case 'Escape':
                    closeLightbox();
                    break;
                case 'ArrowLeft':
                    prevImage();
                    break;
                case 'ArrowRight':
                    nextImage();
                    break;
            }
        });
        
        lightboxModal.addEventListener('click', (e) => {
            if (e.target === lightboxModal) {
                closeLightbox();
            }
        });

        const galleryToggle = document.getElementById('galleryToggle');
        const hiddenGalleryItems = document.querySelectorAll('.gallery-item.hidden-mobile');
        const toggleText = document.querySelector('.toggle-text');
        const toggleIcon = document.querySelector('.toggle-icon');
        
        let isGalleryExpanded = false;
        
        galleryToggle.addEventListener('click', function() {
            isGalleryExpanded = !isGalleryExpanded;
            
            if (isGalleryExpanded) {
                hiddenGalleryItems.forEach(item => {
                    item.style.display = 'block';
                });
                toggleText.textContent = 'Sakrij galeriju';
                toggleIcon.className = 'fas fa-chevron-up toggle-icon';
                
                setTimeout(() => {
                    galleryToggle.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            } else {
                hiddenGalleryItems.forEach(item => {
                    item.style.display = 'none';
                });
                toggleText.textContent = 'Prikaži galeriju';
                toggleIcon.className = 'fas fa-chevron-down toggle-icon';
            }
        });

        if (window.innerWidth <= 768) {
            hiddenGalleryItems.forEach(item => {
                item.style.display = 'none';
            });
        }

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                updateCarousel();
                
                if (window.innerWidth <= 768) {
                    hiddenGalleryItems.forEach(item => {
                        item.style.display = 'none';
                    });
                    isGalleryExpanded = false;
                    toggleText.textContent = 'Prikaži galeriju';
                    toggleIcon.className = 'fas fa-chevron-down toggle-icon';
                } else {
                    hiddenGalleryItems.forEach(item => {
                        item.style.display = 'block';
                    });
                }
            }, 250);
        });
    </script>
</body>

</html>