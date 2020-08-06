@extends('template.layout')
@section('heading')

@endsection

@section('contentheading')

    <div class="col-sm-6">
        <h1 class="m-0 text-dark"></h1>
    </div><!-- /.col -->
    <div class="col-sm-6 pt-5">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Driver</li>
        </ol>
    </div><!-- /.col -->

@endsection

@section('contentbody')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Weight</th>
            <th>Edit</th>
            <th>Update</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>45</td>
            <td></td>
            <td></td>

        </tr>

        </tbody>

    </table>
    $(document).ready(function() {
    $('#example').DataTable();
    } );

@endsection
