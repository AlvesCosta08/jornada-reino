@extends('layouts.app')

@section('title', 'Início da Jornada')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Card Principal -->
            <div class="station-card" data-aos="zoom-in">
                <h1 class="display-4 text-gold mb-4 title-glow">
                    Bem-vindo à Jornada
                </h1>

                <p class="fs-5 mb-4" data-aos="fade-up" data-aos-delay="200">
                    Você está prestes a embarcar em uma experiência transformadora que pode mudar sua vida para sempre.
                </p>

                <!-- Versículo -->
                <div class="glass-effect rounded-3 p-4 mb-4"
                     data-aos="fade-up"
                     data-aos-delay="400">
                    <p class="fst-italic fs-5">"Eis que estou à porta e bato. Se alguém ouvir a minha voz e abrir a porta, entrarei e cearei com ele, e ele comigo."</p>
                    <p class="fw-bold text-gold mt-2">Apocalipse 3:20</p>
                </div>

                <p class="mb-4 fs-5" data-aos="fade-up" data-aos-delay="600">
                    Está pronto para descobrir o propósito que Deus tem para sua vida?
                </p>

                <!-- Botão de Início -->
                <a href="{{ route('station.show', 1) }}"
                   class="btn btn-journey btn-lg fs-5 px-5 py-3 float-animation"
                   data-aos="fade-up"
                   data-aos-delay="800">
                   Sim, Quero Começar! 🙏
                </a>
            </div>

            <!-- Voltar -->
            <div class="mt-4" data-aos="fade-up" data-aos-delay="1000">
                <a href="{{ route('home') }}" class="btn btn-outline-light">
                    ← Voltar para o Início
                </a>
            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const title = document.querySelector('.title-glow');
    if (title) {
        setInterval(() => {
            title.classList.toggle('text-glow');
        }, 3000);
    }
});
</script>
@endsection
