@extends('layouts.main')

@section('content')
    <h1>@{{ title }}</h1>
    <vc-users :users="{{ json_encode($users)}}"></vc-users>

@stop

