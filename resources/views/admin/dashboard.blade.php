@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">صفحة المسؤول</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                        <li class="breadcrumb-item active">صفحة البداية</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-2 text-bold"> الاسم</h5>

                            <p class="card-text">
                                داليا أحمد أبو شنب
                            </p>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title mb-2 text-bold">العنوان </h5>

                            <p class="card-text">
                                فلسطين-غزة-المنطقة الوسطى
                            </p>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2 text-bold">  التخصص</h6>

                            <p class="card-text"> هندسة أنظمة الحاسوب</p>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <h6 class="card-title mb-2 text-bold"> الشعار</h6>

                            <p class="card-text"> نحو جيل هندسي مبدع</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
