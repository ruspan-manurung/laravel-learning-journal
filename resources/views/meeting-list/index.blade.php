@extends('layouts.app')

@section('title', 'Meetings List')

@section('contents')
    <h1 class="mb-0">Meetings List</h1>
    <hr />

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Meeting</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Meeting Location</th>
                <th scope="col">Meeting Title</th>
                <th scope="col">Meeting Time</th>
                <th scope="col">Organized By</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $index => $meeting)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $meeting->meeting_location }}</td>
                    <td>{{ $meeting->meeting_title }}</td>
                    <td>{{ \Carbon\Carbon::parse($meeting->meeting_time)->format('d M Y, H:i') }}</td>
                    <td>{{ $meeting->organized_by }}</td>
                    <td>
                        <a href="{{ route('products.show', $meeting->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $meeting->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $meeting->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
