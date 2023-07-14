@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="card-question">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <h1>Quản lí ngân hàng câu hỏi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Ngân hàng câu hỏi</li>
                    </ol>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-sm-6">
                    <a href="http://localhost:8000/Webthi/AddQuestion" class="btn btn-success">ADD QUESTION</a>
                </div>
            </div>
        </div>
    </section>

    <section class="card-table">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Ngân hàng câu hỏi</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects" id="datatable_table">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                Mã
                            </th>
                            <th style="width: 20%">
                                Câu hỏi
                            </th>
                            <th style="width: 30%">
                                Câu trả lời
                            </th>
                            <th>
                                Đáp án
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%" class="text-right">
                                Tùy chọn
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="dtr-control sorting_1">
                                #
                            </td>
                            <td>
                                <a>
                                    AdminLTE v3
                                </a>
                                <br>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>

                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </section>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#datatable_table').DataTable();
});
</script>
@stop