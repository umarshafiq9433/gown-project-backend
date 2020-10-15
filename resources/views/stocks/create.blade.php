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
                    Add Item
                    <div class="page-title-subheading">
                        Add Item to the inventory
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title">Add Item details</h5>
            <form class="needs-validation" method="POST" action="/admin/stock/store" novalidate>
                @csrf
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="customFile">Image</label>
                        <input
                            type="file"
                            id="customFile"
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
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Name</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="var">Product Type</label>
                        <select id="var" class="form-control">
                            <option value="1">Single</option>
                            <option value="2">Variable</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Gown Size</div>
                    </div>
                </div>
                <div class="col-12" style="display: none" id="variations">
                    <div class="dropdown my-3" id="drp-con">
                        <button
                            id="drp"
                            type="button"
                            class="btn btn-primary dropdown-toggle"
                            data-toggle="dropdown"
                        >
                            <i class="fa fa-plus-circle"></i> Add Variation
                        </button>
                        <div class="dropdown-menu">
                            @foreach($variations as $variation)
                                <a class="dropdown-item" href="#" id="{{ $variation->name }}">{{ $variation->name }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12" id="tab">

                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="description">Description</label>
                        <textarea
                            class="form-control"
                            id="description"
                            placeholder="Description"
                        ></textarea>
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">
                    Add
                </button>
            </form>

            <script>
                $(document).ready(function () {
                    $("#var").on('change', function () {
                        var val = $("#var").val();
                        if (val == 1) {
                            $("#variations").slideUp();
                        } else {
                            $("#variations").slideDown();
                        }
                    });

                    @php
                        $field_count = 1;
                    @endphp

                    @foreach($variations as $variation)
                    @php
                        $counter = 1;
                    @endphp
                    $("#{{ $variation->name }}").on("click", function () {
                        $(this).addClass("d-none");
                        $("#tab").append("<table class='table table-responsive-md'>" +
                            "<h4>{{ $variation->name }} <span id='rem-var' data-id='{{ $variation->name }}' class='text-danger'><i class='fa fa-minus-circle float-right'></i></span></h4>" +
                            @foreach($variation->Variation_Value as $value)
                                "<tr>" +
                            "<td>{{ $counter++ }}</td>" +
                            "<td>{{ $value->value }}</td>" +
                            "<td><input type='hidden' name='id-{{ $field_count }}' value='{{ $variation->id }}'><input type='number' name='price-{{ $field_count }}' placeholder='Price' class='form-control'><input type='hidden' name='counter' value='{{ $field_count++ }}'></td>" +
                            "</tr>" +
                            @endforeach
                                "</table>");
                    });
                    @endforeach

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
