@extends('template')
@section('title')
    Blog | Sit International
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('sit/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry">
                            <a href="{{ route('blog.single', $post->slug) }}" class="block-20" style="background-image: url('{{ asset("images/$post->image") }}');">
                                <div class="meta-date text-center p-2">
                                    <span class="day"><strong>{{ date('j',strtotime($post->created_at)) }}</strong></span>
                                    <span class="mos"><strong>{{ date('M',strtotime($post->created_at)) }}</strong></span>
                                    <span class="yr"><strong>{{ date('Y',strtotime($post->created_at)) }}</strong></span>
                                </div>
                            </a>
                            <div class="text pt-4">
                                <h3 class="heading"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h3>
                                <p>{{ substr($post->content, 0, 110) }}.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Lire la suite <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto mb-0">
                                        <a href="#" class="mr-2">{{ $post->author }}</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row no-gutters my-5">
                <div class="col text-center">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
@stop
