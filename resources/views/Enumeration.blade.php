@extends('layouts.app')

@section('content')
      <div class="container" id="content">
        <br />

        @include('includes.message')
        <h3>Your enumeration for this year is <b>KNBS {{$user->national_id}} @php $time = Carbon\Carbon::today();
              echo $time->toDateString();
              @endphp</b> </h3>
        <div class="row">
            <table class="table table-responsive table-striped">
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
                $row_id = 1;
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
        </div>

        <div class="row">
            <table class="table table-responsive table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Relation</th>
                        <th>Disability</th>
                        <th>Education Level</th>
                        <th>Field of Study</th>
                        <th>Employment Status</th>
                        <th>Occupation</th>
                        <th>Income Source</th>
                        <th colspan="2">Manage Household Members</th>
                    </tr>
                </thead>
                <tbody>
                @php
                $row_id = 1;
                @endphp
                    @foreach($citizens as $citizen)
                    <tr>    
                        <td>{{$row_id++ }}</td>
                        <td>{{$citizen->fname }}</td>
                        <td>{{$citizen->mname }}</td>
                        <td>{{$citizen->sname }}</td>
                        <td>{{$citizen->gender->gender }}</td>
                        <td>{{$citizen->Age }}</td>
                        <td>{{$citizen->relationship->relationship }}</td>
                        <td>{{$citizen->disability->disability }}</td>
                        <td>{{$citizen->educationlevel->education_level }}</td> 
                        <td>{{$citizen->studyfield->study_field }}</td>
                        <td>{{$citizen->employmentstatus->employment_status }}</td>
                        <td>{{$citizen->occupation->occupation }}</td>
                        <td>{{$citizen->incomesource->occupation }}</td>
                        <td>
                            <div class='col-md-6'>
                                <a href="{{route('editCitizen', $citizen->id)}}" class="btn-sm btn btn-warning">Edit</a>
                            </div>
                        </td>
                        <td>
                            <div class='col-md-6'>
                                <form action="{{route('destroyCitizen', $citizen['id'])}}" method="post">
                                    @csrf @method('delete')
                                    <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="row">
            <div class=col-md-6>
                <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Animal</th>
                            <th>Count</th>
                            
                            <th colspan="2">Manage Household Animals</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    $row_id = 1;
                    @endphp
                        @foreach($animalownerships as $animalownership)
                        <tr> 
                            <td>{{$row_id++ }}</td>   
                            <td>{{$animalownership->animal->animal }}</td>
                            <td>{{$animalownership->animal_count }}</td>
                            <td>
                                <div class='col-md-6'>
                                    <a href="{{route('editAnimal', $animalownership->id)}}" class="btn-sm btn btn-warning">Edit</a>
                                </div>
                            </td>
                            <td>
                                <div class='col-md-6'>
                                    <form action="{{route('destroyAnimal', $animalownership->id)}}" method="post">
                                        @csrf @method('delete')
                                        <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class=col-md-6>
                <table class="table table-responsive table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Animal</th>
                            <th>Count</th>
                            
                            <th colspan="2">Manage Household Assets</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    $row_id = 1;
                    @endphp
                        @foreach($assetownerships as $assetownership)
                        <tr> 
                            <td>{{ $row_id++ }}</td>   
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
            </div>
</div>

<div class="clearfix"></div>

            <div align="center">
                <button onclick="history.back()" target="_blank" class="btn btn-primary"><i class="fa fa-backward"></i> Previous Page</button>
                <button onclick="genPDF()" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Report</button>
            </div>
            </div>
@endsection