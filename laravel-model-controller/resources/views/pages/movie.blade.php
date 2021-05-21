@extends('layouts.main-layout')

@section('content')

<section class="detail">
     <ul>
          <li><strong>Title: {{ $movie -> title }}</strong></li>
          <li><strong>Original title: {{ $movie -> original_title }}</strong></li>
          <li><strong>Nationality: {{ $movie -> nationality }}</strong></li>
          <li><strong>Date: {{ $movie -> date }}</strong></li>
          <li><strong>Vote: {{ $movie -> vote }}</strong></li>
     </ul>
</section>
    
@endsection