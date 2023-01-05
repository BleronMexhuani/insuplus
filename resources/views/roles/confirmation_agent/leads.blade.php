@extends('layouts.app')
@section('content')
    <div class="">
        <div class="mt-3 py-4 ">
            <div class="">
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <svg width="52" height="53" viewBox="0 0 52 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.5" width="52" height="52" rx="16" fill="#00727A" fill-opacity="0.1"></rect>
                        <path d="M21.668 15.1667V13.1667C21.668 12.6201 21.2146 12.1667 20.668 12.1667C20.1213 12.1667 19.668 12.6201 19.668 13.1667V15.2467C20.0013 15.2067 20.308 15.1667 20.668 15.1667H21.668Z" fill="#00727A"></path>
                        <path d="M32.332 15.2467V13.1667C32.332 12.6201 31.8787 12.1667 31.332 12.1667C30.7854 12.1667 30.332 12.6201 30.332 13.1667V15.1667H31.332C31.692 15.1667 31.9987 15.2067 32.332 15.2467Z" fill="#00727A"></path>
                        <path d="M32.3333 15.2467V17.1667C32.3333 17.7134 31.88 18.1667 31.3333 18.1667C30.7867 18.1667 30.3333 17.7134 30.3333 17.1667V15.1667H21.6667V17.1667C21.6667 17.7134 21.2133 18.1667 20.6667 18.1667C20.12 18.1667 19.6667 17.7134 19.6667 17.1667V15.2467C15.7333 15.6067 14 18.1401 14 21.8334V33.1667C14 37.1667 16 39.8334 20.6667 39.8334H31.3333C36 39.8334 38 37.1667 38 33.1667V21.8334C38 18.1401 36.2667 15.6067 32.3333 15.2467ZM26 32.8334H20.6667C20.12 32.8334 19.6667 32.3801 19.6667 31.8334C19.6667 31.2867 20.12 30.8334 20.6667 30.8334H26C26.5467 30.8334 27 31.2867 27 31.8334C27 32.3801 26.5467 32.8334 26 32.8334ZM31.3333 26.1667H20.6667C20.12 26.1667 19.6667 25.7134 19.6667 25.1667C19.6667 24.6201 20.12 24.1667 20.6667 24.1667H31.3333C31.88 24.1667 32.3333 24.6201 32.3333 25.1667C32.3333 25.7134 31.88 26.1667 31.3333 26.1667Z" fill="#00727A"></path>
                    </svg>
                    <div class="d-flex flex-column">
                        <span class="boxdatum">28 Dec 2022</span>
                        <div>
                        <span class="boxterminiert">15 </span><span style="color: #00727A">Terminiert</span>

                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">Slide 2</div>
                  <div class="swiper-slide">Slide 3</div>
                  <div class="swiper-slide">Slide 4</div>
                  <div class="swiper-slide">Slide 5</div>
                  <div class="swiper-slide">Slide 6</div>
                  <div class="swiper-slide">Slide 7</div>
                  <div class="swiper-slide">Slide 8</div>
                  <div class="swiper-slide">Slide 9</div>
                </div>
              </div>
            </div>
            <div class="tableform mt-5">
                <div style="overflow-x:auto; overflow-y: hidden">
                    <table class="">
                        <thead style="background-color: #F7F7F7;">
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Rückmeldung Status</th>
                                <th scope="col"> Status</th>
                                <th scope="col">Agent</th>
                                <th scope="col">Aktionen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $item)
                                <tr class="text-center">
                                    <th scope="row">1</th>
                                    <td>kjlasdkljflkajsdf</td>
                                    <td>{{ $item->vorname }}</td>
                                    <td>{{ $item->feedback_status }}</td>
                                    <td>{{ $item->getAssignedAgent->name }}</td>
                                    <td><a class="btn btnedit" href="{{ route('lead_info_ca', ['id' => $item->id]) }}"><i
                                                class="fa-regular fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 4.1,
          spaceBetween: 30,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>

@endsection
