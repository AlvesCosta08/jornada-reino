@extends('layouts.app')

@section('title', 'Pedido de Oração')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="glass-effect rounded-3 p-5 text-center">
                <h2 class="text-gold mb-4">🙏 Pedido de Oração</h2>
                <p class="mb-4">Seu "sim" ecoou nos céus. Como podemos orar por você?</p>

                <form id="prayerForm">
                    <div class="mb-3 text-start">
                        <label for="name" class="form-label">Nome (opcional)</label>
                        <input type="text" class="form-control bg-transparent text-white border-0 rounded-3"
                               id="name" placeholder="Seu nome">
                    </div>
                    <div class="mb-3 text-start">
                        <label for="phone" class="form-label">Telefone / WhatsApp (opcional)</label>
                        <input type="tel" class="form-control bg-transparent text-white border-0 rounded-3"
                               id="phone" placeholder="(00) 90000-0000">
                    </div>
                    <div class="mb-4 text-start">
                        <label for="request" class="form-label">Pedido de oração *</label>
                        <textarea class="form-control bg-transparent text-white border-0 rounded-3"
                                  id="request" rows="4" placeholder="Escreva seu pedido..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-journey w-100">Enviar Pedido</button>
                </form>

                <a href="{{ route('home') }}" class="btn btn-outline-light mt-3">← Voltar ao Encontro</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.getElementById('prayerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const request = document.getElementById('request').value.trim();
    if (request.length < 5) {
        alert('Por favor, escreva um pedido com mais detalhes (mínimo 5 caracteres).');
        return;
    }

    fetch("{{ route('prayer.store') }}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            name: document.getElementById('name').value.trim(),
            phone: document.getElementById('phone').value.trim(),
            request: request
        })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert('Seu pedido foi recebido com amor. 🙏');
            window.location.href = "{{ route('home') }}";
        } else {
            alert('Erro: ' + (data.message || 'Não foi possível enviar seu pedido.'));
        }
    })
    .catch(err => {
        console.error('Erro na requisição:', err);
        alert('Erro ao enviar. Verifique sua conexão e tente novamente.');
    });
});
</script>
@endpush
@endsection
