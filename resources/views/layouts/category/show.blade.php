@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cập Nhật Danh Mục Bài Viết') }}
                        <a href="{{ url('/home') }}">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('category.update',[$category->id])}}" autocomplete="off" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Tiêu Đề</label>
                                <input type="text" placeholder="Tiêu Đề..." name="title" class="form-control" value="{{$category->title}}">
                                <label for="title">Mô Tả Danh Mục</label>
                                <textarea placeholder="Tiêu Đề..." name="short_desc" class="form-control" rows="4" style="resize: none">{{$category->short_desc}}
                                </textarea>
                                <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Cập Nhật">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
