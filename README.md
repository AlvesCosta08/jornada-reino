# 🌟 Jornada do Reino – Experiência Espiritual Interativa

## 🎯 Objetivo
Guiar o visitante por uma **jornada espiritual imersiva**, conduzindo-o a um **encontro pessoal com Deus** e uma **decisão de fé**.

---

## 🧭 1. Fluxo da Experiência

### 🏠 Página Inicial (`/`)
- **Título**: "Você já se perguntou..."
- **Botão**: "Começar Minha Jornada"
- **Estilo**: Tela escura com efeito `title-glow` e typewriter
- **Áudio**: `ambient-dark.mp3` (ativa com primeira interação do usuário)

---

### 🧭 Estações da Jornada (`/jornada/estacao/{id}`)

#### 🪨 Estação 1 – O Vazio Interior
- **Conteúdo**: Pergunta sobre o vazio interior
- **Pergunta**: "Quando você mais sente esse vazio?"
- **Opções**: 4 respostas possíveis
- **Botão**: "Próxima Estação →" (aparece após selecionar opção)
- **Progresso**: Barra visual com "1 de 3"

#### 💔 Estação 2 – A Queda e Separação
- **Conteúdo**: Fala sobre o pecado e separação de Deus
- **Pergunta**: "O que causou essa separação?"
- **Opções**: 4 respostas possíveis
- **Botão**: "Próxima Estação →"
- **Progresso**: "2 de 3"

#### 💡 Estação 3 – A Luz na Escuridão
- **Conteúdo**: Fala sobre Jesus como luz
- **Pergunta**: "O que a luz de Jesus significa para você?"
- **Opções**: 4 respostas possíveis
- **Botão**: **"🙏 Ir para o Encontro"** (aparece após selecionar opção)
- **Progresso**: "3 de 3"

---

## 🌟 Estação Final – O Encontro (`/encontro`)

### 🎞️ Experiência Cinematográfica
- **Mensagens sequenciais** com GSAP:
  - "Eu te vi em cada passo..."
  - "Eu te amei antes de você existir..."
  - "Você quer Me receber?"
- **Botões**: "Sim, Senhor. Eu quero." ou "Preciso de mais tempo."
- **Áudio**: Automaticamente muda para `hope-theme.mp3`
- **Confirmação**: "Seu 'sim' ecoou nos céus"
- **CTA**: "Pedir oração" ou "Conversar com alguém"

---

## 🙏 Pedido de Oração (`/pedido-oracao`)

### 📝 Formulário Simples
- **Campos**:
  - Nome (opcional)
  - Pedido de oração (obrigatório)
- **Botão**: "Enviar Pedido"
- **Confirmação**: Mensagem "Seu pedido foi recebido com amor. 🙏"
- **Volta para**: "/encontro" ou "Voltar ao Encontro"

---

## 🔊 Sistema de Áudio

### 🎧 Controle Automático
- **Ativação**: Com a **primeira interação** do usuário (clique, scroll, toque, tecla)
- **Volume**: 50% (ajustável)
- **Troca automática**:
  - Nas estações: `ambient-dark.mp3`
  - Na estação final: `hope-theme.mp3`
- **Botão de som**: Fica visível até o áudio ativar, depois some

---

## 🎨 Estilo Visual

### 🎨 Design Imersivo
- **Fundo escuro** (`#000`)
- **Fonte cinematográfica**: `Cinzel`
- **Efeito `title-glow`**: Textos com brilho dourado
- **Animações**:
  - `typewriter` para títulos
  - `GSAP` para transições suaves
  - `AOS` para entradas de elementos
- **Botões com gradiente** e efeito hover

---

## 🧠 Lógica de Navegação

### 🧭 Controle de Estações
- **Progresso salvo**: Não salvo (pode ser implementado com sessão ou banco)
- **Navegação**: Botões "Voltar" e "Próxima Estação" ou "Ir para o Encontro"
- **Validação**: Botão só aparece após selecionar uma opção
- **JavaScript**: Ativa botões com `selectOption()`

---

