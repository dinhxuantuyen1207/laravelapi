@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Thêm Bài Viết') }}     <a href="{{ url('/home') }}">Back</a>   </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{route('post.store')}}" autocomplete="off" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu Đề</label>
                                <input type="text" placeholder="Tiêu Đề..." name="title" class="form-control"   >
                                <label for="title">Lượt View</label>
                                <input type="text" placeholder="Thêm Lượt View..." name="views" class="form-control"   >
                                <label for="title">Hình Ảnh</label>
                                <input type="file"  name="image" class="form-control"   >
                                <label for="title">Mô tả ngắn</label>
                                <textarea class="form-control" id="ckeditor_short_desc" name="short_desc" placeholder="Mô tả ngắn ..." id="" cols="30" rows="5"></textarea>
                                <label for="title">Nội Dung</label>
                                <textarea class="form-control" id="ckeditor_desc" name="desc" placeholder="Mô tả ngắn ..." id="" cols="30" rows="5"></textarea>
                                <label for="title">Danh Mục Bài Viết</label>
                                <select name="post_category_id" class="form-control">
                                    @foreach ($category as $key=>$value )
                                         <option value="{{$value->id}}">{{$value->title}}</option>
                                    @endforeach

                                </select>
                                <input type="submit" name="themdanhmuc" class="btn btn-primary mt-2" value="Thêm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
