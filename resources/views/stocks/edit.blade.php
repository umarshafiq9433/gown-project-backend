@extends('layouts.admin')
@section('stock') mm-active @endsection
@section('stock-ul') mm-collapse mm-show @endsection
@section('stock-add-item') mm-active @endsection
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>
                    Update Item
                    <div class="page-title-subheading">
                        Update Item to the inventory
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title">Update Item details</h5>
            <form class="needs-validation" method="POST" action="/admin/stock/{{ $stock->id }}/update"
                  enctype="multipart/form-data"
                  novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="customFile">Image</label>
                        <input
                            type="file"
                            id="customFile"
                            name="image"
                            class="form-control"
                            accept="image/gif, image/jpeg, image/png"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Image</div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">Item Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            placeholder="Item Name"
                            name="name"
                            value="{{ $stock->name }}"
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Name</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="cat">Category</label>
                        <select id="cat" name="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($stock->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Size</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" value="{{ $stock->quantity }}"
                               placeholder="quantity" class="form-control">
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Size</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="var">Product Type</label>
                        <select id="var" name="type" class="form-control">
                            <option value="Single" @if($stock->product_type == "Single") selected @endif>Single</option>
                            <option value="Variable" @if($stock->product_type == "Variable") selected @endif>Variable
                            </option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Size</div>
                    </div>
                </div>

                <div class="col-12" @if($stock->product_type != "Variable") style="display: none"
                     @endif id="variations">
                    {{--                    <div class="dropdown my-3" id="drp-con">--}}
                    {{--                        <button--}}
                    {{--                            id="drp"--}}
                    {{--                            type="button"--}}
                    {{--                            class="btn btn-primary dropdown-toggle"--}}
                    {{--                            data-toggle="dropdown"--}}
                    {{--                        >--}}
                    {{--                            <i class="fa fa-plus-circle"></i> Add Variation--}}
                    {{--                        </button>--}}
                    {{--                        <div class="dropdown-menu">--}}
                    {{--                            @foreach($variations as $variation)--}}
                    {{--                                <a class="dropdown-item" href="#" id="{{ $variation->name }}">{{ $variation->name }}</a>--}}
                    {{--                            @endforeach--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="col-md-12" id="tab">
                        @foreach($stock->Assignment as $assignment)
                            @php
                                $counter = 1;
                            @endphp
                            <table class='table table-responsive-md'>
                                <h4>{{ $assignment->Variation->name }} {{--<span id='rem-var'
                                                                             data-id='{{ $assignment->Variation->name }}'
                                                                             class='text-danger {{ $assignment->Variation->name }}'><i
                                            class='fa fa-minus-circle float-right'></i></span>--}}</h4>
                                @foreach($assignment->Total as $tot)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $tot->Value->value }}</td>
                                        <td><input type='hidden' name='id[]' value='{{ $tot->id }}'>
                                            <input type='number' name='price[]' value="{{ $tot->price }}"
                                                   placeholder='Price'
                                                   class='form-control'>
                                            <input type='hidden' name='counter' value='" + count_field++ + "'></td>
                                    </tr>
                                @endforeach
                            </table>
                        @endforeach
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea
                            class="form-control"
                            id="description"
                            placeholder="Description"
                            name="description"
                            required
                        >{{ $stock->description }}</textarea>
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">
                    Add
                </button>
            </form>

            <script>
                $(document).ready(function () {
                    {{--$("#var").on('change', function () {--}}
                    {{--    var val = $("#var").val();--}}
                    {{--    if (val == "Single") {--}}
                    {{--        $("#variations").slideUp();--}}
                    {{--    } else {--}}
                    {{--        $("#variations").slideDown();--}}
                    {{--    }--}}
                    {{--});--}}

                    {{--    @foreach($variations as $variation)--}}
                    {{--    @php--}}
                    {{--        $counter = 1;--}}
                    {{--    @endphp--}}
                    {{--var count_field = 1;--}}
                    {{--$("#{{ $variation->name }}").on("click", function () {--}}
                    {{--    $(this).addClass("d-none");--}}
                    {{--    $("#tab").append("<table class='table table-responsive-md'>" +--}}
                    {{--        "<h4>{{ $variation->name }} <span id='rem-var' data-id='{{ $variation->name }}' class='text-danger {{ $variation->name }}'><i class='fa fa-minus-circle float-right'></i></span></h4>" +--}}
                    {{--        @foreach($variation->Value as $value)--}}
                    {{--            "<tr>" +--}}
                    {{--        "<td>{{ $counter++ }}</td>" +--}}
                    {{--        "<td>{{ $value->value }}</td>" +--}}
                    {{--        "<td><input type='hidden' name='id[]' value='{{ $value->id }}'><input type='number' name='price[]' placeholder='Price' class='form-control'><input type='hidden' name='counter' value='" + count_field++ + "'></td>" +--}}
                    {{--        "</tr>" +--}}
                    {{--        @endforeach--}}
                    {{--            "</table>");--}}
                    {{--});--}}
                    {{--@endforeach--}}

                    $(document).on("click", "#rem-var", function () {
                        $("#" + $(this).data('id')).removeClass('d-none');
                        $(this).parents().next("table.table").slideUp();
                        $(this).parents("h4").slideUp();
                    });
                })
            </script>


            <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                    "use strict";
                    window.addEventListener(
                        "load",
                        function () {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName(
                                "needs-validation"
                            );
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(
                                forms,
                                function (form) {
                                    form.addEventListener(
                                        "submit",
                                        function (event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add("was-validated");
                                        },
                                        false
                                    );
                                }
                            );
                        },
                        false
                    );
                })();
            </script>
        </div>
    </div>
@endsection
