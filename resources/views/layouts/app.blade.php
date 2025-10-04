<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Jornada do Reino')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- ESTILOS PERSONALIZADOS EMBUTIDOS -->
    @yield('styles')
    @stack('styles')

    <style>
        :root {
            --dourado: #FFD700;
        }
        body {
            background: #000;
            color: white;
            font-family: 'Cinzel', serif;
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gold { color: var(--dourado); }
        .title-glow {
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.6),
                         0 0 40px rgba(255, 215, 0, 0.3);
        }
        .btn-journey {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            color: white;
            border: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
        }
        .btn-journey:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
        }
        .particles-container {
            position: fixed; top: 0; left: 0;
            width: 100%; height: 100%;
            z-index: -1; pointer-events: none;
        }
        #audio-toggle {
            position: fixed; bottom: 20px; right: 20px;
            z-index: 1000;
            background: rgba(255,255,255,0.1);
            width: 60px; height: 60px;
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            cursor: pointer;
        }
        #audio-toggle i { font-size: 24px; color: #a29bfe; }
        #audio-toggle.active i { color: var(--dourado); }
        #audio-status {
            position: fixed; bottom: 85px; right: 20px;
            background: rgba(0,0,0,0.7); color: white;
            padding: 8px 12px; border-radius: 8px;
            display: none;
        }
    </style>
</head>
<body>

<div class="particles-container" id="particles-container"></div>

<audio id="bgMusic" loop class="d-none">
    <source src="{{ asset('audio/ambient-dark.mp3') }}" type="audio/mpeg">
</audio>
<div id="audio-status">Carregando...</div>
<div id="audio-toggle" title="Ativar som">
    <i class="fas fa-volume-up"></i>
</div>

<main>
    @yield('content')
</main>

<!-- JS do Vite REMOVIDO completamente -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

@stack('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {
    const bgMusic = document.getElementById('bgMusic');
    const audioToggle = document.getElementById('audio-toggle');
    const audioStatus = document.getElementById('audio-status');
    let audioActive = false;
    const isFinalPage = window.location.pathname.includes('/encontro');

    function updateStatus(text) {
        audioStatus.textContent = text;
        audioStatus.style.display = 'block';
        setTimeout(() => audioStatus.style.display = 'none', 3000);
    }

    function activateAudio() {
        if (audioActive) return;

        if (isFinalPage) {
            bgMusic.querySelector('source').src = "{{ asset('audio/hope-theme.mp3') }}";
            bgMusic.load();
            updateStatus('Carregando áudio da esperança...');
        }

        bgMusic.volume = 0.5;
        bgMusic.play().then(() => {
            audioActive = true;
            audioToggle.classList.add('active');
            updateStatus('Áudio ativado!');
            setTimeout(() => audioToggle.style.display = 'none', 2000);
        }).catch(e => {
            console.warn("Áudio bloqueado. Clique para ativar.");
            updateStatus('Clique no ícone para ativar o som.');
        });
    }

    ['click', 'touchstart', 'keydown', 'scroll'].forEach(evt => {
        document.addEventListener(evt, activateAudio, { once: true });
    });
});
</script>

</body>
</html>

