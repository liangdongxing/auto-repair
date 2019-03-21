@extends('layouts.app')
@section('section')
    <section class="content-header">
        <h1>
            个人资料
            <small>编辑</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('root')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li class="active">编辑资料</li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="col-lg-13">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-edit text-blue"></i>&nbsp编辑资料</h3>
            </div>
            <form class="form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                @include('shared._error')
                <div class="box-body">

                    <div class="form-group">
                        <label for="name-field" class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-9">
                            <input class="form-control"  type="text" name="name" value="{{ old('name', $user->name) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name-field" class="col-sm-2 control-label">手 机</label>
                        <div class="col-sm-9">
                            <input class="form-control"  type="text" name="mobile" value="{{ old('mobile', $user->mobile) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name-field" class="col-sm-2 control-label">邮 箱</label>
                        <div class="col-sm-9">
                            <input class="form-control"  type="email" name="email" value="{{ old('email', $user->email) }}" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="" class="col-sm-2 control-label">用户头像</label>
                        <div class="col-sm-9">
                            <input type="file" name="avatar" class="form-control-file">

                            @if($user->avatar)
                                <br>
                                <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
                            @endif
                        </div>
                    </div>

                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection