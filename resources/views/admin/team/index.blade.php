@extends('admin.layouts.app')
@section('content')
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-sm btn-outline-primary mb-3" data-toggle="modal" data-target="#exampleModal">
            Add Team
        </button>
    </div>
    <div class="bg-white">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">designation</th>
                    <th scope="col">Image</th>
                    <th scope="col">Social Link</th>
                    <th scope="col">Action/Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teamList as $key => $team)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $team->name ?? null }}</td>
                        <td>{{ $team->designation ?? null }}</td>
                        <td><img width="80px" height="40px" src="{{ asset($team->image ?? null) }}" alt=""></td>
                        <td>
                            @if ($team->facebook !== null)
                                <a class="btn btn-sm btn-success" href="{{ $team->facebook }}">Facebook</a>
                            @endif
                            @if ($team->linkedin !== null)
                                <a class="btn btn-sm btn-primary" href="{{ $team->linkedin }}">Linkedin</a>
                            @endif
                            @if ($team->instagram !== null)
                                <a class="btn btn-sm btn-info" href="{{ $team->instagram }}">Instagram</a>
                            @endif
                        </td>
                        <td><a class="btn btn-sm btn-outline-danger"
                                href="{{ url('admin/team/delete', [$team->id]) }}">Delete</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="submitForm" action="{{ url('admin/team/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <span>Name <span class="text-danger">*</span></span>
                                <input type="text" class="form-control" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-12 mb-1">
                                <span>Image <span class="text-danger">*</span></span>
                                <input type="file" class="form-control" name="image" required>
                            </div>
                            <div class="col-md-12 mb-1">
                                <span>Designation <span class="text-danger">*</span></span>
                                <input type="text" class="form-control" name="designation" placeholder="Designation"
                                    required>
                            </div>
                            <div class="col-md-12 mb-1">
                                <span>Facebook Url</span>
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook Url">
                            </div>
                            <div class="col-md-12 mb-1">
                                <span>Instagram Url</span>
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram Url">
                            </div>
                            <div class="col-md-12 mb-1">
                                <span>Linkedin Url</span>
                                <input type="text" class="form-control" name="linkedin" placeholder="Linkedin Url">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
