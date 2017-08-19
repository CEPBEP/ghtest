@extends('admin.admin-index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                 {{!! Form::label('Title', 'null') }}
                {{!! Form::text('title', null, ['class' => 'form-control']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection