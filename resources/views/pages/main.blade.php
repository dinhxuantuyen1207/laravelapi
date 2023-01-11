@extends('layout')
@section('content')
@include('pages.banner')
<div class="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-8 about-left">
                <div class="about-tre">
                    <div class="a-1">
                        @foreach ($all_post as $key=>$value)

                        <div class="row mb-5 mt-5">
                            <a href="{{route('bai-viet.show',[$value->id])}}">
                            <div class="col-md-6 abt-left">
                                <img width="100%" src="{{asset('/uploads/'.$value->image)}}" alt="{{Str::slug($value->title)}}" />
                            </div>
                            <div class="col-md-6 abt-left">
                                <a href="{{route('danh-muc.show',[$value->category->id,'slug'=>Str::slug($value->category->title)])}}"><h6>{{$value->category->title}}</h6></a>
                                <a href="{{route('bai-viet.show',[$value->id])}}"><h3>{{$value->title}}</h3></a>
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
                     {{$all_post->links()}}
                 </div>
            </div>
            <div class="col-md-4 about-right heading">
                <div class="abt-2">
                    <h3>Bài Viết Mới Nhất</h3>
                    @foreach ($newest_post as $key=>$value)
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
                    <h3>Bài Viết Xem Nhiều</h3>
                    <ul>
                        @foreach ($viewest_post as $keu=>$value )
                        <li><a href="{{route('bai-viet.show',[$value->id])}}">{{$value->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="abt-2">
                    <h3>NEWS LETTER</h3>
                    <div class="news">
                        <form>
                            <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
