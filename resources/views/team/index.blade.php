@extends('layouts.app')
@section('content')

<section class="main_showcases margin_bottom team">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">OUR TEAM</div>
                <div class="title bold white">OUR TEAM</div>
            </div>
            <div class="paragraph dc">
                In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used to demonstrate the visual form of a document or a
                typeface without relying on meaningful content.
            </div>
        </div>
    </div>
</section>

<section class="team_page wrapper team_grid margin_bottom">
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/1.jpg" alt="" />
            <div class="caption">
                <div class="name">Alexandre Kavelashvili</div>
                <div class="pos">Chief Surveyor</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/2.jpg" alt="" />
            <div class="caption">
                <div class="name">Anzor Mamrashi </div>
                <div class="pos">Head of Surveying Service</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/3.jpg" alt="" />
            <div class="caption">
                <div class="name">Vakho Tabatadze</div>
                <div class="pos">Architect </div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/4.jpg" alt="" />
            <div class="caption">
                <div class="name">Tina Bokuchava</div>
                <div class="pos">Architect</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
        <img src="../img/team/5.jpg" alt="" />
        <div class="caption">
            <div class="name">Mikheil Ashentsev</div>
            <div class="pos">Deputy head of surveying service</div>
        </div>
    </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/6.jpg" alt="" />
            <div class="caption">
                <div class="name">Mariam Akhalaia</div>
                <div class="pos">Interior Designer</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/7.jpg" alt="" />
            <div class="caption">
                <div class="name">Maka Mdzhavanadze </div>
                <div class="pos">Chief Engineer</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/8.jpg" alt="" />
            <div class="caption">
                <div class="name">Nodar Khorbaladze</div>
                <div class="pos">Chief Surveyor</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/9.jpg" alt="" />
            <div class="caption">
                <div class="name">Tornike Panchvdze </div>
                <div class="pos">Highway Engineer</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/10.jpg" alt="" />
            <div class="caption">
                <div class="name">Giorgi Tsimakuridze </div>
                <div class="pos">Technical Manager</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/11.jpg" alt="" />
            <div class="caption">
                <div class="name">Giorgi Ebanoidze</div>
                <div class="pos">Senior Engineer </div>
            </div>
        </div>
    </a>
</section>

@endsection