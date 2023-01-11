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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Thêm Danh Mục Bài Viết') }}     <a href="{{ url('/home') }}">Back</a>   </div>

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
                                <th scope="col">Mô Tả</th>
                                <th scope="col">Quản Lý</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach ($category as $key=>$value)
                              <tr>
                                <th scope="row">{{($key+1)}}</th>
                                <td>{{$value->title}}</td>
                                <td>{{$value->short_desc    }}</td>
                                <td>
                                    <form action="{{route('category.destroy',[$value->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                    </form>
                                        <a class="btn btn-success btn-sm" href="{{route('category.show',[$value->id])}}">Edit</a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
