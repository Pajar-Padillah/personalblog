@extends('home/layout/main')
@section('konten')
<section class="home-section home-parallax home-fade home-full-height" id="home">
    <div class="hero-slider">
      <ul class="slides">
        <li class="bg-dark-30 bg-dark" style="background-image:url(front/images/section-8.jpg);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
              <div class="font-alt mb-40 titan-title-size-4">Personal Blog</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
            </div>
          </div>
        </li>
        <li class="bg-dark-30 bg-dark" style="background-image:url(front/images/section-9.jpg);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-2">Titan is creative multipurpose html template for<br/>web developers who change the world
              </div><a class="btn btn-border-w btn-round" href="about">Learn More</a>
            </div>
          </div>
        </li>
        <li class="bg-dark-30 bg-dark" style="background-image:url(front/images/section-10.jpg);">
          <div class="titan-caption">
            <div class="caption-content">
              <div class="font-alt mb-30 titan-title-size-1">We build brands that build business</div>
              <div class="font-alt mb-40 titan-title-size-3">We are Amazing</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
<div class="main">   
<section class="module" id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2 class="module-title font-alt">Welcome to our personal website</h2>
          <div class="module-subtitle font-serif large-text">We’re an award winning London based digital agency, lovingly curating pixels for maximum impact. We don’t have a style — we have standards.</div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2 col-sm-offset-5">
          <div class="large-text align-center"><a class="section-scroll" href="#team"><i class="fa fa-angle-down"></i></a></div>
        </div>
      </div>
    </div>
  </section>
  <hr class="divider-w">
  <section class="module" id="team">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Us</h2>
          <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
        </div>
      </div>
      <div class="row">
        <div class="mb-sm-20 wow fadeInUp col-lg-6" onclick="wow fadeInUp">
          <div class="team-item">
            <div class="team-image"><img src="/img/avatars/user1.png" alt="Member Photo"/>
              <div class="team-detail">
                <h5 class="font-alt">Hi all</h5>
                <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-tiktok"></i></a><a href="#"></div>
              </div>
            </div>
            <div class="team-descr font-alt">
              <div class="team-name">Pajar Padillah</div>
              {{-- <div class="team-role">Art Director</div> --}}
            </div>
          </div>
        </div>
        <div class="mb-sm-20 wow fadeInUp col-lg-6" onclick="wow fadeInUp">
          <div class="team-item">
            <div class="team-image"><img src="/img/avatars/user2.png" alt="Member Photo"/>
              <div class="team-detail">
                <h5 class="font-alt">Good day</h5>
                <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-tiktok"></i></a><a href="#"></div>
              </div>
            </div>
            <div class="team-descr font-alt">
              <div class="team-name">Cindy Yuniasaki</div>
              {{-- <div class="team-role">Creative director</div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @if ($gallery->count())
  <section class="module sliding-portfolio">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h2 class="module-title font-alt">Our Latest Gallery</h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="owl-carousel text-center" data-items="4" data-pagination="false" data-navigation="false">
          @foreach ($gallery as $galeri)
          <div class="owl-item">
            <div class="col-sm-12">
              <div class="work-item"><a href="#">
                  <div class="work-image"><img src="{{ url('uploud/gallery').'/'.$galeri->image }}" alt="Portfolio Item"/></div>
                  <div class="work-caption font-alt">
                    <h3 class="work-title">{{ $galeri->title }}</h3>
                  </div></a>
              </div>
            </div>
          </div>    
          @endforeach
        </div>
        <div class="col-sm-12">
          <div class="text-center"><a class="btn btn-border-d btn-circle mt-50" href="/gallery">View All Gallery</a></div>
        </div>
      </div>
    </div>
  </section>
  @endif
  @if ($blogs->count())
  <section class="module" id="news">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Latest blog posts</h2>
          <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
        </div>
      </div>
      <div class="row multi-columns-row post-columns">
        @foreach ($blogs as $blog)
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="post mb-20">
            <div class="post-thumbnail"><a href="/blog/{{ $blog->slug }}"><img src="{{ url('uploud/blog').'/'.$blog->image }}" alt="Blog-post Thumbnail"/></a></div>
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
      <div class="col-sm-12">
        <div class="text-center"><a class="btn btn-border-d btn-circle mt-50" href="/blog">View All Blog</a></div>
      </div>
    </div>
  </section>
  @endif
    {{-- <section class="module" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Get in touch</h2>
          <div class="module-subtitle font-serif"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <form id="contactForm" role="form" method="post" action="php/contact.php">
            <div class="form-group">
              <label class="sr-only" for="name">Name</label>
              <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <label class="sr-only" for="email">Email</label>
              <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
            <div class="text-center">
              <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
            </div>
          </form>
          <div class="ajax-response font-alt" id="contactFormResponse"></div>
        </div>
      </div>
    </div>
  </section> --}}
</div>
@include('home/layout/footer')
@endsection