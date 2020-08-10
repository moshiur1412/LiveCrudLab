@extends('partials.master')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Informations</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('crud.create') }}"> Create (+)</a>
        </div>
    </div>
</div>

<!-- alerts -->
@include('partials.alerts')



<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
             <th>#</th>
        <th>Name</th>
        <th>Country</th>
        <th>City</th>
        <th>Language Skills</th>
        <th>Resume</th>
        <th>Date of Birth</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($personal_infos as $personal_info)
       <tr>
        <td> {{ $loop->iteration }} </td>
        <td> {{ $personal_info->name }} </td>
        <td> {{ $personal_info->country }} </td>
        <td> {{ $personal_info->city }} </td>
        <td> {{ $personal_info->skills }} </td>
        <td>  <a href="{{ '/uploads/'.$personal_info->resume }}" download><i class="fa fa-download" aria-hidden="true"></i>&nbsp; {{ $personal_info->resume }}</a> </td>
        <td> {{ date('d M Y', strtotime($personal_info->birthday)) }} </td>

        <td>
            <form action="{{ route('crud.destroy',$personal_info->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <a class="btn btn-info" href="{{ route('crud.show',$personal_info->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>

                <a class="btn btn-primary" href="{{ route('crud.edit',$personal_info->id) }}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                <button type="submit" class="btn btn-danger form_warning_sweet_alert" title="Are you sure ? You want to delete this info."><i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>

            </form>
        </td>
    </tr>

    @endforeach

</tbody>
<tfoot>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Country</th>
        <th>City</th>
        <th>Language Skills</th>
        <th>Resume</th>
        <th>Date of Birth</th>
        <th>Actions</th>
    </tr>
</tfoot>
</table>


<script type="text/javascript">
    $('.form_warning_sweet_alert').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        var title = $(this).attr('title');
        var text = $(this).attr('text');
        var confirmButtonText = $(this).attr('confirmButtonText');
        swal({
            title: title,
            text: text,
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#dd4b39",
            cancelButtonText: "No",
            confirmButtonText: "Yes",
            closeOnConfirm: false
        }, function(isConfirm){
            if (isConfirm){ 
                form.submit();
            } 
        });

    });

 $(document).ready(function() {
    $('#example').DataTable({
        responsive: true,
    });
} );
</script>

@endsection