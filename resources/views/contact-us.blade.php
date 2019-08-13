@extends ('layout.app')

@section('title')
    Home page
@stop

@section ('content')

    <section class="full-screen video-bg">
        <div class="fullscreen-bg video_wrap">
            <video loop muted autoplay class="fullscreen-bg__video video_bg" src="media/AOS website background.webm">
            </video>
        </div>
        <div class="container h-100">
            <div class="row h-100 main-content-text">
                <div class="col-md-7">
                    <h1 class="futura font-54">
                        Kontakta oss
                    </h1>
                    <p class="futura font-20 medium mt-1">
                        Har du frågor kring vårt innehåll, förfrågningar eller andra ärenden? Använd gärna formuläret nedan så återkommer vi.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="contact_us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                  <form action="{{action('Controller@sendMail')}}" method="post">
                      {!! csrf_field() !!}
                      <div class="row align-items-center">
                          <div class="col input-group-lg">
                              <label for="name">Namn<t style="color: red">*</t></label>
                              <input name="name" id="name" type="text" class="form-control" required>
                          </div>
                      </div>
                      <div class="row align-items-center mt-4">
                          <div class="col input-group-lg">
                              <label for="epost">E-post<t style="color: red">*</t></label>
                              <input name="email" id="epost" type="email" class="form-control"  required>
                          </div>
                      </div>

                      <div class="row align-items-center mt-4">
                          <div class="col input-group-lg">
                              <label for="telefon">Telefon</label>
                              <input name="telefon"  id="telefon" type="text" class="form-control"  >
                          </div>
                      </div>
                      <div class="row align-items-center mt-4">
                          <div class="col input-group-lg">
                              <label for="meddelande*">Meddelande<t style="color: red">*</t></label>
                              <textarea  name="meddelande"  id="meddelande" class="form-control" aria-label="With textarea" required></textarea>
                          </div>
                      </div>


                      <div class="row justify-content-start mt-4">
                          <div class="col">
                              <div class="button-block see-all">
                                  <button type="submit">
                                      <span class="button-text">OSkicka meddelande </span>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </section>

@endsection