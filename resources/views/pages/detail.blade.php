@extends('layout')
@section('content')
<div class="single">
    <div class="container">
        <div class="col-md-8">
            <style>
                .single-top.single-post img{
                    width:100% !important;
                }
            </style>
            <div class="single-top single-post">
                {{-- <a href="#"><img class="img-responsive" src="{{asset('/uploads/'.$post->image)}}" alt=" "></a> --}}
                <div class="single-grid">
                    <h4 style="text-align: center;font-size: 30px;font-weight: bold">{{$post->title}}</h4>
                    <ul class="blog-ic">
                        <li><a href="#"><span> <i class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
                        <li><span><i class="glyphicon glyphicon-time"> </i>{{$post->post_date}}</span></li>
                        <li><span><i class="glyphicon glyphicon-eye-open"> </i>Views:{{$post->views}}</span></li>
                    </ul>
                    {!!$post->desc!!}
                </div>
                <div class="comments heading">
                    <h3>Bình Luận Về Bài Viết</h3>
                    <div class="comment-bottom heading">
                        <h3>Bình Luận</h3>
                        <form>
                            <input type="text" value="Name" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Name';}">
                            <input type="text" value="Email" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Email';}">
                            <input type="text" value="Subject" onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value ='Subject';}">
                            <textarea cols="77" rows="6" value=" " onfocus="this.value='';"
                                onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                            <input type="submit" value="Gửi Bình Luận">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 about-right heading">
            <div class="abt-2">
                <h3>Bài Viết Liên Quan</h3>
                @foreach ($post_related as $key=>$value)
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
        </div>
    </div>
</div>
@endsection
