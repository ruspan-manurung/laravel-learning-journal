@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<head>
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
</head>

<div class="container mt-4">
        <div class="card mb-4">
         <!--<div class="card-header">Meeting Calendar</div>  -->
        <div class="card-body">
   <!--    <div id="calendar"></div>  -->
        </div> 
    </div>

    <!-- Add Meeting Button -->
    <div class="mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#meetingModal">
            Add Meeting
        </button>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="meetingModal" tabindex="-1" role="dialog" aria-labelledby="meetingModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document"> 
        <!--    <form action="{{ route('dashboard.store') }}" method="POST">  --!>
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Meeting</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="meeting_title">Title</label>
                            <input type="text" class="form-control" name="meeting_title" required>
                        </div>
                        <div class="form-group">
                            <label for="meeting_location">Location</label>
                            <input type="text" class="form-control" name="meeting_location" required>
                        </div>
                        <div class="form-group">
                            <label for="meeting_time">Time</label>
                            <input type="datetime-local" class="form-control" name="meeting_time" required>
                        </div>
                        <div class="form-group">
                            <label for="organized_by">Organized By</label>
                            <input type="text" class="form-control" name="organized_by" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Meeting</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Meeting Table -->
    <div class="card mt-4">
        <div class="card-header">Meetings</div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Title</th>
                        <th>Time</th>
                        <th>Organized By</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meetings as $meeting)
                        <tr>
                            <td>{{ $meeting->meeting_location }}</td>
                            <td>{{ $meeting->meeting_title }}</td>
                            <td>{{ $meeting->meeting_time }}</td>
                            <td>{{ $meeting->organized_by }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- FullCalendar Script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            slotMinTime: '06:00:00',
            slotMaxTime: '20:00:00',
            events: [
                @foreach($meetings as $meeting)
                    {
                        title: '{{ $meeting->meeting_title }} ({{ $meeting->meeting_location }})',
                        start: '{{ \Carbon\Carbon::parse($meeting->meeting_time)->toIso8601String() }}',
                        allDay: false
                    },
                @endforeach
            ]
        });

        calendar.render();
    });
</script>
@endsection
