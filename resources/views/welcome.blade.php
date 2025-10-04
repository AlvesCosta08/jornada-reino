@extends('layouts.app')

@section('title', 'Jornada do Reino - Descubra Seu Propósito')

@section('content')
<div class="container-fluid min-vh-100 px-0 position-relative">

    <!-- Fundo com Animação de Partículas -->
    <div id="tsparticles" class="position-absolute top-0 start-0 w-100 h-100" style="z-index: -1;"></div>

    <!-- Overlay de Fundo com Gradiente -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
         style="background: linear-gradient(135deg, rgba(12, 10, 30, 0.95), rgba(0, 0, 0, 0.85)); z-index: -2;"></div>

    <!-- Navegação Fixa -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top py-3" style="background: rgba(0,0,0,0.7); backdrop-filter: blur(10px);">
        <div class="container">
            <a class="navbar-brand fw-bold text-gold fs-4" href="#hero">🌟 Jornada do Reino</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#caracteristicas">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-journey ms-lg-2 px-4" href="/jornada">Começar Agora</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Hero com Cores e Animação -->
    <section id="hero" class="min-vh-100 d-flex align-items-center justify-content-center text-center px-3 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <h1 class="display-3 fw-bold text-gold title-glow mb-4 animate__animated animate__fadeInUp" data-aos="fade-up">
                        🌟 Jornada do Reino
                    </h1>
                    <p class="lead fs-4 mb-4 opacity-75 animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="200">
                        Você já se perguntou qual é o verdadeiro propósito da sua vida?
                    </p>
                    <p class="fs-5 mb-5 text-purple animate__animated animate__fadeInUp" data-aos="fade-up" data-aos-delay="300">
                        <strong>Revelamos o caminho para sua missão eterna.</strong>
                    </p>
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                        <a href="#caracteristicas"
                           class="btn btn-journey btn-lg fs-5 px-5 py-3 animate__animated animate__bounceIn"
                           data-aos="zoom-in"
                           data-aos-delay="400">
                            🔍 Explorar Jornada
                        </a>
                        <a href="/jornada"
                           class="btn btn-outline-light btn-lg fs-5 px-5 py-3 animate__animated animate__bounceIn"
                           data-aos="zoom-in"
                           data-aos-delay="500">
                            🚀 Começar Agora
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 text-center w-100 mb-3">
            <a href="#sobre" class="text-muted">
                <i class="fas fa-chevron-down fa-2x animate__animated animate__bounce"></i>
            </a>
        </div>
    </section>

    <!-- Seção Sobre com Cores Psicológicas -->
    <section id="sobre" class="py-5 bg-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold text-gold mb-4">Sua Vida Tem um Propósito Maior</h2>
                    <p class="fs-5 opacity-75">
                        Muitos vivem sem saber o porquê estão aqui. Mas e se eu te dissesse que sua existência tem um propósito eterno?
                    </p>
                    <p class="fs-5 opacity-75 mt-3">
                        A Jornada do Reino revela passo a passo o plano de Deus para sua vida, transformando sua fé em um encontro real com Ele.
                    </p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gold me-2"></i> Guia espiritual transformador</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-purple me-2"></i> Revelação do seu propósito eterno</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-blue me-2"></i> Encontro pessoal com Deus</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 text-center" data-aos="fade-left">
                    <img src="{{ asset('images/journey-visual.png') }}" alt="Visualização da Jornada" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Características com Cores Estratégicas -->
    <section id="caracteristicas" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-gold" data-aos="fade-up">O que você descobrirá</h2>
            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card text-center">
                        <div class="fs-1 mb-3 float-animation text-purple">🧭</div>
                        <h5 class="fw-bold mb-2">Guia Espiritual</h5>
                        <p class="small opacity-75 mb-0">Caminho transformador com passos claros e reveladores</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card text-center">
                        <div class="fs-1 mb-3 float-animation text-blue">💖</div>
                        <h5 class="fw-bold mb-2">Encontro Profundo</h5>
                        <p class="small opacity-75 mb-0">Sua fé se torna realidade em um encontro pessoal com Deus</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card text-center">
                        <div class="fs-1 mb-3 float-animation text-gold">🎯</div>
                        <h5 class="fw-bold mb-2">Missão Eterna</h5>
                        <p class="small opacity-75 mb-0">Descubra seu papel no plano eterno de Deus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos com Cores Suaves -->
    <section id="depoimentos" class="py-5 bg-transparent">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-gold" data-aos="fade-up">O que mudou para quem começou</h2>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Minha vida não foi mais a mesma. Descobri o que realmente importa."</p>
                        <div class="mt-3 text-end">
                            <strong>— Ana Silva</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Uma experiência de fé profunda. Me fez ver o mundo com outros olhos."</p>
                        <div class="mt-3 text-end">
                            <strong>— Carlos Oliveira</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="600">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Recomendo a todos que desejam viver com propósito real."</p>
                        <div class="mt-3 text-end">
                            <strong>— Maria Santos</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção CTA Final com Cores de Ação -->
    <section class="py-5 text-center" style="background: linear-gradient(135deg, #1a1a2e, #16213e);">
        <div class="container">
            <h2 class="fw-bold mb-4 text-gold animate__animated animate__pulse animate__infinite" data-aos="fade-up">
                A Jornada Começa Agora
            </h2>
            <p class="lead mb-4 opacity-75" data-aos="fade-up" data-aos-delay="200">
                Junte-se a milhares que descobriram seu propósito eterno.
            </p>
            <a href="/jornada"
               class="btn btn-journey btn-lg fs-5 px-5 py-4 animate__animated animate__bounceIn"
               data-aos="zoom-in"
               data-aos-delay="400">
                🚀 Começar Minha Jornada
            </a>
            <p class="mt-3 text-muted small">
                Acesso gratuito • Experiência transformadora
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center text-muted small" style="background: rgba(0,0,0,0.7);">
        <div class="container">
            &copy; {{ date('Y') }} Jornada do Reino. Todos os direitos reservados.
        </div>
    </footer>

