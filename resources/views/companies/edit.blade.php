@extends('layouts.app')
@section('title', '修改店铺信息')
@section('section')
    <section class="content-header">
        <h1>
            店铺设置
            <small>编辑</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-gears"></i> 基础资料</a></li>
            <li class="active">店铺设置</li>
        </ol>
    </section>
@endsection
@section('content')
    <div class="col-lg-13">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-edit text-blue"></i>&nbsp编辑资料</h3>
            </div>
                @include('shared._error')
                <div class="box-body">
                    <!-- 输出后端报错开始 -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <h4>有错误发生：</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <!-- 输出后端报错结束 -->
                    <!-- inline-template 代表通过内联方式引入组件 -->
                    <company-addresses-edit inline-template>
                        @if($company->id)
                            <form class="form-horizontal" role="form" action="{{ route('companies.update', ['store' => $company->id]) }}" method="post">
                            {{ method_field('PUT') }}
                            @endif
                            {{ csrf_field() }}
                            <!-- 注意这里多了 @change -->
                                <fieldset>
                                    <legend><h5>基本信息</h5></legend>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">门店名称</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="name" value="{{ old('name', $company->name) }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">门店简称</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="short_name" value="{{ old('short_name', $company->short_name) }}">
                                        </div>
                                    </div>
                                <select-district :init-value="{{ json_encode([$company->province, $company->city, $company->district]) }}" @change="onDistrictChanged" inline-template>
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">省市区</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" v-model="provinceId">
                                                <option value="">选择省</option>
                                                <option v-for="(name, id) in provinces" :value="id">@{{ name }}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" v-model="cityId">
                                                <option value="">选择市</option>
                                                <option v-for="(name, id) in cities" :value="id">@{{ name }}</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" v-model="districtId">
                                                <option value="">选择区</option>
                                                <option v-for="(name, id) in districts" :value="id">@{{ name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </select-district>
                                <!-- 插入了 3 个隐藏的字段 -->
                                <!-- 通过 v-model 与 company-addresses-edit 组件里的值关联起来 -->
                                <!-- 当组件中的值变化时，这里的值也会跟着变 -->
                                <input type="hidden" name="province" v-model="province">
                                <input type="hidden" name="city" v-model="city">
                                <input type="hidden" name="district" v-model="district">
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">详细地址</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" value="{{ old('address', $company->address) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">邮政编码</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="zip" value="{{ old('zip', $company->zip) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">门店负责人</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="manager" value="{{ old('manager', $company->manager) }}">
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h5>联系人信息</h5></legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">联系人</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="contact" value="{{ old('contact', $company->contact) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">固定电话</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone', $company->phone) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">手机</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mobile" value="{{ old('mobile', $company->mobile) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">QQ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="QQ" value="{{ old('QQ', $company->QQ) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" value="{{ old('email', $company->QQ) }}">
                                    </div>
                                </div>
                                </fieldset>
                                <fieldset>
                                    <legend><h5>银行账号信息</h5></legend>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">开户银行</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="bank" value="{{ old('bank', $company->bank) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">账号</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="account" value="{{ old('account', $company->account) }}">
                                    </div>
                                </div>
                                    </fieldset>
                                <div class="box-footer text-center">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                </div>
                            </form>
                    </company-addresses-edit>
            </div>
        </div>
    </div>
@endsection