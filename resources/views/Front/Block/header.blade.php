<nav class="navbar navbar-expand-lg navbar-light" style="width: 100%;position: fixed; z-index: 1">
    <i class="fas fa-align-justify"></i>
    <a class="navbar-brand" href="{{route('index')}}"><img style="width: 50px;height: 50px" class="img-logo" src="/Front/img/logo1.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline my-2 my-lg-0"  action="{{route('index.filter')}}">
        <input name="name" class="form-control mr-sm-2 pl-5" type="search" placeholder="Поиск">
        <i class="fas fa-search"></i>
        <div class="dropdown">
            <a  class="btn bg-white dropdown-toggle" style="font-weight: 700" href="{{route('index')}}" role="button" id="dropdownMenuLink" data-toggle="dropdown"                  aria-haspopup="true" aria-expanded="false">
               @lang('msg.yangi_maqola')
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{route('index')}}">@lang('msg.bosh_ish_joy')</a>
                <hr class="m-0">
                <a class="dropdown-item" href="#">@lang('msg.tadbirni_nashir_etish')</a>
                <hr class="m-0">
                <a class="dropdown-item" href="#">@lang('msg.reklama_yaratish')</a>
            </div>
        </div>
    </form>

    <div class="user">
        <a href="/locale/uz" class="{{(app()->getLocale()=="uz")? 'text-danger':''}}" style="margin-right: 5px; text-decoration: none">UZ</a>
        <a href="/locale/ru" class="{{(app()->getLocale()=="ru")? 'text-danger':''}}" style="margin-right: 5px; text-decoration: none">RU</a>
        <a href="#"><div class="far fa-bell" style="font-size: 25px"></div></a>
        <a href="#" style="text-decoration: none">
            <i class="far  fa-user mx-2" style="border: 1px solid;padding: 5px;border-radius: 50%;"></i>
            <span class="ml-1">@lang('msg.login')</span>
        </a>
    </div>
</nav>

