@extends('main')
@section('title')
    Stocks
@endsection

@section('content')

<div class="row">
  <div class="col-12">

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
      <span class="text-sm"><a href="javascript:;" class="alert-link text-white">{{session()->get('message')}}</a></span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3 mx-4">Stocks</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-8">#Id</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-8 ps-2">Name</th>
                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-8 ps-2">Designation</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Type</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Quantité</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $produits as $item )
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
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->name}}</p>
                </td>
                <td>
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->designation}}</p>
                </td>
                <td class="align-middel text-center text-md">
                  @if ($item->type == 'materiel')
                  <span class="badge text-bg-dark">{{$item->type}}</span>
                    @else
                    <span class="badge text-bg-info">{{$item->type}}</span>
                  @endif
                </td>
                <td>
                  <p class="text-sm font-weight-bold text-center mb-0">{{$item->qte}}</p>
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
