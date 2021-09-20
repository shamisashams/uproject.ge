@extends('layouts.app')
@section('content')


<section class="hero_section_container">
    <section class="hero_section hero_slider margin_bottom">
        <div class="slide">
            <img class="bg" src="{{asset('storage/images/hero/1.png')}}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                    <div class="text_bg bold">{{__('client.universal_project')}}</div>
                    <!-- <div class="ab_title bold">{{__('client.welcome_to')}} {{__('client.universal_project')}}</div> -->
                    <!-- <div class="title bold">
                        {{__('client.hero_slide_title_1')}}
                    </div> -->
                    <!-- <div class="sub_title dc" style="max-width: 609px">
                       {{__('client.hero_slide_subtitle_1')}} 
                    </div> -->
                    <div class="hero_btns flex">
{{--                        <a href="#">--}}
{{--                            <button class="main_btn read_more">{{__('client.read_more')}}</button>--}}
{{--                        </a>--}}
                        <!-- <a href="{{route('contact',app()->getLocale())}}">
                            <button class="main_btn contact">{{__('client.contact_us')}}</button>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="bg" src="{{ asset('/storage/images/hero/2.png') }}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                   <div class="text_bg bold">{{__('client.universal_project')}}</div>
                    <!-- <div class="ab_title bold">{{__('client.welcome_to')}} {{__('client.universal_project')}}</div> -->
                    <!-- <div class="title bold">
                        {{__('client.hero_slide_title_2')}}
                    </div> -->
                    <!-- <div class="sub_title dc" style="max-width: 609px">
                        {{__('client.hero_slide_subtitle_2')}}
                    </div> -->
                    <div class="hero_btns flex">
{{--                        <a href="#">--}}
{{--                            <button class="main_btn read_more">{{__('client.read_more')}}</button>--}}
{{--                        </a>--}}
                        <!-- <a href="{{route('contact',app()->getLocale())}}">
                            <button class="main_btn contact">{{__('client.contact_us')}}</button>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="bg" src="{{ asset('/storage/images/hero/3.png') }}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                    <div class="text_bg bold">{{__('client.universal_project')}}</div>
                    <!-- <div class="ab_title bold">{{__('client.welcome_to')}} {{__('client.universal_project')}}</div> -->
                    <!-- <div class="title bold">
                        {{__('client.hero_slide_title_3')}}
                    </div> -->
                    <!-- <div class="sub_title dc" style="max-width: 609px">
                        {{__('client.hero_slide_subtitle_3')}}
                    </div> -->
                    <div class="hero_btns flex">
{{--                        <a href="#">--}}
{{--                            <button class="main_btn read_more">{{__('client.read_more')}}</button>--}}
{{--                        </a>--}}
                        <!-- <a href="{{route('contact',app()->getLocale())}}">
                            <button class="main_btn contact">{{__('client.contact_us')}}</button>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="arrows flex">
        <button id="prev_heroslide" class="flex center">
            <img src="/storage/images/icons/slider/prev.png" alt="" />
        </button>
        <button id="next_heroslide" class="flex center">
            <img src="{{ asset('storage/images/icons/slider/next.png') }}" alt="" />
        </button>
    </div>
</section>

