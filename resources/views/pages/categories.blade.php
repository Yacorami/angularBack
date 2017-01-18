@extends('layouts.default')
@section('title')
Categories
@stop
@section('content')
this is the categories page

<div ng-app="instruApp">

<div ng-controller="InstrumentController as show" >


<table datatable="ng" class="table table-hover">
<thead>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>description</th>
		<th>category_id</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody>
	<tr ng-repeat="inst in instruments">
		<td><% inst.id %></td><td><% inst.name %></td><td><% inst.description %></td><td><% inst.category_id %></td><td><button class='btn btn-warning' ng-click="deleteInstrument(inst.id)">Delete</button></td>
	</tr>
	<tr>
		<td disabled='true'></td>
		<td><input ng-model="inName"></input></td>
		<td><input ng-model="inDesc"></input></td>
		<td><input ng-model="InCatId"></input></td>
		<td><button class='btn btn-success' ng-click="storeInstrument({name:inName,description:inDesc,category_id:InCatId})">Add</button></td>
	</tr>
</tbody>
</table>
</div>
</div>

@stop

