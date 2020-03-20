@extends('layouts.privacy-policy')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-privacy-policy')
  @endwhile
@endsection
