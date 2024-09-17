<x-layout>
    <x-slot:title>
        Uncal | Resources & Events
    </x-slot>

    <section class="page-section">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-10 text-center">
                    <div class="row d-flex justify-content-center" style="margin-top: 1rem;margin-bottom: 5rem;">
                        <div class="col-7 text-start py-5 d-flex align-items-center">
                            <ul style="list-style: none;padding-left: 0;">
                                <li>
                                    <div class="section-heading text-uppercase">Discover All
                                        Comprehensive<br>Information</div>
                                </li>
                                <br>
                                <li>Let us guide you on how UNCAL DT can be your ultimate problem-solving partner.
                                    Through UNCAL DT's offerings, our diverse product lineup is designed to exceed your
                                    expectations, ensuring effective solutions.</li>
                                <br>
                                <li><b>Allow us to assist you!</b></li>
                            </ul>
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center"><img
                                src="{{ asset('Assets/Website/media/R&E/4969213 1.svg') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" id="articles">
        <div class="row d-flex justify-content-center">
            <div class="col-10 text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 text-start">
                        <p id="popsb" style="font-size: 35px;">Articles</p>
                    </div>
                    <div class="col-10">
                        <div class="containers">
                            <div class="card-contents">
                                @foreach ($posts as $post)
                                    <div class="cards">
                                        <div class="card-infos">
                                            <h3 class="text-start">{{ $post->title }}</h3>
                                            <p class="text-start">{!! Str::limit($post->description, 100, '...') !!}</p>
                                            <a href="{{ route('post.show', $post->id) }}" target="_blank">Read More <i
                                                    class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button onclick="location.href='/resource/articles'"
                                    class="btn btn-primary btn-lg rounded-pill" type="button"
                                    style="text-transform: capitalize;">More Articles</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-color: #E6EAEE;" id="whitepapers">
        <section class="page-section">
            <div class="container">
                <h2 class="text-start mb-5">Whitepapers</h2>
                <div class="row d-flex justify-content-center">
                    {{-- @foreach ($whiteps as $whitep)
                        <div class="cards">
                            <div class="card-infos">
                                <h3 class="text-start">{{ $post->title }}</h3>
                                <p class="text-start">{!! Str::limit($post->description, 100, '...') !!}</p>
                                <a href="{{ route('post.show', $post->id) }}" target="_blank">Read More <i
                                        class="bi bi-arrow-right-circle-fill"></i></a>
                            </div>
                        </div>
                    @endforeach --}}
                    @foreach ($whiteps as $whitep)
                        <div class="col-lg-3 d-flex align-items-center mx-3" style="height: 450px;" id="rounded"
                            data-aos="fade-up" data-aos-delay="200">
                            <ul style="list-style: none; padding-left: 1rem;">
                                <li style="font-size: 21px;height: 100px;margin-top: 1rem;" id="popsb">
                                    {{ $whitep->title }}</li>
                                <li>
                                    <p style="height: 230px;margin-top: 1rem;" id="popr">
                                        {!! $whitep->description !!}
                                    </p>
                                </li>
                                <li class="d-flex justify-content-center">
                                    <button type="button"
                                        onclick="location.href='{{ route('post.show', $whitep->id) }}'"
                                        class="btn btn-lg rounded-pill"
                                        style="background-color: #DC9750; color: white;">
                                        Read More <i class="bi bi-chevron-right"></i>
                                    </button>
                                </li>

                            </ul>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 d-flex align-items-center mx-3" style="height: 450px;" id="rounded"
                        data-aos="fade-up" data-aos-delay="400">
                        <ul style="list-style: none; padding-left: 1rem;">
                            <li style="font-size: 19px;height: 100px;margin-top: 1rem;" id="popsb">UMC accelerate
                                and streamline RDN<br>reconciliation
                                activities between KSEI and RDN Administrator Bank</li>
                            <li>
                                <p style="height: 230px;margin-top: 1rem;" id="popr">
                                    The implementation of (Automatic Reconciliation RDN) is expected to increase the
                                    accuracy of customer fund account information (RDN) which has been seen by investors
                                    through the Securities Ownership Reference Application (AKSes)
                                </p>
                            </li>
                            <li class="d-flex justify-content-center"><button type="button"
                                    onclick="location.href='Whitepapers/WP2.html'" class="btn btn-lg rounded-pill"
                                    style="background-color: #DC9750;color: white;">Read More <i
                                        class="bi bi-chevron-right"></i></button></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 d-flex align-items-center mx-3" style="height: 450px;" id="rounded"
                        data-aos="fade-up" data-aos-delay="600">
                        <ul style="list-style: none; padding-left: 1rem;">
                            <li style="font-size: 21px;height: 100px;margin-top: 1rem;" id="popsb">Why use an
                                Enterprise Service Bus?</li>
                            <li>
                                <p style="height: 230px;margin-top: 1rem;" id="popr">
                                    It’s an abbreviation for Enterprise Service Bus and it’s the process of integrating
                                    various applications together over a bus-like infrastructure
                                </p>
                            </li>
                            <li class="d-flex justify-content-center"><button type="button"
                                    onclick="location.href='Whitepapers/WP3.html'" class="btn btn-lg rounded-pill"
                                    style="background-color: #DC9750;color: white;">Read More <i
                                        class="bi bi-chevron-right"></i></button></li>
                        </ul>
                    </div> --}}
                    <div class="col-12 mt-3 d-flex justify-content-end">
                        <button onclick="location.href='/resource/whitepapers'" class="btn btn-lg rounded-pill"
                            type="button"
                            style="text-transform: capitalize;background-color: #DC9750;color: white;">More
                            Articles</button>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container-fluid" id="webinars">
        <div class="row d-flex justify-content-center">
            <div class="col-10 text-center">
                <div class="row d-flex justify-content-center" style="margin-top: 5rem;margin-bottom: 5rem;">
                    <div class="col-12 text-start">
                        <p id="popsb" style="font-size: 35px;">Webinars</p>
                    </div>
                </div>
                <swiper-container class="mySwiper"
                    style="--swiper-navigation-size: 25px; --swiper-navigation-sides-offset: 10px; --swiper-pagination-color: var(--swiper-theme-color)"
                    pagination="true" pagination-clickable="true" navigation="false" space-between="20" speed="1000"
                    slides-per-view="2" slides-per-group="1" autoplay-delay="4000"
                    autoplay-disable-on-interaction="false" loop="true">
                    <swiper-slide>
                        <div class="d-flex text-center mb-5 align-items-center" id="corners3">
                            <ul style="padding-left: 0;list-style: none;">
                                <li><img src="{{ asset('Assets/Website/media/R&E/Webinar/IMG-20200813-WA0007 1.png') }}"
                                        alt=""></li>
                                <li style="font-size: 21px;" id="popsb">WEBINAR Making INDONESIA 4.0 : Independent
                                    in
                                    Information Technology</li>
                                <li>
                                    <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : August
                                        24,2020
                                        14:00 - 15:30</p>
                                </li>
                                <li>
                                    <p>On this webinar, we talked about System Integration as one of key factor to your
                                        digital transformation in Making Indonesia 4.0 and and get new perspective on
                                        how you can accelerate your business process.</p>
                                </li>
                                <li><a href="https://youtu.be/NNRpthsHj4E?si=Uybw-kHBK4ItH7sk" target="_blank">Watch
                                        Now
                                        <i class="bi bi-arrow-right-circle-fill"></i></a></li>
                            </ul>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="d-flex text-center align-items-center" id="corners3">
                            <ul style="padding-left: 0;list-style: none;">
                                <li><img src="{{ asset('Assets/Website/media/R&E/Webinar/Making Indonesia 4 1.png') }}"
                                        alt=""></li>
                                <li style="font-size: 21px;" id="popsb">WEBINAR Making INDONESIA 4.0 : INTEGRATED
                                    LOGISTIC IN INDUSTRY 4.0</li>
                                <li>
                                    <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : September
                                        8th,
                                        2021 14:00 - 15:30</p>
                                </li>
                                <li>
                                    <p>On this webinar, we talked about how integrated logistic in Industry 4.0 and how
                                        it can support businesses.</p>
                                </li>
                                <li><a href="https://youtu.be/709tQYhdBjE?si=3I9iJMAUsiRKlW02" target="_blank">Watch
                                        Now
                                        <i class="bi bi-arrow-right-circle-fill"></i></a></li>
                            </ul>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="d-flex text-center align-items-center" id="corners3">
                            <ul style="padding-left: 0;list-style: none;">
                                <li><img src="{{ asset('Assets/Website/media/R&E/Webinar/WhatsApp Image 2021-12-06 at 6.11 1.png') }}"
                                        alt="">
                                </li>
                                <li style="font-size: 21px;" id="popsb">PARTNER WEBINAR: Integration platform for
                                    your
                                    digital transformation for indonesia 4.0</li>
                                <li>
                                    <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : December
                                        9th,
                                        2021 14:00 - end</p>
                                </li>
                                <li>
                                    <p>In this webinar, we talked about how ESB can help companies integrate their
                                        systems by offering ease of use to develop companies in the face of digital
                                        transformation.</p>
                                </li>
                                <li><a href="https://www.linkedin.com/posts/uncal-digital-technology_business-technology-digital-activity-6874240285971410944-t86g?utm_source=share&utm_medium=member_desktop"
                                        target="_blank">Watch Now <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="d-flex text-center align-items-center" id="corners3">
                            <ul style="padding-left: 0;list-style: none;">
                                <li><img src="{{ asset('Assets/Website/media/R&E/Webinar/169189289_591775761755416_4847455773890772819_n 1.png') }}"
                                        alt=""></li>
                                <li style="font-size: 21px;" id="popsb">Hannover Messe 2021 "Technological
                                    Advances For
                                    Industrial Transformation 4.0" Pre-conference</li>
                                <li>
                                    <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : April
                                        15th, 2021
                                        14:00 - end</p>
                                </li>
                                <li>
                                    <p>On livestream held by Hannover Messe, our CEO had the opportunity to share about
                                        the data process and how to take advantage of its presence in improving the data
                                        transfer process.</p>
                                </li>
                                <li><a href="https://www.youtube.com/live/_Jz2ExzccLI?si=EoymTYx_aTyph0EO"
                                        target="_blank">Watch Now <i class="bi bi-arrow-right-circle-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>
        </div>
    </div>

    <section class="page-section">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-10 text-center">
                    <div class="row d-flex justify-content-center" style="margin-top: 5rem;margin-bottom: 5rem;">
                        <div class="col-12 text-start" id="events">
                            <p id="popsb" style="font-size: 35px;">Exhibition Events</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container text-center">
        <swiper-container class="mySwiper"
            style="--swiper-navigation-size: 25px; --swiper-navigation-sides-offset: 10px; --swiper-pagination-color: var(--swiper-theme-color)"
            pagination="true" pagination-clickable="true" navigation="false" space-between="20" speed="1000"
            slides-per-view="1" slides-per-group="1" autoplay-delay="4500" autoplay-disable-on-interaction="false"
            loop="true" centered-slides="true">
            <swiper-slide>
                <div class="col-12 mb-5" id="corners4">
                    <ul style="padding-left: 0;list-style: none;margin-top: 5rem;">
                        <li><img src="{{ asset('Assets/Website/media/R&E/Event/UNCAL HANNOVER MESSE 4 1.png') }}"
                                alt=""></li>
                        <li style="font-size: 21px;" id="popsb">Co-Exhibitor in Hannover Messe 2021</li>
                        <li>
                            <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : April 12 -
                                16, 2021</p>
                        </li>
                        <li>
                            <p>As one of the co-exhibitor in Hannover Messe 2021, we had a chance to present
                                our products (UNCAL ESB & UNCAL BI).</p>
                        </li>
                        <li><a href="Events/Event1.html" target="_blank">Read More <i
                                    class="bi bi-arrow-right-circle-fill"></i></a></li>
                    </ul>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="col-12 d-flex text-center align-items-center" id="corners4">
                    <ul style="padding-left: 0;list-style: none;">
                        <li><img src="{{ asset('Assets/Website/media/R&E/Event/iyp25 1.png') }}" alt=""></li>
                        <li style="font-size: 21px;" id="popsb">Co-Exhibitor in Industrial Transformation
                            Asia Pacific 2021</li>
                        <li>
                            <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : November
                                22-24, 2021</p>
                        </li>
                        <li>
                            <p>As one of the Indonesia representatives and Co-Exhibitor in ITAP 2021, we had
                                a chance to present our products (UNCAL ESB & UNCAL BI). This event has been
                                held online and hybrid in Singapore.</p>
                        </li>
                        <li><a href="Events/Event2.html" target="_blank">Read More <i
                                    class="bi bi-arrow-right-circle-fill"></i></a></li>
                    </ul>
                </div>
            </swiper-slide>
            <swiper-slide>
                <div class="col-12 d-flex text-center align-items-center" id="corners4">
                    <ul style="padding-left: 0;list-style: none;">
                        <li><img src="{{ asset('Assets/Website/media/R&E/Event/IMG_1833 1.png') }}" alt="">
                        </li>
                        <li style="font-size: 21px;" id="popsb">Exhibitor in Digital Transformation
                            Indonesia Conference & Exhibition 2023</li>
                        <li>
                            <p style="font-size: 16px;margin-top: 1rem;" id="popm">Event date : July, 26-27
                                2023</p>
                        </li>
                        <li>
                            <p>As one of the Exhibitor in DTI-CX 2023, we had a chance to present our
                                products UNCAL ESB. This event has been held for two days in JIEXPO
                                Convention Hall, Jakarta.</p>
                        </li>
                        <li><a href="Events/Event3.html" target="_blank">Read More <i
                                    class="bi bi-arrow-right-circle-fill"></i></a></li>
                    </ul>
                </div>
            </swiper-slide>
        </swiper-container>
    </div>
</x-layout>
