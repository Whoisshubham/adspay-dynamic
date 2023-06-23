@extends('admin.layouts.app')
@section('content')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">


            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">User Form Details</h4>

                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Dob</th>
                                <th>Create Date</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataList as $key => $list)
                                @if ($key % 2 == 0)
                                    <tr>
                                        <td class="table-plus">{{ $list->name ?? '' }}</td>
                                        <td>{{ $list->email ?? '' }}</td>
                                        <td>{{ $list->mobile ?? '' }}</td>
                                        <td>{{ $list->dob ?? '' }}</td>
                                        <td>{{ $list->created_at ?? '' }}</td>
                                        <td>

                                            <div class="d-flex">
                                                @if (!$list->card_details == null)
                                                    <button type="button" data-href="{{ url('user/show-card',['id'=>$list->id]) }}"
                                                        class="dropdown-item btn btn-sm btn-secondary add_model"
                                                        data-bs-toggle="modal" data-bs-target="#add_model"><i
                                                            class="dw dw-eye"></i> </button>
                                                @endif
                                                {{-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a> --}}
                                                <a class="dropdown-item"
                                                    href="{{ url('user/data-list/delete', ['id' => "$list->id"]) }}"><i
                                                        class="dw dw-delete-3"></i>
                                                </a>
                                            </div>


                                        </td>
                                    </tr>
                                @else
                                    <tr>
                                        <td class="table-plus">{{ $list->name ?? '' }}</td>
                                        <td>{{ $list->email ?? '' }}</td>
                                        <td>{{ $list->mobile ?? '' }}</td>
                                        <td>{{ $list->dob ?? '' }}</td>
                                        <td>{{ $list->created_at ?? '' }}</td>
                                        <td>
                                            <div class="d-flex">
                                                @if (!$list->card_details == null)
                                                    <button type="button" data-href="{{ url('user/show-card',['id'=>$list->id]) }}"
                                                        class="dropdown-item btn btn-sm btn-secondary add_model"
                                                        data-bs-toggle="modal" data-bs-target="#add_model"><i
                                                            class="dw dw-eye"></i> </button>
                                                @endif
                                                {{-- <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a> --}}
                                                <a class="dropdown-item"
                                                    href="{{ url('user/data-list/delete', ['id' => "$list->id"]) }}"><i
                                                        class="dw dw-delete-3"></i>
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->
        </div>
    </div>
@endsection
