@extends('layouts.app')

@section('title', 'Jornada do Reino - Descubra Seu Propósito')

@section('content')
<div class="container-fluid min-vh-100 d-flex align-items-center">
    <div class="row w-100 justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Cabeçalho Principal -->
            <div class="mb-5" data-aos="fade-down">
                <h1 class="display-3 fw-bold text-gold title-glow mb-3">
                    🎇 Jornada do Reino
                </h1>
                <p class="lead fs-4 opacity-75" data-aos="fade-up" data-aos-delay="200">
                    Descubra o propósito eterno da sua vida
                </p>
            </div>

            <!-- Card de Chamada Principal -->
            <div class="glass-effect rounded-4 p-5 mb-5"
                 data-aos="zoom-in"
                 data-aos-delay="400">

                <p class="fs-5 fst-italic mb-4 typewriter"
                   data-aos="fade-up"
                   data-aos-delay="600">
                   "Você já se perguntou qual é o sentido de tudo?"
                </p>

                <a href="/jornada"
                   class="btn btn-journey btn-lg fs-5 px-5 py-3 mb-3 float-animation"
                   data-aos="fade-up"
                   data-aos-delay="800">
                   🚀 Começar Minha Jornada
                </a>

                <div class="mt-3" data-aos="fade-up" data-aos-delay="1000">
                    <small class="text-muted">Experiência gratuita • Encontro pessoal com Deus</small>
                </div>
            </div>

            <!-- Características da Jornada -->
            <div class="row g-4 mt-4">

                <!-- Característica 1 -->
                <div class="col-12 col-md-4"
                     data-aos="fade-right"
                     data-aos-delay="200">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation">🧭</div>
                        <h5 class="fw-bold mb-2">Navegação Guiada</h5>
                        <p class="small opacity-75 mb-0">Passo a passo por estações transformadoras</p>
                    </div>
                </div>

                <!-- Característica 2 -->
                <div class="col-12 col-md-4"
                     data-aos="fade-up"
                     data-aos-delay="400">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation" style="animation-delay: 0.5s;">💖</div>
                        <h5 class="fw-bold mb-2">Encontro Pessoal</h5>
                        <p class="small opacity-75 mb-0">Experiência profunda com Deus</p>
                    </div>
                </div>

                <!-- Característica 3 -->
                <div class="col-12 col-md-4"
                     data-aos="fade-left"
                     data-aos-delay="600">
                    <div class="glass-effect rounded-3 p-4 h-100 interactive-card">
                        <div class="fs-1 mb-3 float-animation" style="animation-delay: 1s;">🎯</div>
                        <h5 class="fw-bold mb-2">Propósito Eterno</h5>
                        <p class="small opacity-75 mb-0">Descubra o verdadeiro sentido da vida</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- Botão flutuante inteligente: login ou admin --}}
@if(auth()->check())
    {{-- Usuário logado: vai para o painel de admin --}}
    <a href="{{ route('admin.prayer-requests') }}"
       class="btn btn-sm btn-outline-light rounded-circle position-fixed"
       style="bottom: 20px; right: 20px; z-index: 1050; opacity: 0.75; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.25); box-shadow: 0 2px 8px rgba(0,0,0,0.25); transition: opacity 0.2s;"
       title="Área Administrativa"
       data-bs-toggle="tooltip"
       data-bs-placement="left"
       onmouseover="this.style.opacity='1'"
       onmouseout="this.style.opacity='0.75'">
        👑
    </a>
@else
    {{-- Visitante: vai para login (com fallback seguro) --}}
    @php
        $loginUrl = route('login', [], false) ?: '/login';
    @endphp
    <a href="{{ $loginUrl }}"
       class="btn btn-sm btn-outline-light rounded-circle position-fixed"
       style="bottom: 20px; right: 20px; z-index: 1050; opacity: 0.75; backdrop-filter: blur(4px); border: 1px solid rgba(255,255,255,0.25); box-shadow: 0 2px 8px rgba(0,0,0,0.25); transition: opacity 0.2s;"
       title="Login Administrativo"
       data-bs-toggle="tooltip"
       data-bs-placement="left"
       onmouseover="this.style.opacity='1'"
       onmouseout="this.style.opacity='0.75'">
        🔐
    </a>
@endif

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Ativar tooltips do Bootstrap (se disponível)
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        if (typeof bootstrap !== 'undefined') {
            new bootstrap.Tooltip(tooltipTriggerEl);
        }
    });

    // Animação do título
    const title = document.querySelector('.title-glow');
    if (title) {
        setInterval(() => {
            title.classList.toggle('text-glow');
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
