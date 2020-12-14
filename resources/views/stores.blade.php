@extends('layouts.datatable')

@section('content')

<br/><br/>
<div class="container">
<h1 align="center">stores</h1>
<br/>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-right">
<!-- <a class="btn btn-success mb-2" id="new-store" data-toggle="modal">New store</a> -->
</div>
</div>
</div>

<table class="table table-bordered data-table" >
<thead>
<tr id="">
<th width="5%">No</th>
<th width="5%">Id</th>
<th width="30%">Name</th>
<th width="30%">Email</th>
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
<h4 class="modal-title" id="storeCrudModal"></h4>
</div>
<div class="modal-body">
<form name="storeForm" action="{{ route('stores.store') }}" method="POST">
<input type="hidden" name="store_id" id="store_id" >
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name:</strong>
<input type="text" name="name" id="name" class="form-control" placeholder="Name" onchange="validate()" >
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
<input type="text" name="email" id="email" class="form-control" placeholder="Email" onchange="validate()">
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" id="btn-save" name="btnsave" class="btn btn-primary" disabled>Save</button>
<a href="{{ route('stores.index') }}" class="btn btn-danger">Cancel</a>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- Show store modal -->
<div class="modal fade" id="crud-modal-show" aria-hidden="true" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="storeCrudModal-show"></h4>
</div>
<div class="modal-body">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2"></div>
<div class="col-xs-10 col-sm-10 col-md-10 ">

<table class="table-responsive ">
<tr height="50px"><td><strong>Name:</strong></td><td id="sname"></td></tr>
<tr height="50px"><td><strong>Email:</strong></td><td id="semail"></td></tr>
<tr height="50px"><td><strong>Address:</strong></td><td id="saddress"></td></tr>
<tr height="50px"><td><strong>Password:</strong></td><td id="spassword"></td></tr>

<tr><td></td><td style="text-align: right "><a href="{{ route('stores.index') }}" class="btn btn-danger">OK</a> </td></tr>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection