<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
        }

        .text-gold {
            color: var(--dourado);
        }

        .title-glow {
            text-shadow: 0 0 10px rgba(255, 215, 0, 0.6),
                         0 0 20px rgba(255, 215, 0, 0.3);
        }

        .btn-journey {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            color: white;
            border: none;
            font-weight: 600;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-size: 1rem;
            width: 100%;
            max-width: 200px;
        }

        .btn-journey:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(108, 92, 231, 0.4);
        }

        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        /* Botão de áudio fixo responsivo */
        #audio-toggle {
            position: fixed;
            bottom: 15px;
            right: 15px;
            z-index: 1000;
            background: rgba(255,255,255,0.1);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        #audio-toggle i {
            font-size: 1.2rem;
            color: #a29bfe;
        }

        #audio-toggle.active i {
            color: var(--dourado);
        }

        #audio-status {
            position: fixed;
            bottom: 70px;
            right: 15px;
            background: rgba(0,0,0,0.7);
            color: white;
            padding: 0.5rem;
            border-radius: 8px;
            font-size: 0.85rem;
            display: none;
            z-index: 1001;
        }

        /* Ajustes responsivos para mobile */
        @media (max-width: 768px) {
            .btn-journey {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
                max-width: 100%;
            }

            #audio-toggle {
                width: 45px;
                height: 45px;
                bottom: 10px;
                right: 10px;
            }

            #audio-status {
                font-size: 0.75rem;
                padding: 0.4rem;
                bottom: 60px;
                right: 10px;
            }

            .title-glow {
                text-shadow: 0 0 8px rgba(255, 215, 0, 0.6),
                             0 0 16px rgba(255, 215, 0, 0.3);
            }
        }

        @media (max-width: 480px) {
            #audio-toggle {
                width: 40px;
                height: 40px;
            }

            #audio-toggle i {
                font-size: 1rem;
            }

            #audio-status {
                font-size: 0.7rem;
                bottom: 55px;
            }
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

<!-- JS do Bootstrap -->
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