## 📁 Estrutura de Arquivos

| Pasta/Arquivo | Função |
|---------------|--------|
| `app/Http/Controllers/JourneyController.php` | Lógica das estações e oração |
| `resources/views/layouts/app.blade.php` | Layout principal com áudio, partículas |
| `resources/views/journey/station.blade.php` | Página de cada estação |
| `resources/views/journey/final.blade.php` | Estação final |
| `resources/views/journey/prayer.blade.php` | Formulário de oração |
| `public/audio/ambient-dark.mp3` | Áudio das estações |
| `public/audio/hope-theme.mp3` | Áudio da estação final |
| `routes/web.php` | Rotas: `/jornada`, `/encontro`, `/pedido-oracao` |

---

## 🧩 Funcionalidades Implementadas

| Funcionalidade | Status |
|----------------|--------|
| 🧭 Jornada com 3 estações | ✅ Funcional |
| 🎞️ Estação Final com animações | ✅ Funcional |
| 🙏 Formulário de oração | ✅ Funcional |
| 🔊 Áudio automático e troca | ✅ Funcional |
| 📱 Botões aparecem após selecionar opção | ✅ Funcional |
| 🧠 Sistema de progresso (futuro) | 🚧 Faltando |
| 📊 Banco de dados (futuro) | 🚧 Faltando |
| 🛠️ Painel de administração | 🚧 Faltando |

---

## 🧠 Diferenciais do Projeto

| Elemento | Impacto |
|---------|--------|
| Áudio imersivo | Toca após interação do usuário |
| Animações GSAP | Suavidade emocional |
| Narrativa sequencial | Conduz à decisão |
| Estilo cinematográfico | Profundo e impactante |
| Pedido de oração integrado | Conexão humana real |

---

## 🚀 Próximos Passos (Opcional)

| Melhoria | Descrição |
|----------|-----------|
| 🧠 Salvar progresso | Com login ou sessão |
| 📊 Banco de dados | Salvar pedidos de oração |
| 🛠️ Painel de administração | Editar estações e ver pedidos |
| 📱 PWA | Aplicativo offline |
| 🎥 Vídeos | Animações para cada estação |

---

## 💡 Dúvidas ou Suporte

Se precisar de ajuda com:
- Deploy em produção
- Banco de dados
- Painel de administração
- Partículas ou animações

Entre em contato ou abra uma issue.

---

**Desenvolvido com ❤️ usando Laravel + Bootstrap + GSAP + Animações**
jornada-reino/
├── app/
│   ├── Console/
│   ├── Events/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Controller.php
│   │   │   └── JourneyController.php          ← Controller principal
│   │   ├── Middleware/
│   │   └── Kernel.php
│   ├── Models/
│   │   └── User.php
│   ├── Providers/
│   │   ├── AppServiceProvider.php
│   │   └── RouteServiceProvider.php
│   └── ...
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
│   ├── index.php
│   ├── css/
│   ├── js/
│   ├── audio/                                  ← Áudios da jornada
│   │   ├── ambient-dark.mp3                   ← Áudio das estações
│   │   └── hope-theme.mp3                     ← Áudio da estação final
│   ├── videos/                                 ← Opcional
│   └── storage/
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   ├── app.js
│   │   └── bootstrap.js
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php                  ← Layout principal
│   │   ├── journey/
│   │   │   ├── start.blade.php                ← Página inicial da jornada
│   │   │   ├── station.blade.php              ← Página de cada estação
│   │   │   ├── final.blade.php                ← Estação final
│   │   │   └── prayer.blade.php               ← Formulário de oração
│   │   └── welcome.blade.php                   ← Página inicial do Laravel
├── routes/
│   ├── web.php                                  ← Rotas principais
│   ├── api.php
│   ├── console.php
│   └── channels.php
├── storage/
├── tests/
├── vendor/
├── node_modules/
├── .env                                         ← Configurações do ambiente
├── .gitignore
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
├── README.md
├── vite.config.js
└── webpack.mix.js (ou webpack.config.js)
# jornada-do-reino
# jornada-reino
