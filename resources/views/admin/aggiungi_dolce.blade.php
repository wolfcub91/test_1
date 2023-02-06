@extends('template.admin')
@section('row_1')
<!-- Product Section Begin -->
<div class="mx-auto col-md-10">
    <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Aggiungi Dolce</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('dolce.salva')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome dolce</label>
                    <input type="string" required name="nome" class="form-control" id="exampleInputEmail1" placeholder="Inserisci Nome">
                  </div>
                 <div class="form-group">
                        <label>Seleziona Ingredienti</label>
                        <select required name="ingredienti[]" multiple class="form-control">
                        @foreach ($ingredienti as $ingrediente)
                          <option value="{{$ingrediente->id}}">{{$ingrediente->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    Tenere premuto CTRL per selezionare ingredienti multipli
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Inserisci</button>
                </div>
              </form>
        </div>  
</div>
@endsection