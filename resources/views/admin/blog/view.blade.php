@extends('admin.layouts.base')
@section('body')
<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <?php
                 //  dd($blogItem->availableLanguage);
                ?>
                <!-- users view start -->
                <div class="section users-view">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 m4">
                                    <table class="striped">
                                        <tbody>
                                            <tr>
                                                <td>{{trans('admin.title')}}:</td>
                                                <td>{{$blogItem->title}}</td>
                                            </tr>

                                            <tr>
                                                <td>{{trans('admin.content')}}:</td>
                                                <td class="users-view-latest-activity">{!!$blogItem->content!!}</td>
                                            </tr>

                                            <tr>
                                                <td>{{trans('admin.status')}}:</td>
                                                <td>
                                                    @if($blogItem->status)
                                                    <span
                                                        class="users-view-status chip green lighten-5 green-text">{{trans('admin.active')}}</span>
                                                    @else
                                                    <span
                                                        class="users-view-status chip red lighten-5 red-text">{{trans('admin.not_active')}}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div style="display: flex;flex-wrap:wrap;">
                                @if(count($blogItem->files)>0)
                                @foreach($blogItem->files as $blogFile)
                                <div class="flex-image">
                                    <img  src="/storage/blog/{{$blogFile->fileable_id}}/{{$blogFile->name}}" class="page-image"/>
                                </div>
                                @endforeach
                                @endif
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>
@endsection
