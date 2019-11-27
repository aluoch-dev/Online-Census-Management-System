@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Animal Ownership') }}</div>

                <div class="card-body">

                <div class="form-group row">
                            <div class="col-md-6 ">
                                <a href="{{ route('editCitizen', $citizen->id) }}" class="btn-sm btn btn-primary">{{ __('Click Back to Update Previous Records') }}</a>
                            </div>
            
                </div>
                    
                    <form method="POST" action="{{ route('storeAnimal') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-6">   
                                <select id="animal_id" type="text" class="form-control autocomplete @error('animal_id') is-invalid @enderror" name="animal_id" value="{{ old('animal_id') }}" nullable autocomplete="animal_id" autofocus>
                                @foreach ($animals as $animal) 
                                    <option value="{{$animal->id}}">{{$animal->animal}}</option>
                                @endforeach
                                </select>
                                @error('animal_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">  
                                <input id="animal_count" type="text" class="form-control autocomplete @error('animal_count') is-invalid @enderror" name="animal_count" value="{{ old('animal_count') }}" nullable autocomplete="animal_count" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit to Proceed') }}
                                </button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
