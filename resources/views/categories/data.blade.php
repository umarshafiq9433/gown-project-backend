@extends('layouts.admin')
@section('categories') mm-active @endsection
@section('categories-ul') mm-collapse mm-show @endsection
@section('categories-add-category') mm-active @endsection
@section('content')
    @php
    $counter = 1;
    @endphp
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>Categories</div>

            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Category List</h5>
            <div class="">
                <button href="#" class=" btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    Add Category
                </button>
            </div>
            <table
                id="example"
                class="table display nowrap"
                style="width: 100%"
            >
                <thead class="">
                <tr>
                    <th>SR #</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="id">{{ $counter++ }}</td>
                        <td class="name">{{ $category->name }}</td>
                        <td class="sibling">
                            <div class="dropdown">
                                <button
                                    type="button"
                                    class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown"
                                >
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item edit" href="#" data-toggle="modal" data-target="#Modal2">Edit</a>
                                    <a class="dropdown-item delete" href="#" data-id="{{ $category->id }}" data-toggle="modal" data-target="#delete">Delete</a>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/admin/category/store">
                        @csrf
                        <div class="form-group">
                            <label for="add">Add Category:</label>
                            <input type="text" class="form-control" name="name" id="add"
                                   placeholder="Add category"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-group" method="POST" action="/admin/category/update">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" value="">
                            <label for="add">Add Category:</label>
                            <input type="text" class="form-control" aria-inval id="name" name="name"
                                   placeholder="Add category" value=""/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
                    <form class="form-group" method="POST" action="/admin/category/delete">
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
            $(".edit").on("click", function () {
                $("#id").val($(this).parents("td.sibling").siblings("td.id").html());
                $("#name").val($(this).parents("td.sibling").siblings("td.name").html());
            });

            $(".delete").on("click", function () {
                $("#id2").val($(this).data('id'));
            })
        })
    </script>
@endsection
