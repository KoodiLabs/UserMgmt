@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit User</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($user, ['route' => ['usermgmt::users.update_password', $user->id], 'method' => 'patch']) !!}

			<div class="form-group col-sm-6">
			    {!! Form::label('password', 'Password:') !!}
			    {!! Form::password('password', ['class' => 'form-control']) !!}
			</div>

			<div class="form-group col-sm-6">
			    {!! Form::label('password_confirm', 'Confirm Password:') !!}
			    {!! Form::password('password_confirm', ['class' => 'form-control']) !!}
			</div>

			<div class="form-group col-sm-12">
			    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
			    <a href="{!! route('usermgmt::users.index') !!}" class="btn btn-default">Cancel</a>
			</div>


            {!! Form::close() !!}
        </div>
@endsection
