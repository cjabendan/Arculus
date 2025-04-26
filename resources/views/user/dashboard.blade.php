@extends('layouts.master')
@section('content')
<?php

$hour   = date ("G");
$minute = date ("i");
$second = date ("s");
$msg = " Today is " . date ("l, M. d, Y.");

if ($hour == 00 && $hour <= 9 && $minute <= 59 && $second <= 59) {
    $greet = "Good Morning,";
} else if ($hour >= 10 && $hour <= 11 && $minute <= 59 && $second <= 59) {
    $greet = "Good Day,";
} else if ($hour >= 12 && $hour <= 15 && $minute <= 59 && $second <= 59) {
    $greet = "Good Afternoon,";
} else if ($hour >= 16 && $hour <= 23 && $minute <= 59 && $second <= 59) {
    $greet = "Good Evening,";
} else {
    $greet = "Welcome,";
}
?>

<div class="page-wrapper">
    <div class="page-content">
        <div class="page-header">
            <h6>{{$msg}}</h6>
            <h3 class="page-title mt-3">{{ $greet }} {{ Auth::user()->first_name }}!</h3>        
        </div> 
    </div>
   
</div>
@endsection