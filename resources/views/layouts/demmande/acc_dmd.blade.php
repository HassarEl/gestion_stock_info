@extends('main')
@section('title')
    Demmande
@endsection

@section('content')

<div class="row">
  <div class="col-12">

    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session()->get('message')}}
        <button style="color:#FFF;" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3 mx-4">Demamndes</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">#Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Nom Prenom</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Entité</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Produit</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Date</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Quantité</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-8 ps-2">Satatus</th>                
              </tr>
            </thead>
            <tbody>
              @foreach( $demmandes as $item )
              <tr>
                <td>
                  <div class="d-flex px-2">
                    <div>
                      <!--<img src="../assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">-->
                      <i class="bi bi-hash"></i>
                    </div>
                    <div class="my-auto">
                      <h6 class="mb-0 text-sm">{{$item->id}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->full_name}}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->entite}}</p>
                </td>
                <td class="align-middel text-center text-md">
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->product->name}} --- {{$item->product->designation}}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->date}}</p>
                </td>

                <td class="align-middel text-center text-md">
                  {{$item->qte}}
                </td>

                <td class="align-middle text-center text-md">
                  @if ($item->status == 'en coure')
                  <span class="badge text-bg-warning">{{$item->status}}</span>
                    @elseif ($item->status == 'accepté')
                    <span class="badge text-bg-success">{{$item->status}}</span>
                    @else
                    <span class="badge text-bg-danger">{{$item->status}}</span>
                  @endif
                </td>
              </tr>

              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
