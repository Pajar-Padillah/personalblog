@extends('home/layout/main')
@section('konten')
<section class="module bg-dark-60 about-page-header" data-background="assets/images/about_bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">About</h2>
          <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="module">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h5 class="font-alt">We’re a digital creative agency</h5><br/>
          <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
          <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
        </div>
        <div class="col-sm-6">
          <h6 class="font-alt"><span class="icon-tools-2"></span> Development
          </h6>
          <div class="progress">
            <div class="progress-bar pb-dark" aria-valuenow="60" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
          </div>
          <h6 class="font-alt"><span class="icon-strategy"></span> Branding
          </h6>
          <div class="progress">
            <div class="progress-bar pb-dark" aria-valuenow="80" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
          </div>
          <h6 class="font-alt"><span class="icon-target"></span> Marketing
          </h6>
          <div class="progress">
            <div class="progress-bar pb-dark" aria-valuenow="50" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
          </div>
          <h6 class="font-alt"><span class="icon-camera"></span> Photography
          </h6>
          <div class="progress">
            <div class="progress-bar pb-dark" aria-valuenow="90" role="progressbar" aria-valuemin="0" aria-valuemax="100"><span class="font-alt"></span></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr class="divider-w">
  <section class="module" id="team">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h2 class="module-title font-alt">Meet Our Team</h2>
          <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
        </div>
      </div>
      <div class="row">
        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" onclick="wow fadeInUp">
          <div class="team-item">
            <div class="team-image"><img src="assets/images/team-1.jpg" alt="Member Photo"/>
              <div class="team-detail">
                <h5 class="font-alt">Hi all</h5>
                <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
              </div>
            </div>
            <div class="team-descr font-alt">
              <div class="team-name">Jim Stone</div>
              <div class="team-role">Art Director</div>
            </div>
          </div>
        </div>
        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" onclick="wow fadeInUp">
          <div class="team-item">
            <div class="team-image"><img src="assets/images/team-2.jpg" alt="Member Photo"/>
              <div class="team-detail">
                <h5 class="font-alt">Good day</h5>
                <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
              </div>
            </div>
            <div class="team-descr font-alt">
              <div class="team-name">Andy River</div>
              <div class="team-role">Creative director</div>
            </div>
          </div>
        </div>
        <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-4" onclick="wow fadeInUp">
          <div class="team-item">
            <div class="team-image"><img src="assets/images/team-3.jpg" alt="Member Photo"/>
              <div class="team-detail">
                <h5 class="font-alt">Hello</h5>
                <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
              </div>
            </div>
            <div class="team-descr font-alt">
              <div class="team-name">Adele Snow</div>
              <div class="team-role">Account manager</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection