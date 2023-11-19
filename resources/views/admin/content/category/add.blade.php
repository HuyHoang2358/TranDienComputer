@extends('layouts.adminLayout')
@section('title')
    Thêm mới danh mục
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Thêm mới danh mục</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Tên danh mục:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug(url) của danh mục:</label>
                            <input type="text" class="form-control" id="slug">
                        </div>
                        <div class="form-group">
                            <label for="slug">Link Icon:</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Chọn file</label>
                            </div>
                        </div>
                        <div class="">
                            <label for="slug">Link Icon:</label>
                            <textarea type="file" class="" id="myeditorinstance"> </textarea>

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{redirect()->back()}}"><button type="button" class="btn iq-bg-danger">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Icon preview</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                   <img src="{{asset('adminPanel/images/page-img/07.jpg')}}"  class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </div>
@endsection
