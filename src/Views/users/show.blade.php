@extends('layouts.app')

@section('content')
    @include('usermgmt::users.show_fields')

    <div class="form-group">
           <a href="{!! route('usermgmt::users.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
