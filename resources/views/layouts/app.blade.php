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
    <link rel="stylesheet" href="{{ url('/css/style.css?v=3') }}"/>
    <title>{{__('client.universal_project')}}</title>
</head>
<body>
<header class="header">
    <div class="header_top_slider flex">
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/1.png" alt=""/>
            <div>+(995) 557-044-343</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/2.png" alt=""/>
            <div>{{__('client.the_address')}}</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/3.png" alt=""/>
            <div>office@uproject.ge</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/1.png" alt=""/>
            <div>+(995) 557-044-343</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/2.png" alt=""/>
            <div>{{__('client.the_address')}}</div>
        </a>
        <a href="#" class="flex info">
            <img src="/storage/images/icons/header/3.png" alt=""/>
            <div>office@uproject.ge</div>
        </a>
    </div>
    <div class="top flex">
        <div class="flex left">
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/1.png" alt=""/>
                <div>+(995) 557-044-343</div>
            </a>
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/2.png" alt=""/>
                <div>{{__('client.the_address')}}</div>
            </a>
            <a href="#" class="flex info">
                <img src="/storage/images/icons/header/3.png" alt=""/>
                <div>office@uproject.ge</div>
            </a>
            <!-- <div class="flex info">
                <img src="/storage/images/icons/header/4.png" alt=""/>
                <div>{{__('client.working_hours')}}</div>
            </div> -->
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
               {{__('client.universal')}}  <span class="black medium">{{__('client.project')}}</span>
            </div>
            <div class="poppins">{{__('client.logo_subtitle')}}</div>
        </a>
        <div class="navbar part">
            <a href="{{ route('index',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{request()->path() =="" || request()->path()==app()->getLocale() ?"current":""}}">
                    {{__('client.home')}}
                </div>
            </a>
            <a href="{{ route('projects',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{str_contains(request()->path(),substr(parse_url(route('projects',app()->getLocale()), PHP_URL_PATH), 1))?"current":""}}">
                    {{__('client.projects')}}
                </div>
            </a>
            <a href="{{ route('blogIndex',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{str_contains(request()->path(),substr(parse_url(route('blogIndex',app()->getLocale()), PHP_URL_PATH), 1))?"current":""}}">
                    {{__('client.blog')}}
                </div>
            </a>
            <a href="{{ route('team',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{str_contains(request()->path(),substr(parse_url(route('team',app()->getLocale()), PHP_URL_PATH), 1))?"current":""}}">
                    {{__('client.team')}}
                </div>
            </a>
            <a href="{{ route('about',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{str_contains(request()->path(),substr(parse_url(route('about',app()->getLocale()), PHP_URL_PATH), 1))?"current":""}}">
                    {{__('client.about_us')}}
                </div>
            </a>
            <a href="{{ route('contact',app()->getLocale()) }}">
                <div
                    class="nav main_blue flex center {{str_contains(request()->path(),substr(parse_url(route('contact',app()->getLocale()), PHP_URL_PATH), 1))?"current":""}}">
                   {{__('client.our_expertise')}} 
                </div>
            </a>
        </div>
         <button id="menu_btn"></button>
       <!-- <div class="languages red_bg part flex center">
            <img src="/storage/images/icons/header/5.png" alt=""/>
            <div class="dropdown">
                <a class="lang {{ app()->getLocale() == 'en' ? 'on': '' }}"
                   href="/{{'en'.substr(request()->path(), 2)}}">ENG</a>
                <a class="lang {{ app()->getLocale() == 'ru' ? 'on': '' }}"
                   href="/{{'ru'.substr(request()->path(), 2)}}">RUS</a>
                <a class="lang {{ app()->getLocale() == 'ge' ? 'on': '' }}"
                   href="/{{'ge'.substr(request()->path(), 2)}}">GEO</a>
                <a class="lang {{ app()->getLocale() == 'fr' ? 'on': '' }}"
                   href="/{{'fr'.substr(request()->path(), 2)}}">FRA</a>
            </div>
        </div> -->
    </div>
</header>


@yield('content')
<footer class="footer">
    <div class="wrapper flex">
        <div class="column">
            <a href="#" class="logo medium">{{__('client.universal')}}  <span>{{__('client.project')}}</span> </a>
            <!-- <div class="poppins">
                {{__('client.footer_paragraph')}}
            </div> -->
            <!-- <div class="item time flex">
                <img src="/storage/images/icons/header/4.png" alt=""/>
                <div style="text-transform: uppercase">
                   {{__('client.open_days')}}  <br/>
                   {{__('client.closed_days')}} 
                </div>
            </div> -->
        </div>
        <div class="column">
            <div class="title bold">{{__('client.our_service')}}</div>
            <a class="item link" href="#">{{__('client.chemical_engineering')}}</a>
            <a class="item link" href="#">{{__('client.mining_engineering')}}</a>
            <a class="item link" href="#">{{__('client.welding_engineering')}}</a>
            <a class="item link" href="#">{{__('client.welding_engineering')}}</a>
            <a class="item link" href="#">{{__('client.space_program_xyz')}}</a>
        </div>
        <div class="column">
            <div class="title bold">{{__('client.office_in_tbilisi')}}</div>
            <a href="#" class="item flex">
                <img src="/storage/images/icons/header/2.png" alt=""/>
                <div>
                    {{__('client.georgia_tbilisi')}} <br/>
                    {{__('client.saburtalo')}}
                </div>
            </a>
            <!-- <a href="#" class="item flex">
                <img src="/storage/images/icons/header/1.png" alt=""/>
                <div>
                    + (995) 555-123-456 <br/>
                    + (995) 555-123-456
                </div>
            </a> -->
            <a href="#" class="item flex">
                <img src="/storage/images/icons/header/3.png" alt=""/>
                <div>office@uproject.ge</div>
            </a>
        </div>
        <div class="column">
            <div class="title bold">{{__('client.our_location')}}</div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2978.860468192836!2d44.796761015677724!3d41.701947784397774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cddd34b9b5d%3A0xb163d7173534f617!2z4YOb4YOQ4YOg4YOYIOGDkeGDoOGDneGDoeGDlOGDoSDhg6Xhg6Phg6nhg5AsIOGDl-GDkeGDmOGDmuGDmOGDoeGDmA!5e0!3m2!1ska!2sge!4v1631511858655!5m2!1ska!2sge" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrapper bold poppins">{{__('client.')}}By insite</div>
    </div>

    <div id="fb-root"></div>

    <div class="fb-customerchat" id="fb-customer-chat"></div>

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

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "101097628928570");
    chatbox.setAttribute("attribution", "setup_tool");
    chatbox.setAttribute("theme_color", "#d90a2c");

    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v11.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script src="{{ url('/js/general.js') }}"></script>
<script src="{{ url('/js/slide.js') }}"></script>
</body>
</html>
