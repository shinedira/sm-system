@extends('layouts.admin')
@section('title')
    <x-create-edit :model="$model"></x-create-edit>
@endsection

@section('css')
<style>
    .field-icon {
        position: absolute;
        top: 60%;
        right: 10px;
        z-index: 2;
    }

    .positive {
        position: relative;
    }
</style>
@endsection

@section('js')
<script>
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));

    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
</script>
@endsection

@section('content')
<section class="section" id="app">
    <div class="section-header">
        <h1>User</h1>
    </div>

    <x-form>
        <x-slot name="header">
            <h4>
                <x-create-edit :model="$model" :name="ucwords($model->name)"></x-create-edit>
            </h4>
        </x-slot>

        {!! Form::model($model, [
            'route' => !$model->exists ?
            ['admin.user.store'] :
            ['admin.user.update', $model],
            'method' => !$model->exists ? 'POST' : 'PATCH'
        ]) !!}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Name'); !!} <small class="text-danger">*</small>
                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Username'); !!} <small class="text-danger">*</small>
                    {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'username']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Role'); !!} <small class="text-danger">*</small>
                    {!! Form::select('role', $roles, null, ['class' => 'form-control', 'id' => 'role']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('name', 'Email'); !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('name', 'Phone'); !!} <small class="">Example: 81123987***.</small>
                    {!! Form::number('phone', null, ['class' => 'form-control', 'id' => 'phone']) !!}
                </div>
                <div class="form-group positive">
                    {!! Form::label('name', 'Password'); !!}
                    @if (!$model->exists)
                        <small class="text-danger">*</small>
                    @else
                        <small class="text-danger">*Kosongkan jika Password tidak di ganti</small>
                    @endif
                    {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                    <span toggle="#password" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </x-form>
</section>
@endsection
