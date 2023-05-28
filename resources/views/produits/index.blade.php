@extends('produits.layout')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-body">
          <h2 class="card-title text-center">Liste des produits</h2>

          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
          @endif

          <table class="table table-bordered">
            <tr>
              <th>Libellé</th>
              <th>Prix</th>
              <th width="280px">Action</th>
            </tr>
            @foreach ($produits as $produit)
            <tr>
              <td>{{ $produit->libelle }}</td>
              <td>{{ $produit->prix }}</td>
              <td>
                <form action="{{ route('produits.destroy',$produit->id) }}" method="POST">

                  <a class="btn btn-info" href="{{ route('produits.show',$produit->id) }}">Show</a>

                  <a class="btn btn-primary" href="{{ route('produits.edit',$produit->id) }}">Edit</a>

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
              </td>
            </tr>
            @endforeach
          </table>

          <div class="text-center mt-3">
            <a class="btn btn-secondary" href="{{ route('produits.create') }}">Ajouter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

