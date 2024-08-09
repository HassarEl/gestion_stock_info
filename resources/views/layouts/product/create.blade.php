@extends('main')
@section('title')
    Produit
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-secondary bg-gradient bg-opacity-75 d-flex justify-content-between">
        <h4>Ajouter Produit</h4>
        <a class="btn btn-info" href="{{route('produit')}}">Produits</a>
    </div>

        <div class="card-body bg-white bg-gradien bg-opacity-10">

            <form class="row form" action="{{route('produit.store')}}" method="POST">
                @csrf
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="border border-bottom-0 form-control" name="name" placeholder="Enter Le Nom De Produit" id="name" required>
                </div>
                <div class="col-1"></div>
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text" class="border border-bottom-0 form-control" name="designation" id="designamtion" placeholder="Enter La Designation" required>
                </div>
                <!-- Commantaire -->
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="designation" class="form-label">Type</label>
                    <select class="form-select" name="type">
                        <option selected>Select Le Type</option>
                        <option value="materiel">Materiele</option>
                        <option value="fourniture">Fouriniture</option>
                      </select>
                </div>
                <div class="col-1"></div>
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="price" class="form-label">Prix</label>
                    <input type="text" class="border border-bottom-0 form-control" name="price" id="price" placeholder="Enter La prix" required>
                </div>
    
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="qte" class="form-label">Quantité</label>
                    <input type="number" class="border border-bottom-0 form-control" min="0" name="qte" id="qte" placeholder="Enter La Quantité" required>
                </div>

                <div class="col-6">

                </div>
    
                <div class="col-5">

                </div>

                <div class="col-6">
                    <input type="submit" class="btn btn-info" value="Ajouter">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </div>
            </form>
        
    </div>
</div>


@endsection