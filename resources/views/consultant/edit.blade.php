@extends('layouts.admin')
@section('consultant') mm-active @endsection
@section('consultant-ul') mm-collapse mm-show @endsection
@section('consultant-add-consultant') mm-active @endsection
@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>
                    Add Consultant
                    <div class="page-title-subheading">Add Consultant</div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card col-md-6 mb-3 card">
        <div class="card-body">
            <h5 class="card-title">Add Consultant details</h5>
            <form class="needs-validation" method="POST" action="/admin/consultant/{{ $consultant->id }}/update" enctype="multipart/form-data" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="customFile">Image</label>
                        <input
                            type="file"
                            id="customFile"
                            class="form-control"
                            accept="image/gif, image/jpeg, image/png"
                            name="image"
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Image</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">First Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            placeholder="First Name"
                            name="first_name"
                            value="{{ $consultant->first_name }}"
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid First Name</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom02">Last Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            placeholder="Last Name"
                            name="last_name"
                            value="{{ $consultant->last_name }}"
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Last Name</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustomUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend"
                          >@</span
                          >
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                id="validationCustomUsername"
                                placeholder="Username"
                                aria-describedby="inputGroupPrepend"
                                name="username"
                                value="{{ $consultant->username }}"
                                disabled
                                required
                            />
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Password"
                            name="password"
                            value="12345678"
                            disabled
                            required
                        />
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="price">Commission %</label>
                        <input
                            type="number"
                            name="commission"
                            id="price"
                            placeholder="Commission %"
                            class="form-control"
                            value="{{ $consultant->commission }}"
                            required
                        />
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
                        >{{ $consultant->description }}</textarea>
                    </div>
                </div>
                <button class="btn btn-primary float-right" type="submit">
                    Add
                </button>
            </form>

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
