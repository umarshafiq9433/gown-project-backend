@extends('layouts.admin')
@section('setting') mm-active @endsection
@section('content')
    <!-- General Setting Form-->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="lnr-picture text-danger pe-7s-display2"> </i>
                </div>
                <div>General Settings</div>
            </div>
        </div>
    </div>
    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <div class="border py-5 px-3">
                            <label class="button" for="fileElem"
                            >Select some files</label
                            >
                            <input type="file" id="fileElem" multiple
                                   accept="image/*">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom01">Company Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            placeholder="Company Name"
                            value="ABXD1234VDC"
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Name</div>

                        <label for="validationCustom03">Company Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="validationCustom03"
                            placeholder="Example@mail.com"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Email</div>
                        <label for="validationCustom04">Company Phone</label>
                        <input
                            type="number"
                            class="form-control"
                            id="validationCustom04"
                            placeholder="Company Phone"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Phone</div>

                        <label for="validationCustom05">Company Website</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom05"
                            placeholder="Company Website"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid</div>
                    </div>
                </div>
                <hr/>
                <button
                    class="btn btn-primary float-right mt-4"
                    type="submit"
                >
                    Save
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

    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom06">Address Line 1</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom06"
                            placeholder="Address"
                            value="ABXD1234VDC"
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Name</div>

                        <label for="validationCustom07">Address Line 2</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom07"
                            placeholder=""
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Email</div>
                        <label for="validationCustom08">Postal/Zip code</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom08"
                            placeholder="Postal/Zip code"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Phone</div>

                        <label for="validationCustom09">Region</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom09"
                            placeholder="Region"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid</div>
                        <label for="validationCustom010">City</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom010"
                            placeholder="City"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid</div>

                        <label for="validationCustom011">Country</label>
                        <input
                            type="text"
                            class="form-control"
                            id="validationCustom011"
                            placeholder="Country"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid</div>
                        <hr/>
                        <button
                            class="btn btn-primary float-right mt-4"
                            type="submit"
                        >
                            Save
                        </button>
                    </div>
                </div>
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

    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title">Change Password</h5>
            <form class="needs-validation" action="/admin/setting/update" method="POST" novalidate>
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="account">Select Account</label>
                        <select name="account" id="account" class="form-control" required>
                            <option value="" disabled selected>Select</option>
                            <option value="1">Admin</option>
                            <option value="2">Consultant</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Enter Username" name="username"
                               class="form-control" disabled required>
                    </div>
                    <div class="form-group col-12">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Enter Password" name="password"
                               class="form-control" required>
                    </div>
                    <button
                        class="btn btn-primary float-right mt-4"
                        type="submit"
                    >
                        Save
                    </button>
                </div>
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

                $(document).ready(function () {
                    $('#account').on("change",function () {
                        if($(this).val()==1){
                            $('#username').val('{{ $admin->email }}')
                        }else{
                            $('#username').val('{{ $consultant->email }}')
                        }
                    })
                })
            </script>
        </div>
    </div>

    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <h5 class="card-title">Terms and Conditions</h5>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom20"
                        >Add Images</label
                        >
                        <input
                            type="file"
                            class="form-control"
                            id="validationCustom20"
                            placeholder=""
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid file type</div>

                        <label for="validationCustom21"
                        >Enter Text</label
                        >
                        <textarea class="form-control">
                        </textarea>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Email</div>
                        <hr/>
                        <button
                            class="btn btn-primary float-right mt-4"
                            type="submit"
                        >
                            Save
                        </button>
                    </div>
                </div>
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

    <div class="main-card col-md-6 mb-3 mx-auto card">
        <div class="card-body">
            <p class="card-title">
                Set Default timimg for orders pick up and return.
            </p>
            <form class="needs-validation" novalidate>
                <div class="form-row">
                    <div class="form-control">
                        <input
                            type="radio"
                            id="rbtn"
                            name="fixedtime"
                            id="timefixed"
                        />
                        <label for="timefixed">Fixed time of day</label>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom21">Pickup</label>
                        <input
                            type="time"
                            class="form-control"
                            id="validationCustom21"
                            placeholder="Abcd"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Email</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom21">Return</label>
                        <input
                            type="time"
                            class="form-control"
                            id="validationCustom21"
                            placeholder="Abcd"
                            value=""
                            required
                        />
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Invalid Email</div>
                    </div>
                </div>
                <hr/>
                <button
                    class="btn btn-primary float-right mt-4"
                    type="submit"
                >
                    Save
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
