@extends('produits.layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-body">
          <h2 class="card-title text-center">Modifier le produit</h2>

          @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <form action="{{ route('produits.update',$produit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Libellé:</strong>
                  <input type="text" name="libelle" value="{{ $produit->libelle }}" class="form-control" placeholder="Libellé">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Prix:</strong>
                  <textarea class="form-control" style="height:150px" name="prix" placeholder="Prix">{{ $produit->prix }}</textarea>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
