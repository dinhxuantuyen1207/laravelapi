@extends('layouts.app')

@section('content')
    <div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success">
        <p>{{Session::get('success')}}</p>
    </div>
    @endif
    @if(Session::has('failer'))
    <div class="alert alert-danger">
        <p>{{Session::get('failer')}}</p>
    </div>
    @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Thêm Bài Viết') }}     <a href="{{ url('/home') }}">Back</a>   </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tiêu Đề</th>
                                <th scope="col">Lượt Xem</th>
                                <th scope="col">Hình Ảnh</th>
                                <th scope="col">Mô Tả Ngắn</th>
                                <th scope="col">Thuộc Danh Mục</th>
                                <th scope="col">Ngày Thêm</th>
                                <th scope="col">Quản Lý</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($post as $key=>$value)
                              <tr>
                                <th scope="row">{{($key+1)}}</th>
                                <td>{{$value->title}}</td>
                                <td>{{$value->views}}</td>
                                <td><img width="100px" src="/uploads/{{$value->image}}" alt=""></td>
                                <td>{!!substr($value->short_desc,0,100)!!}</td>
                                <td>{{$value->category->title}}</td>
                                <td>{{$value->post_date}}</td>
                                <td>
                                    <form action="{{route('post.destroy',[$value->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                    </form>
                                        <a class="btn btn-success btn-sm" href="{{route('post.show',[$value->id])}}">Edit</a>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                    <style>
                       .flex.justify-between.flex-1.sm\:hidden {
                            display: none;
                        }
                        svg.w-5.h-5 {
                            width: 27px !important;
                        }

                    </style>
                    <div class="card-footer text-center">
                        {{$post->links()}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
