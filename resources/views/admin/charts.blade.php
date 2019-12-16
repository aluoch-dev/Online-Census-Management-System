
@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
            <h3><b>DAILY REGISTRATION COMPARRISON CHART</b></h3>
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                      {!! $chart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <h3><b>GENDER COMPARRISON CHART</b></h3>
              <div class="panel panel-default">
                  <div class="panel-heading"></div>

                  <div class="panel-body">
                  {!! $genderchart->container() !!}
                  </div>
              </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
            <h3><b>EMPLOYMENT RATES CHART</b></h3>
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                      {!! $employmentchart->container() !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <h3><b>AGE COMPARRISON CHART</b></h3>
              <div class="panel panel-default">
                  <div class="panel-heading"></div>

                  <div class="panel-body">
                  {!! $agegroupchart->container() !!}
                  </div>
              </div>
          </div>
      </div>

    {!! $chart->script() !!}
    {!! $genderchart->script() !!}
    {!! $employmentchart->script() !!}
    {!! $agegroupchart->script() !!}
@endsection