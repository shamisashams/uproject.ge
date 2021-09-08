@extends('layouts.app')
@section('content')

<section class="main_showcases margin_bottom about">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">{{__('client.about_us')}}</div>
                <div class="title bold white">{{__('client.about_us')}}</div>
            </div>
            <div class="paragraph dc">
                {{__('client.')}}In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used to demonstrate the visual form of a document or a
                typeface without relying on meaningful content.
            </div>
        </div>
    </div>
</section>

<section class="about_page wrapper margin_bottom">
    <div class="flex">
        <div class="img_overlay">
            <img src="/storage/images/about/1.png" alt="" />
        </div>
        <div class="text">
            <div class="title">
                <div class="ab medium" style='text-transform: uppercase;'>{{__('client.about_us')}}</div>
                <div class="main main_blue bold">
                    {{__('client.about_us_title_1')}}
                </div>
            </div>
            <div class="para">
                {{__('client.about_content1_p1')}}
            </div>
            <div class="para">
                {{__('client.about_content1_p2')}}
            </div>
            <div class="para">
                {{__('client.about_content1_p2_1')}}
            </div>
            <div class="para">
                {{__('client.about_content1_p2_2')}}
            </div>
        </div>
    </div>
    <div class="flex">
        <div class="text">
            <div class="title">
                <div class="main main_blue bold">
                    {{__('client.about_us_title_2')}}
                </div>
            </div>
            <div class="para">
                {{__('client.about_content2_p1')}}
            </div>
            <div class="para">
                {{__('client.about_content2_p1_1')}}
            </div>
            <div class="para">
                {{__('client.about_content2_p1_2')}}
            </div>
        </div>
        <div class="img_overlay">
            <img src="/storage/images/about/2.png" alt="" />
        </div>
    </div>
</section>


@endsection