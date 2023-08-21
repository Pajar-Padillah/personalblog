@extends('home/layout/main')
@section('konten')
    <section class="module bg-dark-60 blog-page-header" data-background="front/images/blog_bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">{{ $title }}</h2>
            <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
          </div>
        </div>    
      </div>
    </section>
    <div class="main">
      <section class="module">
        <div class="container">
        <div class="row">
          <div class="col-lg-8">
            @if ($blogs->count())
            <div class="row multi-columns-row post-columns">
              @foreach ($blogs as $blog)
              <div class="col-md-6 col-lg-6">
                <div class="post">
                  @if ($blog->image)
                  <div class="post-thumbnail"><a href="/blog/{{ $blog->slug }}"><img src="{{ url('uploud/blog').'/'.$blog->image }}" alt="Blog-post Thumbnail"/></a></div>
                  @else
                  <div class="post-thumbnail"><a href="/blog/{{ $blog->slug }}"><img src="/img/avatars/pict.jpg" alt="Blog-post Thumbnail"/></a></div>
                  @endif 
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
                    <div class="post-meta">By&nbsp;<a href="/blog?author={{ $blog->author->username }}">{{ $blog->author->name }}</a>&nbsp;| {{ $blog->created_at->diffForHumans() }} | <a href="/blog?category={{ $blog->category->slug  }}">{{ $blog->category->name  }}</a>
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>{{ $blog->excerpt }}</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="/blog/{{ $blog->slug }}">Read more</a></div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="pagination font-alt">
            {{ $blogs->links() }}
            </div>
            @else
              <h3 class="text-center text-danger">No blog found!</h3>
            @endif
          </div>
          <div class="col-sm-4 col-md-3 col-md-offset-1 sidebar">
            <div class="widget">
              <form role="form" action="/blog">
                <div class="search-box">
                  @if (request('category'))
                  <input type="hidden" name="category" value="{{ request('category') }}">
                  @endif
                  @if (request('author'))
                  <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif
                  <input value="{{ request('search') }}" name="search" class="form-control" type="text" placeholder="Search..."/>
                  <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>    
            <div class="widget">
              <h5 class="widget-title font-alt">Blog Categories</h5>
              <ul class="icon-list">
                @foreach ($categories as $category)
                <li><a href="/blog?category={{ $category->slug }}#">{{ $category->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
@include('home/layout/footer')
@endsection