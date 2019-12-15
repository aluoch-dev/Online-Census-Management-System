
@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Registered Users</div>

                <div class="panel-body">
                {!! $chart->container() !!}
                </div>
            </div>
        </div>
    </div> 
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Administrators</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>National ID</th>
                      <th>Email</th>
                      <th>Salary</th>
                    </thead>
                    <tbody>
                    @foreach ($admins as $user)
                      <tr>
                        <td></td>
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
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Enumerators</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>ID</th>
                      <th>National ID</th>
                      <th>Email</th>
                      <th>Salary</th>
                    </thead>
                    <tbody>
                    @foreach ($enumerators as $user)
                      <tr>
                        <td></td>
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

    {!! $chart->script() !!}
@endsection