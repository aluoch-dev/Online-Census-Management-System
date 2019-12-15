@extends('layouts.app')

@section('content')
      <div class="container-fluid" id="content">
        <br />

       @include('includes.message')
    
    <table class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Animal</th>
                <th>Count</th>
                
                <th colspan="2">Manage Animals</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animalownerships as $animalownership)
            <tr> 
                <td></td>   
                <td>{{$animalownership->animal->animal }}</td>
                <td>{{$animalownership->animal_count }}</td>
                <td>
                    <div class='col-md-6'>
                        <a href="{{route('editAnimal', $animalownership->id)}}" class="btn-sm btn btn-warning">Edit</a>
                    </div>
                </td>
                <td>
                    <div class='col-md-6'>
                        <form action="{{route('destroyAnimal', $animalownership->id)}}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-danger btn-sm " type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="card-body">
        <div class="form-group row">
            <div class="col-md-4 ">
                <a href="{{ route('createAnimal') }}" class="btn-sm btn btn-primary">{{ __('Add more animals') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('animalImports') }}" class="btn-sm btn btn-primary">{{ __('Bulk Upload Animals') }}</a>
            </div>

            <div class="col-md-4 ">
                <a href="{{ route('createAsset') }}" class="btn-sm btn btn-primary">{{ __('Proceed to Asset Ownership') }}</a>
            </div>
            
        </div>
    </div>

</div>
@endsection