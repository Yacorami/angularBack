@extends('layouts.default')
@section('content')
	<form method="POST" action="#">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="log" type="text"></input>
    <button type="submit">Connect</button>
    </form>

    <?php 

    if(isset($_POST['log'])){

	    $log=$_POST['log'];
	    if($log=='yacine'){
	    	echo 'OKKKKKK';
	    }
	}

    ?>

@stop