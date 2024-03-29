@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit User</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($user, ['route' => ['usermgmt::users.update', $user->id], 'method' => 'patch']) !!}

            @include('usermgmt::users.fields')

            {!! Form::close() !!}
        </div>
@endsection
