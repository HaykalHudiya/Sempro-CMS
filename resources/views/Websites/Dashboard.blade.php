<x-layout>
    <x-slot:title>
        Uncal Digital Technology
    </x-slot>

    <section class="page-section px-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6" data-aos="fade-up">
                    <div class="section-heading text-uppercase text-start">YOUR PARTNER IN DIGITAL<br>TRANSFORMATION
                    </div>
                    <p>UNCAL DT is focused on helping organizations in doing Digital Transformation. Organizations
                        everywhere, and across all industries and departments, are empowering their people with
                        multitude of different digital tools to pursue their goals.</p>
                    <button type="button" class="btn btn-outline-light btn-lg rounded-pill mt-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" style="color: #DC9750;border-color: #DC9750;">Watch here <i
                            class="bi bi-play-circle-fill"></i></button>
                </div>
                <div class="col-6 text-center">
                    <img src="{{ asset('Assets/Website/media/Dashboard/uncl 1.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="page-section px-5">
        <div class="container-fluid">
            <div class="row text-center">
                <h2> Learn more about how organizations like yours are using our platform<br>to drive their business
                    forward.</h2>
            </div>
            <div class="row">
                <div class="col-6 text-center">
                    <ul style="list-style: none;">
                        <li><img src="{{ asset('Assets/Website/media/Dashboard/Uncal ESB Logo.svg') }}" alt="">
                        </li>
                        <li><img src="{{ asset('Assets/Website/media/Dashboard/67.svg') }}" alt=""
                                data-aos="zoom-in"></li>
                        <li class="text-start">
                            <p>UNCAL ESB is a platform for a complete Integration system tosupport digital
                                transformation. The system can provide companyneeds to do communication with variety
                                system or application (software) and business partner.</p>
                        </li>
                        <br>
                        <li><a href="{{ route('ESB') }}">Learn More<i
                                    class="bi bi-arrow-right-circle-fill ms-3"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 text-center">
                    <ul style="list-style: none;">
                        <li><img src="{{ asset('Assets/Website/media/Dashboard/biedit 1.svg') }}" alt=""></li>
                        <li><img src="{{ asset('Assets/Website//media/Dashboard/66.svg') }}" alt=""
                                data-aos="zoom-in"></li>
                        <li class="text-start">
                            <p>UNCAL BI is a technology-driven process for analyzing data and presenting actionable
                                information to help executives, managers and other corporate end users make informed
                                business decisions.</p>
                        </li>
                        <br>
                        <li><a href="{ route('BI') }">Learn More<i class="bi bi-arrow-right-circle-fill ms-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section px-5" id="solutions">
        <div class="container-fluid">
            <h2 style="font-size: 45px;" class="text-center mb-5" id="popsb">Solutions</h2>
            <div class="row">
                <div class="col-6 d-flex justify-content-center"><img
                        src="{{ asset('Assets/Website/media/Dashboard/Group 4.svg') }}" alt=""></div>
                <div class="col-5 d-flex align-items-center">
                    <div class="faq-content">
                        <div class="faq-question" style="border-left: 10px solid #DC9750;" data-aos="fade-right"
                            data-aos-delay="200">
                            <input id="q1" type="checkbox" class="panel">
                            <!-- <div class="plus"><i class="bi bi-chevron-right"></i></div> -->
                            <label for="q1" class="panel-title">Improve what you do</label>
                            <div class="panel-content">Digitization lets you create digital versions of your products
                                and
                                services. This is a first step to transformation that helps build
                                competency and familiarity.</div>
                        </div>

                        <div class="faq-question mt-3" style="border-left: 10px solid #DC9750;" data-aos="fade-right"
                            data-aos-delay="400">
                            <input id="q2" type="checkbox" class="panel">
                            <!-- <div class="plus">+</div> -->
                            <label for="q2" class="panel-title">Optimize how you work</label>
                            <div class="panel-content">Digitalization lets you to automate your business processes to
                                create
                                efficiencies and to promote collaboration and communication across
                                the extended enterprise.
                            </div>
                        </div>

                        <div class="faq-question mt-3" style="border-left: 10px solid #DC9750;" data-aos="fade-right"
                            data-aos-delay="600">
                            <input id="q3" type="checkbox" class="panel">
                            <!-- <div class="plus">+</div> -->
                            <label for="q3" class="panel-title">Transform who you are</label>
                            <div class="panel-content">Platformation allows you to re-imagine your business and
                                digitally
                                transform yourself by creating platforms and networks that engage
                                consumers and suppliers to co-create new products, services and
                                insights.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section px-5" id="services">
        <div class="container-fluid">
            <div class="text-center">
                <h2 style="font-size: 45px;" id="popsb">Services</h2>
                <h3 style="font-size: 35px;">We do our best to give the best services for you</h3>
            </div>
            <swiper-container class="mySwiper"
                style="--swiper-navigation-size: 25px;  --swiper-navigation-sides-offset: 10px; --swiper-pagination-color: var(--swiper-theme-color);"
                pagination="true" pagination-clickable="true" navigation="false" space-between="10" speed="1000"
                slides-per-view="1" slides-per-group="1" centered-slides="true" autoplay-delay="4000"
                autoplay-disable-on-interaction="false" loop="true">
                <swiper-slide>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-5">
                            <h2>Consulting</h2>
                            <p>
                                We help companies use technology effectively to grow their businesses and solve
                                problems, advises clients on how to best use IT practices to achieve their business
                                objectives.
                            </p>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <img src="{{ asset('Assets/Website/media/Dashboard/undraw_add_tasks_re_s5yj 1.svg') }}"
                                alt="">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-5">
                            <h2>Technical Support</h2>
                            <p>
                                Customer satisfaction is our mission critical. UNCAL-DT Provide 24/7 hours technical
                                support of your business. Our services help you to achieve maximum services and
                                reliability for your UNCAL-DT solution.
                            </p>
                        </div>
                        <div class="col-3 d-flex justify-content-center">
                            <img style="max-width: 80%;max-height: 80%;"
                                src="{{ asset('Assets/Website/media/Dashboard/undraw_developer_activity_re_39tg 1.svg') }}"
                                alt="">
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-5">
                            <h2>Training</h2>
                            <p>
                                Our Training is specific to fulfill the skills necessary for performing information
                                technology jobs. Our Training includes courses related to the development,
                                implementation, support or management of computer-based information systems.
                            </p>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <img src="{{ asset('Assets/Website/media/Dashboard/image 7.svg') }}" alt="">
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
        </div>
    </section>

    <section class="page-section px-5">
        <div class="container-fluid text-center">
            <div>
                <h2>Trusted by businesses in all types of industries</h2>
            </div>
            <hr style="margin-left: 400px;margin-right: 400px;">
            <div class="row ">
                <div class="images mt-5 d-flex justify-content-center" data-aos="zoom-in">
                    <div class="col-10 text-center">
                        @if (count($contents) > 0)
                            @php $n = 3; @endphp
                            @foreach ($contents as $content)
                                @if ($content->type == 'business')
                                    @php $modal = 'myModal'.$n++; @endphp
                                    <a lass="modal-button" href="#{{ $modal }}">
                                        <img class="mx-3 modal-button" href="#{{ $modal }}"
                                            src="{{ asset('Assets\Website\media\Dashboard\industries') . '/' . $content->gallery->image }}"
                                            alt="">
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="text-center" style="margin-top: 100px;">
            <h2><b>Partners</b></h2>
        </div>
        <div class="row">
            <div class="images mt-3 d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="col-10 text-center">
                    @if (count($contents) > 0)
                        @php $n = 11; @endphp
                        @foreach ($contents as $content)
                            @if ($content->type == 'Partner')
                                @php $modal = 'myModal'.$n++; @endphp
                                <a lass="modal-button align-self-center" href="#{{ $modal }}">
                                    <img class="mx-2 modal-button" href="#{{ $modal }}"
                                        src="{{ asset('Assets\Website\media\Dashboard\partners') . '/' . $content->gallery->image }}"
                                        alt="" id="boxes">
                                </a>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    <section class="page-section px-5" id="contact">
        <div class="container-fluid">
            <div style="margin-bottom: 100px;">
                <h2 class="text-center" style="font-size: 40px;" data-aos="zoom-in" data-aos-delay="200">Let's Start
                    your Digital Tranformation Journey with Us</h2>
                <p class="text-center" id="reg" data-aos="zoom-in" data-aos-delay="400">For those who need
                    further information, please contact us via the contact provided and<br>let’s drive your business
                    moving forward</p>
                <div class="row mt-5">
                    <div class="col-3"></div>
                    <div class="col-3 d-flex flex-row-reverse">
                        <button type="button" onclick="location.href='tel:+62251-833-7342;'"
                            class="btn btn-outline-light btn-lg rounded-pill mt-2 text-end"
                            style="color: black;;border-color: #DC9750;"><i class="bi bi-telephone-fill"></i> +62 251
                            8337342</button>
                    </div>
                    <div class="col-3 d-flex flex-row">
                        <button type="button" onclick="location.href='mailto:contact@uncal-dt.com;'"
                            class="btn btn-outline-light btn-lg rounded-pill mt-2"
                            style="color: black; text-transform: lowercase;border-color: #DC9750;"><i
                                class="bi bi-envelope-fill"></i> contact(at)uncal-dt.com</button>
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid" style="background-color: #E6EAEE;height: 1000px;padding-top: 50px;" id="about">
        <section class="page-section">
            <div class="container">
                <h2 class="text-center" style="font-size: 40px;margin-bottom: 5rem;" id="popsb">ABOUT US</h2>
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <img src="{{ asset('Assets/Website/media/icon-uncal.png') }}" alt=""
                            style="max-width: 600px;">
                    </div>
                    <div class="col-6 text-dark">
                        <p>
                            UNCAL DIGITAL TECHNOLOGY (UNCAL DT) is an IT Company engaged in system provider that help
                            companies to Digital Transformation.
                        </p>
                        <p>
                            UNCAL DT offers software solutions and services that help to optimize your business
                            processes, optimize the interworking of your system environment, and ensure that the IT
                            infrastructure provides optimal support for your business processes.
                        </p>
                        <p>
                            UNCAL DT has what you looking for to make your system and business digitally transform.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="page-section px-5" id="contact">
        <div class="container-fluid">
            <div class="container">
                <h2 class="text-center">Become Partners</h2>
                <br>
                <form method="POST" action="{{ route('Partner.store') }}">
                    @csrf
                    <div class="row px-5" id="corners">
                        <div class="col-6 pt-3">
                            <label for="" id="reg">Contact Information</label>
                            <select class="form-select my-3" name="type" aria-label="Default select example">
                                <option disabled selected>Type of Partner</option>
                                <option value="Reseller">Reseller</option>
                                <option value="Consulting">Consulting</option>
                            </select>
                            <input class="form-control my-3" name="name" type="text" placeholder="First Name"
                                aria-label="">
                            <input class="form-control my-3" name="lastname" type="text" placeholder="Last Name"
                                aria-label="">
                            <input class="form-control mt-3" name="email" type="email" placeholder="Email"
                                aria-label="">
                        </div>
                        <div class="col-6 pt-3">
                            <label for="" id="reg">Company Information</label>
                            <input class="form-control my-3" name="company" type="text" placeholder="Company"
                                aria-label="">
                            <input class="form-control my-3" name="business" type="text"
                                placeholder="Business Focus" aria-label="">
                            <input class="form-control my-3" name="address" type="text" placeholder="Address"
                                aria-label="">
                            <input class="form-control mt-3" name="city" type="text" placeholder="City"
                                aria-label="">
                        </div>
                        <div class="col-6 mt-3">
                            <input class="form-control" name="phone" type="text" placeholder="Phone"
                                aria-label="">
                        </div>
                        <div class="col-3 mt-3">
                            <input class="form-control" name="country" type="text" placeholder="Country"
                                aria-label="">
                        </div>
                        <div class="col-3 mt-3">
                            <input class="form-control" name="code" type="text" placeholder="ZIP Code"
                                aria-label="">
                        </div>
                        <div class="col-md-5 offset-md-7 d-flex mb-3 mt-3">
                            <canvas id="captchaCanvas" width="200" height="50"></canvas>
                            <input class="form-control" type="text" id="captcha" placeholder="Captcha"
                                aria-label="">
                            <input class="form-control" type="hidden" id="captchaInput" placeholder="Captcha"
                                aria-label="">
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-lg rounded-pill"
                                style="background-color: #DC9750;color: white; text-transform: capitalize;font-size: 17px;">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="true" data-bs-keyboard="true" aria-hidden="true" style="padding-top: 0;">
        <div class="modal-dialog modal-dialog-centered  modal-xl">
            <div class="modal-content">
                <iframe width="1200" height="630"
                    src="https://www.youtube.com/embed/2Bsq6ZtT9GI?si=gI7-a43NhX3uh1eY" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- The Modal Our Services-->
    <!-- <div id="myModal1" class="modal" data-bs-backdrop="true" data-bs-keyboard="block" aria-hidden="true"> -->

    <!-- Modal content -->
    <!-- <div class="modal-contents">
            <span class="close">&times;</span>
                <h4 style="color: #0068A1;">Digital</h4>
                <hr>
                <p>
                    Today, more and more companies are focused on Digital Transformation initiatives. True digital transformation will result in changes across the entire of the organization: organizational structure, people, business focus, asset creation, leadership structure, financial priority, revenue sources, business processes, data/insights and technology profile/investment.
                    The essence of digital transformation is – ensuring all business processes are digitized intelligently and interacting with each other to deliver greater flexibility. This empowers an organization to better service the customer at all stages of the new business journey.
                </p>
        </div> -->
    <!-- </div> -->
    @if (count($contents) > 0)
        @php $n = 3; @endphp
        @foreach ($contents as $content)
            @if ($content->type == 'business')
                @php $modal = 'myModal'.$n++; @endphp
                <div id="{{ $modal }}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-contents">
                        <span class="close">&times;</span>
                        <h4>{{ $content->title }}</h4>
                        <hr>
                        <p>
                            <a href="{{ $content->link }}" target="_blank"><b>{{ $content->title }}</b></a>
                            {{ $content->description }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
    @if (count($contents) > 0)
        @php $n = 11; @endphp
        @foreach ($contents as $content)
            @if ($content->type == 'Partner')
                @php $modal = 'myModal'.$n++; @endphp
                <div id="{{ $modal }}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-contents">
                        <span class="close">&times;</span>
                        <h4>{{ $content->title }}</h4>
                        <hr>
                        <p>
                            <a href="{{ $content->link }}" target="_blank"><b>{{ $content->title }}</b></a>
                            {{ $content->description }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    @endif
</x-layout>
