@extends('layouts.courierapplicationlayout')

@section('content')

<br/><br/>
<div class="container">
<h1 align="center">courierapplications</h1>
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

<th width="15%">Name</th>
<th width="30%">Email</th>
<th width="10%">Status</th>
<th width="25%" class="white">Action</th>
</tr>
</thead>
<tbody>
@foreach($courapp as $capp)
<tr>

<td width="5%">{{$capp->name}}</td>
<td width="15%">{{$capp->email}}</td>
<td width="30%">{{$capp->status}}</td>
<td width="25%">
<a href="/courierapplications/{{$capp->id}}/edit" id="show-courierapplication" class="btn btn-default">Accept </a>
<form method="POST" action="/courierapplications/{{$capp->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" id="delete-courierapplication" class="btn btn-danger" value="Decline">
        </div>
    </form>
</td>
</tr>
@endforeach
</tbody>
</table>


@endsection
