@extends('layouts.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <p class="card-category">Daily Enumeration</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{route('dailyCitizen') }}">View Report</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <p class="card-category">Weekly Enumeration</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('weeklyCitizen') }}">View Report</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <p class="card-category">All Enumeration</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{route('allEnumeration') }}">View Report</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <p class="card-category">Daily Registration</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{route('dailyRegistration') }}">View Report</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <p class="card-category">Weekly Registration</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a href="{{ route('weeklyRegistration') }}">View Report</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <p class="card-category">All Users</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="{{route('allUsers') }}">View Report</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
@endsection