@extends('layouts.app')
<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>
@section('title', __('messages.navbar.information'))

@section('cover')
<div class="cover" style="background-image: url('{{ asset("img/bg6.jpg") }}')">
       <div id="jumbotron-cover" class="jumbotron jumbotron-fluid text-light">
           <div class="container text-center">
               <h1 class="display-6">@lang('historia.inicio.historia')</h1>
               <h1 class="display-2 awesome-font">Ilobasco </h1>
               <br>

               <i class="fa fa-book" aria-hidden="true"></i> @lang('historia.inicio.desde')<br>

           </div>
       </div>
   </div>
@endsection

@section('content')

@include('about.history.__toponimia')
   <div class="container">
       <div class ="row">
       <h2 class="my-4">@lang('historia.timeline.timeline')</h2>

 <div clas="cont" id="demo">
   <div class="timeline">

     @foreach($events as $event)
        @if($event->id % 2 == 0)
           <div class="cont left">
             <div class="content">
               <h2 align="right">{{$event->title}}</h2>
               <p align="justify"> {{$event->description}}</p>
                 </div>
            </div>
        @else
            <div class="cont right">
              <div class="content">
                <h2 align="left">{{$event->title}}</h2>
                <p align="justify"> {{$event->description}}</p>
                  </div>
             </div>
         @endif
      @endforeach
   </div>
           </div>
       </div>
</div>
   
<div style = "background-color:#FAFAFA;padding:1.2rem;">
     <div class = "container"> 
        <div class = "row" > <div class = "col-12" align = "center"><h2>@lang('historia.personajes.personajes')</h2></div></div>
</div>
    <br>
@include('about.history.__personajes')
</div>
       

@endsection

@push('js-complements')
    <script src="{{ asset('js/effect.js') }}"></script>
@endpush
