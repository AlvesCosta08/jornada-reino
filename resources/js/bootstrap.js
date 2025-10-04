import 'bootstrap';

// Importar animações
import AOS from 'aos';

// Inicializar AOS quando o DOM carregar
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
});

// Sistema de Partículas
class ParticleSystem {
    constructor() {
        this.container = document.getElementById('particles-container');
        if (this.container) {
            this.createParticles();
        }
    }

    createParticles() {
        // Criar 20 partículas
        for (let i = 0; i < 20; i++) {
            setTimeout(() => {
                this.createParticle();
            }, i * 100);
        }
    }

    createParticle() {
        const particle = document.createElement('div');
        particle.className = 'particle';

        // Tamanho aleatório entre 1px e 5px
        const size = Math.random() * 4 + 1;
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;

        // Posição aleatória na tela
        particle.style.left = `${Math.random() * 100}vw`;
        particle.style.top = `${Math.random() * 100}vh`;

        // Opacidade aleatória
        particle.style.opacity = Math.random() * 0.5 + 0.1;

        // Duração da animação aleatória
        const duration = Math.random() * 10 + 5;
        particle.style.animationDuration = `${duration}s`;
        particle.style.animationDelay = `${Math.random() * 5}s`;

        this.container.appendChild(particle);
    }
}

// Inicializar partículas quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    new ParticleSystem();
});

// Controle de música de fundo
class BackgroundMusic {
    constructor() {
        this.audio = document.getElementById('bgMusic');
        this.started = false;
    }

    start() {
        if (!this.started && this.audio) {
            this.audio.volume = 0.3;
            this.audio.play().then(() => {
                this.started = true;
            }).catch(e => {
                console.log('Música precisa de interação do usuário');
            });
        }
    }
}

const bgMusic = new BackgroundMusic();

// Iniciar música na primeira interação
document.addEventListener('click', function() {
    bgMusic.start();
}, { once: true });
