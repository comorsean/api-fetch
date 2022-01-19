@extends('app')
@section('content')
  @foreach ($uniqueUserId as $post)
  <div class="container px-4 px-lg-5 pt-5 mb-5">
    <div class="row gx-4 gx-lg-5 justify-content-center pt-5 mb-5">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Posts preview-->
            <div class="post-preview">
              <h2 class="post-title">Posted by author with id {{ $post['userId'] }}</h2>
              <p class="post-meta">
                  {{ $countUnique[$post['userId']] }} posts
              </p>
              <a class="btn btn-secondary text-white" href="{{ route('post.show', $post['userId']) }}">View more</a>
            </div>
            <hr class="my-4" />
            <!-- Divider-->
        </div>
    </div>
  </div>
  @endforeach
@endsection

