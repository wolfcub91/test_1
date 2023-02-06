@extends('template.admin')
@section('row_1')
<!-- Product Section Begin -->
<div class="mx-auto col-md-10">
      <div class="card">
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th>Dolce</th>
                      <th>Prezzo</th>
                      <th>Prezzo Nuovo</th>
                      <th>Quantità</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($dolci_vetrina as $key => $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->dolce->nome}}</td>
                      <td>{{$value->prezzo}}€</td>
                      <td>{{$value->prezzo_nuovo}}€</td>
                      <td>{{$value->quantita}}</td>
                    </tr>  
                  @endforeach   
                  </tbody> 
                </table>            
              </div>
              <!-- /.card-body -->
            </div>
</div>
@endsection