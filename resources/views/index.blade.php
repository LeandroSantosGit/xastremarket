@extends('templates.template')
@extends('listProduct')

@section('content')
<h1 class="text-center">Xastre Market</h1>

<h3 class="text-center mt-5">Cadastrar Produto</h3>
<div class="col-8 m-auto">
    @if (isset($errors) && count($errors) > 0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif
    
    <form name="registerProduct" id="registerProduct" method="POST" action="{{url('market')}}">
        @csrf
        <div class="row">
            <div class="col">
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="form-control"
                    placeholder="Nome produto"
                    required
                    autofocus>
            </div>
            <div class="col">
                <input 
                    type="text"
                    name="location"
                    id="location"
                    class="form-control"
                    placeholder="Localização"
                    required>
            </div>
        </div>
        <!-- <a href=''> -->
            <button class="btn btn-success mt-3" type="submit">Cadastrar</button>
        <!-- </a> -->
    </form>
</div>
@endsection
