@extends('layouts.mobileuserlayout')

@section('content')

<br/><br/>
<div class="container">
<h1 align="center">Users</h1>
<br/>
<div class="row">
<div class="col-lg-12 margin-tb">
</div>
</div>

<table class="table table-bordered data-table" >
<thead>
<tr id="">
<th width="5%">ID</th>
<th width="20%">FirstName</th>
<th width="20%">LastName</th>
<th width="20%">Action</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>

<!-- Add and Edit customer modal -->
<div class="modal fade" id="crud-modal" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="mobileuserCrudModal"></h4>
</div>
<div class="modal-body">
<form name="mobileuserForm" action="{{ route('mobileusers.store') }}" method="POST">
<input type="hidden" name="mobileuser_id" id="mobileuser_id" >
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Status:</strong>
<!-- <input type="text" name="status" id="status" class="form-control" placeholder="Approved" onchange="validate()" > -->
<select name="status" id="status" class="form-control">
  <option value="Accepted" onchange="validate()" >Accept mobileuser</option>
</select>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Save</button>
<a href="{{ route('mobileusers.index') }}" class="btn btn-danger">Cancel</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- Show mobileuser modal -->
<div class="modal fade" id="crud-modal-show" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="mobileuserCrudModal-show"></h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2"></div>
<div class="col-xs-10 col-sm-10 col-md-10 ">

<table class="table-responsive ">
<tr height="50px"><td><strong>Picture:</strong></td><td id="simg"></td></tr>
<tr height="50px"><td><strong>FirstName:</strong></td><td id="sfirst_name"></td></tr>
<tr height="50px"><td><strong>Last:</strong></td><td id="slast_name"></td></tr>
<tr height="50px"><td><strong>Email:</strong></td><td id="semail"></td></tr>
<tr height="50px"><td><strong>PhoneNumber:</strong></td><td id="sphone_number"></td></tr>
<tr height="50px"><td><strong>Address:</strong></td><td id="saddress"></td></tr>

<tr><td></td><td style="text-align: right "><a href="{{ route('mobileusers.index') }}" class="btn btn-danger">OK</a> </td></tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection