@extends('main')
@section('title')
    Marché
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-secondary bg-gradient bg-opacity-75 d-flex justify-content-between">
        <h4>Modifier Le Marché</h4>
        <a class="btn btn-info" href="{{route('inventory')}}">Marché</a>
    </div>

        <div class="card-body bg-white bg-gradien bg-opacity-10">

            <form class="row form" action="{{route('inventory.update', $inventory->id)}}" method="POST">
                @csrf
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="num" class="form-label">Numero De Marché</label>
                    <input type="text" class="border border-bottom-0 form-control" value="{{$inventory->num_marche}}" name="num" placeholder="Enter Le Numero Du Marché" id="num" required>
                </div>
                <div class="col-1"></div>
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="produit" class="form-label">Produit</label>
                    <select class="form-select" name="product">
                        <option selected>{{$inventory->product->name}} -- {{$inventory->product->designation}}</option>
                        @foreach ($products as $item)
                            <option value="{{$item->id}}">{{$item->name}} --- {{$item->designation}}</option>
                        @endforeach
                      </select>
                </div>
                
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="qte" class="form-label">Quantité</label>
                    <input type="number" value="{{$inventory->qte}}"  min="0"class="border border-bottom-0 form-control" name="qte" id="qte" placeholder="Enter La Quantité" required>
                </div>
                <div class="col-1"></div>
                <div class="border border-top-0 rounded col-md-5 m-3">
                    <label for="designation" class="form-label">Designation</label>
                    <input type="text"  min="0"class="border border-bottom-0 form-control" value="{{$inventory->designation}}" name="designation" id="designation" placeholder="Enter Designation" required>
                </div>

                <div class="col-5">

                </div>

                <div class="col-6">
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-primary" value="Reset">
                </div>
            </form>
        
    </div>
</div>


@endsection