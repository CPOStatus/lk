<!-- header -->
@extends('overall.header')
<!-- content -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($all_students as $student)
                        {{$student}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
