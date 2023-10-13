@extends('admin.layouts.app')
@section('content')
    <div class="bg-white">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action/Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactUs as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $contact->name ?? null }}</td>
                        <td>{{ $contact->email ?? null }}</td>
                        <td>{{ $contact->subject ?? null }}</td>
                        <td>{{ $contact->message ?? null }}</td>
                        <td><a class="btn btn-sm btn-outline-danger" href="{{url('admin/contact/delete',[$contact->id])}}">Delete</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
@endsection
