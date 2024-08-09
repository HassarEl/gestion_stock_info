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
    <div class="card-body row bg-white bg-gradien bg-opacity-10">
        <div class="col-lg-4 col-md-6 col-6"></div>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h5>{{$produit->name}}</h5>
              </div>
              <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Designation</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$produit->designation}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Date d'ajoute</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$produit->created_at}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Type</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$produit->type}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Quantité</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$produit->qte}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection