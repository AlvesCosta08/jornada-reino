@extends('layouts.app')

@section('title', 'Jornada do Reino - Descubra Seu Propósito')

@section('content')
<div class="container-fluid min-vh-100 px-0">

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
                        <a class="btn btn-journey ms-lg-2" href="/jornada">Começar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção Hero -->
    <section id="hero" class="min-vh-100 d-flex align-items-center justify-content-center text-center px-3">
        <div class="container">
            <h1 class="display-4 fw-bold text-gold title-glow mb-3" data-aos="fade-up">
                🌟 Jornada do Reino
            </h1>
            <p class="lead fs-5 opacity-75 mb-4" data-aos="fade-up" data-aos-delay="200">
                Descubra o propósito eterno da sua vida
            </p>
            <a href="#caracteristicas"
               class="btn btn-journey btn-lg fs-5 px-4 py-3 mb-3 float-animation"
               data-aos="zoom-in"
               data-aos-delay="400">
                🚀 Explorar Jornada
            </a>
        </div>
    </section>

    <!-- Seção Sobre -->
    <section id="sobre" class="py-5 bg-transparent">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold text-gold mb-4">Sobre a Jornada</h2>
                    <p class="fs-5 opacity-75">
                        Uma experiência transformadora que guia você em uma jornada espiritual profunda, revelando o propósito eterno de sua vida.
                    </p>
                    <ul class="list-unstyled mt-4">
                        <li class="mb-2"><i class="fas fa-check-circle text-gold me-2"></i> Caminho guiado por estações espirituais</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gold me-2"></i> Momentos de encontro pessoal com Deus</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-gold me-2"></i> Descubra seu propósito eterno</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 text-center" data-aos="fade-left">
                    <img src="{{ asset('images/journey-visual.png') }}" alt="Visualização da Jornada" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Características -->
    <section id="caracteristicas" class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-gold" data-aos="fade-up">O que você encontrará</h2>
            <div class="row g-4">
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation">🧭</div>
                        <h5 class="fw-bold mb-2">Navegação Guiada</h5>
                        <p class="small opacity-75 mb-0">Passo a passo por estações transformadoras</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation">💖</div>
                        <h5 class="fw-bold mb-2">Encontro Pessoal</h5>
                        <p class="small opacity-75 mb-0">Experiência profunda com Deus</p>
                    </div>
                </div>
                <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation">🎯</div>
                        <h5 class="fw-bold mb-2">Propósito Eterno</h5>
                        <p class="small opacity-75 mb-0">Descubra o verdadeiro sentido da vida</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section id="depoimentos" class="py-5 bg-transparent">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 text-gold" data-aos="fade-up">O que dizem</h2>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Transformou minha vida. Descobri meu propósito real."</p>
                        <div class="mt-3 text-end">
                            <strong>— Ana Silva</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Uma jornada de fé, esperança e encontro com Deus."</p>
                        <div class="mt-3 text-end">
                            <strong>— Carlos Oliveira</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mx-auto" data-aos="fade-up" data-aos-delay="600">
                    <div class="glass-effect rounded-3 p-4 h-100">
                        <p class="fst-italic">"Recomendo a todos que buscam um propósito eterno."</p>
                        <div class="mt-3 text-end">
                            <strong>— Maria Santos</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção CTA Final -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-4 text-gold" data-aos="fade-up">Pronto para começar?</h2>
            <p class="lead mb-4 opacity-75" data-aos="fade-up" data-aos-delay="200">
                Junte-se a milhares que descobriram seu propósito eterno.
            </p>
            <a href="/jornada"
               class="btn btn-journey btn-lg fs-5 px-5 py-3 float-animation"
               data-aos="zoom-in"
               data-aos-delay="400">
                🚀 Começar Agora
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center text-muted small">
        <div class="container">
            &copy; {{ date('Y') }} Jornada do Reino. Todos os direitos reservados.
        </div>
    </footer>

</div>

{{-- Botão Flutuante de Login/Admin --}}
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

@push('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Inicializar AOS
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Scroll suave para links internos
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

    // Animação do título
    const title = document.querySelector('.title-glow');
    if (title) {
        setInterval(() => {
            title.classList.toggle('title-glow');
        }, 4000);
    }

    // Animação dos ícones flutuantes
    const icons = document.querySelectorAll('.float-animation');
    icons.forEach((icon, index) => {
        icon.style.animationDelay = `${index * 0.3}s`;
    });
});
</script>
@endpush

@endsection
