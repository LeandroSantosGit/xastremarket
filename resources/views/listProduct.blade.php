@section('contentList')
<h3 class="text-center mt-5">Lista de Produtos</h3>
<div class="col-8 m-auto ">
    @csrf
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Produto</th>
            <th scope="col">Localização</th>
            <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($product as $productUnique)
            <tr>
                <th scope="row">{{$productUnique->id}}</th>
                <td>{{$productUnique->name}}</td>
                <td>{{$productUnique->location}}</td>
                <td>
                    <div>
                        <a href='{{url("market/$productUnique->id")}}'>
                            <button class="btn btn-danger deleteProduct" role="button">Deletar</button>
                        </a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$product->links()}}
</div>
@endsection
