@extends('layouts.applicationsellerlayout')

@section('content')

<br/><br/>
<div class="container">
<h1 align="center">applicationcouriers</h1>
<br/>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right">
</div>
</div>
</div>

<table class="table table-bordered data-table" >
<thead>
<tr id="">

<th width="20%">Name</th>
<th width="20%">Email</th>
<th width="30%" class="white">Action</th>
</tr>
</thead>
<tbody>
@foreach($courier as $cour)
<tr>
<td width="20%">{{$cour->full_name}}</td>
<td width="20%">{{$cour->email}}</td>
<td width="30%">
<a href="/applicationcouriers/{{$cour->id}}/edit" id="show-applicationcourier" class="btn btn-danger">Accept </a>

<form method="POST" action="/applicationcouriers/{{$cour->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" id="delete-applicationcourier" class="btn btn-danger" value="Decline">
        </div>
    </form> 
</td>
</tr>
@endforeach
</tbody>
</table>


@endsection