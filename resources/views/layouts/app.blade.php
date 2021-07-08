<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="{{ url('/css/style.css') }}"/>
    <title>UNIVERSAL PROJECT</title>
</head>
<body>
<header class="header">
    <div class="header_top_slider flex">
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/1.png" alt=""/>
            <div>+ (995) 555-123-456</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/2.png" alt=""/>
            <div>Georgia, Tbilisi - Saburatalo, St 11209</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/3.png" alt=""/>
            <div>example@email.com</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/1.png" alt=""/>
            <div>+ (995) 555-123-456</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/2.png" alt=""/>
            <div>Georgia, Tbilisi - Saburatalo, St 11209</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/3.png" alt=""/>
            <div>example@email.com</div>
        </a>
    </div>
    <div class="top flex">
        <div class="flex left">
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/1.png" alt=""/>
                <div>+ (995) 555-123-456</div>
            </a>
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/2.png" alt=""/>
                <div>Georgia, Tbilisi - Saburatalo, St 11209</div>
            </a>
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/3.png" alt=""/>
                <div>example@email.com</div>
            </a>
            <div class="flex info">
                <img src="/storage/images/icons/header/4.png" alt=""/>
                <div>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</div>
            </div>
        </div>
        <div class="flex right">
            <a href="#" class="sm"
            ><img src="/storage/images/icons/social-media/1.png" alt=""/>
            </a>
            <a href="#" class="sm"
            ><img src="/storage/images/icons/social-media/2.png" alt=""/>
            </a>
            <a href="#" class="sm"
            ><img src="/storage/images/icons/social-media/3.png" alt=""/>
            </a>
            <a href="#" class="sm"
            ><img src="/storage/images/icons/social-media/4.png" alt=""/>
            </a>
        </div>
    </div>
    <div class="bottom border flex">
        <a href="{{ route('index',app()->getLocale()) }}" class="logo red_bg part flex center">
            <div class="main medium">
                UNIVERSAL <span class="black medium">PROJECT</span>
            </div>
            <div class="poppins">Road, Water, Architecture, Topography</div>
        </a>
        <div class="navbar part">
            <a href="{{ route('index',app()->getLocale()) }}">
                <div class="nav main_blue flex center current">Home</div>
            </a>
            <a href="{{ route('projects',app()->getLocale()) }}">
                <div class="nav main_blue flex center">Projects</div>
            </a>
            <a href="{{ route('blogIndex',app()->getLocale()) }}">
                <div class="nav main_blue flex center">Blog</div>
            </a>
            <a href="{{ route('team',app()->getLocale()) }}">
                <div class="nav main_blue flex center">Team</div>
            </a>
            <a href="{{ route('about',app()->getLocale()) }}">
                <div class="nav main_blue flex center">About us</div>
            </a>
            <a href="{{ route('contact',app()->getLocale()) }}">
                <div class="nav main_blue flex center">Contact us</div>
            </a>
        </div>
        <button id="menu_btn"></button>
        <div class="languages red_bg part flex center">
            <img src="/storage/images/icons/header/5.png" alt=""/>
            <div class="dropdown">
                <a class="lang {{ app()->getLocale() == 'en' ? 'on': '' }}"
                   href="/{{'en'.substr(request()->path(), 2)}}">ENG</a>
                <a class="lang {{ app()->getLocale() == 'ru' ? 'on': '' }}"
                   href="/{{'ru'.substr(request()->path(), 2)}}">RUS</a>
                <a class="lang {{ app()->getLocale() == 'ge' ? 'on': '' }}"
                   href="/{{'ge'.substr(request()->path(), 2)}}">GEO</a>
            </div>
        </div>
    </div>
</header>


@yield('content')
<footer class="footer">
    <div class="wrapper flex">
        <div class="column">
            <a href="#" class="logo medium"> UNIVERSAL <span>PROJECT</span> </a>
            <div class="poppins">
                Lorem Ipsum is simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text
                ever since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book. It has survived not
                only five centuries,
            </div>
            <div class="item time flex">
                <img src="/storage/images/icons/header/4.png" alt=""/>
                <div style="text-transform: uppercase">
                    Mon - Sat 8:00 - 17:30, <br/>
                    Sunday - CLOSED
                </div>
            </div>
        </div>
        <div class="column">
            <div class="title bold">Our Services</div>
            <a class="item link" href="#">Chemical Engineering Projects</a>
            <a class="item link" href="#">Mining Engineering Construction</a>
            <a class="item link" href="#">Engineering Welding Engineering</a>
            <a class="item link" href="#">Welding Engineering</a>
            <a class="item link" href="#">Space Program XYZ</a>
        </div>
        <div class="column">
            <div class="title bold">Office in Tbilisi</div>
            <a href="#" class="item flex">
                <img src="/storage/images/icons/header/2.png" alt=""/>
                <div>
                    Georgia, Tbilisi <br/>
                    Saburatalo, St 11209
                </div>
            </a>
            <a href="#" class="item flex">
                <img src="/storage/images/icons/header/1.png" alt=""/>
                <div>
                    + (995) 555-123-456 <br/>
                    + (995) 555-123-456
                </div>
            </a>
            <a href="#" class="item flex">
                <img src="/storage/images/icons/header/3.png" alt=""/>
                <div>
                    example@email.com <br/>
                    info@email.com
                </div>
            </a>
        </div>
        <div class="column">
            <div class="title bold">Our Locations</div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.6452450233633!2d44.770133515678246!3d41.72817338276172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472ddadc78fb3%3A0x9f529d5044be3023!2sZhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1623659355947!5m2!1sen!2sge"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrapper bold poppins">By insite</div>
    </div>
</footer>

<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-1.11.0.min.js"
></script>
<script
    type="text/javascript"
    src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
></script>
<script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
></script>

<script src="{{ url('/js/general.js') }}"></script>
<script src="{{ url('/js/slide.js') }}"></script>
</body>
</html>
