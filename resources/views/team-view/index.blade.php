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

<section class="teamview_page wrapper margin_bottom flex">
    <div class="img">
        <img src="../img/team/11.png" alt="" />
    </div>
    <div class="bio">
        <div class="name bold main_blue">NAME SURNAME</div>
        <div class="position main_blue">Position</div>
        <div class="cntct">contact@mail.com</div>
        <div class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
            unknown printer took a galley of type and scrambled it to make a type specimen book. It 
            has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an </div>
        <div class="para">unknown printer took a galley of type and scrambled it to make a type specimen book. It 
            has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. <br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem 
            Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
            unknown printer took a galley of type and scrambled it to make a type specimen book. It 
            has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an 
        </div>
        <div class="para">
            unknown printer took a galley of type and scrambled it to make a type specimen book. It 
            has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged.</div>
    </div>
</section>

@endsection