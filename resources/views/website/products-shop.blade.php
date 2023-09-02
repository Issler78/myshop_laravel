@extends('layouts.myshop')

@section('content')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Bootstrap Style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">homepage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            @if($product->stock <= 5)
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Últimas Unidades!</div>
                            @endif
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.dribbble.com/users/5463015/screenshots/12265155/mountainsun-01_4x.png" alt="Imagem Ilustrativa" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <a href="{{ route('products.details', ['name' => $product->name]) }}" style="color:black;text-decoration:none"><h5 class="fw-bolder">{{ $product->name }}</h5></a>
                                    <!-- Product price-->
                                    <?php
                                    echo "R$" . str_replace('.', ',', $product->price);
                                    ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao carrinho</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Issler 2023</p></div>
        </footer>
@endsection