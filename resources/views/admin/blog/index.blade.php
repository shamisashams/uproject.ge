@extends('admin.layouts.base')
@section('body')

<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="card">
                @include('admin.layouts.alert.alert')
                {{-- 		@include('admin.modules.language-tab.tab') --}}
                <div class="card-content">
                    <a href="{{route('adminBlogCreateView',app()->getLocale())}}"
                       class="mb-4 btn waves-effect waves-light green darken-1">{{trans('admin.create_blog')}}</a>
                    <div>
                        {!! Form::open(['url' => route('adminBlogIndex'),'method' =>'get']) !!}
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>@lang('admin.id')</th>
                                    <th>@lang('admin.title')</th>
                                    <th>@lang('admin.content')</th>
                                    <th>@lang('admin.actions')</th>
                                </tr>
                                <tr>
                                    <th>
                                        {{ Form::text('id',Request::get('id'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                                        @if ($errors->has('id'))
                                        <span class="help-block">
                                            {{ $errors->first('id') }}
                                        </span>
                                        @endif
                                    </th>
                                    <th>
                                        {{ Form::text('title',Request::get('title'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                                        @if ($errors->has('title'))
                                        <span class="help-block">
                                            {{ $errors->first('title') }}
                                        </span>
                                        @endif
                                    </th>
                                    <th>
                                        {{ Form::text('content',Request::get('content'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                                        @if ($errors->has('content'))
                                        <span class="help-block">
                                            {{ $errors->first('content') }}
                                        </span>
                                        @endif
                                    </th>
                                    <th>
                                        {{ Form::select('status',['' => 'All','1' => 'Active','0' => 'Not Active'],Request::get('status'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                                        @if ($errors->has('status'))
                                        <span class="help-block">
                                            {{ $errors->first('status') }}
                                        </span>
                                        @endif
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
//                                 foreach ($blogs as $blog) {
//                                     dd($blog);
//                                 }
                                ?>

                                @if(isset($blogs))
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$blog->id}}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ substr($blog->content,0,50) }}</td>
                                    <td>
                                        @if($blog->status)
                                        <span
                                            class="chip lighten-5 green green-text">{{trans('admin.active')}}</span>
                                        @else
                                        <span
                                            class="chip lighten-5 red red-text">{{trans('admin.not_active')}}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('adminBlogEditView',[app()->getLocale(),$blog->id])}}"><i
                                                class="material-icons">edit</i></a>
                                        <a href="{{route('adminBlogShow',[app()->getLocale(),$blog->id])}}"><i class="material-icons">remove_red_eye</i></a>
                                        {!! Form::open(['url' => route('adminBlogDestroy',[app()->getLocale(),$blog->id]),'method' =>'delete','style'=>'display:inline-block']) !!}
                                        <a onclick="deleteAlert(this, 'Are you sure, you want to delete this item?!');"
                                           type="submit">
                                            <i class="material-icons dp48">delete</i>
                                        </a>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                        {!! Form::close() !!}
                        {{ $blogs->links('admin.vendor.pagination.custom') }} 

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
