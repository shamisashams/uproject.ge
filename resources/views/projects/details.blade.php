@extends('layouts.app')
@section('content')

    <section class="main_showcases margin_bottom projects">
        <div class="showcase_overlay">
            <div class="wrapper flex center">
                <div class="main_titles">
                    <div class="title_bg bold">{{__('client.projects')}}</div>
                    <div class="title bold white">{{__('client.projects')}}</div>
                </div>
                <div class="paragraph dc">
                {{__('client.projects_showcase_para')}}
                </div>
            </div>
        </div>
    </section>

    <section class="project_view_page blogs_page wrapper margin_bottom">
        <div class="flex">
            <img class="img" src="/img/projects/1/1.png" alt=""/>
            <div class="div">
                <div class="date">1. {{__('client.january')}}. 2019</div>
                <div class="title main_blue bold">{{__('client.smart_lighting')}}</div>
                <div class="para">
                {{__('client.project_detail_par_1')}}
                </div>
                <div class="quote_box small border">
                    <div class="main_blue bold">
                    {{__('client.project_detail_quote_1')}} 
                    </div>
                    <img src="/img/icons/blog/q.png" alt=""/>
                </div>
                <div class="para">
                {{__('client.project_detail_par_2')}}
                </div>
            </div>
        </div>
        <div class="para">
        {{__('client.project_detail_par_3')}} <br/>
            {{__('client.project_detail_par_4')}} 
        </div>
        <div class="quote_box border flex">
            <div class="main_blue bold">
            {{__('client.project_detail_quote_2')}} 
            </div>
            <img src="/img/icons/blog/q.png" alt=""/>
        </div>
        <div class="para">
        {{__('client.project_detail_par_5')}}
        </div>
    </section>

    <div class="pp_slider_track">
        <div class="slider_project_page flex margin_bottom">
            <div class="project_view_image">
                <img src="/img/projects/1/2.png" alt=""/>
            </div>
            <div class="project_view_image">
                <img src="/img/projects/2/2.png" alt=""/>
            </div>
            <div class="project_view_image">
                <img src="/img/projects/3/2.png" alt=""/>
            </div>
            <div class="project_view_image">
                <img src="/img/projects/4/2.png" alt=""/>
            </div>
            <div class="project_view_image">
                <img src="/img/projects/5/2.png" alt=""/>
            </div>
            <div class="project_view_image">
                <img src="/img/projects/6/2.png" alt=""/>
            </div>
        </div>
        <button class="arr" id="pps_prev">
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
        <button class="arr" id="pps_next">
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

    <section id="project_popup_view" class="flex center">
        <div class="image">
            <img src="/img/projects/1/3.png" alt=""/>
            <button id="close_popup" class="flex center">
                <img src="/img/icons/other/close.png" alt=""/>
            </button>
        </div>
    </section>

@endsection
