@extends('layouts.app')

@section('template_title')
    {{ $calibration->name ?? 'Show Calibration' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color:#49C9F0">
                        <div class="float-left">
                            <span class="card-title">Show Calibration</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calibrations.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tool Id:</strong>
                            {{ $calibration->tool_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $calibration->Status }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $calibration->Description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