</div>

{{-- Botão Flutuante à Esquerda (Voltar ao Topo) --}}
<div id="backToTop" class="btn btn-sm btn-outline-light rounded-circle position-fixed d-flex align-items-center justify-content-center"
     style="bottom: 20px; left: 20px; z-index: 1050; width: 50px; height: 50px; opacity: 0.75; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.25); box-shadow: 0 2px 8px rgba(0,0,0,0.25); transition: opacity 0.2s; display: none; cursor: pointer;"
     title="Voltar ao topo">
    <i class="fas fa-arrow-up"></i>
</div>

{{-- Botão Flutuante à Direita (Login/Admin) --}}
@if(auth()->check())
    <a href="{{ route('admin.prayer-requests') }}"
       class="btn btn-sm btn-outline-light rounded-circle position-fixed d-flex align-items-center justify-content-center"
       style="bottom: 20px; right: 20px; z-index: 1050; width: 50px; height: 50px; opacity: 0.75; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.25); box-shadow: 0 2px 8px rgba(0,0,0,0.25); transition: opacity 0.2s;"
       title="Área Administrativa">
        👑
    </a>
@else
    <a href="{{ route('login') ?: '/login' }}"
       class="btn btn-sm btn-outline-light rounded-circle position-fixed d-flex align-items-center justify-content-center"
       style="bottom: 20px; right: 20px; z-index: 1050; width: 50px; height: 50px; opacity: 0.75; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.25); box-shadow: 0 2px 8px rgba(0,0,0,0.25); transition: opacity 0.2s;"
       title="Login Administrativo">
        🔐
    </a>
@endif

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/lib/tsparticles.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar partículas
    tsParticles.load("tsparticles", {
        fpsLimit: 60,
        particles: {
            color: { value: "#FFD700" },
            links: { enable: true, distance: 150, color: "#a29bfe", opacity: 0.3 },
            move: { enable: true, speed: 1, direction: "none", random: true, straight: false },
            number: { value: 80, density: { enable: true, area: 800 } },
            opacity: { value: 0.5 },
            shape: { type: "circle" },
            size: { value: { min: 1, max: 3 } }
        },
        detectRetina: true,
        interactivity: {
            events: { onHover: { enable: true, mode: "repulse" } }
        }
    });

    // Inicializar AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Scroll suave
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Botão "Voltar ao Topo"
    const backToTop = document.getElementById('backToTop');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) backToTop.style.display = 'flex';
        else backToTop.style.display = 'none';
    });

    backToTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Animação do título
    const title = document.querySelector('.title-glow');
    if (title) {
        setInterval(() => title.classList.toggle('title-glow'), 4000);
    }
});
</script>
@endpush

@endsection
