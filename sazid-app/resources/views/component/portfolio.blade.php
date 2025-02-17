<!-- Portfolio page -->
<div class="vg-page page-portfolio" id="portfolio">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="badge badge-subhead">Portfolio</div>
      </div>
      <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
      <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
        <button class="btn btn-theme-outline selected" data-filter="*">All</button>
        <button class="btn btn-theme-outline" data-filter=".apps">Apps</button>
        <button class="btn btn-theme-outline" data-filter=".template">Template</button>
        <button class="btn btn-theme-outline" data-filter=".ios">IOS</button>
        <button class="btn btn-theme-outline" data-filter=".ui-ux">UI/UX</button>
        <button class="btn btn-theme-outline" data-filter=".graphic">Graphic</button>
        <button class="btn btn-theme-outline" data-filter=".wireframes">Wireframes</button>
      </div>

      <div class="gridder my-3">
        <div class="grid-item apps wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-1.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
            <img src="{{asset('img/work/work-1.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Mobile Travel App</h5>
              <p>Travel, Discovery</p>
            </div>
          </div>
        </div>
        <div class="grid-item template wireframes wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-2.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Music App</h5> <p>Musics</p>">
            <img src="{{asset('img/work/work-2.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Music App</h5>
              <p>Musics</p>
            </div>
          </div>
        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-3.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Gaming Dashboard</h5> <p>Games, Streaming</p>">
            <img src="{{asset('img/work/work-3.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Gaming Dashboard</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-4.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Drugs Delivery App</h5> <p>Health, Drugs</p>">
            <img src="{{asset('img/work/work-4.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Drugs Delivery App</h5>
              <p>Health, Drugs</p>
            </div>
          </div>

        </div>
        <div class="grid-item apps ios wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-5.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Musics Discover</h5> <p>Musics, Dashboard</p>">
            <img src="{{asset('img/work/work-5.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Musics Discover</h5>
              <p>Musics, Dashboard </p>
            </div>
          </div>
        </div>
        <div class="grid-item graphic ui-ux wireframes wow zoomIn">
          <div class="img-place" data-src="{{asset('img/work/work-6.jpg')}}" data-fancybox
            data-caption="<h5 class='fg-theme'>Game Streaming</h5> <p>Games, Streaming</p>">
            <img src="{{asset('img/work/work-6.jpg')}}" alt="">
            <div class="img-caption">
              <h5 class="fg-theme">Game Streaming</h5>
              <p>Games, Streaming</p>
            </div>
          </div>
        </div>
      </div> <!-- End gridder -->
      <div class="text-center wow fadeInUp">
        <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
      </div>
    </div>
  </div> <!-- End Portfolio page -->