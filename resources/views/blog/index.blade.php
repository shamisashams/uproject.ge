@extends('layouts.app')
@section('content')
<?php
// dd($blogs);
?>
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

<section class="blogs_page wrapper">
    @if(count($blogs))
    @foreach($blogs as $blog)
    <div class="blog_item">
        @if(count($blog->files) > 0)

        <img  src="/storage/blog/{{$blog->files[0]->fileable_id}}/{{$blog->files[0]->name}}" alt="" />
        @endif
        <div class="cap">
            <div class="date">{{ $blog->created_at }}</div>
            <div class="bold main_blue title">{{ $blog->title }}</div>
            <div class="para">
                {!! substr($blog->content,0,400) !!}
            </div>
            <a href="{{route('blogView',[app()->getLocale(),$blog->id])}}" class="read_more_rotate main_blue medium"
               >Read More</a
            >
        </div>
    </div>
    @endforeach
    @endif


    <?php
    ?>

    <div class="paginations flex center margin_bottom">
        <button class="page_number medium flex center main_blue">
            <a href="?page=<?php $blogs->currentPage() - 1; ?>">&laquo;</a>
            <button
            <?php
             $currentPage = $blogs->currentPage();
             $numOfPages = $blogs->lastPage();
             $withLastSearch = false;
             $withRaquo = false;

             $pagesLeft = 0;
             $i = $currentPage - 3;

             if ($currentPage <= 3) {
                 $i = 1;
             }

             if ($i >= 2) {
                 ?>
                     <button class="page_number medium flex center main_blue ">
                     <a href="{{ route('blogIndex',app()->getLocale()) }}">First</a>
                 </button>

                 <?php
             }

             $iteration = 0;

             for ($i; $i <= $numOfPages; $i++) {
                 $iteration++;

                 if ($i == $currentPage) {
                     ?>
                     <button class="page_number medium flex center main_blue active">
                         <a href="?page={{ $i }}">{{$i}}</a>
                     </button>
                     <?php
                     continue;
                 }
                 ?>


                 <button class="page_number medium flex center main_blue ">
                     <a href="?page={{ $i }}">{{$i}}</a>
                 </button>


                 <?php
                 if (($currentPage + 1) <= $numOfPages) {
                     $withRaquo = true;
                 }

                 if ($iteration > 3) {
                     $pagesLeft = $numOfPages - $currentPage;
                     $withLastSearch = ($pagesLeft == 1) ? false : true;
                     break;
                 }
             }
            ?>

            <?php
             if ($withLastSearch) {
                 ?>
                 <span>...</span>

                 <button class="page_number medium flex center main_blue">
                     <a href="?page={{ $numOfPages }}">{{$numOfPages}}</a>
                 </button>
             <?php }
            ?>  

            <?php if ($withRaquo): ?>

                 <button class="page_number medium flex center main_blue">
                     <a href="?page={{ $currentPage + 1 }}">&raquo;</a>
                 </button>
             <?php endif; ?>


    </div>


</section>
@endsection