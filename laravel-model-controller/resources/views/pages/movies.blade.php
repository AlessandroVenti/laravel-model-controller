@extends('layouts.main-layout')

@section('content')

<section>
     <ul>
          @foreach ($movies as $movie)
               <li>
                    <a href="{{ route('movie', $movie -> id) }}">
                         <strong>{{ $movie -> original_title }}</strong>
                    </a>
               </li>
          @endforeach
     </ul>
</section>
    
@endsection