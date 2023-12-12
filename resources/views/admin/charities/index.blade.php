@extends('layouts.admin')

@section('content')
    <h1>Charities</h1>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($charities as $charity)
            <tr>
                <td>{{ $charity->id }}</td>
                <td>{{ $charity->charity_name }}</td>
                <td>{{ $charity->charity_type }}</td>
                <td>
                    <a href="#">View</a>
                    <a href="#">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
