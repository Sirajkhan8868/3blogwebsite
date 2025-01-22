@extends('layouts.header')

@section('content')
    <h1>Contact Us Logs</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->first_name }} {{ $log->last_name }}</td>
                    <td>{{ $log->email }}</td>
                    <td>{{ $log->phone }}</td>
                    <td>{{ $log->subject }}</td>
                    <td>{{ $log->message }}</td>
                    <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{ $logs->links() }}
    </div>
@endsection
