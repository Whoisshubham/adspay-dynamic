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
                    <th scope="col">Image</th>
                    <th scope="col">Action/Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($galleryList as $key => $team)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td><img width="80px" height="40px" src="{{ asset($team->image ?? null) }}" alt=""></td>

                        <td><a class="btn btn-sm btn-outline-danger"
                                href="{{ url('admin/gallery/delete', [$team->id]) }}">Delete</a></td>
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
                    <form class="submitForm" action="{{ url('admin/gallery/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mb-1">
                                <span>Image <span class="text-danger">*</span></span>
                                <input type="file" class="form-control" name="image" required>
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
