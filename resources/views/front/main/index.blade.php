
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blogs</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                        <p class="blog-post-category">{{$post->category->title}}</p>
                        <div class="mb-2">
                            <form action="{{route('personal.like.store',$post->id)}}" method="post">
                                @csrf
                                <button type="submit " class="border-0 bg-transparent">
                                    @auth()
                                        <span>{{$post->liked_users_count}}</span>
                                        @if(auth()->user()->likedPosts->contains($post->id))
                                            <i class="fas fa-heart"></i>
                                        @else
                                            <i class="far fa-heart"></i>
                                        @endif
                                    @endauth
                                </button>
                            </form>
                        </div>
                        </div>
                        <a href="{{route('post.show',$post->id)}}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{$post->title}}</h6>
                        </a>

                    </div>
                @endforeach
                <div class="m-auto pb-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <h1>Random Post</h1>
                    <div class="row blog-post-row">
                        @foreach($randomPosts as $post)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="blog-post-category">{{$post->category->title}}</p>
                                <div class="mb-2">
                                    <form action="{{route('personal.like.store',$post->id)}}" method="post">
                                        @csrf
                                        <button type="submit " class="border-0 bg-transparent">
                                            @auth()
                                                <span>{{$post->liked_users_count}}</span>
                                                @if(auth()->user()->likedPosts->contains($post->id))
                                                    <i class="fas fa-heart"></i>
                                                @else
                                                    <i class="far fa-heart"></i>
                                                @endif
                                            @endauth
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{$post->title}}</h6>
                            </a>
                        </div>
                        @endforeach
                    </div>

                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">

                <div class="widget widget-post-list">
                    <h5 class="widget-title">Most popular post </h5>
                    <ul class="post-list">
                        @foreach($likedPosts as $post)
                        <li class="post">
                            <a href="{{route('post.show', $post->id)}}" class="post-permalink media">
                                <img src="{{ 'storage/' . $post->preview_image }}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">{{$post->title}}</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="mt-4">
                                        <form action="{{route('personal.like.store',$post->id)}}" method="post">
                                            @csrf
                                            <button type="submit " class="border-0 bg-transparent">
                                                @auth()
                                                    <span>{{$post->liked_users_count}}</span>
                                                    @if(auth()->user()->likedPosts->contains($post->id))
                                                        <i class="fas fa-heart"></i>
                                                    @else
                                                        <i class="far fa-heart"></i>
                                                    @endif
                                                @endauth
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="widget">
                    <h5 class="widget-title">Categories</h5>
                    <img src="{{ asset('assets/images/blog_widget_categories.jpg') }}" alt="categories"
                         class="w-100">
                </div>
            </div>
        </div>
    </div>

</main>

