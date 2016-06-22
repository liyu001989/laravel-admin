@extends('admin.common.layout')

@section('content')

<div class="box">
    <div class="box-body">
        <form method="post" action="{{route('admin.users.store')}}" id="form" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}

            @include('admin.common.errors')

            <div class="row">
                <div class="col-md-6">
                    <div class="col-md-12 form-group">
                        <label class="col-md-4 control-label">头 像:</label>

                        <label class="btn btn-info btn-file">
                          <input name="avatar" type="file" accept="image/*" data-image-preview="#avatar-preview">
                          选择
                        </label>
                    </div>

                    <div class="col-md-12  form-group">
                        <img id="avatar-preview"  width="300px" class="col-md-offset-4" src="{{ asset('images/user-avatar.jpg') }}">
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="text-red">*</span> 邮 箱:
                        </label>
                        <div class="col-md-7">
                            <input type="email" name="email" value="{{old('email')}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="text-red">*</span> 姓 名:
                        </label>
                        <div class="col-md-7">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="text-red">*</span> 密 码:
                        </label>
                        <div class="col-md-7">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<js data-require="admin/upload-preview"></js>
@endsection
