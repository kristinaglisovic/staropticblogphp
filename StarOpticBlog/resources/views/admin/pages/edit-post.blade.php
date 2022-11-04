@extends('layouts.admin.admin-dash-layout')
@section('title') Izmena postova @endsection
@section('content')
    <!-- Main content -->
    <div class="content">
        @if(session('msg'))
            <div class="alert alert-success">
                <p class="text-white text-center pt-2">{{session('msg')}}</p>
            </div>
        @endif
        <div class="container-fluid">
            <form action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label for="main_photo">Glavna slika *</label>
                        <div class="container-fluid">
                            <img id="mainp" src='{{asset('assets/postImages/'.$post->main_photo)}}' alt="upload preview" width="100" height="100"/>
                            <input type="file" name="main_photo" id="main_photo"
                                   onchange="document.getElementById('mainp').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        @error('main_photo')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    {{--  KATEGORIJEEEEEEEE--}}
                    <div class="form-group py-5">
                        <h3>Kategorija *</h3>
                        <div>
                            <select class="form-select" name="category_id" aria-label="Default select example">
                                <option>Izaberite kategoriju</option>
                                @foreach ($categories as $category)
                                    <option {{ $category->id === $post->category_id ? ' selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('category_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Naslov *</label>
                        <input type="text" class="form-control
                               {{$errors->has('title') ? 'novalid' :  session('sent')}}" id="title" name="title"
                               placeholder="Naslov" value="{{$post->title}}">
                        @error('title')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="main_text"><span>Glavni tekst *</span></label>
                        <textarea id="main_text" name="main_text" class="w-100" rows="5" >{{$post->main_text}}</textarea>
                        @error('main_text')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Podnaslov *</label>
                        <input type="text" value="{{$post->subtitle}}" class="form-control  {{$errors->has('subtitle') ? 'novalid' :  session('sent')}}" id="subtitle" name="subtitle" placeholder="Podnaslov">
                        @error('subtitle')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="subtitle_text_1"><span>Podnaslov tekst 1 *</span></label>
                        <textarea id="subtitle_text_1" class="w-100" rows="5" name="subtitle_text_1">{{$post->subtitle_text1}}</textarea>
                        @error('subtitle_text_1')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="quote">Citat</label>
                        <input type="text" value="{{$post->quote}}" class="form-control {{$errors->has('quote') ? 'novalid' :  session('sent')}}" id="quote" name="quote" placeholder="Citat">
                        @error('quote')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="subtitle_text_2"><span>Podnaslov tekst 2</span></label>
                        <textarea id="subtitle_text_2" class="w-100" rows="5" name="subtitle_text_2">{{$post->subtitle_text2}}</textarea>
                        @error('subtitle_text_2')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Izmeni post</button>
                </div>
            </form>


        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
@section('CDN')
    <script>
        CKEDITOR.replace('main_text');
        CKEDITOR.replace('subtitle_text_1');
        CKEDITOR.replace('subtitle_text_2');
    </script>
@endsection
