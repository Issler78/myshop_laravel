<div class="container">
    <h2>Adicionar Produto</h2>
    <form method="POST" action="{{ route('products.store') }}" novalidate>
        @csrf
        <div class="form-group">
            <label for="name">Nome do Produto:</label>
            <input type="text" id="name" name="name" placeholder="Mínimo 4 caracteres" @if($errors->any()) value="{{ old('name') }}" @endif>

            @error('name')
                <div class="message-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <input type="text" id="description" name="description" placeholder="Mínimo 4 caracteres" @if($errors->any()) value="{{ old('description') }}" @endif>

            @error('description')
                <div class="message-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="distributor">Distribuidor(a):</label>
            <input type="text" id="distributor" name="distributor" @if($errors->any()) value="{{ old('distributor') }}" @endif>

            @error('distributor')
                <div class="message-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="text" id="price" name="price" placeholder="R$1234.56" @if($errors->any()) value="{{ old('price') }}" @endif>

            @error('price')
                <div class="message-error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="stock">Estoque:</label>
            <input type="number" id="stock" name="stock" @if($errors->any()) value="{{ old('stock') }}" @endif>

            @error('stock')
                <div class="message-error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Salvar</button>
        <a href="{{ route('products.index') }}"><button class="cancel" type="button">Cancelar</button></a>
    </form>
    
    <link rel="stylesheet" href="{{ asset('css/create-product.css') }}">
</div>