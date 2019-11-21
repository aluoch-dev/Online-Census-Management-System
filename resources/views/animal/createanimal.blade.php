@extends('layouts.app')

@section('content')
<?php
$imgPath = asset('images/minus.svg');
?>
<input type="hidden" id="imgPath" value="<?= $imgPath ?>">
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-9 offset-md-1">
            <h1>Multi Textfield jQuery Autocomplete in Laravel</h1>
            <form method="POST" action="{{ route('storeAnimal') }}">
            @csrf
 
                <div class="table-responsive">
                    <table id="autocomplete_table" class="table table-hover autocomplete_table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country Name</th>
                                <th scope="col">Country Number</th>
                                <th scope="col">Country Phone Code</th>
                                <th scope="col">Country Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="row_1">
                                <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                                <td>
                                    <input type="text" data-field-name="name" name="countryname[]" id="countryname_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-field-name="numcode" name="countryno[]" id="countryno_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-field-name="phonecode" name="phone_code[]" id="phone_code_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                                <td>
                                    <input type="text" data-field-name="iso3" name="country_code[]" id="country_code_1" class="form-control autocomplete_txt" autocomplete="off">
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <div class="btn-container">
                    <button class="btn btn-success" id="addNew" type="button">
                        Add New
                    </button>
                </div>     
            </form>
        </div>
    </div>
</div>
<script src="./js/multi.js"></script>
@endsection