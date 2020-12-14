@extends('layouts.applicationsellerlayout')

@section('content')

<br/><br/>
<div class="container">
<h1 align="center">Seller Applications</h1>
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
@foreach($seller as $sell)
<tr>
<td width="20%">{{$sell->full_name}}</td>
<td width="20%">{{$sell->email}}</td>
<td width="30%">
<a href="/applicationsellers/{{$sell->id}}/edit" id="show-applicationseller" class="btn btn-danger">Accept </a>
<form method="POST" action="/applicationsellers/{{$sell->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" id="delete-applicationseller" class="btn btn-danger" value="Decline">
        </div>
    </form>
</td>
</tr>
@endforeach
</tbody>
</table>


@endsection