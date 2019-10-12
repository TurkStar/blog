@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')
<div class="col-md-9 mx-auto">
  @foreach($articles as $article)
    <div class="post-preview">
        <a href="{{route('single',[$article->getCategory->slug, $article->slug])}}">
            <h2 class="post-title">
                {{ $article->title }}
            </h2>
            <img src="{{$article->image}}" />
            <h3 class="post-subtitle">
                {{ str_limit($article->content, 75) }}
            </h3>
        </a>
        <p class="post-meta">Kategori : <a href="#">{{ $article->getCategory->name }}</a>
          <span class="float-right">{{ $article->created_at->diffForHumans() }}</span>
        </p>
    </div>
    @if(!$loop->last)
    <hr>
  @endif
  @endforeach


    <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
    </div>
</div>

@include('front.widgets.categoryWidget')

@endsection
