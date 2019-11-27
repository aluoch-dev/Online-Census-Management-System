@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Household Member Details') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6 ">
                                <a href="{{ route('editHousehold', $household->id) }}" class="btn-sm btn btn-primary">{{ __('Click Back to Update Previous Records') }}</a>
                            </div>
            
                        </div>
                </div>

                    <form method="POST" action="{{ route('storeCitizen') }}" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">   
                                <input id="fname" type="text" class="form-control autocomplete @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                
                                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mname" class="col-md-4 col-form-label text-md-right">{{ __('Middle Name') }}</label>

                            <div class="col-md-6">   
                                <input id="mname" type="text" class="form-control autocomplete @error('mname') is-invalid @enderror" name="mname" value="{{ old('mname') }}" required autocomplete="mname" autofocus>
                                
                                @error('mname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">   
                                <input id="sname" type="text" class="form-control autocomplete @error('sname') is-invalid @enderror" name="sname" value="{{ old('sname') }}" required autocomplete="sname" autofocus>
                                
                                @error('sname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender_id" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">   
                                <select id="gender_id" type="text" class="form-control autocomplete @error('gender_id') is-invalid @enderror" name="gender_id" value="{{ old('gender_id') }}" required autocomplete="gender_id" autofocus>
                                    @foreach ($genders as $gender) 
                                        <option value="{{$gender->id}}">{{$gender->gender}}</option>
                                    @endforeach
                                </select>
                                @error('gender_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">   
                                <input id="age" type="number" class="form-control autocomplete @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                                
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="relationship_id" class="col-md-4 col-form-label text-md-right">{{ __('Relation') }}</label>

                            <div class="col-md-6">
                                <select id="relationship_id" type="text" class="form-control  autocomplete @error('relationship_id') is-invalid @enderror" name="relationship_id" value="{{ old('relationship_id') }}" required autocomplete="subcounty">
                                    @foreach ($relationships as $relationship) 
                                        <option value="{{$relationship->id}}">{{$relationship->relationship}}</option>
                                    @endforeach
                                </select>

                                @error('relationship_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="education_id" class="col-md-4 col-form-label text-md-right">{{ __('Highest Level of Education') }}</label>

                            <div class="col-md-6">
                                <select id="education_id" type="text" class="form-control autocomplete @error('education_id') is-invalid @enderror" name="education_id" autocomplete="school">
                                    @foreach ($educationlevels as $educationlevel) 
                                        <option value="{{$educationlevel->id}}">{{$educationlevel->education_level}}</option>
                                    @endforeach
                                </select>

                                @error('education_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="field_id" class="col-md-4 col-form-label text-md-right">{{ __('Field of Study') }}</label>

                            <div class="col-md-6">
                                <select id="field_id" type="text" class="form-control autocomplete @error('field_id') is-invalid @enderror" name="field_id" autocomplete="cooking means">
                                @foreach ($studyfields as $studyfield) 
                                    <option value="{{$studyfield->id}}">{{$studyfield->study_field}}</option>
                                @endforeach
                                </select>
                                @error('field_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="disability_id" class="col-md-4 col-form-label text-md-right">{{ __('Disability') }}</label>

                            <div class="col-md-6">
                                <select id="disability_id" type="text" class="form-control autocomplete @error('disability_id') is-invalid @enderror" name="disability_id" required autocomplete="type of structure">
                                @foreach ($disabilities as $disability) 
                                    <option value="{{$disability->id}}">{{$disability->disability}}</option>
                                @endforeach
                                </select>
                                @error('disability_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="employment_id" class="col-md-4 col-form-label text-md-right">{{ __('Employment Status ') }}</label>

                            <div class="col-md-6">
                                <select id="employment_id" type="text" class="form-control autocomplete @error('employment_id') is-invalid @enderror" name="employment_id" autocomplete="type of structure">
                                @foreach ($employmentstatuses as $employmentstatus) 
                                    <option value="{{$employmentstatus->id}}">{{$employmentstatus->employment_status}}</option>
                                @endforeach
                                </select>
                                @error('employment_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="occupation_id" class="col-md-4 col-form-label text-md-right">{{ __('Occupation ') }}</label>

                            <div class="col-md-6">
                                <select id="occupation_id" type="text" class="form-control autocomplete @error('occupation_id') is-invalid @enderror" name="occupation_id" autocomplete="occupation">
                                @foreach ($occupations as $occupation) 
                                    <option value="{{$occupation->id}}">{{$occupation->occupation}}</option>
                                @endforeach
                                </select>
                                @error('occupation_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="income_source" class="col-md-4 col-form-label text-md-right">{{ __('Income Source') }}</label>

                            <div class="col-md-6">
                                <select id="income_source" type="text" class="form-control autocomplete @error('income_source') is-invalid @enderror" name="income_source" autocomplete="income source">
                                @foreach ($occupations as $occupation) 
                                    <option value="{{$occupation->id}}">{{$occupation->occupation}}</option>
                                @endforeach
                                </select>
                                @error('income_source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Upload image') }}</label>

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
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
