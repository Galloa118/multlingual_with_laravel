@extends('layouts.bootstrap')

@section('title', 'Articles Edit')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br />
            @include('_validation')
            <form method="POST" action="{{ route('articles.update', $article->id) }}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                @foreach(config('translatable.locales') as $locale)
                    <div class="form-group">
                        <label for="translation[{{$locale}}][title]">Title ({{$locale}})</label>
                        <input type="text" class="form-control" name="translation[{{$locale}}][title]" value="{{ $article->translate($locale)->title }}">
                    </div>
                    <div class="form-group">
                        <label for="translation[{{$locale}}][content]">Content ({{$locale}})</label>
                        <textarea rows="5" class="form-control" name="translation[{{$locale}}][content]">{{ $article->translate($locale)->content }}</textarea>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-default">Update</button>
            </form>
        </div>
    </div>
</div>

@stop
