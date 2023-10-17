@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fluxamos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Cadastrar Conta</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
           
            <th>Name</th>
            <th>Saldo</th>
            <th>Data de criação da Conta</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <!--<td>{{ $product->id }}</td>-->
            <td>{{ $product->name }}</td>
            <td>{{ 'R$ '.number_format($product->saldo, 2, ',', '.')  }}</td>
            <td>{{ $product->created_at->format('d/m/Y') }}</td>
            
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Informações da conta</a>
                
                    <!--<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>-->
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection
