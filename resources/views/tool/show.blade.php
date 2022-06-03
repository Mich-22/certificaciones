@extends('layouts.app')

@section('template_title')
    {{ $tool->name ?? 'Show Tool' }}
@endsection

@section('content')
    <section class="content container-fluid" >
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"style="background-color:#49C9F0">
                        <div class="float-left">
                            <span class="card-title">Show Tool</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tools.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body" >
                        
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $tool->Marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $tool->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoherramienta:</strong>
                            {{ $tool->TipoHerramienta }}
                        </div>
                        <div class="form-group">
                            <strong>Fechaderegsitro:</strong>
                            {{ $tool->FechaDeRegsitro }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
