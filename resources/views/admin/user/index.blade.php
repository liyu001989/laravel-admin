@extends('admin.common.layout')

@section('page-title', '用户管理')

@section('content')
<div class="box">
    <div class="box-header">
        <span class="box-title">用户列表</span>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle btn-search">筛选 <span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-search" role="menu">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">用户ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="用户ID" name="user_id" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label">联系电话</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="联系电话" name="cellphone" value="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </form>
                    </div>
                </div>

                @include('admin.common.search-tips')

                <a href="{{route('admin.users.create')}}" data-toggle="modal" class="pull-right btn btn-default verify-designer" type="button">添加用户</a>
            </div>
        </div>
        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-sm-12">
                <table id="infos" class="table table-bordered table-striped text-center">
                    <thead>
                        <tr role="row">
                            <td>id</td>
                            <td>头像</td>
                            <td>姓名</td>
                            <td>邮箱</td>
                            <td>注册时间</td>
                            <td class="text-nowrap">状态</td>
                            <td>操作</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr role="row">
                            <td><a href="{{ route('admin.users.show', $user->id) }}">{{@$user->id}}</a></td>
                            <td><img width="50px" src="{{ $user->avatar }}"></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                @if ($user->status == 'ACTIVE')
                                    <span class="text-green"><i class="fa fa-check" aria-hidden="true"></i></span>
                                @else
                                    <span class="text-red"><i class="fa fa-close" aria-hidden="true"></i></span>
                                @endif
                            </td>

                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="true">操作
                                    <span class="fa fa-caret-down"></span></button>
                                    <ul class="dropdown-menu slim-menu">
                                        <li>
                                            <a href="{{ route('admin.users.edit', $user->id) }}">编辑</a>
                                        </li>
                                        <li>
                                            <a class="change-status" data-id="{{$user->id}}">
                                                {{$user->status == 'ACTIVE' ? '禁用' : '激活'}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <div class="pull-right">
            {!! $users->render() !!}
        </div>
    </div>
</div>
@endsection
