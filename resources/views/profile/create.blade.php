@extends('layouts.app')

@section('title', 'Create Meeting')

@section('contents')
    <h1 class="mb-0">Add Meeting</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="meeting_location" class="form-control" placeholder="Meeting Location" required>
            </div>
            <div class="col">
                <input type="text" name="meeting_title" class="form-control" placeholder="Meeting Title" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="datetime-local" name="meeting_time" class="form-control" placeholder="Meeting Time" required>
            </div>
            <div class="col">
                <input type="text" name="organized_by" class="form-control" placeholder="Organized By" required>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
