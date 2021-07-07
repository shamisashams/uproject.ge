@extends('layouts.app')
@section('content')
<section class="main_showcases margin_bottom blog">
    <div class="showcase_overlay">
        <div class="wrapper flex center">
            <div class="main_titles">
                <div class="title_bg bold">Blog</div>
                <div class="title bold white">Blog</div>
            </div>
            <div class="paragraph dc">
                In publishing and graphic design, Lorem ipsum is a placeholder text
                commonly used to demonstrate the visual form of a document or a
                typeface without relying on meaningful content.
            </div>
        </div>
    </div>
</section>

<section class="blogs_page wrapper margin_bottom">
    @if(count($blog->files) > 0)

    <img  src="/storage/blog/{{$blog->files[0]->fileable_id}}/{{$blog->files[0]->name}}" alt="" style="margin-bottom: 30px" />
    @endif
    <div class="date">{{ $blog->created_at }}</div>
    <div class="title bold main_blue">{{ $blog->title }}</div>
    <div class="para">
        {!! $blog->content !!}
    </div>

</section>
@endsection