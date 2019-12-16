@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">COMPLETED!!!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Congratulations,you have succesfully completed the enumeration process. Proceed to print out
                    ENUMERATION REPORT.</p>
                    
                    <div class="form-group row">
                            <div class="col-md-6 ">
                            <a href="{{ route('enumerationReport') }}" class="btn-sm btn btn-primary">{{ __('Enumeration Report') }}</a>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
