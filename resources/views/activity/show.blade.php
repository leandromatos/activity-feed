@extends('layouts.main')

@section('content')
    <div class="container">
        <ul class="list-group">
            @include ('activity.list')
        </ul>
    </div>
@stop
