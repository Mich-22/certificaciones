@extends('layouts.app')

@section('template_title')
    Update Calibration
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header" style="background-color:#49C9F0">
                        <span class="card-title">Update Calibration</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('calibrations.update', $calibration->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('calibration.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
