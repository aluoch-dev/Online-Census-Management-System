@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bulk Upload Animal details') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <a href="{{ route('createAnimal') }}" class="btn-sm btn btn-primary">{{ __('Click Back to go Back') }}</a>
                            </div>

                            <div class="col-md-6 ">
                                <a href="{{ route('downloadAnimalTemplate') }}" class="btn-sm btn btn-primary">{{ __('Download Excel template') }}</a>
                            </div>
            
            
                        </div>

                </div>

                <div class="card-body">
                    <form action="{{ route('importAnimals') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-primary">Submit Members Data</button>
                    </form>
                </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
