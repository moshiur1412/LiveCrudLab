@extends('partials.master')

@section('content')
<div class="container">
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

<form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name *</strong>
                
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your full Name">

                @error('name')
                <span class="invalid-feedback">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <select name="country" id="countryID" class="form-control @error('country') is-invalid @enderror">
                    <option selected disabled >Select Country * ...</option>
                    @foreach($countries as $country)
                    <option value="{{$country->name}}" data-country="{{$country->id}}"  >{{ $country->name }}</option>
                    
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
                <select name="city"  class="form-control @error('city') is-invalid @enderror" id="cityID" data-selected-city="{{ old('city') }}">

                </select>

                @error('city')
                <span class="invalid-feedback">
                    <strong> {{ $message }}</strong>
                </span>
                @enderror

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong class="mr-auto">Language Skills *  </strong>

                <div class="form-control @error('skills') is-invalid @enderror">

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="C#" name="skills[]" @if(is_array(old('skills')) && in_array('C#', old('skills'))) checked @endif >
                      <label class="form-check-label" for="inlineCheckbox2">C#</label>
                  </div>

                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="C++" name="skills[]" @if(is_array(old('skills')) && in_array('C++', old('skills'))) checked @endif>
                      <label class="form-check-label" for="inlineCheckbox2">C++</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Java" name="skills[]" @if(is_array(old('skills')) && in_array('Java', old('skills'))) checked @endif>
                      <label class="form-check-label" for="inlineCheckbox2">Java</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="PHP" name="skills[]" @if(is_array(old('skills')) && in_array('PHP', old('skills'))) checked @endif>
                      <label class="form-check-label" for="inlineCheckbox2">PHP</label>
                  </div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="SQL" name="skills[]" @if(is_array(old('skills')) && in_array('SQL', old('skills'))) checked @endif>
                      <label class="form-check-label" for="inlineCheckbox2">SQL</label>
                  </div>

              </div>

              @error('skills')
              <span class="invalid-feedback">
                <strong> {{ $message }}</strong>
            </span>
            @enderror

        </div>



    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date of Birth *</strong>
            <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror"> 

            @error('birthday')
            <span class="invalid-feedback">
                <strong> {{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Resume Upload *</strong>
            <input type="file" class="form-control-file  @error('resume') is-invalid @enderror" name="resume" id="resume_upload" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Please upload a valid doc or pdf file. Size of file should not be more than 2MB.</small>

            @error('resume')
            <span class="invalid-feedback">
                <strong> {{ $message }}</strong>
            </span>
            @enderror

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
 </div>
<script type="text/javascript">

    // File Size Validations -->
    $('input[name=resume]').on('change', function(){
        var self = $('#resume_upload');
        if (this.files[0].size/1024/1024 >= 2) {
            self.after('<div class="invalid-feedback checksize resume"><strong> File size must be leass  than 2MB.</strong></div>');
        }else{
            $('.resume').remove();
        }

        toggleSubmit();

    });

// Submit Button disabled -->
function toggleSubmit() {
    var error = $('.checksize ');
    // console.log(error);

    if (error.html() != undefined) {
        $('#submit').prop('disabled', true);
    }else{
        $('#submit').prop('disabled', false);
    }
}


$(document).ready(function () {
    $('#countryID').on('change', function () {
        var baseurl = window.location.protocol + "//" + window.location.host;
        var countryID = $(this).find(':selected').data("country");
        if (countryID!= '') {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: baseurl + '/citycall/'+countryID,
                type: "GET",
                dataType: "json",
                cache: false,
                success: function (data) {
                    console.log(data);
                    $('#cityID').empty();
                    $.each(data, function (key, value) {
                        $('#cityID').append('<option value="' + value.name + '">' + value.name + '</option>');
                    });

                    // take subcategory value which has been selected in data attribute 
                        var cityValue = $("#cityID").attr("data-selected-city");
                        if(cityValue !== '')
                        {
                    // assign chosen data attribute value to select
                        $("#cityID").val(cityValue);
                    }

                }
            });
        } else {
            $('#cityID').empty();
        }
    });
});

// City option selected -->
$(document).ready(function() {
    var OldValue = '{{ old('country') }}';
    if(OldValue !== '') {
        $('#countryID').val(OldValue );
        $("#countryID").change(); 
    }
});

</script>

@endsection