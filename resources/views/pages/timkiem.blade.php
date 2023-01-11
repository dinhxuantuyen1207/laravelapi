@extends('layout')
@section('content')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">


                <div class="about-one">
                    <h3>Từ Khoá Tìm Kiếm : {{$keywords}}  </h3>
                </div>
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($category_post as $key=>$value)

                        <div class="row mb-5 mt-5">
                            <a href="{{route('bai-viet.show',[$value->id])}}">
                            <div class="col-md-6 abt-left">
                                <img width="100%" src="{{asset('/uploads/'.$value->image)}}" alt="{{Str::slug($value->title)}}" />
                            </div>
                            <div class="col-md-6 abt-left">
                                <h6>{{$value->category->title}}</h6>
                                <h3>{{$value->title}}</h3>
                                <p>{!!substr($value->short_desc,0,300)!!}</p>
                                <label for="">{{$value->post_date}}</label>

                                    <a href="{{route('bai-viet.show',[$value->id])}}">đọc tiếp... </a>

                            </div>
                        </a>
                         </div>

                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Danh Mục Gợi Ý</h3>
                    <ul>
                        @foreach ($category as $key=>$value)
                        <li><a href="{{route('danh-muc.show',[$value->id,'slug'=>Str::slug($value->title)])}}">{{$value->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
