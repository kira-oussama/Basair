@extends('app')
@section('title')
    بصائر
@endsection

@section('content')
    <!--contact form-->
    <section class="resume-section p-4 p-lg-5 text-center" id="contact">
        <div class="my-auto">
          <h2 class="mb-4">اتصل بالصفحة</h2>

          <ul class="fa-ul mb-4 ml-0">
            <li id="mail-address">
<!--               Replace with your email address -->
                <i class="fas fa-envelope-open mr-2 contact-icons"></i
                >youremail@mail.com</a
              >
            </li>
            <li>
              <i class="fas fa-mobile-alt mr-2 contact-icons"></i>+213 0 00 00 00 00
            </li>
            <li>
              <i class="fas fa-map-marker-alt mr-2 contact-icons"></i>قسنطينة, الجزائر
            </li>
          </ul>

          <form
            class="contact-form d-flex flex-column align-items-center"
            action="{{route('contactus')}}"
            method="POST"
          >
          @csrf
            <div class="form-group w-75">
              <input
                type="name"
                class="form-control"
                placeholder="الاسم الكامل"
                name="fullname"
                required
              />
            </div>
            <div class="form-group w-75">
              <input
                type="email"
                class="form-control"
                placeholder="الايميل"
                name="email"
                required
              />
            </div>

            <div class="form-group w-75">
              <textarea
                class="form-control"
                type="text"
                placeholder="الرسالة"
                rows="7"
                name="message"
                required
              ></textarea>
            </div>

            <button type="submit" class="btn btn-submit btn-info w-75">ارسال</button>
          </form>
        </div>
      </section>
@endsection