@extends('layouts.main-layout')

@section('content')

<section>
     <ul>
          <li>
               {{ $movie -> title }}
               {{ $movie -> original_title }}
               {{ $movie -> nationality }}
               {{ $movie -> date }}
               {{ $movie -> vote }}
          </li>
     </ul>
</section>
    
@endsection