@extends('layouts.admin')
@section('consultant') mm-active @endsection
@section('consultant-ul') mm-collapse mm-show @endsection
@section('consultant-view-consultant') mm-active @endsection
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>
                    Consultant List
                    <div class="page-title-subheading">Consultant List</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Consultant List</h5>

            <table
                id="example"
                class="table display nowrap"
                style="width: 100%;overflow: inherit !important;"
            >
                <thead>
                <tr>
                    <th>SR #</th>
                    <th>Name</th>
                    <th>Active Orders</th>
                    <th>Month's Sale</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach($consultants as $consultant)
                    <tr @if($consultant->status!="Active") class="bg-secondary text-white" @endif>
                        <td>{{ $counter++ }}</td>
                        <td>{{ $consultant->first_name }} {{ $consultant->last_name }}</td>
                        <td>{{ $consultant->active_orders }}</td>
                        <td>${{ $consultant->sale }}</td>
                        <td>
                            <div class="dropdown">
                                <button
                                    type="button"
                                    class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="./trace_record.html">Traceability Record</a>
                                    <a class="dropdown-item"
                                       href="/admin/consultant/{{ $consultant->id }}/edit">Edit</a>
                                    @if($consultant->status=="Active")
                                        <a class="dropdown-item" href="/admin/consultant/{{ $consultant->id }}/status">Disable</a>
                                    @else
                                        <a class="dropdown-item" href="/admin/consultant/{{ $consultant->id }}/status">Enable</a>
                                        <a class="dropdown-item delete" href="" data-id="{{ $consultant->id }}"
                                           data-toggle="modal" data-target="#delete">Delete</a>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- Data Tables -->
            <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
            <!-- Data Tables -->
        </div>
    </div>
@endsection

@section('modal')
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this?</p>
                    <form class="form-group" method="POST" action="/admin/consultant/delete">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="id2" value="">
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $(".delete").on("click", function () {
                $("#id2").val($(this).data('id'));
            })
        })
    </script>
@endsection

