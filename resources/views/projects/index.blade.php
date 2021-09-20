@extends('layouts.app')
@section('content')

<section class="main_showcases margin_bottom projects">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">{{__('client.projects')}}</div>
                <div class="title bold white">{{__('client.projects')}}</div>
            </div>
            <!-- <div class="paragraph dc">
            {{__('client.projects_showcase_para')}}
            </div> -->
        </div>
    </div>
</section>

<section class="projects_page wrapper">
    <div class="project_grid">
        <h1>Under Development...</h1>
    <!-- <a href="{{route('projectDetails',app()->getLocale())}}">
          <div class="img_overlay">
            <img src="../img/projects/1/1.png" alt="" />
            <div class="caption">
              <div class="name">{{__('client.vila_on_cliff')}}</div>
              <div class="date">{{__('client.year')}}: 2018</div>
            </div>
          </div>
        </a> -->
    </div>
{{--    <div class="paginations flex center margin_bottom">--}}
{{--        <button class="page_number medium flex center main_blue active">--}}
{{--            01--}}
{{--        </button>--}}
{{--        <button class="page_number medium flex center main_blue">02</button>--}}
{{--        <button class="page_number medium flex center main_blue">03</button>--}}
{{--        <button class="page_number medium flex center main_blue">04</button>--}}
{{--    </div>--}}
</section>


@endsection
