<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function index()
    {
        $meeting = meeting::orderBy('created_at', 'DESC')->get();
        return view('meeting.index', compact('meeting'));
    }

    public function create()
    {
        return view('meeting.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'meeting_location' => 'required|string|max:255',
            'meeting_title'    => 'required|string|max:255',
            'meeting_time'     => 'required|date',
            'organized_by'     => 'required|string|max:255',
        ]);

        meeting::create([
            'meeting_location' => $request->meeting_location,
            'meeting_title'    => $request->meeting_title,
            'meeting_time'     => $request->meeting_time,
            'organized_by'     => $request->organized_by,
        ]);

        return redirect()->route('meeting')->with('success', 'Meeting created successfully.');
    }

    public function show(string $id)
    {
        $meeting = meeting::findOrFail($id);
        return view('meeting.show', compact('meeting'));
    }

    public function edit(string $id)
    {
        $meeting = meeting::findOrFail($id);
        return view('meeting.edit', compact('meeting'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'meeting_location' => 'required|string|max:255',
            'meeting_title'    => 'required|string|max:255',
            'meeting_time'     => 'required|date',
            'organized_by'     => 'required|string|max:255',
        ]);

        $meeting = meeting::findOrFail($id);
        $meeting->update([
            'meeting_location' => $request->meeting_location,
            'meeting_title'    => $request->meeting_title,
            'meeting_time'     => $request->meeting_time,
            'organized_by'     => $request->organized_by,
        ]);

        return redirect()->route('meeting')->with('success', 'Meeting updated successfully.');
    }

    public function destroy(string $id)
    {
        $meeting = meeting::findOrFail($id);
        $meeting->delete();

        return redirect()->route('meeting')->with('success', 'Meeting deleted successfully.');
    }
}
