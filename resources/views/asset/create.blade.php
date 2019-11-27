@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Household Assets Details') }}</div>

                <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-6 ">
                        <a href="{{ route('editAnimal', $animalownership->id) }}" class="btn-sm btn btn-primary">{{ __('Click Back to Update Animal Ownership Records') }}</a>
                    </div>
            
                </div>
                    
                    <form method="POST" action="{{ route('storeAsset') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-6">   
                                <select id="asset_id" type="text" class="form-control autocomplete @error('asset_id') is-invalid @enderror" name="asset_id" value="{{ old('asset_id') }}" nullable autocomplete="asset_id" autofocus>
                                @foreach ($assets as $asset) 
                                    <option value="{{$asset->id}}">{{$asset->asset}}</option>
                                @endforeach
                                </select>
                                
                                @error('asset_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">  
                                <input id="asset_count" type="text" class="form-control autocomplete @error('asset_count') is-invalid @enderror" name="asset_count" value="{{ old('asset_count') }}" nullable autocomplete="animal_count" autofocus>
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
