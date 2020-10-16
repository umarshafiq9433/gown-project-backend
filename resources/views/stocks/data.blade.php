@extends('layouts.admin')
@section('stock') mm-active @endsection
@section('stock-ul') mm-collapse mm-show @endsection
@section('stock-view-item') mm-active @endsection
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>
                    Items List
                    <div class="page-title-subheading">Items List</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Items List</h5>
            <div class="table-responsive">
                <table
                    id="example"
                    class="table display nowrap"
                    style="width: 100%"
                >
                    <thead>
                    <tr>
                        <th>SR #</th>
                        <th>Item Name</th>
                        <th>Item size</th>
                        <th>Quantity</th>
                        <th>Total Bookings</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach($stocks as $stock)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $stock->name }}</td>
                            <td>
                                @if($stock->product_type=="Variable")
                                    <select name="" id="" class="form-control">
                                        @foreach($stock->Assignment as $val)
                                            @foreach($val->Total as $tot)
                                                <option value="">{{ $tot->Value->value }}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                @else
                                    Single Item
                                @endif
                            </td>
                            <td>{{ $stock->quantity }}</td>
                            <td>140</td>
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
                                        <a class="dropdown-item" href="#">Details</a>
                                        <a class="dropdown-item" href="/admin/stock/{{ $stock->id }}/edit">Edit</a>
                                        <a class="dropdown-item delete" href="#"  data-toggle="modal" data-id="{{ $stock->id }}" data-target="#delete">Delete</a>
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
                    <form class="form-group" method="POST" action="/admin/stock/delete">
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
