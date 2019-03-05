@extends('layouts.app')

@section('content')
  <div class="colonna">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="secondo-titolo">
                <h2>{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Slug:</strong>
              {{ $post->slug }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Descrizione:</strong>
              {{ $post->description }}
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Categoria:</strong>
              {{ $post->category_id }}
          </div>
          <a class="btn btn-primary" href="{{ route('posts.index') }}"> Torna indietro</a>
      </div>
    </div>
  </div>
@endsection
