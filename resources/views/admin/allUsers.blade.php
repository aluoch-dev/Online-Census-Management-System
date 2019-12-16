@extends('layouts.admin')

@section('content')
<div class="content" id="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Weekly User Registration</h4>
                  <p class="card-category"> Users Registered this Week</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>#</th>
                            <th>National ID</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                        @php
                            $row_id =0 ;
                        @endphp
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $row_id++}}</td>
                                <td>{{$user->national_id}}</td>
                                <td>{{$user->email}}</td>
                                <td></td>
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