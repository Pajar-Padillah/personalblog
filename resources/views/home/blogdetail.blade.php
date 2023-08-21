@extends('home/layout/main')
@section('konten')
<div class="main">
    {{-- <h1 class="text-center mt-4">Blog Detail</h1>   --}}
    <section class="module-small">  
        <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="post">
              <div class="post-thumbnail"><img src="{{ url('uploud/blog').'/'. $blog->image }}" alt="Blog Featured Image"/></div>
              <div class="post-header font-alt">
                <h1 class="post-title">{{ $blog->title }}</h1>
                <div class="post-meta">By&nbsp;<a href="/blog?author={{ $blog->author->username }}">{{ $blog->author->name }}</a>&nbsp;| {{ $blog->created_at->diffForHumans() }} | <a href="/blog?category={{ $blog->category->slug  }}">{{ $blog->category->name  }}</a>
                </div>
              </div>
              <div class="post-entry">
                <article>
                    {!! $blog->body !!}
                </article>
              </div>
              <div class="post-more"><a class="more-link" href="/blog">Back</a></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-md-offset-1 sidebar">
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
@endsection