<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Paula Saavedra - Desarrolladora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .profile-img {
            width: 280px;
            height: 280px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .skill-item {
            margin-bottom: 2rem;
        }
        
        .skill-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #495057;
        }
        
        .progress {
            height: 12px;
            border-radius: 10px;
            overflow: hidden;
            background-color: #e9ecef;
        }
        
        .progress-bar {
            border-radius: 10px;
            transition: width 0.8s ease-in-out;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .intro-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #6c757d;
            margin-bottom: 2rem;
        }
        
        .category-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 1.5rem;
            border-left: 4px solid #667eea;
            padding-left: 1rem;
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
        
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
        }
        
        .skills-section {
            background-color: #f8f9fa;
            padding: 80px 0;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .hero-content .lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }
        
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            .profile-img {
                width: 200px;
                height: 200px;
            }
            .section-title {
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
                        <a class="nav-link" href="/perfil">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/proyectos">Proyectos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white">
                    <div class="hero-content">
                        <h1 class="mb-4">María Paula Saavedra</h1>
                        <p class="lead">Estudiante de Ingeniería de Sistemas apasionada por el desarrollo de software y las nuevas tecnologías.</p>
                        <div class="mb-4">
                            <i class="fas fa-graduation-cap me-2"></i>
                            <span>21 años | Ingeniería de Sistemas</span>
                        </div>
                        <a href="/perfil" class="btn btn-primary btn-lg me-3">
                            <i class="fas fa-user me-2"></i>Ver Perfil
                        </a>
                        <a href="/proyectos" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-code me-2"></i>Mis Proyectos
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://media.licdn.com/dms/image/v2/D4E03AQEp2FNcZIloGA/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1687477230769?e=1761177600&v=beta&t=dUDsFhYUsLdNjahV8V0wX5znYvF0__LEGmGm5pCE158" 
                         alt="María Paula Saavedra" 
                         class="profile-img rounded-circle">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Sobre Mí</h2>
                    <p class="intro-text">
                        Soy una desarrolladora en formación con una gran pasión por crear soluciones tecnológicas 
                        innovadoras. Actualmente curso Ingeniería de Sistemas y me especializo en el desarrollo 
                        web full-stack, siempre buscando aprender nuevas tecnologías y metodologías de desarrollo.
                    </p>
                    <div class="row text-center mt-4">
                        <div class="col-md-4">
                            <div class="card h-100 p-4">
                                <i class="fas fa-code fa-3x text-primary mb-3"></i>
                                <h5>Desarrollo Web</h5>
                                <p>Creación de aplicaciones web modernas y responsivas</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 p-4">
                                <i class="fas fa-mobile-alt fa-3x text-primary mb-3"></i>
                                <h5>Diseño Responsivo</h5>
                                <p>Interfaces adaptables a cualquier dispositivo</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card h-100 p-4">
                                <i class="fas fa-database fa-3x text-primary mb-3"></i>
                                <h5>Base de Datos</h5>
                                <p>Gestión y optimización de bases de datos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="container">
            <h2 class="section-title text-center">Mis Habilidades</h2>
            
            <div class="row">
                <!-- Lenguajes de Programación -->
                <div class="col-lg-4 mb-5">
                    <h3 class="category-title">
                        <i class="fas fa-code me-2"></i>Lenguajes de Programación
                    </h3>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-js-square text-warning me-2"></i>JavaScript
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 85%">85%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-php text-primary me-2"></i>PHP
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 80%">80%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-python text-success me-2"></i>Python
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 75%">75%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-java text-danger me-2"></i>Java
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 70%">70%</div>
                        </div>
                    </div>
                </div>
                
                <!-- Frameworks y Tecnologías -->
                <div class="col-lg-4 mb-5">
                    <h3 class="category-title">
                        <i class="fas fa-layer-group me-2"></i>Frameworks & Tecnologías
                    </h3>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-laravel text-danger me-2"></i>Laravel
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 82%">82%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-react text-info me-2"></i>React
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 78%">78%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fab fa-bootstrap text-primary me-2"></i>Bootstrap
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%">90%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fas fa-database text-secondary me-2"></i>MySQL
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-secondary" style="width: 85%">85%</div>
                        </div>
                    </div>
                </div>
                
                <!-- Habilidades Blandas -->
                <div class="col-lg-4 mb-5">
                    <h3 class="category-title">
                        <i class="fas fa-users me-2"></i>Habilidades Blandas
                    </h3>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fas fa-users text-success me-2"></i>Trabajo en Equipo
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 95%">95%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fas fa-comments text-info me-2"></i>Comunicación
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 90%">90%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fas fa-lightbulb text-warning me-2"></i>Creatividad
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 88%">88%</div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name">
                            <i class="fas fa-cog text-primary me-2"></i>Resolución de Problemas
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 92%">92%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">¡Conectemos!</h2>
                    <p class="intro-text">
                        Estoy siempre interesada en nuevas oportunidades y proyectos desafiantes. 
                        No dudes en contactarme si quieres colaborar o simplemente charlar sobre tecnología.
                    </p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://www.linkedin.com/in/maria-paula-saavedra-martinez/" class="btn btn-outline-primary">
                            <i class="fab fa-linkedin me-2"></i>LinkedIn
                        </a>
                        <a href="https://github.com/Paulasaah" class="btn btn-outline-dark">
                            <i class="fab fa-github me-2"></i>GitHub
                        </a>
                        <a href="mailto:maria@example.com" class="btn btn-primary">
                            <i class="fas fa-envelope me-2"></i>Email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <script>
        // Animación de las barras de progreso al cargar la página
        document.addEventListener('DOMContentLoaded', function() {
            const progressBars = document.querySelectorAll('.progress-bar');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBar = entry.target;
                        const width = progressBar.style.width;
                        progressBar.style.width = '0%';
                        setTimeout(() => {
                            progressBar.style.width = width;
                        }, 300);
                    }
                });
            });
            
            progressBars.forEach(bar => {
                observer.observe(bar);
            });
        });
    </script>
</body>
</html>