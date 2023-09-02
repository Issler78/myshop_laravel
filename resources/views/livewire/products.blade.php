<div class="container">
    <div class="hero">
        <h1>Produtos Cadastrados</h1>

        <div class="search-box">
            <input type="text" class="search-text-input" placeholder="Pesquisar..." name="search" wire:model.lazy="search">
            <a class="search-btn">
                <img src="{{ asset('images/loupe-blue.svg') }}" class="loupe-blue" alt="" width="15px" height="15px">
            </a>
        </div>
    </div>

    <div class="main-content">
        <div class="btn-message" style="display: flex; align-items:baseline; gap: 20px;">
            <ul class="ul__add">
                <li><a href="{{ route('products.create') }}" class="add-btn">Cadastrar Produto</a></li>
            </ul>

            @if(session('status'))
            <div class="status">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <table>
            <thead>
                <tr>
                    <th class="td_id">ID</th>
                    <th style="border-right: none;">Nome do produto</th>
                    <th style="text-align: center; border-left:none;"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr class="tr_body">
                    <td class="td_id">{{ $product->id }}</td>
                    <td class="td_values">{{ $product->name }}</td>
                    <td class="td_btn">
                        <a href="{{ route('products.show', ['id' => $product->id]) }}" class="icon-open" title="Abrir detalhes">
                            <span class="material-icons icon">menu_open</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <link rel="stylesheet" href="{{ asset('css/products.index.css') }}">
</div>