<section class="services_home wrapper margin_bottom">
    <div class="main_titles">
        <div class="title_bg bold">{{__('client.services')}}</div>
        <div class="title bold main_blue">{{__('client.services')}}</div>
    </div>
    <div class="service_boxes">
        <div class="service_box border">
            <img class='serbox_bg' src="img/projects/2/1.png" alt="">
            <div class="text1 transition5">{{__('client.serbox_1_text1')}}</div>
            <div class="text2 bold main_blue transition5">
            {{__('client.serbox_1_text2')}}
            </div>
            <a href="#">
                <button class="plus flex center transition5">
                    <svg
                        class="transition5"
                        id="Layer_2"
                        data-name="Layer 2"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        >
                    <g id="plus">
                    <rect
                        id="Rectangle_51"
                        data-name="Rectangle 51"
                        width="24"
                        height="24"
                        transform="translate(24 24) rotate(180)"
                        opacity="0"
                        />
                    <path
                        id="Path_72"
                        data-name="Path 72"
                        d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                        />
                    </g>
                    </svg>
                </button>
            </a>
            <span></span>
        </div>
        <div class="service_box border">
            <img class='serbox_bg' src="img/projects/2/2.png" alt="">
            <div class="text1 transition5">{{__('client.serbox_2_text1')}}</div>
            <div class="text2 bold main_blue transition5">
                {{__('client.serbox_2_text2')}}
            </div>
            <a href="#">
                <button class="plus flex center transition5">
                    <svg
                        class="transition5"
                        id="Layer_2"
                        data-name="Layer 2"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        >
                    <g id="plus">
                    <rect
                        id="Rectangle_51"
                        data-name="Rectangle 51"
                        width="24"
                        height="24"
                        transform="translate(24 24) rotate(180)"
                        opacity="0"
                        />
                    <path
                        id="Path_72"
                        data-name="Path 72"
                        d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                        />
                    </g>
                    </svg>
                </button>
            </a>
            <span></span>
        </div>
        <div class="service_box border">
            <img class='serbox_bg' src="img/projects/1/3.png" alt="">
            <div class="text1 transition5">{{__('client.serbox_3_text1')}}</div>
            <div class="text2 bold main_blue transition5">
                {{__('client.serbox_3_text2')}}
            </div>
            <a href="#">
                <button class="plus flex center transition5">
                    <svg
                        class="transition5"
                        id="Layer_2"
                        data-name="Layer 2"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        >
                    <g id="plus">
                    <rect
                        id="Rectangle_51"
                        data-name="Rectangle 51"
                        width="24"
                        height="24"
                        transform="translate(24 24) rotate(180)"
                        opacity="0"
                        />
                    <path
                        id="Path_72"
                        data-name="Path 72"
                        d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                        />
                    </g>
                    </svg>
                </button>
            </a>
            <span></span>
        </div>
        <div class="service_box border">
            <img class='serbox_bg' src="img/projects/3/1.png" alt="">
            <div class="text1 transition5">{{__('client.serbox_4_text1')}}</div>
            <div class="text2 bold main_blue transition5">
                {{__('client.serbox_4_text2')}}
            </div>
            <a href="#">
                <button class="plus flex center transition5">
                    <svg
                        class="transition5"
                        id="Layer_2"
                        data-name="Layer 2"
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        >
                    <g id="plus">
                    <rect
                        id="Rectangle_51"
                        data-name="Rectangle 51"
                        width="24"
                        height="24"
                        transform="translate(24 24) rotate(180)"
                        opacity="0"
                        />
                    <path
                        id="Path_72"
                        data-name="Path 72"
                        d="M19,11H13V5a1,1,0,0,0-2,0v6H5a1,1,0,0,0,0,2h6v6a1,1,0,0,0,2,0V13h6a1,1,0,0,0,0-2Z"
                        />
                    </g>
                    </svg>
                </button>
            </a>
            <span></span>
        </div>
    </div>
</section>

<section class="who_we_are flex wrapper margin_bottom">
    <div class="img_overlay">
        <img class="image_fit" src="{{ asset('storage/images/home/1.png') }}" alt="" />
    </div>
    <div class="div">
        <div class="main_blue bold">{{__('client.who_we_are')}}</div>
        <div class="poppins">
            {{__('client.who_we_are_content')}}
        </div>
        <a href="{{route('about',app()->getLocale())}}">
            <button class="main_btn">{{__('client.read_more')}}</button>
        </a>
    </div>
</section>

<section class="project_count flex wrapper">
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">1247</div>
            <div class="title bold main_blue"><span>1247</span>{{__('client.all_projects')}}</div>
        </div>
    </div>
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">36</div>
            <div class="title bold main_blue">
                <span>36</span>{{__('client.current_projects')}}
            </div>
        </div>
    </div>
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">1211</div>
            <div class="title bold main_blue">
                <span>1211</span>{{__('client.completed_projects')}}
            </div>
        </div>
    </div>
</section>

