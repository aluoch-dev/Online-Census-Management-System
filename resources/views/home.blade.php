@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>You have succesfully completed the enumeration process. Proceed to print out
                    ENUMERATION REPORT.</p>
                    
                    <div class="form-group row">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Print Enumeration Report') }}
                                </button>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
