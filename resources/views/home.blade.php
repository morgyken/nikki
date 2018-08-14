@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>
                  @foreach($posts as $post)
                  <div class="jumbotron">
                    
                    <p>{{strstr($post->email, '@', -1)}}</p>
                    <div class="alert alert-success">
                      {{ $post-> email}}
                    </div>

                    <div class="alert alert-info">
                      {{ $post -> urlpost}}

                    </div>

                </div>

                @endforeach
              </div>
              {{ $posts->links() }}
          </div>
        </div>
    </div>
</div>
@endsection
