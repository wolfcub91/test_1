@extends('template.admin')
@section('row_1')
<!-- Product Section Begin -->
<div class="mx-auto col-md-10">
    <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Aggiungi Dolce in Vetrina</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('vetrina.salva')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome dolce</label>
                    <input type="hidden" name="id_dolce" value="{{$dolce->id}}">
                    <input type="text" readonly value="{{$dolce->nome}}" class="form-control" id="exampleInputEmail1" placeholder="Inserisci Nome">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantità</label>
                    <input type="number"  required name="quantita" class="form-control" id="exampleInputEmail1" placeholder="Inserisci Nome">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prezzo</label>
                    <input type="number" step="0.01" required name="prezzo" class="form-control" id="exampleInputEmail1" placeholder="Inserisci Nome">
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Inserisci in vetrina</button>
                </div>
              </form>
        </div>  
</div>
@endsection