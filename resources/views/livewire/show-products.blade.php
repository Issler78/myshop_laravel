<div>
        @if(session('error'))
            <div style="color:red;font: size 12px;">
                {{ session('error') }}
            </div>
        @endif

    <h2>Detalhes do Produto</h2>
    
    <div class="product-details">
        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" novalidate>
            @csrf
            @method('PUT')

            <p><strong>ID do produto: </strong>{{ $product->id }}</p>

            <div class="form-group">
                <label for="name"><strong>Nome do produto:</strong></label>
                <input type="text" name="name" @if($errors->any()) value="{{ old('name') }}" @endif value="{{ $product->name }}">

                @error('name')
                    <div class="message-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description"><strong>Descrição do produto:</strong></label>
                <input type="text" name="description" @if($errors->any()) value="{{ old('description') }}" @endif value="{{ $product->description }}">

                @error('description')
                    <div class="message-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="distributor"><strong>Distribuidor(a):</strong></label>
                <input type="text" name="distributor" @if($errors->any()) value="{{ old('distributor') }}" @endif value="{{ $product->distributor }}">

                @error('distributor')
                    <div class="message-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="price"><strong>Preço:</strong></label>
                <input type="text" name="price" @if($errors->any()) value="{{ old('price') }}" @endif value="{{ $product->price }}">

                @error('price')
                    <div class="message-error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stock"><strong>Estoque:</strong></label>
                <input type="number" name="stock" @if($errors->any()) value="{{ old('stock') }}" @endif value="{{ $product->stock }}">

                @error('stock')
                    <div class="message-error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn-store" title="Salvar alterações">Salvar</button>
            <a href="{{ route('products.index') }}"><button type="button" class="btn-back" title="Voltar para a tabela">Voltar</button></a>
        </form>

        <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="POST" class="form-del">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-del" title="Deletar produto">
                <span class="material-icons">delete</span>
            </button>
        </form>
    </div>

    <link rel="stylesheet" href="{{ asset('css/show-products.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</div>