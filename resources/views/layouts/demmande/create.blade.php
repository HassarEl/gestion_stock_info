@extends('main')
@section('title')
    Demmandes
@endsection

@section('content')

<div class="card">
    <div class="card-header bg-secondary bg-gradient bg-opacity-75 d-flex justify-content-between">
        <h4>Ajouter Une Demmande</h4>
        <a class="btn btn-info" href="{{route('demmande')}}">Demmandes</a>
    </div>

        <div class="card-body bg-white bg-gradien bg-opacity-10">

            <form action="{{route('demmande.store')}}" method="POST">
                @csrf
                <div style="margin-bottom: 30px;" class="row">
                    <div class="col-lg-6">
                        <label for="fullname" class="form-label">Nom Prenom</label>
                        <input type="text" class="border border-bottom-0 form-control" name="fullname" id="fullname" placeholder="Enter Le Nom Prenom" required>
                    </div>
                    <div class="col-lg-6">
                        <label for="entite" class="form-label">Entité</label>
                        <input type="text" class="border border-bottom-0 form-control" name="entite" id="entite" placeholder="Enter L'entite" required>
                    </div>
                </div>
                <div style="margin-bottom: 30px;" class="row">
                    <div class="col-lg-6">
                        <label for="produit" class="form-label">Materiel</label>
                        <select class="form-select" name="produit">
                            <option selected>Select Materiel</option>
                            @foreach ($materiel as $item)
                                <option value="{{$item->id}}">{{$item->name}} --- {{$item->designation}}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="produit" class="form-label">Fourniture</label>
                        <select class="form-select" name="produit">
                            <option selected>Select Fourniture</option>
                            @foreach ($fourniture as $item)
                                <option value="{{$item->id}}">{{$item->name}} --- {{$item->designation}}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="qte" class="form-label">Quantité</label>
                        <input type="number" min="0" class="border border-bottom-0 form-control" name="qte" id="qte" placeholder="Enter La quantite" required>
                    </div>
                </div>
                <div style="margin-bottom: 30px;" class="row">
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-info m-3" value="Envoyé">
                        <input type="reset" class="btn btn-danger m-3" value="Reset">
                    </div>
                </div>
            </form>
        
    </div>
</div>


@endsection