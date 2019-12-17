@extends('layouts.app')

@section('content')
      <div class="container-fluid" id="content">
        <br />

       @include('includes.message')
    
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

    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-4 ">
                <a href="{{ route('createCitizen') }}" class="btn-sm btn btn-primary">{{ __('Add more members') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('citizenImports') }}" class="btn-sm btn btn-primary">{{ __('Bulk Upload Members') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('indexAnimal') }}" class="btn-sm btn btn-primary">{{ __('Proceed to Animal Ownership') }}</a>
            </div>
            
        </div>
    </div>

</div>
@endsection