@extends('admin.layouts.base')
@section('body')
<div class="section">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <!-- users edit start -->
                <div class="section users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 active" id="account">
                                    <form id="accountForm" novalidate="novalidate"
                                          action="{{route('adminBlogCreate',app()->getLocale())}}" method="POST" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="row">
                                            <div class="col s12 m6">

                                                <input id="title" name="title" type="text"
                                                       class="validate {{ $errors->has('title') ? 'invalid' : 'valid' }}"
                                                       placeholder="Blog Title"
                                                       data-error=".errorTxt">
                                                <label for="title"
                                                       class="active">{{trans('admin.title')}}</label>
                                                @if ($errors->has('title'))
                                                <small
                                                    class="errorTxt">{{ $errors->first('title') }}</small>
                                                @endif





                                            </div>
                                            <div class="col s6 input-field">


                                                <textarea id="content" name="content" 
                                                          class="validate {{ $errors->has('content') ? 'invalid' : 'valid' }}"
                                                          data-error=".errorTxt"> {{old('content')}} </textarea>
                                                <label for="content"
                                                       class="active">{{trans('admin.content')}}</label>
                                                @if ($errors->has('content'))
                                                <small
                                                    class="errorTxt">{{ $errors->first('content') }}</small>
                                                @endif

                                            </div>
                                            <!--                                            <div class="col s12 m6">
                                                                                            <div class="row">
                                            
                                            
                                            
                                            
                                                                                            </div>
                                                                                        </div>-->

                                            <div class="col s12">

                                                <label>
                                                    <input type="checkbox" name="status">
                                                    <span>{{trans('admin.status')}}</span>
                                                </label>


                                            </div>

                                            <div class="col s12 m6" style="margin-top:20px">
                                                <div class="input-images"></div>
                                                @if ($errors->has('images'))
                                                <span class="help-block">
                                                    {{ $errors->first('images') }}
                                                </span>
                                                @endif
                                            </div>

                                            <div class="col s12 display-flex justify-content-end mt-3">
                                                <button type="submit" class="btn indigo">
                                                    {{trans('admin.create')}}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-overlay"></div>
    </div>
</div>

<script src="{{ asset('../admin/ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace('content');
</script>
@endsection
