@extends('main')
@section('title')
    Demmande
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-secondary bg-gradient bg-opacity-75 d-flex justify-content-between">
        <h4>Demmande</h4>
        <a class="btn btn-info" href="{{route('demmande')}}">Demmande</a>
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
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Nom prenom</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$demmande->full_name}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Entité</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$demmande->entite}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Type de Produit</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$demmande->product->type}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Produit</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$demmande->product->name}} --- {{$demmande->product->designation}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Date</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">{{$demmande->date}}</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Status</h5>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        @if ($demmande->status == 'en coure')
                        <span class="badge text-bg-warning">{{$demmande->status}}</span>
                          @elseif ($demmande->status == 'accepté')
                          <span class="badge text-bg-success">{{$demmande->status}}</span>
                          @else
                          <span class="badge text-bg-danger">{{$demmande->status}}</span>
                        @endif
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <div class="timeline-content">
                      <h5 class="text-dark text-sm font-weight-bold mb-0">Action</h5>
                      <a href="{{route('demmande.accepte.item', $demmande->id)}}" onclick="return confirm('Confirm Acceptation ?')" class="btn btn-success">Accepté</a>
                      <a href="{{route('demmande.refu.item', $demmande->id)}}" onclick="return confirm('Confirm Le Refus?')" class="btn btn-danger">Refuser</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>


@endsection