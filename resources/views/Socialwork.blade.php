@extends('layouts/app')
@extends('layouts/partials/navbarother')
@section('content')
<div class="aboutother-banniere aboutother-banniere-services container-fuild py-5" style="">
   <div class="section-title">
      <h2>{{ $title}}</h2>
   </div>
</div>

@endsection('content')

@section('newsletter')
  @include('layouts/partials/footer')
@endsection('newsletter')
