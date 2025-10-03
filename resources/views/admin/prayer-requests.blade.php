@extends('layouts.app')

@section('title', 'Pedidos de Oração')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>🙏 Pedidos de Oração</h1>
        <span class="badge bg-primary rounded-pill">{{ $requests->total() }}</span>
    </div>

    @if($requests->isEmpty())
        <div class="alert alert-info text-center">
            Nenhum pedido de oração recebido ainda.
        </div>
    @else
        <div class="row">
            @foreach($requests as $req)
                <div class="col-12 mb-3">
                    <div class="card bg-dark text-white border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="mb-1">{{ $req->name ?: 'Anônimo' }}</h5>
                                    @if($req->phone)
                                        <p class="text-muted mb-2">📱 {{ $req->phone }}</p>
                                    @endif
                                </div>
                                <small class="text-muted">
                                    {{ $req->created_at->format('d/m H:i') }}
                                </small>
                            </div>
                            <p class="mt-2 mb-0">{{ $req->request }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $requests->links() }}
    @endif

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-outline-light">&larr; Voltar</a>
    </div>
</div>
@endsection
