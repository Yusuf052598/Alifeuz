@extends('Front.layouts.layout')
@section('content')
    <div class="col-6" style="top: 87px;left: 400px;">
        <div class="jadval">
            <span class="sana">{{dateFunction(date('m'), date('d'))}}  {{MonthFunction(date('m'))}} {{hafta(date("N", strtotime(date("Y-m-d"))))}}</span>
            <a href="#" class="ss">
             <span class="svernut">
               <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                 <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
               </svg>
                 <span class="ml-1">свернут</span>
             </span>
            </a>
        @if(isset($news))
          @foreach($news as  $new)
            <div class="d-flex mt-3">
                <div class="soat">
                      <p class="mx-2"><?php
                          if (isset($new->created_at)):
                           $date = strtotime($new->created_at);
                              echo date('H:i', $date);
                          endif;
                        ?>
                      </p>
                </div>
                <div>
                    <div>
                        <a href="{{route('blog.show',['user'=>$new->user->name,'id'=>$new->id,'url'=>$new->slugName()])}}">
                            <h6>{{$new->title()}}</h6>
                        </a>
                    </div>
                </div>
            </div>
          @endforeach
        @endif
            <a href="#" class="pokazat"><span>@lang('msg.koproq_korsatish')</span>
                <span class="ml-2">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                     </svg>
                </span>
            </a>
        </div>

        <div class="d-flex">
            <div class="nastroyka">
                <a href="#">
                    <h5><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear mx-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
                            <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
                        </svg> <span>Настроить ленту</span></h5>
                </a>
            </div>

            <div class="dropdown ">
                <button class="btn bg-white dropdown-toggle px-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   @lang('msg.ommabop')
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('index')}}">@lang('msg.bugungi')</a>
                    <a class="dropdown-item" href="#">@lang('msg.hafta')</a>
                    <a class="dropdown-item" href="#">@lang('msg.oyiga')</a>
                    <a class="dropdown-item" href="#">@lang('msg.hamma_vaqt')</a>
                </div>
            </div>

            <div class="sveji">
                <a href="#">@lang('msg.yangi')</a>
            </div>
        </div>
        @if(isset($news))
          @foreach($news as $new)
           <div class="posts" style="padding-bottom: 1px">
            <div class="posts__info">
                <p>
                    <img src="{{'/'.$new->category->image}}" class="icons" alt="bu rasm" style="height: 25px;width: 25px">
                    <a href="#" style="color: black;text-decoration: none">{{$new->category->name()}}</a>
                </p>
                <p > {{$new->user->name}}</p>
                <p >
                    <?php if (isset($new->created_at)):
                        $datetime = strtotime($new->created_at);
                        $data=date('d',$datetime);
                        $month=date('m', $datetime);
                        echo $data.'-'.MonthFunction($month);
                    endif;
                    ?>
                </p>
                <a href="#" class="subs">
                    <img src="/Front/img/plus.png" class="icons">Подписаться
                </a>
            </div>
            <div class="posts__head">
                <p>
                    {{$new->title()}}
                </p>
            </div>
            <div class="posts__text">
                <p>
                    {{$new->subtitle()}}
                </p>
            </div>
            <div class="posts__foto">
                <img src="{{'/'.$new->img}}" width="640px" height="460px"  style="margin-left: 0" alt="">
            </div>
            <div class="posts__coments">
                <a href="#" style="color: #0c0c0c; text-decoration: none"><i class="far fa-comment"></i>   135</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="far fa-bookmark"></i>  25</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none"><i class="fas fa-retweet" style="padding-right: 3px"></i>100</a>
                <a href="#" style="color: #0c0c0c;text-decoration: none">
                    <i class="fas fa-angle-down" style="padding-right: 4px"></i>125<i class="fas fa-angle-up" style="padding-left: 1px"></i>
                </a>
            </div>
        </div>
          @endforeach
        @endif
        <div class="my-5" style="margin-left: 35%;">
            <button class="btn bg-white" style="border: 1px solid black" >@lang('msg.koproq_korsatish')</button>
        </div>
    </div>
    <div class="col-3" style="padding-left: 30px; margin-top: 90px; position: fixed;right: 0;height: 90%">
        <h5>Комментарии <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg></h5>

        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/ce8b1f56-4bed-e553-6a5a-857e944f8c32/-/scale_crop/20x20/" alt="">
            <span><a href="#">Елизавита Князева</a></span>
            <p>Патриоты так этим говном и <br> пользуются.</p>
            <a href="#">«Яндекс.Браузер» добавил…</a>
        </div>
        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/8f5fcab3-afd2-f416-60a5-8aad805c05ed/-/scale_crop/20x20/" alt="">
            <span><a href="#">Елизавита Князева</a></span>
            <p>Документация тоже есть. <br> Выдаём её при запросе)</p>
            <a href="#">GeekBench: MacBook на…</a>
        </div>
        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/72df5a90-37b7-8a83-258e-29283e61b6fc/-/scale_crop/20x20/" alt="">
            <span><a href="#">Антон</a></span>
            <p>Если нужна соль, то можете <br> видимо обменять что-нибудь <br> не нужное.</p>
            <a href="#">«Яндекс.Браузер» добавил…</a>
        </div>
        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/ce8b1f56-4bed-e553-6a5a-857e944f8c32/-/scale_crop/20x20/" alt="">
            <span><a href="#">Елизавита Князева</a></span>
            <p>Патриоты так этим говном и <br> пользуются.</p>
            <a href="#">«Яндекс.Браузер» добавил…</a>
        </div>
        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/ed9ea78e-209d-87a7-1e28-9f59298cf582/-/scale_crop/20x20/" alt="">
            <span><a href="#">Ivan Vishnyakov</a></span>
            <p>Посмотрим будет ли <br> даже топить за инвестиции нам</p>
            <a href="#">Вы просто забыли, какая природа…</a>
        </div>
        <div class="info mb-3">
            <img class="rounded" src="https://leonardo.osnova.io/ce8b1f56-4bed-e553-6a5a-857e944f8c32/-/scale_crop/20x20/" alt="">
            <span><a href="#">Елизавита Князева</a></span>
            <p>Патриоты так этим говном и <br> пользуются.</p>
            <a href="#">«Яндекс.Браузер» добавил…</a>
        </div>
    </div>
@endsection
