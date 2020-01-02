@extends('layouts.welcome-nav') 

@section('content')
  <div >
    <div class="m-header"> 
      <div class="row">
      <div class="col-md-6 col-lg-6" style="padding:0px"> 
        <div class="brand-div"> 
        
        </div>
      </div>
      <div class="col-md-6 col-lg-6" style="padding:0px"> 
        <div class="tree-group"> 
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-1" />
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-6" />
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-2" />
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-3" />
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-4" />
          <img src="{{asset('default-imgs/Tree1.png')}}"  class="tree tree-5" />
        </div>
      </div>
    </div>
    </div>
    <div class="sponsorship">
      <div class="row">
          <div class="col-md-4">
            <img src={{asset('default-imgs/dentons.png')}} class="dentons-logo"/>
          </div>
          <div class="col-md-4">
            <h3 style="margin-top:60px; color:#8d969e;">ANOTHER COMPANY </h3>
          </div>
          <div class="col-md-4">
            <h3 style="margin-top:60px; color:#8d969e;">ANOTHER COMPANY </h3>
          </div>
        </div>
    </div>
    <div class="about"> 
      <h1 style="text-align: center; color:#929090; margin-top:20px;">About 100KLegacyChallenge</h1>
      <p class="about-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem consequuntur excepturi possimus rem qui esse minus dolor, animi vel, soluta error, veniam tempora! Consectetur molestiae at, voluptates asperiores est doloremque?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolores soluta debitis optio ut qui sequi excepturi facere ipsum facilis distinctio repellat esse maiores aliquid amet voluptatibus cum, minus dolore.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas debitis quis aut omnis nemo quasi ut et, exercitationem error, cum numquam, similique illo distinctio amet hic totam soluta odit suscipit?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim consectetur vitae ipsam eum consequatur obcaecati ducimus facere porro amet quod. Unde voluptas cum officiis dolor aut dolore illo earum id.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet ad necessitatibus laudantium. Vitae perspiciatis et at facere explicabo ducimus inventore fuga, quia veniam quo dolore praesentium consequuntur numquam molestias corporis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat fuga eius dolorum debitis placeat at, modi aliquid minima maxime cum dolores vel magni, eaque, iure natus consectetur commodi. Provident, saepe.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate hic assumenda facere repellendus dolores quam culpa ullam ipsum reprehenderit cum ipsam numquam, architecto placeat, commodi necessitatibus libero iure quia illo?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis aliquid, alias consequatur, iure ea totam cupiditate earum consectetur ducimus velit, a iste quas ullam nisi. Sit quod molestiae distinctio quam!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolores soluta debitis optio ut qui sequi excepturi facere ipsum facilis distinctio repellat esse maiores aliquid amet voluptatibus cum, minus dolore.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas debitis quis aut omnis nemo quasi ut et, exercitationem error, cum numquam, similique illo distinctio amet hic totam soluta odit suscipit?
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim consectetur vitae ipsam eum consequatur obcaecati ducimus facere porro amet quod. Unde voluptas cum officiis dolor aut dolore illo earum id.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet ad necessitatibus laudantium. Vitae perspiciatis et at facere explicabo ducimus inventore fuga, quia veniam quo dolore praesentium consequuntur numquam molestias corporis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat fuga eius dolorum debitis placeat at, modi aliquid minima maxime cum dolores vel magni, eaque, iure natus consectetur commodi. Provident, saepe.
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate hic assumenda facere repellendus dolores quam culpa ullam ipsum reprehenderit cum ipsam numquam, architecto placeat, commodi necessitatibus libero iure quia illo?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis aliquid, alias consequatur, iure ea totam cupiditate earum consectetur ducimus velit, a iste quas ullam nisi. Sit quod molestiae distinctio quam!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dolores soluta debitis optio ut qui sequi excepturi facere ipsum facilis distinctio repellat esse maiores aliquid amet voluptatibus cum, minus dolore.
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas debitis quis aut omnis nemo quasi ut et, exercitationem error, cum numquam, similique illo distinctio amet hic totam soluta odit suscipit?

      </p>
    </div>
    <div class="banner-area">
      <div class="banner">
        <h1 class="banner-text">SCAN YOUR TREE HERE </h1>
      </div>
      <div class="scanner-container">
        <div class="col-md-6 col-lg-6 offset-md-3" style="padding-top:30px;">
            <div class="my-card z-depth-1"> 
              <center>
                <img src="{{asset('default-imgs/Qr-3.png')}}" class="dummy-code"/><br/>
                <button class="btn btn-danger btn-finish">Scan </button>
              </center>
            </div>
        </div>
      </div> 
    </div>
    {{--  ----------MAPS AREA --------------- --}}
    <div class="maps-area"> 
      <div class="banner">
        <h1 class="banner-text">FIND YOUR TREES ON THE MAP </h1>
      </div>
      <img src="{{asset('default-imgs/map1.jpeg')}}" />
    </div>

    {{-- ------FOOTER AREA -------- --}}
    <div class="footer"> 
      <div class="row"> 
          <div class="col-lg-6 col-md-6"> 
            <img src="{{asset('default-imgs/100k-footer.png')}}" style="display:inline-block;height:130px; margin-top:60px" />
          </div>
          <div class="col-md-6 col-g-6" style="padding-top:70px;"> 
            <center>
              <p style="color:#887d9f">Receive weekly updates from us!</p>
              <input style="margin:10px; border-radius:0px; padding:20px;"type="email" placeholder="email" name="email" class="form-control" /> 
              <button class="btn btn-default btn-finish subscribe-button zero-radius">Subscribe</button>
            <center>
          </div>
      </div>

    </div>
  </div>

@endsection