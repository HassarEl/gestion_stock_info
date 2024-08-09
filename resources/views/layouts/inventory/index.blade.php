@extends('main')
@section('title')
    Marché
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
      <br><br>
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-secondary shadow-secondary border-radius-lg pt-4 pb-3 d-flex justify-content-between">
          <h6 class="text-white text-capitalize ps-3 mx-4">Marché</h6>
          <div class="col-lg-4">
            <form method="GET" action="{{route('search.product')}}" class="d-flex align-items-center" role="search">
              <input style="color:#FFF; border-top: 1px solid #FFF; box-shadow: 3px 6px 18px 2px rgba(0, 0, 0, 0.2);" class="form-control col-3" name="query" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success col-3" style="margin-bottom: 0px" type="submit">Search</button>
            </form>
          </div>
          <a class="btn btn-info mx-4" href="{{route('inventory.create')}}">Ajouter</a>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-8">#Id</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-8 ps-2">N° Marché</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-8 ps-2">Produit</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Date</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Quantité</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Designation</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $inventorys as $item )
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
                  <p class="text-sm font-weight-bold mb-0">{{$item->num_marche}}</p>
                </td>
                <td>
                    <p class="text-sm font-weight-bold mb-0">{{$item->product->name}} --- {{$item->product->designation}}</p>
                  </td>
                <td>
                    <p class="text-sm font-weight-bold mb-0">{{$item->date_enrg}}</p>
                </td>
                <td class="align-middle text-center text-md">
                  <p class="text-sm font-weight-bold mb-0">{{$item->qte}}</p>
                </td>

                <td class="align-middle text-center">
                  <p class="text-sm font-weight-bold mb-0">{{$item->designation}}</p>
                </td>
                <td class="align-middel text-center">
                  <div class="d-flex justify-content-center">
                    <a class="btn btn-info" href="{{route('inventory.show', $item->id)}}"><i class="bi bi-eye"></i></a>
                    <a class="btn btn-warning" href="{{route('inventory.edit', $item->id)}}"><i class="bi bi-pen"></i></a>
                  </div>
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
