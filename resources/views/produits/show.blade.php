@extends('produits.layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-body">
          <h2 class="card-title text-center">Consultation du produit</h2>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Libellé:</strong>
                {{ $produit->libelle }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Prix:</strong>
                {{ $produit->prix }}
              </div>
            </div>
          </div>

          <div class="text-center mt-3">
            <a class="btn btn-primary" href="{{ route('produits.index') }}">Retour</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
