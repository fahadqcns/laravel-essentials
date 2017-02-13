<!-- <h2>About this site</h2>
There are over <?php echo $number_of_cats; ?> cats on this site!
 -->




@extends('layouts.master')
@section('header')
<h2>About this site</h2>
@stop
@section('content')
<p>There are over {{ $number_of_cats }} cats on this site!</p>
@stop
