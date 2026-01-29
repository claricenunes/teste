@extends('layouts.index')

@section('title', 'Peça aqui | Bowl')

@section('content')
    <div class="order-page">
        <h1>Peça aqui</h1>

        <p>Escolha os itens do cardápio abaixo e finalize seu pedido.</p>

        <section class="order-list">
            @php
                $produtos = \Illuminate\Support\Facades\DB::table('produtos')->get();
            @endphp

            @if($produtos->isEmpty())
                <p>Nenhum item disponível no momento.</p>
            @else
                <div class="products-grid">
                    @foreach($produtos as $p)
                        <div class="product-card">
                            <h3>{{ $p->nome }}</h3>
                            <p class="price">R$ {{ number_format($p->valor, 2, ',', '.') }}</p>
                            <p class="tipo">{{ ucfirst($p->tipo) }}</p>
                            <button class="btn-default add-to-cart" data-id="{{ $p->id }}">Adicionar</button>
                        </div>
                    @endforeach
                </div>
            @endif
        </section>

        <aside class="cart">
            <h2>Seu pedido</h2>
            <div id="cart-items">Nenhum item adicionado.</div>
            <button id="checkout" class="btn-default btn-primary">Finalizar pedido</button>
        </aside>
    </div>

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function(){
        const cart = [];
        function renderCart(){
            const el = document.getElementById('cart-items');
            if(cart.length === 0){ el.innerHTML = 'Nenhum item adicionado.'; return; }
            el.innerHTML = '<ul>' + cart.map(i => `<li>${i.name} - Qtd: ${i.qty}</li>`).join('') + '</ul>';
        }

        document.querySelectorAll('.add-to-cart').forEach(btn => {
            btn.addEventListener('click', () => {
                const id = btn.dataset.id;
                const name = btn.parentElement.querySelector('h3').innerText;
                const found = cart.find(x => x.id==id);
                if(found) found.qty++;
                else cart.push({id, name, qty:1});
                renderCart();
            });
        });

        document.getElementById('checkout').addEventListener('click', () => {
            alert('Funcionalidade de checkout não implementada — exemplo apenas.');
        });
    });
    </script>
    @endpush
@endsection
