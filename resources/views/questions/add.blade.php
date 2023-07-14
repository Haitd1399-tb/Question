@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Thêm câu hỏi mới</h1>
@stop

@section('content')
<div class="row">
    <form class="col-md-12" action="/WebThi/AddQuestion" method="post">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">
                            <b>Thêm câu hỏi mới</b>
                        </h3>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            Nội dung câu hỏi
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-4">
                            <div style="border:none" class="form-control">
                                <select name="" id=""></select>
                            </div>
                        </div>
                        <p>Nội dung câu hỏi</p>
                        <textarea class="form-control p-2 my-2" rows="5" name="question" style="max-height: 400px"></textarea>
                        <p>
                            <b>Mức độ</b>
                        </p>

                        <div class="input-group">
                            <div style="border: none;background: none" class="input-group-text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop