@extends('crud.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('crud.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Warning!</strong> Please check your input code<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('crud.update', $personal_info->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{$personal_info->name ?: '' }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <select name="country" id="country" class="form-control @error('country') is-invalid @enderror">
                    <option selected disabled >Select Country * ...</option>
                    @foreach($countries as $country)
                    <option value="{{$country->name}}" data-country="{{$country->id}}" {{ $personal_info->country == $country->name ? 'selected' : null }}  >{{ $country->name }}</option>
                    
                    @endforeach
                </select>

                @error('country')
                <span class="invalid-feedback">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="city" id="city" class="form-control">
                   
                   @foreach($city_data as $city)
                    <option value="{{$city->name}}" data-city="{{$city->id}}" {{ $personal_info->city == $country->city ? 'selected' : null }}  >{{ $city->name }}</option>

                   @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Language Skills:</strong>

                <input type="checkbox" value="C#" {{ array_key_exists('C#', $skills) ? 'checked' : null }} name="skills[]"> C#
                <input type="checkbox" value="C++" {{ array_key_exists('C++', $skills) ? 'checked' : null }} name="skills[]"> C++
                <input type="checkbox" value="Java" {{ array_key_exists('Java', $skills) ? 'checked' : null }} name="skills[]"> Java
                <input type="checkbox" value="PHP" {{ array_key_exists('PHP', $skills) ? 'checked' : null }} name="skills[]"> PHP
                <input type="checkbox" value="SQL" {{ array_key_exists('SQL', $skills) ? 'checked' : null }} name="skills[]"> SQL
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Birth:</strong>
                <input type="date" name="birthday" value="{{$personal_info->birthday}}" class="form-control"> 

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Resume Upload:</strong>
                <input type="file" class="form-control-file" name="resume" id="exampleInputFile" aria-describedby="fileHelp">
                <small id="fileHelp" class="form-text text-muted">Please upload a valid doc or pdf file. Size of file should not be more than 2MB.</small>
            </div>

            <!--  <input type="file" name="resume" value="{{$personal_info->resume}}" class="form-control"> -->
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="country"]').on('change', function() {
            // var countryID = $(this).val();
            // alert($(this).find(':selected').data("country"));
            var countryID = $(this).find(':selected').data("country");
           
            if(countryID) {
                $.ajax({
                    url: '/citycall/'+countryID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        console.log(data);
                        $('select[name="city"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="city"]').append('<option value="'+ value.name +'">'+ value.name +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="city"]').empty();
            }
        });
    });
</script>

@endsection