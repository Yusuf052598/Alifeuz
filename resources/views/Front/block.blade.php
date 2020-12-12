@extends('Front.layouts.layout')
 @section('content')
     <div class="col-lg-8">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12">
                    @if(isset($news))
                      @foreach($news as $new)
                       <div class="posts" style="width: 100%">
                           <div class="row">
                               <div class="col-lg-2"></div>
                               <div class="col-lg-8">
                                   <div class="posts__info" style="width: 50%">
                                       <span>
                                           <img src="{{'/'.$new->category->image}}" class="icons" alt="bu rasm" style="height: 25px;width: 25px">
                                           <a href="#" style="color: black;text-decoration: none">{{$new->category->name()}}</a>
                                       </span>
                                       <span>{{$new->user->name}}</span>
                                       <span>
                                           <?php if (isset($new->created_at)):
                                               $date = strtotime($new->created_at);
                                               echo date('d:m:Y', $date);
                                           endif;
                                           ?>
                                       </span>
                                   </div>
                                   <div class="posts__head">
                                       <h2 class="text-dark text-center">
                                           {{$new->title()}}
                                       </h2>
                                   </div>
                                   <div class="posts__text">
                                       {!! $new->content_name() !!}
                                   </div>
                               </div>
                               <div class="col-lg-2"></div>
                           </div>
                     </div>
                      @endforeach
                    @endif
                 </div>
             </div>
         </div>
     </div>
 @endsection
