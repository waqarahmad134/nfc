@extends('admin.welcome')
@section('content')

<div id="main-content">
    <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-6 col-sm-12">
                <h2>Form Validation</h2>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Form Validation</li>
                </ul>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Social Links</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" novalidate>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>LinkedIn</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-primary mt-4">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection