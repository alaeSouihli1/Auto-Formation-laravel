@include('title')

<!-- if and else -->

id={{$name=1}}
@if($name==1)
    <h1>hi alae</h1>
@else
    <h1>rien a afficher</h1>
@endif


<!-- isset and empty -->
@isset($age)
<h2>Age is {{$age}}</h2>
@endisset

@empty($age)
    <h2>age is empty</h2>
@endempty



<!-- loop Foreach -->
@php
$user=array("alae","alae1","alae3")
@endphp

@foreach($user as $value)
    <p>User name  : {{ $value }}</p>
@endforeach
