<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos - María Paula Saavedra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .hero-projects {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 120px 0 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero-projects::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
            opacity: 0.3;
        }
        
        .project-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }
        
        .project-image {
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 4rem;
            position: relative;
            overflow: hidden;
        }
        
        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.1);
        }
        
        .project-content {
            padding: 2rem;
        }
        
        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .project-description {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .project-tech {
            margin-bottom: 1.5rem;
        }
        
        .tech-badge {
            background: rgba(102, 126, 234, 0.1);
            color: #667eea;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
            margin: 0.2rem 0.2rem 0.2rem 0;
            display: inline-block;
        }
        
        .project-links {
            display: flex;
            gap: 1rem;
        }
        
        .btn-project {
            flex: 1;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .btn-primary-project {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
        }
        
        .btn-primary-project:hover {
            background: linear-gradient(45deg, #5a6fd8, #6a4190);
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-outline-project {
            border: 2px solid #667eea;
            color: #667eea;
            background: transparent;
        }
        
        .btn-outline-project:hover {
            background: #667eea;
            color: white;
        }
        
        .services-section {
            background: linear-gradient(45deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
        }
        
        .service-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            text-align: center;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: white;
            font-size: 2rem;
        }
        
        .service-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        
        .service-description {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .service-price {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .service-features {
            text-align: left;
            margin: 1.5rem 0;
        }
        
        .service-features li {
            color: #495057;
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .service-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 20px;
            font-size: 4rem;
            color: #667eea;
            font-family: serif;
        }
        
        .testimonial-text {
            font-style: italic;
            color: #495057;
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-right: 1rem;
        }
        
        .author-info h6 {
            margin: 0;
            color: #2c3e50;
            font-weight: 600;
        }
        
        .author-info small {
            color: #6c757d;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0;
            position: relative;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
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
        
        .btn-cta {
            background: white;
            color: #667eea;
            border: none;
            padding: 15px 40px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }
        
        .btn-cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            color: #5a6fd8;
        }
        
        .filter-buttons {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .filter-btn {
            background: white;
            border: 2px solid #667eea;
            color: #667eea;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            margin: 0.3rem;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .filter-btn:hover,
        .filter-btn.active {
            background: #667eea;
            color: white;
        }
        
        .project-category {
            transition: all 0.5s ease;
        }
        
        .project-category.hidden {
            display: none;
        }
        
        .featured-project-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: none;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .featured-project-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #667eea, #764ba2);
        }
        
        .featured-project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0,0,0,0.15);
        }
        
        .featured-project-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .project-icon {
            width: 50px;
            height: 50px;
            background: rgba(102, 126, 234, 0.1);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.5rem;
        }
        
        .featured-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 0.3rem;
        }
        
        .featured-badge {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.2rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .featured-description {
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .featured-tech {
            margin-bottom: 1.5rem;
        }
        
        .featured-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 10px;
        }
        
        .stat-item {
            text-align: center;
            color: #495057;
            font-size: 0.85rem;
            font-weight: 500;
        }
        
        .stat-item i {
            display: block;
            margin-bottom: 0.3rem;
            color: #667eea;
        }
        
        .featured-actions {
            display: flex;
            gap: 1rem;
        }
        
        .btn-featured {
            flex: 1;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s ease;
            border: none;
        }
        
        .btn-featured.primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
        }
        
        .btn-featured.primary:hover {
            background: linear-gradient(45deg, #5a6fd8, #6a4190);
            transform: translateY(-2px);
            color: white;
        }
        
        .btn-featured.secondary {
            border: 2px solid #667eea;
            color: #667eea;
            background: transparent;
        }
        
        .btn-featured.secondary:hover {
            background: #667eea;
            color: white;
        }
        
        .collaboration-options {
            margin-bottom: 2rem;
        }
        
        .collab-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            padding: 1rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .collab-item:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .collab-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            font-size: 1.3rem;
            flex-shrink: 0;
            background: rgba(102, 126, 234, 0.1);
        }
        
        .collab-content h5 {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        
        .collab-content p {
            color: #6c757d;
            margin: 0;
            font-size: 0.9rem;
        }
        
        .skills-offering {
            padding: 1.5rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 15px;
        }
        
        .skill-offer {
            background: white;
            color: #667eea;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            border: 1px solid rgba(102, 126, 234, 0.2);
            transition: all 0.3s ease;
        }
        
        .skill-offer:hover {
            background: #667eea;
            color: white;
            transform: scale(1.05);
        }
        
        .text-purple {
            color: #9b59b6 !important;
        }
            .section-title {
                font-size: 2rem;
            }
            
            .project-links {
                flex-direction: column;
            }
            
            .service-card {
                margin-bottom: 2rem;
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
                        <a class="nav-link active" href="/proyectos">Proyectos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Projects Section -->
    <section class="hero-projects">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-4">Mis Proyectos</h1>
                    <p class="lead mb-4">
                        Como estudiante de Ingeniería de Sistemas, cada proyecto es una oportunidad de aprendizaje 
                        y crecimiento. Aquí puedes ver mi evolución y las tecnologías que he explorado.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Proyectos Académicos</span>
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Aprendizaje Continuo</span>
                        <span class="badge bg-light text-dark px-3 py-2 fs-6">Código en GitHub</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Portfolio Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Portfolio Académico</h2>
            
            <!-- Filter Buttons -->
            <div class="filter-buttons">
                <button class="filter-btn active" onclick="filterProjects('all')">Todos los Proyectos</button>
                <button class="filter-btn" onclick="filterProjects('web')">Desarrollo Web</button>
                <button class="filter-btn" onclick="filterProjects('university')">Proyectos Universitarios</button>
                <button class="filter-btn" onclick="filterProjects('personal')">Proyectos Personales</button>
                <button class="filter-btn" onclick="filterProjects('learning')">Prácticas de Aprendizaje</button>
            </div>

            <div class="row g-4">
                <!-- Proyecto 1 - Universidad -->
                <div class="col-lg-4 col-md-6 project-category university">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">Sistema de Inventario</h4>
                            <p class="project-description">
                                Proyecto final de la materia de Base de Datos. Sistema CRUD completo para 
                                gestión de inventario con reportes y validaciones.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Bootstrap</span>
                                <span class="tech-badge">Chart.js</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-eye me-2"></i>Ver Demo
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fab fa-github me-2"></i>GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 - Personal -->
                <div class="col-lg-4 col-md-6 project-category personal">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">Gestor de Tareas Personal</h4>
                            <p class="project-description">
                                Aplicación web para organizar mis tareas universitarias y personales. 
                                Incluye calendario, recordatorios y categorización.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">React</span>
                                <span class="tech-badge">Node.js</span>
                                <span class="tech-badge">MongoDB</span>
                                <span class="tech-badge">CSS3</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-eye me-2"></i>Ver Demo
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fab fa-github me-2"></i>GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 - Web -->
                <div class="col-lg-4 col-md-6 project-category web">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">Portal Estudiantil</h4>
                            <p class="project-description">
                                Prototipo de portal para estudiantes universitarios con información de materias, 
                                horarios y recursos académicos.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">Vue.js</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">Tailwind</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-eye me-2"></i>Ver Demo
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fab fa-github me-2"></i>GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 4 - Learning -->
                <div class="col-lg-4 col-md-6 project-category learning">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">API REST de Libros</h4>
                            <p class="project-description">
                                Mi primera API RESTful siguiendo un tutorial de YouTube. Permite gestionar 
                                una biblioteca virtual con autenticación JWT.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Laravel</span>
                                <span class="tech-badge">JWT Auth</span>
                                <span class="tech-badge">Postman</span>
                                <span class="tech-badge">MySQL</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-book me-2"></i>Documentación
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fab fa-github me-2"></i>GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 5 - Universidad -->
                <div class="col-lg-4 col-md-6 project-category university">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">Calculadora Científica</h4>
                            <p class="project-description">
                                Proyecto de la materia de Programación Orientada a Objetos. Calculadora 
                                con funciones básicas y científicas implementada en Java.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">Java</span>
                                <span class="tech-badge">Swing</span>
                                <span class="tech-badge">MVC</span>
                                <span class="tech-badge">JUnit</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-play me-2"></i>Ejecutar
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fab fa-github me-2"></i>GitHub
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 6 - Personal -->
                <div class="col-lg-4 col-md-6 project-category personal">
                    <div class="project-card">
                        <div class="project-image">
                            <i class="fas fa-blog"></i>
                        </div>
                        <div class="project-content">
                            <h4 class="project-title">Blog Personal</h4>
                            <p class="project-description">
                                Mi primer blog donde documento mi proceso de aprendizaje en programación. 
                                Incluye artículos sobre tecnologías y experiencias como estudiante.
                            </p>
                            <div class="project-tech">
                                <span class="tech-badge">WordPress</span>
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">CSS Custom</span>
                                <span class="tech-badge">Responsive</span>
                            </div>
                            <div class="project-links">
                                <a href="#" class="btn-project btn-primary-project">
                                    <i class="fas fa-eye me-2"></i>Visitar Blog
                                </a>
                                <a href="#" class="btn-project btn-outline-project">
                                    <i class="fas fa-code me-2"></i>Código
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <h2 class="section-title text-start">Proyectos Destacados</h2>
                    <p class="lead text-muted">
                        Estos son algunos de mis proyectos más representativos que muestran mi evolución 
                        como desarrolladora y las tecnologías que he dominado durante mi carrera.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <!-- SVG Illustration - Coding -->
                    <svg width="300" height="200" viewBox="0 0 300 200" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                                <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <!-- Laptop -->
                        <rect x="50" y="80" width="200" height="120" rx="10" fill="#2c3e50"/>
                        <rect x="60" y="90" width="180" height="100" rx="5" fill="#34495e"/>
                        <rect x="65" y="95" width="170" height="90" rx="3" fill="#1e2a3a"/>
                        <!-- Screen content -->
                        <rect x="70" y="100" width="160" height="2" fill="#667eea"/>
                        <rect x="70" y="105" width="120" height="2" fill="#f39c12"/>
                        <rect x="70" y="110" width="140" height="2" fill="#e74c3c"/>
                        <rect x="70" y="115" width="100" height="2" fill="#2ecc71"/>
                        <rect x="70" y="120" width="130" height="2" fill="#9b59b6"/>
                        <!-- Laptop base -->
                        <rect x="40" y="200" width="220" height="15" rx="7" fill="#34495e"/>
                        <!-- Floating elements -->
                        <circle cx="280" cy="30" r="5" fill="#667eea" opacity="0.6"/>
                        <circle cx="270" cy="50" r="3" fill="#764ba2" opacity="0.8"/>
                        <circle cx="20" cy="40" r="4" fill="#f39c12" opacity="0.7"/>
                        <circle cx="30" cy="20" r="6" fill="#e74c3c" opacity="0.5"/>
                        <!-- Code brackets -->
                        <text x="280" y="100" font-family="monospace" font-size="20" fill="url(#grad1)">&lt;/&gt;</text>
                        <text x="10" y="150" font-family="monospace" font-size="16" fill="url(#grad1)">{ }</text>
                    </svg>
                </div>
            </div>

            <!-- Featured Projects List -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="featured-project-card">
                        <div class="featured-project-header">
                            <div class="project-icon">
                                <i class="fas fa-trophy text-warning"></i>
                            </div>
                            <div>
                                <h4 class="featured-title">Sistema de Gestión Universitaria</h4>
                                <span class="featured-badge">Proyecto Final - Base de Datos</span>
                            </div>
                        </div>
                        <p class="featured-description">
                            Sistema completo CRUD para gestión de estudiantes, materias y calificaciones. 
                            Incluye reportes automatizados, autenticación de usuarios y panel administrativo. 
                            Obtuvo la calificación más alta de la clase.
                        </p>
                        <div class="featured-tech">
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Bootstrap</span>
                            <span class="tech-badge">Chart.js</span>
                        </div>
                        <div class="featured-stats">
                            <div class="stat-item">
                                <i class="fas fa-code"></i>
                                <span>2,500+ líneas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-calendar"></i>
                                <span>6 semanas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-star"></i>
                                <span>5.0/5.0</span>
                            </div>
                        </div>
                        <div class="featured-actions">
                            <a href="#" class="btn-featured primary">
                                <i class="fas fa-external-link-alt me-2"></i>Ver Demo
                            </a>
                            <a href="#" class="btn-featured secondary">
                                <i class="fab fa-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="featured-project-card">
                        <div class="featured-project-header">
                            <div class="project-icon">
                                <i class="fas fa-mobile-alt text-info"></i>
                            </div>
                            <div>
                                <h4 class="featured-title">TaskMaster - Gestor Personal</h4>
                                <span class="featured-badge">Proyecto Personal</span>
                            </div>
                        </div>
                        <p class="featured-description">
                            Aplicación web responsive para gestión de tareas personales y académicas. 
                            Incluye calendario interactivo, notificaciones push, categorización avanzada 
                            y sincronización en tiempo real.
                        </p>
                        <div class="featured-tech">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">MongoDB</span>
                            <span class="tech-badge">Socket.io</span>
                        </div>
                        <div class="featured-stats">
                            <div class="stat-item">
                                <i class="fas fa-users"></i>
                                <span>50+ usuarios</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-tasks"></i>
                                <span>500+ tareas</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-heart"></i>
                                <span>100% uptime</span>
                            </div>
                        </div>
                        <div class="featured-actions">
                            <a href="#" class="btn-featured primary">
                                <i class="fas fa-external-link-alt me-2"></i>Usar App
                            </a>
                            <a href="#" class="btn-featured secondary">
                                <i class="fab fa-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="featured-project-card">
                        <div class="featured-project-header">
                            <div class="project-icon">
                                <i class="fas fa-rocket text-success"></i>
                            </div>
                            <div>
                                <h4 class="featured-title">API RESTful E-Learning</h4>
                                <span class="featured-badge">Proyecto Colaborativo</span>
                            </div>
                        </div>
                        <p class="featured-description">
                            API robusta para plataforma educativa desarrollada en equipo de 4 estudiantes. 
                            Maneja autenticación JWT, gestión de cursos, evaluaciones y progreso estudiantil 
                            con documentación completa en Swagger.
                        </p>
                        <div class="featured-tech">
                            <span class="tech-badge">Laravel API</span>
                            <span class="tech-badge">JWT</span>
                            <span class="tech-badge">Swagger</span>
                            <span class="tech-badge">PostgreSQL</span>
                        </div>
                        <div class="featured-stats">
                            <div class="stat-item">
                                <i class="fas fa-link"></i>
                                <span>25 endpoints</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-shield-alt"></i>
                                <span>Segura</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-book"></i>
                                <span>Documentada</span>
                            </div>
                        </div>
                        <div class="featured-actions">
                            <a href="#" class="btn-featured primary">
                                <i class="fas fa-book me-2"></i>Documentación
                            </a>
                            <a href="#" class="btn-featured secondary">
                                <i class="fab fa-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="featured-project-card">
                        <div class="featured-project-header">
                            <div class="project-icon">
                                <i class="fas fa-brain text-purple"></i>
                            </div>
                            <div>
                                <h4 class="featured-title">SmartCalc - Calculadora IA</h4>
                                <span class="featured-badge">Innovación Académica</span>
                            </div>
                        </div>
                        <p class="featured-description">
                            Calculadora web avanzada con capacidades de procesamiento de lenguaje natural. 
                            Puede resolver problemas matemáticos escritos en español y mostrar 
                            paso a paso la solución.
                        </p>
                        <div class="featured-tech">
                            <span class="tech-badge">Python</span>
                            <span class="tech-badge">Flask</span>
                            <span class="tech-badge">NLP</span>
                            <span class="tech-badge">JavaScript</span>
                        </div>
                        <div class="featured-stats">
                            <div class="stat-item">
                                <i class="fas fa-language"></i>
                                <span>ES/EN</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-calculator"></i>
                                <span>50+ funciones</span>
                            </div>
                            <div class="stat-item">
                                <i class="fas fa-award"></i>
                                <span>Innovador</span>
                            </div>
                        </div>
                        <div class="featured-actions">
                            <a href="#" class="btn-featured primary">
                                <i class="fas fa-play me-2"></i>Probar
                            </a>
                            <a href="#" class="btn-featured secondary">
                                <i class="fab fa-github me-2"></i>GitHub
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Mi Camino de Aprendizaje</h2>
            <p class="text-center text-muted mb-5 fs-5">
                Las tecnologías y habilidades que he ido desarrollando durante mi carrera universitaria
            </p>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h4 class="service-title">Desarrollo Web</h4>
                        <p class="service-description">
                            Aprendiendo a crear aplicaciones web modernas y responsivas con las 
                            mejores prácticas de la industria.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>HTML5, CSS3, JavaScript</li>
                            <li>Frameworks: Laravel, React</li>
                            <li>Base de datos MySQL</li>
                            <li>Control de versiones Git</li>
                            <li>Responsive Design</li>
                        </ul>
                        <div class="service-price">En progreso</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 class="service-title">Programación</h4>
                        <p class="service-description">
                            Dominio de múltiples lenguajes de programación y paradigmas 
                            aprendidos en la universidad y proyectos personales.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>Java (POO avanzado)</li>
                            <li>Python (Scripts y automatización)</li>
                            <li>JavaScript (Frontend/Backend)</li>
                            <li>PHP (Desarrollo web)</li>
                            <li>C++ (Algoritmos y estructuras)</li>
                        </ul>
                        <div class="service-price">Intermedio</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4 class="service-title">Base de Datos</h4>
                        <p class="service-description">
                            Diseño e implementación de bases de datos relacionales y 
                            no relacionales para diferentes tipos de aplicaciones.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>MySQL y PostgreSQL</li>
                            <li>Diseño de esquemas</li>
                            <li>Consultas SQL complejas</li>
                            <li>Optimización de queries</li>
                            <li>MongoDB (NoSQL básico)</li>
                        </ul>
                        <div class="service-price">Intermedio</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4 class="service-title">DevOps & Herramientas</h4>
                        <p class="service-description">
                            Aprendiendo sobre deployment, CI/CD y herramientas de 
                            desarrollo modernas para mejorar mi flujo de trabajo.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>Git y GitHub</li>
                            <li>Docker (conceptos básicos)</li>
                            <li>VS Code y IDEs</li>
                            <li>Postman para APIs</li>
                            <li>Hosting y deployment</li>
                        </ul>
                        <div class="service-price">Básico</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="service-title">UI/UX & Design</h4>
                        <p class="service-description">
                            Desarrollando habilidades de diseño para crear interfaces 
                            atractivas y experiencias de usuario memorables.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>Principios de UX/UI</li>
                            <li>Bootstrap y Tailwind CSS</li>
                            <li>Figma (prototipado)</li>
                            <li>Responsive Design</li>
                            <li>Accesibilidad web</li>
                        </ul>
                        <div class="service-price">Básico</div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h4 class="service-title">Próximos Objetivos</h4>
                        <p class="service-description">
                            Tecnologías y habilidades que planeo aprender para 
                            completar mi formación como desarrolladora full-stack.
                        </p>
                        <ul class="service-features list-unstyled">
                            <li>Cloud Computing (AWS/Azure)</li>
                            <li>React Native (móvil)</li>
                            <li>Machine Learning básico</li>
                            <li>Microservicios</li>
                            <li>Testing automatizado</li>
                        </ul>
                        <div class="service-price">2025-2026</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Process Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Mi Proceso de Trabajo</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-icon mx-auto mb-3">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5 class="fw-bold mb-3">1. Descubrimiento</h5>
                    <p class="text-muted">
                        Analizamos tus necesidades, objetivos y requerimientos técnicos para 
                        crear la estrategia perfecta.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-icon mx-auto mb-3">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h5 class="fw-bold mb-3">2. Diseño & Planificación</h5>
                    <p class="text-muted">
                        Creamos wireframes, mockups y la arquitectura técnica que guiará 
                        todo el desarrollo.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-icon mx-auto mb-3">
                        <i class="fas fa-code"></i>
                    </div>
                    <h5 class="fw-bold mb-3">3. Desarrollo</h5>
                    <p class="text-muted">
                        Implementación con las mejores prácticas, código limpio y 
                        actualizaciones constantes del progreso.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-icon mx-auto mb-3">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h5 class="fw-bold mb-3">4. Lanzamiento</h5>
                    <p class="text-muted">
                        Testing exhaustivo, deployment y soporte continuo para asegurar 
                        el éxito de tu proyecto.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <script>
        // Filter functionality for projects
        function filterProjects(category) {
            const projects = document.querySelectorAll('.project-category');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Remove active class from all buttons
            buttons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            event.target.classList.add('active');
            
            // Show/hide projects based on category
            projects.forEach(project => {
                if (category === 'all' || project.classList.contains(category)) {
                    project.classList.remove('hidden');
                    project.style.display = 'block';
                } else {
                    project.classList.add('hidden');
                    setTimeout(() => {
                        project.style.display = 'none';
                    }, 300);
                }
            });
        }

        // Animate elements on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '0';
                        entry.target.style.transform = 'translateY(30px)';
                        entry.target.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                        
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, 100);
                        
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all cards
            const cards = document.querySelectorAll('.project-card, .service-card, .testimonial-card');
            cards.forEach(card => observer.observe(card));
        });

        // Smooth scroll for internal links
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

        // Add loading animation for project links
        document.querySelectorAll('.btn-project').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const originalText = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Cargando...';
                this.style.pointerEvents = 'none';
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.style.pointerEvents = 'auto';
                    // Here you would normally redirect to the actual link
                    alert('Demo no disponible - Este es un proyecto de ejemplo');
                }, 2000);
            });
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-projects');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add typing effect to hero title
        function typeWriter(element, text, speed = 100) {
            let i = 0;
            element.innerHTML = '';
            
            function type() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(type, speed);
                }
            }
            
            type();
        }

        // Initialize typing effect when page loads
        window.addEventListener('load', function() {
            const heroTitle = document.querySelector('.hero-projects h1');
            if (heroTitle) {
                const originalText = heroTitle.textContent;
                typeWriter(heroTitle, originalText, 80);
            }
        });
    </script>
</body>
</html>