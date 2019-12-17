@extends('layouts.app')

@section('content')
      <div class="container" id="content">
        <br />

        @include('includes.message')
    
        <table class="table table-responsive table-striped table-bordered">
            <thead>
                <tr> 
                    <th>#</th>
                    <th>State</th>
                    <th>County</th>
                    <th>Subcounty</th>
                    <th>Nearby School</th>
                    <th>Cooking Means</th>
                    <th>House Structure</th>
                    <th>Disposal Means</th>
                    <th>Death Counts</th>
                    <th>Census Year</th>
                    <th>Manage Household Details</th>
                </tr>
            </thead>
            <tbody>
            @php 
            $row_id =1;
            @endphp
                @foreach($households as $household)
                <tr>    
                    <td>{{$row_id++ }}</td>
                    <td>{{$household->state->state }}</td>
                    <td>{{$household->county->county_name }}</td>
                    <td>{{$household->subcounty->subcounty_name }}</td>
                    <td>{{$household->school->school_name }}</td>
                    <td>{{$household->cooking->amenity }}</td>
                    <td>{{$household->structure->amenity }}</td>
                    <td>{{$household->disposal->amenity }}</td>
                    <td>{{$household->deathcounts }}</td>
                    <td>{{$household->timestamps }}</td>
                    <td>
                        <div class='col-md-6'>
                            <a href="{{route('editHousehold', $household->id)}}" class="btn-sm btn btn-warning">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="card-body">
            <div class="form-group row">

                <div class="col-md-6 ">
                    <a href="{{route('createHousehold') }}" class="btn-sm btn btn-primary">{{ __('Upload Details ') }}</a>
                </div>


                <div class="col-md-6 ">
                    <a href="{{ route('indexCitizen') }}" class="btn-sm btn btn-primary">{{ __('Proceed to Household Members Details') }}</a>
                </div>
                
            </div>
        </div>

</div>
@endsection