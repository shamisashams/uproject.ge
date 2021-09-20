@extends('layouts.app')
@section('content')

<section class="main_showcases margin_bottom team">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">{{__('client.our_team')}}</div>
                <div class="title bold white">{{__('client.our_team')}}</div>
            </div>
            <!-- <div class="paragraph dc">
            {{__('client.team_showcase_para')}}
            </div> -->
        </div>
    </div>
</section>

<section class="team_page wrapper team_grid margin_bottom">
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
            <img src="../img/team/3.png" alt="" />
            <div class="caption">
                <div class="name">Vakho Tabatadze</div>
                <div class="pos">{{__('client.senior_architect')}} </div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/1.png" alt="" />
            <div class="caption">
                <div class="name">Alexander Kavelashvili</div>
                <div class="pos">{{__('client.chief_surveyor')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/2.png" alt="" />
            <div class="caption">
                <div class="name">Anzor Mamrashi </div>
                <div class="pos">{{__('client.head_of_surveying_service')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/სს.png" alt="" />
            <div class="caption">
                <div class="name">Tina Bokuchava</div>
                <div class="pos">{{__('client.architect')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
        <img src="../img/team/5.png" alt="" />
        <div class="caption">
            <div class="name">Mikheil Mashentsev</div>
            <div class="pos">{{__('client.deputy_head_surveying')}}</div>
        </div>
    </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/6.png" alt="" />
            <div class="caption">
                <div class="name">Mariam Akhalaia</div>
                <div class="pos">{{__('client.interior_designer')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/7.png" alt="" />
            <div class="caption">
                <div class="name">Maka Mzhavanadze </div>
                <div class="pos">{{__('client.chief_engineer')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/8.png" alt="" />
            <div class="caption">
                <div class="name">Nodar Khorbaladze</div>
                <div class="pos">{{__('client.chief_surveyor')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/9.png" alt="" />
            <div class="caption">
                <div class="name">Tornike Panchvdze </div>
                <div class="pos">{{__('client.highway_engineer')}}</div>
            </div>
        </div>
    </a>
    <a href="{{ route('teamView',app()->getLocale()) }}">
        <div class="img_overlay">
            <img src="../img/team/11.png" alt="" />
            <div class="caption">
                <div class="name">George Ebanoidze</div>
                <div class="pos">{{__('client.senior_engineer')}} </div>
            </div>
        </div>
    </a>
</section>

@endsection