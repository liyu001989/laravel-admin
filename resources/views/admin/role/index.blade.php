@extends('admin.common.layout')

@section('page-title', '角色管理')

@section('content')
<div class="box">
    <div class="box-header">
        <span class="box-title">角色列表</span>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="infos" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr role="row">
                            <td>id</td>
                            <td>名称</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                            <tr role="row">
                                <td><a href="{{ route('admin.roles.show', $role->id) }}">{{ $role->id }}</a></td>
                                <td>{{ $role->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <div class="pull-right">
            {{ $roles->links() }}
        </div>
    </div>
</div>
@endsection
