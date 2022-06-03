@extends('layouts.app')

@section('template_title')
    Calibration
@endsection

@section('content')
    <div class="container-fluid" style="background-color:#205F76"
        <div class="row">
    <div class="col-sm-20" align-items: center;>
                <div class="card" style="background-color:#9EE0F9">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                               <b> {{ __('CALIBRATION') }}</b>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('calibrations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body" >
                        <div class="table-responsive">
                        

                    
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No </th>
                                        
										<th>Tool Id</th>
										<th>Status</th>
										<th>Description</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calibrations as $calibration)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $calibration->tool_Id }}</td>
											<td>{{ $calibration->Status }}</td>
											<td>{{ $calibration->Description }}</td>

                                            <td>
                                                <form action="{{ route('calibrations.destroy',$calibration->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calibrations.show',$calibration->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calibrations.edit',$calibration->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                       
                        </div>
                    </div>
                </div>
                {!! $calibrations->links() !!}
            </div>
        </div>
    </div>
@endsection
