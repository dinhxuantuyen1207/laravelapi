@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('category.create')}}" class="btn btn-primary m-2">Thêm Danh Mục Bài Viêt</a>
                    <a href="{{route('category.index')}}" class="btn btn-primary m-2">Liệt Kê Danh Mục Bài Viêt</a>
                    <a href="{{route('post.create')}}" class="btn btn-primary m-2">Thêm Bài Viết</a>
                    <a href="{{route('post.index')}}" class="btn btn-primary m-2">Liệt Kê Bài Viết</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
