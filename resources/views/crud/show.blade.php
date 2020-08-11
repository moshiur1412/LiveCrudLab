@extends('partials.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 style="margin: auto;">Personal Info</h2>
            <hr>
       </div>
       <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('crud.index') }}"> Back</a>
       </div>
  </div>
</div>

<div class="row p-2" >
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $personal_info->name }}
       </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Country:</strong>
       {{ $personal_info->country }}
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>City:</strong>
       {{ $personal_info->city }}
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Skills:</strong>
       {{ $personal_info->skills }}
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Date of Birth:</strong>
       {{ date('d M Y', strtotime($personal_info->birthday)) }}
  </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Resume:</strong>

       <a href="{{ '/uploads/'.$personal_info->resume }}" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp;{{ $personal_info->resume }}</a>
       
  </div>
</div>
</div>
@endsection