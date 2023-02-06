@extends('template.admin')
@section('row_1')
<!-- Product Section Begin -->
<div class="mx-auto col-md-10">
  @foreach ($dolci as $dolce)
      <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-right: 20px;">{{$dolce->nome}}</h3>
                <h3 class="card-title" style="margin-right: 20px;"><a href="{{route('dolce.modifica',['id'=>$dolce->id])}}">Modifica</a></h3>
                <h3 class="card-title" style="margin-right: 20px;"><a href="{{route('dolce.elimina',['id'=>$dolce->id])}}">Elimina</a></h3>
                <h3 class="card-title" style="margin-right: 20px;"><a href="{{route('vetrina.aggiungi',['id'=>$dolce->id])}}">Aggiungi in vetrina</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th>Ingredienti</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($dolce->ingredienti()->get() as $ingrediente)
                    <tr>
                      <td>{{$ingrediente->id}}</td>
                      <td>{{$ingrediente->nome}}</td>
                    </tr>  
                  @endforeach   
                  </tbody> 
                </table>            
              </div>
              <!-- /.card-body -->
            </div>
      @endforeach
</div>
@endsection