<section class="projects_section_home margin_bottom">
    <div class="section_head flex wrapper">
        <div class="main_titles">
            <div class="title_bg bold" style="opacity: 0.21">{{__('client.projects')}}</div>
            <div class="title bold" style="color: #f3f3f3; text-transform: uppercase;" >{{__('client.projects')}}</div>
        </div>
        <a href="{{route('projects',app()->getLocale())}}">
            <button class="view_all_btn dark">{{__('client.view_all')}}</button>
        </a>
    </div>
    <div class="project_slider_track">
        <div class="projects_slider flex">
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/1/3.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_1_name')}}</div> -->
                <!-- <div class="dc">
                    {{__('client.project_slide_1_para')}}
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/2/4.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_2_name')}}</div> -->
                <!-- <div class="dc">
                   {{__('client.project_slide_2_para')}} 
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/3/2.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_3_name')}}</div> -->
                <!-- <div class="dc">
                    {{__('client.project_slide_3_para')}}
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/4/6.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_4_name')}}</div> -->
                <!-- <div class="dc">
                    {{__('client.project_slide_4_para')}}
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/5/3.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_5_name')}}</div> -->
                <!-- <div class="dc">
                    {{__('client.project_slide_5_para')}}
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/7/1.png" alt="" />
                </div>
                <!-- <div class="category bold">{{__('client.category')}}</div>
                <div class="name">{{__('client.project_slide_6_name')}}</div> -->
                <!-- <div class="dc">
                   {{__('client.project_slide_6_para')}} 
                </div> -->
                <!-- <a href="project-view.html" class="read_more_rotate medium"
                   >{{__('client.read_more')}}</a
                > -->
            </div>
        </div>
        <button class="arr" id="project_prev">
            <svg
                id="arrow-ios-back"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                >
            <rect
                id="Rectangle_28"
                data-name="Rectangle 28"
                width="24"
                height="24"
                transform="translate(24) rotate(90)"
                opacity="0"
                />
            <path
                id="Path_71"
                data-name="Path 71"
                d="M13.83,19a1,1,0,0,1-.78-.37l-4.83-6a1,1,0,0,1,0-1.27l5-6a1,1,0,0,1,1.54,1.28L10.29,12l4.32,5.36A1,1,0,0,1,13.83,19Z"
                />
            </svg>
        </button>
        <button class="arr" id="project_next">
            <svg
                id="arrow-ios-back"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                >
            <rect
                id="Rectangle_28"
                data-name="Rectangle 28"
                width="24"
                height="24"
                transform="translate(24) rotate(90)"
                opacity="0"
                />
            <path
                id="Path_71"
                data-name="Path 71"
                d="M13.83,19a1,1,0,0,1-.78-.37l-4.83-6a1,1,0,0,1,0-1.27l5-6a1,1,0,0,1,1.54,1.28L10.29,12l4.32,5.36A1,1,0,0,1,13.83,19Z"
                />
            </svg>
        </button>
    </div>
</section>

<section class="gallery_section wrapper margin_bottom">
    <div class="section_head flex">
        <div class="main_titles">
            <div class="title_bg bold">{{__('client.gallery')}}</div>
            <div class="title bold main_blue">{{__('client.gallery')}}</div>
        </div>
        <a href="{{route('projects',app()->getLocale())}}">
            <button class="view_all_btn">{{__('client.view_all')}}</button>
        </a>
    </div>
    <div class="gallery_grid">
        <div class="g_item img_overlay">
            <img src="img/projects/1/1.png" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/2/1.png" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/3/1.png" alt="" />
        </div>
        <div class="g_item flex">
            <div class="g_item img_overlay">
                <img src="img/projects/3/3.png" alt="" />
            </div>
            <div class="g_item img_overlay">
                <img src="img/projects/4/5.png" alt="" />
            </div>
        </div>
        <div class="g_item flex">
            <div class="g_item img_overlay">
                <img src="img/projects/4/6.png" alt="" />
            </div>
            <div class="g_item img_overlay">
                <img src="img/projects/7/1.png" alt="" />
            </div>
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/1/3.png" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/7/2.png" alt="" />
        </div>
    </div>
</section>
 @if(count($blogs))
