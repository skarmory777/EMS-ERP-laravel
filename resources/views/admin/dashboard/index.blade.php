@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
              <div class="col">
                <div class="card text-white bg-info mb-1" style="max-width: 18rem;">
                    <div class="card-header">Clientes</div>
                    <div class="card-body">
                      <h5 class="card-title">F1</h5>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card text-white bg-warning mb-1" style="max-width: 18rem;">
                    <div class="card-header">Produtos</div>
                    <div class="card-body">
                      <h5 class="card-title">F2</h5>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card text-white bg-success mb-1" style="max-width: 18rem;">
                    <div class="card-header">Serviços</div>
                    <div class="card-body">
                        <h5 class="card-title">F3</h5>
                    </div>
                  </div>
              </div>
              <div class="col">
                <div class="card text-white bg-danger mb-1" style="max-width: 18rem;">
                    <div class="card-header">Ordens</div>
                    <div class="card-body">
                      <h5 class="card-title">F4</h5>
                    </div>
                  </div>
              </div>              
            </div>
          </div>  
          
          <div id="renderResults">
              Aqui Informações do comdominio
          </div>
    </div>

<p>EMS-ERP Dashboard</p>

</div>
@stop
