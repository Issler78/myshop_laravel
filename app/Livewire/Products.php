<?php

namespace App\Livewire;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public $search = '';

    public function render()
    {
        if($this->search == '')
        {
            $this->products = Product::all();
        }

        else
        {
            $this->products = DB::table('products')->where('id', $this->search)->orWhere('name', 'LIKE', "%$this->search%")->orWhere('distributor', $this->search)->get();
        }
        
        return view('livewire.products');
    }



    public function create()
    {
        return view('livewire.create-product');
    }

    public function store(ProductRequest $request)
    {
        $validate = $request->validated();
        
        $created = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'distributor' => $request->input('distributor'),
            'price' => str_replace(',', '.', $request->input('price')),
            'stock' => $request->input('stock')
        ]);
        
        if($created)
        {
            return redirect()->route('products.index')->with('status', 'Produto cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors($validate)->withInput();
    }

    

    public function show(string $id)
    {
        return view('livewire.show-products', ['product' => Product::find($id)]);
    }

    public function update(ProductRequest $request, string $id)
    {
        $validate = $request->validated();

        $update = Product::findOrFail($id)->update($request->except(['_method', '_token']));
        if($update)
        {
            return redirect()->route('products.index')->with('status', 'Produto atualizado com sucesso.');
        }

        return redirect()->back()->withErrors($validate)->withInput();
    }



    public function destroy($id)
    {
        $del = Product::findOrFail($id)->delete();
        if($del)
        {
            return redirect()->route('products.index')->with('status', 'Produto deletado com sucesso.');
        }

        return redirect()->back()->with('error', 'Erro ao tentar deletar produto.');
    }
}
