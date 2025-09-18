<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - María Paula Saavedra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-profile {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 120px 0 80px;
            color: white;
        }
        
        .profile-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
            margin-top: -100px;
            color: #2c3e50;
        }
        
        .profile-avatar {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .section-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: none;
            transition: transform 0.3s ease;
        }
        
        .section-card:hover {
            transform: translateY(-5px);
        }
        
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 2rem;
            position: relative;
            padding-left: 1rem;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(180deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .timeline {
            position: relative;
            padding-left: 2rem;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: linear-gradient(180deg, #667eea, #764ba2);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 2rem;
            padding-left: 2rem;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 8px;
            width: 16px;
            height: 16px;
            background: #667eea;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 0 0 3px #667eea;
        }
        
        .timeline-date {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        
        .timeline-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .timeline-subtitle {
            color: #667eea;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .timeline-description {
            color: #6c757d;
            line-height: 1.6;
        }
        
        .stat-card {
            text-align: center;
            padding: 2rem 1rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            border: none;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-label {
            color: #6c757d;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .badge-custom {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            margin: 0.25rem;
            display: inline-block;
        }
        
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: #2c3e50 !important;
        }
        
        .nav-link {
            color: #495057 !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: #667eea !important;
        }
        
        .nav-link.active {
            color: #667eea !important;
            font-weight: 600;
        }
        
        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            transition: transform 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            background: linear-gradient(45deg, #5a6fd8, #6a4190);
        }
        
        .achievement-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin: 0 auto 1rem;
        }
        
        .language-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
        
        .language-name {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .language-level {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .contact-info {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            color: #495057;
        }
        
        .contact-item i {
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }
        
        @media (max-width: 768px) {
            .profile-card {
                margin-top: -50px;
                padding: 1.5rem;
            }
            
            .profile-avatar {
                width: 120px;
                height: 120px;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .stat-number {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">María Paula</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/perfil">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/proyectos">Proyectos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Profile Section -->
    <section class="hero-profile">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-3">Mi Perfil Profesional</h1>
                    <p class="lead">Conoce más sobre mi formación, experiencia y objetivos profesionales</p>
                </div>
            </div>
        </div>
    </section>



    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">3+</div>
                        <div class="stat-label">Años de Estudio</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Proyectos</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">8</div>
                        <div class="stat-label">Tecnologías</div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-card">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Dedicación</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Education Section -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-graduation-cap me-3"></i>Educación
                    </h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2021 - Actualidad</div>
                            <div class="timeline-title">Ingeniería de Sistemas</div>
                            <div class="timeline-subtitle">Universidad [Nombre de la Universidad]</div>
                            <div class="timeline-description">
                                Estudiante de séptimo semestre con énfasis en desarrollo de software y bases de datos. 
                                Promedio académico destacado con participación activa en proyectos de investigación 
                                y desarrollo tecnológico.
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2017 - 2020</div>
                            <div class="timeline-title">Bachillerato Técnico</div>
                            <div class="timeline-subtitle">Institución Educativa [Nombre]</div>
                            <div class="timeline-description">
                                Bachillerato con especialización en informática. Graduada con honores y reconocimiento 
                                por excelencia académica en el área de tecnología.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Experience Section -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-briefcase me-3"></i>Experiencia
                    </h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2024 - Actualidad</div>
                            <div class="timeline-title">Desarrolladora Junior</div>
                            <div class="timeline-subtitle">Proyecto Freelance</div>
                            <div class="timeline-description">
                                Desarrollo de aplicaciones web personalizadas utilizando Laravel, React y Bootstrap. 
                                Gestión completa de proyectos desde la conceptualización hasta la implementación.
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2023 - 2024</div>
                            <div class="timeline-title">Practicante de Desarrollo</div>
                            <div class="timeline-subtitle">Empresa de Software Local</div>
                            <div class="timeline-description">
                                Participación en el desarrollo de sistemas internos y mantenimiento de aplicaciones web. 
                                Colaboración en equipo utilizando metodologías ágiles y control de versiones con Git.
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2022 - 2023</div>
                            <div class="timeline-title">Asistente de Investigación</div>
                            <div class="timeline-subtitle">Universidad - Grupo de Investigación</div>
                            <div class="timeline-description">
                                Apoyo en proyectos de investigación en tecnologías emergentes. Desarrollo de prototipos 
                                y análisis de datos para publicaciones académicas.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certifications Section -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-certificate me-3"></i>Certificaciones y Cursos
                    </h3>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="achievement-icon">
                                <i class="fab fa-laravel"></i>
                            </div>
                            <h5 class="text-center">Laravel Avanzado</h5>
                            <p class="text-center text-muted small">Udemy - 2024</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="achievement-icon">
                                <i class="fab fa-react"></i>
                            </div>
                            <h5 class="text-center">React Fundamentals</h5>
                            <p class="text-center text-muted small">Coursera - 2023</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="achievement-icon">
                                <i class="fas fa-database"></i>
                            </div>
                            <h5 class="text-center">MySQL Database</h5>
                            <p class="text-center text-muted small">Oracle - 2023</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="achievement-icon">
                                <i class="fab fa-python"></i>
                            </div>
                            <h5 class="text-center">Python Programming</h5>
                            <p class="text-center text-muted small">edX - 2022</p>
                        </div>
                    </div>
                </div>

        
                
            </div>

            <div class="col-lg-4">

                <!-- Languages -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-language me-3"></i>Idiomas
                    </h3>
                    <div class="language-item">
                        <div class="language-name">
                            <i class="fas fa-flag me-2"></i>Español
                        </div>
                        <div class="language-level">Nativo</div>
                    </div>
                    <div class="language-item">
                        <div class="language-name">
                            <i class="fas fa-flag me-2"></i>Inglés
                        </div>
                        <div class="language-level">B2 - Intermedio Alto</div>
                    </div>
                    <div class="language-item">
                        <div class="language-name">
                            <i class="fas fa-flag me-2"></i>Francés
                        </div>
                        <div class="language-level">A2 - Básico</div>
                    </div>
                </div>

                <!-- Goals -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-target me-3"></i>Objetivos 2025
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Graduarme con honores en Ingeniería de Sistemas
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Obtener certificación en Cloud Computing (AWS/Azure)
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Desarrollar 3 proyectos open source
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Conseguir mi primer empleo full-time como desarrolladora
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Mejorar mi nivel de inglés a C1
                        </li>
                    </ul>
                </div>
                <!-- Interests Section -->
                <div class="section-card">
                    <h3 class="section-title">
                        <i class="fas fa-heart me-3"></i>Intereses y Pasiones
                    </h3>
                    <p class="mb-3">
                        Más allá del código, me apasiona explorar nuevas tecnologías y tendencias en el mundo del desarrollo. 
                        Siempre estoy buscando maneras de aplicar la tecnología para resolver problemas reales.
                    </p>
                    <div class="d-flex flex-wrap">
                        <span class="badge-custom">Inteligencia Artificial</span>
                        <span class="badge-custom">UI/UX Design</span>
                        <span class="badge-custom">Cloud Computing</span>
                        <span class="badge-custom">DevOps</span>
                        <span class="badge-custom">Mobile Development</span>
                        <span class="badge-custom">Open Source</span>
                        <span class="badge-custom">Startup Culture</span>
                        <span class="badge-custom">Tecnología Educativa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <script>
        // Animación de entrada para las tarjetas
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.section-card, .stat-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(20px)';
                        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                    }
                });
            });
            
            cards.forEach(card => {
                observer.observe(card);
            });
        });

        // Efecto de typing para los números estadísticos
        function animateNumbers() {
            const numbers = document.querySelectorAll('.stat-number');
            
            numbers.forEach(number => {
                const target = number.textContent;
                const numTarget = parseInt(target.replace(/\D/g, ''));
                const suffix = target.replace(/[0-9]/g, '');
                let count = 0;
                
                const timer = setInterval(() => {
                    count += Math.ceil(numTarget / 50);
                    if (count >= numTarget) {
                        number.textContent = numTarget + suffix;
                        clearInterval(timer);
                    } else {
                        number.textContent = count + suffix;
                    }
                }, 30);
            });
        }

        // Activar animación cuando la sección de stats sea visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateNumbers();
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        const statsSection = document.querySelector('.py-5.bg-light');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>
</body>
</html>