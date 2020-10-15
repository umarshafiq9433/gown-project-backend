@extends('layouts.admin')
@section('variation') mm-active @endsection
@section('variation-ul') mm-collapse mm-show @endsection
@section('variation-add-variation') mm-active @endsection
@section('content')
    <div class="col-md-6 bg-white py-3 rounded mx-auto">
        <form action="/admin/variation/store" method="POST">
            @csrf
            <input type="hidden" name="counts" id="count" value="1">
            <div class="form-group">
                <label for="name">Name of variation Piece</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-secondary float-right" id="add-var">
                    <i class="fa fa-plus-circle"></i> Add Value
                </button>
                <br>
            </div>
            <div class="form-group" id="">
                <label for="val">Value</label>
                <input type="text" name="val-1" class="form-control" id="val">
            </div>
            <div id="values" class="mb-2">

            </div>
            <div class="form-group mb-5">
                <button class="btn btn-primary float-right">Save</button>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            var counter = 1;
            $("#add-var").on("click", function () {
                $("#values").append("<div class='form-group'><label for='val'>Value</label><br><input type='text' name='val-"+ ++counter +"' class='form-control col-11 d-inline' id='val'> <button type='button' class='btn btn-danger' id='rem-var'><i class='fa fa-minus-circle'></i></button></div>");
                $("#rem-var-div").removeClass("d-none");
                $("#count").val(counter);
            })
            $(document).on("click", "#rem-var", function () {
                $(this).parents("div.form-group").css('display', 'none');
            });
        })
    </script>
@endsection
