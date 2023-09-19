@extends('users.layouts.app')
@section('content')
    <div class="rbt-overlay-page-wrapper">
        <div class="breadcrumb-image-container breadcrumb-style-max-width">
            <div class="breadcrumb-image-wrapper">
                <img src="{{ asset('assets/images/bg/bg2.jpg') }}" alt="Education Images">
            </div>
            <div class="breadcrumb-content-top text-center">
                <ul class="meta-list justify-content-center mb--10">
                    <li class="list-item">
                        <!-- <div class="author-thumbnail">
                            <img src="{{ asset('assets/images/testimonial/client-06.png') }}" alt="blog-image">
                        </div> -->
                        <div class="author-info">
                           <p>Publier le</p>
                        </div>
                    </li>
                    <li class="list-item">
                        <i class="feather-clock"></i>
                        <span>{{date("d M Y", strtotime($new->created_at)) }}</span>
                    </li>
                </ul>
                <h3 class="title">{{$new->title}}</h3>
                <!-- <p>Ten Advices That You Must Listen Before Studying Education.</p> -->
            </div>
        </div>

        <div class="rbt-blog-details-area rbt-section-gapBottom breadcrumb-style-max-width">
            <div class="blog-content-wrapper rbt-article-content-wrapper">
                <div class="content">
                    <div class="post-thumbnail mb--30 position-relative wp-block-image alignwide">
                        <figure>
                            <img src="{{ asset('assets/images/blog/blog-single-03.png') }}" alt="Blog Images">
                            <figcaption class="w-500">{{$new->caption}}</figcaption>
                        </figure>
                    </div>
                    <p>{{$new->description}}</p>

                    <!-- Social Share Block  -->
                    <div class="social-share-block">
                        <div class="post-like">
                            <a href="#"><i class="feather feather-thumbs-up"></i><span>2.2k Like</span></a>
                        </div>
                        <ul class="social-icon social-default transparent-with-border">
                            <li><a href="https://www.facebook.com/">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.twitter.com">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li><a href="https://www.linkdin.com/">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                   
                </div>
                <div class="rbt-comment-area">
                    <h4 class="title">{{ $new->comments->count() }} comments</h4>
                    <ul class="comment-list">
                        <!-- Start Single Comment  -->
                        @foreach ($new->comments as $comment)
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="single-comment">
                                        <div class="comment-img">
                                            <img src="{{ asset('assets/images/testimonial/testimonial-1.jpg') }}"
                                                alt="Author Images">
                                        </div>
                                        <div class="comment-inner">
                                            <h6 class="commenter">
                                                <a href="#">{{$comment->name}}</a>
                                            </h6>
                                            <div class="comment-meta">
                                                <div class="time-spent">{{date("d M Y", strtotime($comment->created_at)) }} à {{date("h:m ", strtotime($comment->created_at)) }} </div>
                                                <div class="reply-edit">
                                                    <div class="reply">
                                                        <a class="comment-reply-link" href="#form-comment"
                                                            onclick="document.getElementById('parent_id').value = {{ $comment->id }}">Répondre</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p class="b2">{{ $comment->content }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="children">
                                    @forelse ($comment->replies as $replie)
                                        <!-- Start Single Comment  -->
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="{{ asset('assets/images/testimonial/testimonial-2.jpg') }}"
                                                            alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a href="#">John Due</a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent">Nov 23, 2018 at 12:23 pm
                                                            </div>
                                                            <div class="reply-edit">
                                                                <div class="reply">
                                                                    <a class="comment-reply-link" href="#form-comment"
                                                                        onclick="document.getElementById('parent_id').value = {{ $comment->id }}">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="comment-text">
                                                            <p class="b2">{{ $replie->content }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- End Single Comment  -->
                                    @empty
                                    @endforelse
                                </ul>
                            </li>
                            <!-- End Single Comment  -->
                        @endforeach
                    </ul>
                    <div class="rbt-comment-area">
                        <form action="{{ route('comments-store') }}" method="POST">
                             @csrf
                            <div class="comment-respond" id="form-comment">
                                <h4 class="title">Poster un commentaire</h4>
                                
                                    <p class="comment-notes"><span id="email-notes">Votre adresse email ne sera pas publiée. </span> Les champs requis sont indiqués <span class="required">*</span></p>
                                    <div class="row row--10">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Nom *</label>
                                                <input type="hidden" name="report_id" value="{{ $new->id }}">
                                                <input type="hidden" name="parent_id" id="parent_id">
                                                <input id="name" type="text" name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="bl-email">Email *</label>
                                                <input id="bl-email" type="email" name="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="content">message *</label>
                                                <textarea id="content" name="content" name="content"></textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="rbt-btn btn-gradient icon-hover radius-round btn-md">
                                            <span class="btn-text">Envoyer</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="related-post pt--60">
                <div class="section-title text-center mb--40">
                    <span class="subtitle bg-primary-opacity">Post récent</span>
                    <h4 class="title">Post récent</h4>
                </div>

                <!-- Start Single Card  -->
                @foreach ($similars as $similar)
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{ route('news_details_link', $similar->title) }}">
                                <img src="{{ asset('assets/images/blog/blog-card-02.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('news_details_link', $similar->title) }}">{{$similar->title}}</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('news_details_link', $similar->title) }}">Lire
                                    Article<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                @endforeach
            </div>
        </div>
    </div>
    </div>

    <!--
                                                                                                                                                                                        <div class="container-fluid">
                                                                                                                                                                                            <div class="row g-3">
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-01.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-02.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-03.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-04.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-05.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                                <div class="col-lg-2 col-md-4 col-sm-6 col-6">
                                                                                                                                                                                                    <div class="instagram-grid">
                                                                                                                                                                                                        <a href="#">
                                                                                                                                                                                                            <img src="assets/images/instagram/instagram-06.jpg" alt="instagram">
                                                                                                                                                                                                            <span class="user-info">
                                                                                                                                                                                                            <span class="icon"><i class="icon-instagram"></i></span>
                                                                                                                                                                                                            <span class="user-name">@Histudy</span>
                                                                                                                                                                                                            </span>
                                                                                                                                                                                                        </a>
                                                                                                                                                                                                    </div>
                                                                                                                                                                                                </div>
                                                                                                                                                                                            </div>
                                                                                                                                                                                        </div> -->
@stop
