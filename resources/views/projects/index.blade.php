@extends('layouts.app')
@section('content')

<section class="main_showcases margin_bottom projects">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">Projects</div>
                <div class="title bold white">Projects</div>
            </div>
            <div class="paragraph dc">
                In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used to demonstrate the visual form of a document or a
                typeface without relying on meaningful content.
            </div>
        </div>
    </div>
</section>

<section class="projects_page wrapper">
    <div class="project_grid">
    <a href="{{route('projectDetails',app()->getLocale())}}">
          <div class="img_overlay">
            <img src="../img/projects/1/1.jpg" alt="" />
            <div class="caption">
              <div class="name">Vila on the cliff</div>
              <div class="date">Year: 2018</div>
            </div>
          </div>
        </a>
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
