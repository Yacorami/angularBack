@extends('layouts.default')
@section('title')
Categories
@stop
@section('content')
this is the categories page

<div ng-app="instruApp">

<div ng-controller="InstrumentController" >


<table datatable="ng" class="table table-hover">
<thead>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>description</th>
		<th>Category</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody>
	<tr ng-repeat="inst in instruments">
		<td><% inst.id %></td><td><% inst.name %></td><td><% inst.description %></td><td><% inst.category.name %></td>
		<!-- Actions -->
		<td>
			<button class='btn btn-danger' ng-click="deleteInstrument(inst.id)">Delete</button>
			<button class='btn btn-info' ng-click="openUpdateInstrument(inst.id,inst.name,inst.description,inst.category_id)">Update</button>
		</td>
	</tr>
</tbody>
</table>

<table class="table table-hover">
<tbody>
	<tr>
		<td disabled='true'></td>
		<td><input type="text" class="form-control" ng-model="inName"></input></td>
		<td><input type="text" class="form-control" ng-model="inDesc"></input></td>
		<td>
		<select ng-model="selectedId">
    		<option ng-repeat="cat in categories" value="<%cat.id%>"><%cat.name%></option>
    	</select>
    	</td>
		<td>
			<button class='btn btn-success' ng-click="storeInstrument({name:inName,description:inDesc,category_id:selectedId})">Add</button>
		</td>
	</tr>
</tbody>
</table>

<script type="text/ng-template" id="UpdateInstrument">
<ul>
	<li class="list-group-item"><label>Id :</label><input type="text" class="form-control" ng-model="idUp" placeholder="idUp" disabled="true"></input></li>
    <li class="list-group-item"><label>Name :</label><input type="text" class="form-control" ng-model="nameUp" placeholder="nameUp"></input></li>
	<li class="list-group-item"><label>Description :</label><input type="text" class="form-control" ng-model="descriptionUp" placeholder="descriptionUp"></input></li>
	<li class="list-group-item"><label>Category :</label>
		<select ng-model="selectedIdUp">
    		<option ng-repeat="cat in categories" value="<%cat.id%>"><%cat.name%></option>
    	</select>
	</li>
	<li class="list-group-item"><button class='btn btn-success' ng-click="storeInstrument({id:idUp,name:nameUp,description:descriptionUp,category_id:selectedIdUp})">Save</button></li>
</ul>
</script>

</div>
</div>

@stop

