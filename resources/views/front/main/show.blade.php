<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('front.index')}}"><img src="{{ asset('assets/images/logo.svg') }}" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">

                    <li class="nav-item d-flex" >
                        <a class="nav-link" href="{{route('admin.home')}}">Blogs</a>
                        @auth()
                            <a class="nav-link" href="{{route('personal.home')}}">Personal Cabinet</a>
                        @endauth
                        @guest()
                        <a class="nav-link" href="{{route('personal.home')}}">Login/Register</a>
                            @endguest
                    </li>

                </ul>

            </div>
        </nav>
    </div>
</header>
<main class="blog-post">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up"
           data-aos-delay="200">{{$date->format('F')}} {{$date->day}} {{$date->year }} {{$date->format('H:i')}} {{$post->comment->count()}}
            comments </p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    {{$post->content}}
                </div>
            </div>

        </section>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                    <div class="row">
                        @foreach($relatedPosts as $relatedPost)
                            <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                <img src="{{asset('storage/' . $relatedPost->main_image )}}" alt="related post"
                                     class="post-thumbnail">
                                <p class="post-category">{{$relatedPost->category->title}}</p>
                                <a href="{{route('post.show',$relatedPost->id)}}"><h5
                                        class="post-title">{{$relatedPost->title}}</h5></a>
                            </div>
                        @endforeach
                    </div>
                </section>
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                    <form action="{{route('post.comment.store',$post->id)}}" method="post">
                        @csrf
@auth()
                        <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                                <label for="comment" class="sr-only">Comment</label>
                                <textarea name="message" id="comment" class="form-control" placeholder="Comment"
                                          rows="10">Comment</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Send Message" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
                @endauth
                <h1>Comments ({{$post->comment->count()}})</h1>
                <div class="card-comment my-3 pb-5">
                    @foreach($post->comment as $comments)
                        <div class="comment-text my-5">
<span class="username">
<h3>{{$comments->user->name}}</h3>
<span class="text-muted float-right">{{$comments->dateAsCarbon->diffForHumans()}}</span>
</span>{{$comments->message}}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>
<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"><img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios"
                                                     class="mr-2"> App Store
                </button>
                <button class="btn btn-success"><img src="{{ asset('assets/images/android@1x.svg') }}" alt="android"
                                                     class="mr-2"> Google Play
                </button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or
                service.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <a href="index.html" class="footer-brand-wrapper">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="edica logo">
                </a>
                <p class="contact-details">hello@edica.com</p>
                <p class="contact-details">+23 3000 000 00</p>
                <nav class="footer-social-links">
                    <a href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a href="#!"><i class="fab fa-twitter"></i></a>
                    <a href="#!"><i class="fab fa-behance"></i></a>
                    <a href="#!"><i class="fab fa-dribbble"></i></a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">Company</a>
                    <a href="#!" class="nav-link">Android App</a>
                    <a href="#!" class="nav-link">ios App</a>
                    <a href="#!" class="nav-link">Blog</a>
                    <a href="#!" class="nav-link">Partners</a>
                    <a href="#!" class="nav-link">Careers</a>
                </nav>
            </div>
            <div class="col-md-3">
                <nav class="footer-nav">
                    <a href="#!" class="nav-link">FAQ</a>
                    <a href="#!" class="nav-link">Reporting</a>
                    <a href="#!" class="nav-link">Block Storage</a>
                    <a href="#!" class="nav-link">Tools & Integrations</a>
                    <a href="#!" class="nav-link">API</a>
                    <a href="#!" class="nav-link">Pricing</a>
                </nav>
            </div>
            <div class="col-md-3">
                <div class="dropdown footer-country-dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i
                            class="fas fa-chevron-down ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                        </button>
                        <button class="dropdown-item" href="#">
                            <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-content">
            <nav class="nav footer-bottom-nav">
                <a href="#!">Privacy & Policy</a>
                <a href="#!">Terms</a>
                <a href="#!">Site Map</a>
            </nav>
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank"
                                             rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights
                reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    AOS.init({
        duration: 1000
    });
</script>
</html>
