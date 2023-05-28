@extends('produits.layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mt-5">
        <div class="card-body">
          <h2 class="card-title text-center">Ajouter un nouveau produit</h2>

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

          <form action="{{ route('produits.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <label for="libelle">Libellé</label>
              <input type="text" name="libelle" class="form-control" id="libelle" placeholder="Libellé">
            </div>

            <div class="form-group">
              <label for="prix">Prix</label>
              <input type="number" name="prix" class="form-control" id="prix" placeholder="Prix">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Ajouter</button>
            </div>
          </form>

          <div class="text-center mt-3">
            <a class="btn btn-secondary" href="{{ route('produits.index') }}">Retour</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