<section class="blog_home margin_bottom">
    <div class="wrapper">
        <div class="section_head flex">
            <div class="main_titles">
                <div class="title_bg bold">{{__('client.blog')}}</div>
                <div class="title bold main_blue">{{__('client.blog')}}</div>
            </div>
            <a href="{{ route('blogIndex',app()->getLocale()) }}">
                <button class="view_all_btn">{{__('client.view_all')}}</button>
            </a>
        </div>
        <div class="blog_slider">
            @foreach($blogs as $blog):

                @if(count($blog->files) === 0)
                    @continue;
                @endif
            <div class="blog_item">

                <div class="img_overlay">
                    <img src="/storage/blog/{{$blog->files[0]->fileable_id}}/{{$blog->files[0]->name}}" alt="" />
                </div>
                <div class="text flex center">
                    <div class="title bold">
                        {{ $blog->title }}
                    </div>
                    <a href="{{route('blogView',[app()->getLocale(),$blog->id])}}" class="read_more medium">{{__('client.read_more')}}</a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <button class="arr" id="prev_blog">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 32 32"
            >
        <g id="Layer_2" data-name="Layer 2" transform="translate(0.264)">
        <g id="arrow-back">
        <rect
            id="Rectangle_57"
            data-name="Rectangle 57"
            width="32"
            height="32"
            transform="translate(31.736) rotate(90)"
            opacity="0"
            />
        <path
            id="Path_73"
            data-name="Path 73"
            d="M23.828,12.931H8.151l4.8-5.763a1.323,1.323,0,0,0-2.036-1.692L4.3,13.407a1.573,1.573,0,0,0-.119.2.168.168,0,0,1-.093.172,1.27,1.27,0,0,0,0,.952.168.168,0,0,0,.093.172,1.573,1.573,0,0,0,.119.2l6.609,7.931a1.323,1.323,0,1,0,2.036-1.692l-4.8-5.763H23.828a1.322,1.322,0,1,0,0-2.644Z"
            transform="translate(1.287 1.609)"
            />
        </g>
        </g>
        </svg>
    </button>
    <button class="arr" id="next_blog">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="32"
            height="32"
            viewBox="0 0 32 32"
            >
        <g id="Layer_2" data-name="Layer 2" transform="translate(0.264)">
        <g id="arrow-back">
        <rect
            id="Rectangle_57"
            data-name="Rectangle 57"
            width="32"
            height="32"
            transform="translate(31.736) rotate(90)"
            opacity="0"
            />
        <path
            id="Path_73"
            data-name="Path 73"
            d="M23.828,12.931H8.151l4.8-5.763a1.323,1.323,0,0,0-2.036-1.692L4.3,13.407a1.573,1.573,0,0,0-.119.2.168.168,0,0,1-.093.172,1.27,1.27,0,0,0,0,.952.168.168,0,0,0,.093.172,1.573,1.573,0,0,0,.119.2l6.609,7.931a1.323,1.323,0,1,0,2.036-1.692l-4.8-5.763H23.828a1.322,1.322,0,1,0,0-2.644Z"
            transform="translate(1.287 1.609)"
            />
        </g>
        </g>
        </svg>
    </button>
</section>
@endif
<section class="team_home wrapper margin_bottom">
    <div class="section_head flex">
        <div class="main_titles">
            <div class="title_bg bold">{{__('client.team')}}</div>
            <div class="title bold main_blue">{{__('client.team')}}</div>
        </div>
        <a href="{{route('team',app()->getLocale())}}">
            <button class="view_all_btn">{{__('client.view_all')}}</button>
        </a>
    </div>
    
    <div class="team_list flex team_grid team_slider_home">
        <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/10.png" alt="" />
            <div class="caption">
                <div class="name">George Tsimakuridze </div>
                <div class="pos">{{__('client.technical_manager')}}</div>
            </div>
        </div>
        </a>
        <a href="{{ route('teamView',app()->getLocale()) }}">
            <div class="img_overlay">
                <img src="img/team/3.png" alt="" />
                <div class="caption">
                <div class="name">Maka Mdzhavanadze </div>
                <div class="pos">{{__('client.chief_engineer')}}</div>
                </div>
            </div>
        </a>
        <a href="{{ route('teamView',app()->getLocale()) }}">
            <div class="img_overlay">
                <img src="img/team/4.png" alt="" />
                <div class="caption">
                <div class="name">Giorgi Ebanoidze</div>
                <div class="pos">{{__('client.senior_engineer')}} </div>
                </div>
            </div>
        </a>
        <a href="{{ route('teamView',app()->getLocale()) }}">
            <div class="img_overlay">
                <img src="img/team/5.png" alt="" />
                <div class="caption">
                <div class="name">Giorgi Ebanoidze</div>
                <div class="pos">{{__('client.senior_engineer')}} </div>
                </div>
            </div>
        </a>
        <a href="{{ route('teamView',app()->getLocale()) }}">
            <div class="img_overlay">
                <img src="img/team/6.png" alt="" />
                <div class="caption">
                <div class="name">Giorgi Ebanoidze</div>
                <div class="pos">{{__('client.senior_engineer')}} </div>
                </div>
            </div>
        </a>
        <a href="{{ route('teamView',app()->getLocale()) }}">
            <div class="img_overlay">
                <img src="img/team/7.png" alt="" />
                <div class="caption">
                <div class="name">Giorgi Ebanoidze</div>
                <div class="pos">{{__('client.senior_engineer')}} </div>
                </div>
            </div>
        </a>
        
        
        
        
    </div>
</section>



@endsection
