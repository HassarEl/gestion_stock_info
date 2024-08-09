@extends('main')
@section('title')
    Marché
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-secondary bg-gradient bg-opacity-75 d-flex justify-content-between">
        <h4>Marché</h4>
        <a class="btn btn-info" href="{{route('produit')}}">Marché</a>
    </div>
    <div class="card-body row bg-white bg-gradien bg-opacity-10">
        <div class="col-lg-4 col-md-6 col-6"></div>
        <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h5></h5>
              </div>
              <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">N° %arché</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$inventory->num_marche}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Produit</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$inventory->product->name}} <br> {{$inventory->product->designation}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Desigantion</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$inventory->designation}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Quantité</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$inventory->qte}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Date</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$inventory->date_enrg}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection