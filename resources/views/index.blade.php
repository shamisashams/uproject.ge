@extends('layouts.app')
@section('content')


<section class="hero_section_container">
    <section class="hero_section hero_slider margin_bottom">
        <div class="slide">
            <img class="bg" src="{{asset('storage/images/hero/1.png')}}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                    <div class="text_bg bold">UNIVERSAL PROJECT</div>
                    <div class="ab_title bold">welcome to UNIVERSAL PROJECT</div>
                    <div class="title bold">
                        Chill out What You Yelling For<br />
                        Lay Back it's all Been
                    </div>
                    <div class="sub_title dc" style="max-width: 609px">
                        been the industry's standard dummy text ever since the 1500s,
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s,
                    </div>
                    <div class="hero_btns flex">
                        <a href="#">
                            <button class="main_btn read_more">Read More</button>
                        </a>
                        <a href="contact.html">
                            <button class="main_btn contact">Contact Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="bg" src="{{ asset('/storage/images/hero/2.png') }}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                    <div class="text_bg bold">UNIVERSAL PROJECT</div>
                    <div class="ab_title bold">welcome to UNIVERSAL PROJECT</div>
                    <div class="title bold">
                        Nothing's changed World of War Craft <br />
                        You know what i meannnnn
                    </div>
                    <div class="sub_title dc" style="max-width: 609px">
                        Amet lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Esse, ipsum iure quae laudantium iusto minima maiores doloribus
                        totam fuga ipsa magni autem unde ut cumque odio quam laboriosam,
                        pariatur amet?
                    </div>
                    <div class="hero_btns flex">
                        <a href="#">
                            <button class="main_btn read_more">Read More</button>
                        </a>
                        <a href="contact.html">
                            <button class="main_btn contact">Contact Us</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <img class="bg" src="{{ asset('/storage/images/hero/3.png') }}" alt="" />
            <div class="showcase_overlay">
                <div class="flex center hero_content wrapper">
                    <div class="text_bg bold">UNIVERSAL PROJECT</div>
                    <div class="ab_title bold">welcome to UNIVERSAL PROJECT</div>
                    <div class="title bold">
                        Or what Dummy text i got <br />
                        No Idea Lorem LKorn X gray No Way
                    </div>
                    <div class="sub_title dc" style="max-width: 609px">
                        Standard dummyLorem Ipsum is simply dummy text of the printing
                        and typesetting industry. Lorem Ipsum has standard dummystandard
                        dummybeen the industry's standard dummy text ever since the
                        1500s,
                    </div>
                    <div class="hero_btns flex">
                        <a href="#">
                            <button class="main_btn read_more">Read More</button>
                        </a>
                        <a href="contact.html">
                            <button class="main_btn contact">Contact Us</button>
                        </a>
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
        <div class="title_bg bold">SERVICES</div>
        <div class="title bold main_blue">SERVICES</div>
    </div>
    <div class="service_boxes">
        <div class="service_box border">
            <div class="text1 transition5">explore the features</div>
            <div class="text2 bold main_blue transition5">
                Lorem Ipsum is simply
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
            <div class="text1 transition5">explore the features</div>
            <div class="text2 bold main_blue transition5">
                Lorem Ipsum is simply
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
            <div class="text1 transition5">explore the features</div>
            <div class="text2 bold main_blue transition5">
                Lorem Ipsum is simply
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
            <div class="text1 transition5">explore the features</div>
            <div class="text2 bold main_blue transition5">
                Lorem Ipsum is simply
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
        <div class="main_blue bold">Who We Are</div>
        <div class="poppins">
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only
            five centuries, Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard
            dummy text ever since the 1500s, when an unknown printer took a galley
            of type and scrambled it to make a type specimen book. It has survived
            not only five centuries,
        </div>
        <a href="#">
            <button class="main_btn">Read More</button>
        </a>
    </div>
</section>

<section class="project_count flex wrapper">
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">154</div>
            <div class="title bold main_blue"><span>154</span>All Projects</div>
        </div>
    </div>
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">36</div>
            <div class="title bold main_blue">
                <span>36</span>Current Projects
            </div>
        </div>
    </div>
    <div class="counts">
        <div class="main_titles">
            <div class="title_bg bold">118</div>
            <div class="title bold main_blue">
                <span>118</span>Completed projects
            </div>
        </div>
    </div>
</section>

<section class="projects_section_home margin_bottom">
    <div class="section_head flex wrapper">
        <div class="main_titles">
            <div class="title_bg bold" style="opacity: 0.21">PROJECTS</div>
            <div class="title bold" style="color: #f3f3f3">PROJECTS</div>
        </div>
        <a href="projects.html">
            <button class="view_all_btn dark">View All</button>
        </a>
    </div>
    <div class="project_slider_track">
        <div class="projects_slider flex">
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/1/3.jpg" alt="" />
                </div>
                <div class="category bold">Category dfgh</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/2/4.jpg" alt="" />
                </div>
                <div class="category bold">Category</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/3/2.jpg" alt="" />
                </div>
                <div class="category bold">Category</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/4/6.jpg" alt="" />
                </div>
                <div class="category bold">Category</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/5/3.jpg" alt="" />
                </div>
                <div class="category bold">Category</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
            </div>
            <div class="item">
                <div class="img_overlay">
                    <img src="img/projects/7/1.jpg" alt="" />
                </div>
                <div class="category bold">Category</div>
                <div class="name">Lorem Ipsum is simply</div>
                <div class="dc">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text
                    ever since
                </div>
                <a href="project-view.html" class="read_more_rotate medium"
                   >Read More</a
                >
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
            <div class="title_bg bold">Gallery</div>
            <div class="title bold main_blue">Gallery</div>
        </div>
        <a href="projects.html">
            <button class="view_all_btn">View All</button>
        </a>
    </div>
    <div class="gallery_grid">
        <div class="g_item img_overlay">
            <img src="img/projects/1/1.jpg" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/2/1.jpg" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/3/1.jpg" alt="" />
        </div>
        <div class="g_item flex">
            <div class="g_item img_overlay">
                <img src="img/projects/3/3.jpg" alt="" />
            </div>
            <div class="g_item img_overlay">
                <img src="img/projects/4/5.jpg" alt="" />
            </div>
        </div>
        <div class="g_item flex">
            <div class="g_item img_overlay">
                <img src="img/projects/4/6.jpg" alt="" />
            </div>
            <div class="g_item img_overlay">
                <img src="img/projects/7/1.jpg" alt="" />
            </div>
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/1/3.jpg" alt="" />
        </div>
        <div class="g_item img_overlay">
            <img src="img/projects/7/2.jpg" alt="" />
        </div>
    </div>
</section>
 @if(count($blogs))
<section class="blog_home margin_bottom">
    <div class="wrapper">
        <div class="section_head flex">
            <div class="main_titles">
                <div class="title_bg bold">Blog</div>
                <div class="title bold main_blue">Blog</div>
            </div>
            <a href="{{ route('index') }}">
                <button class="view_all_btn">View All</button>
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
                    <a href="{{route('blogView',[app()->getLocale(),$blog->id])}}" class="read_more medium">Read More</a>
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
            <div class="title_bg bold">Team</div>
            <div class="title bold main_blue">Team</div>
        </div>
        <a href="team.html">
            <button class="view_all_btn">View All</button>
        </a>
    </div>
    <div class="team_list flex">
        <div class="img_overlay">
            <img src="img/team/1.jpg" alt="" />
        </div>
        <div class="img_overlay">
            <img src="img/team/2.jpg" alt="" />
        </div>
        <div class="img_overlay">
            <img src="img/team/7.jpg" alt="" />
        </div>
        <div class="img_overlay">
            <img src="img/team/11.jpg" alt="" />
        </div>
    </div>
</section>



@endsection