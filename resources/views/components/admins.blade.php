@extends('layouts.header')

@section('content')
<div class="container">
    <h1>Contact Logs</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->first_name }} {{ $log->last_name }}</td>
                    <td>{{ $log->email }}</td>
                    <td>{{ $log->phone }}</td>
                    <td>{{ $log->subject }}</td>
                    <td>{{ $log->message }}</td>
                    <td>{{ $log->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $logs->links() }}
    </div>
</div>
@endsection
