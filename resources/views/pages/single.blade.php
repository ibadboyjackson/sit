@extends('template')
@section('title')
    Single | Sit International
@stop
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('sit/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Acceuil <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{ route('blog') }}">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <p>
                        <img src="{{ asset("images/$post->image") }}" alt="" class="img-fluid">
                    </p>
                    <p>
                        {{ $post->content }}
                    </p>
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($categories as $category)
                                <a href="#" class="tag-cloud-link">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="{{ asset('sit/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3>{{ $post->author }}</h3>
                            <p>Cet article a été écrit par <strong>{{ $post->author }}</strong>!</p>
                        </div>
                    </div>


                    <div class="pt-5 mt-5">
                        <h3 class="mb-5 h4 font-weight-bold">1 Commentaires</h3>
                        <ul class="comment-list">
                            <li class="comment">
                                <div class="vcard bio">
                                    <img src="{{ asset('sit/images/person_1.jpg') }}" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $post->author }}</h3>
                                    <div class="meta mb-2">{{ date('J M, Y H:i',strtotime($post->created_at)) }}</div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                    <p><a href="#" class="reply">Repondre</a></p>
                                </div>
                            </li>

                        </ul>
                        <!-- END comment-list -->

                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5 h4 font-weight-bold">Laisser un commentaire</h3>
                            <form action="#" class="p-5 bg-light">
                                <div class="form-group">
                                    <label for="name">Nom *</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="website">Site web</label>
                                    <input type="url" class="form-control" id="website">
                                </div>

                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Commenter" class="btn py-3 px-4 btn-primary">
                                </div>

                            </form>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" class="form-control" placeholder="Ecris un mot clé puis entrée">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3>Categorie</h3>
                        <ul class="categories">
                            @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }} <span>({{ $category->count() }})</span></a></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Articles Populaires</h3>
                        @foreach($posts as $post)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{ asset("images/$post->image") }});"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="{{ route('blog.single', $post->slug) }}">{{ $post->title }}</a></h3>
                                    <div class="meta">
                                        <div><a href=""><span class="icon-calendar"></span>{{ date('J M, Y H:i',strtotime($post->created_at)) }}</a></div>
                                        <div><a href=""><span class="icon-person"></span>{{ $post->author }}</a></div>
                                        <div><a href=""><span class="icon-chat"></span> 19</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Tag Cloud</h3>
                        <ul class="tagcloud m-0 p-0">
                            @foreach($categories as $category)
                                <a href="#" class="tag-cloud-link">{{ $category->name }}</a>
                            @endforeach
                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Archives</h3>
                        <ul class="categories">
                            <li><a href="#">December 2018 <span>(30)</span></a></li>
                            <li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                            <li><a href="#">September 2018 <span>(6)</span></a></li>
                            <li><a href="#">August 2018 <span>(8)</span></a></li>
                        </ul>
                    </div>

                </div><!-- END COL -->
            </div>
        </div>
    </section>
@stop
