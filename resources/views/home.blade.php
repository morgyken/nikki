@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> </div>
                  @foreach($posts as $post)
                  <div class="jumbotron">
                    
                    
                    <div class="alert alert-success">
                      <h4>{{ $post-> email}}</h4>
                      
                     <p> {{ $post->token}} </p>

                    <div class="alert alert-info">
                     

                   <p> {{ $post -> urlpost}} </p>

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
