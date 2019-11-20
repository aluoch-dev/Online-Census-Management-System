@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Household Census') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeHousehold') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="state_id" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">   
                                <select id="state_id" type="text" class="form-control autocomplete @error('state_id') is-invalid @enderror" name="state_id" value="{{ old('state_id') }}" required autocomplete="state_id" autofocus>
                                
                                </select>
                                @error('county_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="county_id" class="col-md-4 col-form-label text-md-right">{{ __('County') }}</label>

                            <div class="col-md-6">   
                                <select id="county_id" type="text" class="form-control autocomplete @error('county_id') is-invalid @enderror" name="county_id" value="{{ old('county_id') }}" required autocomplete="county_id" autofocus>
                                
                                </select>
                                @error('county_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subcounty_id" class="col-md-4 col-form-label text-md-right">{{ __('SubCounty') }}</label>

                            <div class="col-md-6">
                                <select id="subcounty_id" type="text" class="form-control  autocomplete @error('subcounty_id') is-invalid @enderror" name="subcounty_id" value="{{ old('subcounty_id') }}" required autocomplete="subcounty">
                                
                                </select>

                                @error('subcounty_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="school_id" class="col-md-4 col-form-label text-md-right">{{ __('Nearby School') }}</label>

                            <div class="col-md-6">
                                <select id="school_id" type="text" class="form-control autocomplete @error('school_id') is-invalid @enderror" name="school_id" required autocomplete="school">
                                
                                </select>

                                @error('school_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cookingmeans_id" class="col-md-4 col-form-label text-md-right">{{ __('Cooking Means') }}</label>

                            <div class="col-md-6">
                                <select id="cookingmeans_id" type="text" class="form-control autocomplete @error('cookingmeans_id') is-invalid @enderror" name="cookingmeans_id" required autocomplete="cooking means">
                                
                                </select>
                                @error('cookingmeans_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="structure_id" class="col-md-4 col-form-label text-md-right">{{ __('House Structure') }}</label>

                            <div class="col-md-6">
                                <select id="structure_id" type="text" class="form-control autocomplete @error('structure_id') is-invalid @enderror" name="structure_id" required autocomplete="type of structure">
                                
                                </select>
                                @error('structure_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="disposal_id" class="col-md-4 col-form-label text-md-right">{{ __('Waste Disposal ') }}</label>

                            <div class="col-md-6">
                                <select id="disposal_id" type="text" class="form-control autocomplete @error('disposal_id') is-invalid @enderror" name="disposal_id" required autocomplete="type of structure">
                                
                                </select>
                                @error('structure_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
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
