@extends('layouts.app')

@section('title', 'O Encontro')

@section('content')
<div class="container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100 px-3">
    <div id="light-beam" class="position-absolute rounded-circle" style="
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(108,92,231,0.4) 0%, transparent 70%);
        filter: blur(60px);
        z-index: -1;
        opacity: 0;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    "></div>

    <h1 class="display-4 fw-bold text-center title-glow typewriter" id="greeting">
        Meu filho...
    </h1>

    <div class="text-center mt-4" style="max-width: 700px;">
        <p class="message fs-4" id="message1" style="opacity: 0; line-height: 1.7;">
            Eu te vi em cada passo dessa jornada.<br>
            Vi seu vazio, suas dúvidas, seu desejo por algo mais.
        </p>

        <p class="message fs-4" id="message2" style="display: none; opacity: 0; line-height: 1.7;">
            Eu te amei antes mesmo de você existir.<br>
            E hoje, neste exato momento, estou te chamando pelo nome.
        </p>

        <p class="message fs-4" id="message3" style="display: none; opacity: 0; line-height: 1.7;">
            Você quer Me receber?<br>
            Quer que Eu entre no seu coração e transforme sua vida?
        </p>
    </div>

    <div id="buttons" class="mt-5" style="opacity: 0;">
        <button class="btn btn-outline-light btn-lg px-4 py-2 me-3" onclick="accept()">
            Sim, Senhor. Eu quero.
        </button>
        <button class="btn btn-outline-light btn-lg px-4 py-2" onclick="later()">
            Preciso de mais tempo.
        </button>
    </div>

    <div id="confirmation" class="text-center mt-5" style="display: none;">
        <p class="lead text-warning fs-2">✨ Seu "sim" ecoou nos céus.</p>
        <p class="fs-4">Você não está mais sozinho.</p>
        <div class="mt-4">
            <a href="{{ route('prayer.request') }}" class="btn btn-light text-dark btn-lg me-2">Pedir oração</a>
            <a href="https://wa.me/seunumero" target="_blank" class="btn btn-outline-light btn-lg">Conversar com alguém</a>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const bgMusic = document.getElementById('bgMusic');
    if (bgMusic) {
        window.originalAudio = bgMusic.querySelector('source').src;
        const hopeAudio = "{{ asset('audio/hope-theme.mp3') }}";
        bgMusic.querySelector('source').src = hopeAudio;
        bgMusic.load();
        setTimeout(() => {
            bgMusic.volume = 0.15;
            bgMusic.play().catch(e => console.log("Áudio bloqueado até interação"));
        }, 1000);
    }

    gsap.to('#light-beam', { opacity: 0.7, duration: 3, ease: "power1.inOut" });

    function showMessage(id) {
        const el = document.getElementById(id);
        el.style.display = 'block';
        gsap.to(el, { opacity: 1, y: 0, duration: 1.2 });
    }

    setTimeout(() => showMessage('message1'), 1000);
    setTimeout(() => showMessage('message2'), 5000);
    setTimeout(() => {
        showMessage('message3');
        gsap.to('#buttons', { opacity: 1, duration: 1 });
    }, 9000);
});

function accept() {
    document.getElementById('buttons').style.display = 'none';
    document.getElementById('confirmation').style.display = 'block';

    const bgMusic = document.getElementById('bgMusic');
    if (bgMusic) {
        gsap.to(bgMusic, { volume: 0.4, duration: 4 });
    }

    gsap.to('#light-beam', {
        opacity: 1,
        scale: 2,
        duration: 4,
        ease: "power2.out"
    });

    gsap.from('#confirmation', { opacity: 0, y: 30, duration: 1.5 });
}

function later() {
    if (confirm("Tudo bem. Mas saiba que Eu estarei aqui, sempre.\n\nQuer voltar para o início?")) {
        const bgMusic = document.getElementById('bgMusic');
        if (bgMusic && window.originalAudio) {
            bgMusic.querySelector('source').src = window.originalAudio;
            bgMusic.load();
        }
        window.location.href = "{{ url('/') }}";
    }
}
</script>
@endsection
