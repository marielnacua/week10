@extends('base')

@section('content')

<h1>Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Date Started</th>
            <th>Date Ended</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $cou)

        <tr>
            <td>{{$cou->name}}</td>
            <td>{{$cou->description}}</td>
            <td>{{$cou->start}}</td>
            <td>{{$cou->end}}</td>
        </tr>

        @endforeach
    </tbody>

</table>

@stop