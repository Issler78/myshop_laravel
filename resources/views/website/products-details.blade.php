@extends('layouts.myshop')

@section('content')

@foreach($product as $product)
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="https://cdn.dribbble.com/users/5463015/screenshots/12265155/mountainsun-01_4x.png" alt="Imagem Ilustrativa" />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">CNPJ da distribuidora: {{ $product->distributor }}</div>
                    <h1 class="display-5 fw-bolder">{{ $product->name }}</h1>
                    <div class="fs-5 mb-5">
                        <span><?php echo "R$" . str_replace('.', ',', $product->price); ?></span>
                    </div>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                    <h2 style="font-weight: bold; border-bottom:1px solid gray;margin: bottom 5px;">DESCRIÇÃO DO PRODUTO</h2>
                    <p class="lead">{{ $product->description }}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Issler 2023</p></div>
        </footer>

@endsection