@extends('layout')
@section('content')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">


                <div class="about-one">
                    <h3>{{$title_category->title}}  </h3>
                </div>
                <div class="about-two">
                    <p>{{$title_category->short_desc}}</p>
                      <p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                    <ul>
                        <li><p>Share : </p></li>
                        <li><a href="#"><span class="fb"> </span></a></li>
                        <li><a href="#"><span class="twit"> </span></a></li>
                        <li><a href="#"><span class="pin"> </span></a></li>
                        <li><a href="#"><span class="rss"> </span></a></li>
                        <li><a href="#"><span class="drbl"> </span></a></li>
                    </ul>
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
                <style>
                    /* .flex.justify-between.flex-1.sm\:hidden {
                         display: none;
                     }
                     svg.w-5.h-5 {
                         width: 27px !important;
                     } */

                 </style>
                 <div class="text-center">
                     {{$category_post->links()}}
                 </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài Viết Xem Nhiều</h3>
                    @foreach ($viewest_post as $key=>$value)
                     <a href="{{route('bai-viet.show',[$value->id])}}">
                        <div class="might-grid">
                            <div class="grid-might">
                                <img src="{{asset('/uploads/'.$value->image)}}" class="img-responsive" alt="">
                            </div>
                            <div class="might-top">
                                <h4><a href="{{route('bai-viet.show',[$value->id])}}">{{$value->title}}</a></h4>
                                <p>{!!substr($value->short_desc,0,150)!!}...</p>

                                <a href="{{route('bai-viet.show',[$value->id])}}">đọc tiếp... </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <div class="abt-2">
                    <h3>Danh Mục Gợi Ý</h3>
                    <ul>
                        @foreach ($category_recomment as $key=>$value)
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
