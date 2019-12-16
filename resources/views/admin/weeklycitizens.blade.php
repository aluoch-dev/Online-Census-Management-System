@extends('layouts.admin')

@section('content')
<div class="content" id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Weekly Citizen Registration</h4>
                  <p class="card-category"> Citizens Registered This Week</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
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
                      </thead>
                <tbody>
                    @php
                            $row_id =1 ;
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
                    </tr>
                @endforeach
                </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="clearfix"></div>

            <div align="center">
                <button onclick="history.back()" target="_blank" class="btn btn-primary"><i class="fa fa-backward"></i> Back</button>
                <button onclick="genPDF()" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
            </div>
@endsection