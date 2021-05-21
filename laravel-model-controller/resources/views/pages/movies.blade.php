@extends('layouts.main-layout')

@section('content')

<section>
     <ul>
          @foreach ($movies as $movie)
               <li>
                    <a href="{{ route('movie', $movie -> id) }}">
                         {{ $movie -> original_title }}
                    </a>
               </li>
          @endforeach
     </ul>
</section>
    
@endsection