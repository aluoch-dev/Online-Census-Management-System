@extends('layouts.app')

@section('content')
      <div class="container"  id="content">
        <br />

       @include('includes.message')
    
    <table class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Animal</th>
                <th>Count</th>
                
                <th colspan="2">Manage Animals</th>
            </tr>
        </thead>
        <tbody>
            @foreach($assetownerships as $assetownership)
            <tr> 
                <td></td>   
                <td>{{$assetownership->asset->asset }}</td>
                <td>{{$assetownership->asset_count }}</td>
                <td>
                    <div class='col-md-6'>
                        <a href="{{route('editAsset', $assetownership->id)}}" class="btn-sm btn btn-warning">Edit</a>
                    </div>
                </td>
                <td>
                    <div class='col-md-6'>
                        <form action="{{route('destroyAsset', $assetownership->id)}}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-4 ">
                <a href="{{ route('createAsset') }}" class="btn-sm btn btn-primary">{{ __('Add more Assets') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('assetImports') }}" class="btn-sm btn btn-primary">{{ __('Bulk Upload Assets') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('home') }}" class="btn-sm btn btn-primary">{{ __('Proceed') }}</a>
            </div>
            
        </div>
    </div>

</div>
@endsection