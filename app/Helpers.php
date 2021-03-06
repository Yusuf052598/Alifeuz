<?php

use Illuminate\Support\Facades\App;
function lang(){
    return App::getLocale();
}
function dateFunction($month, $data){
    switch ($month){
        case 1 : case 3 : case 5 : case 7 : case 8 :  case 10 : case 12: switch ($data){
        case 1:return 1;break;case 2:return 2;break;case 3:return 3;break;case 4:return 4;break;case 5:return 5;break;
        case 6:return 6;break;case 7:return 7;break;case 8:return 8;break;case 9:return 9;break;case 10:return 10;break;
        case 11:return 11;break;case 12:return 12;break;case 13:return 13;break;case 14:return 14;break;case 15:return 15;break;
        case 16:return 16;break;case 17:return 17;break;case 18:return 18;break;case 19:return 19;break;case 20:return 20;break;
        case 21:return 21;break;case 22:return 22;break;case 23:return 23;break;case 24:return 24;break;case 25:return 25;break;
        case 26:return 26;break;case 27:return 27;break;case 28:return 28;break;case 29:return 29;break;case 30:return 30;break;
        case 31:return 31;break;
    } ; break;
        case 4:case 6: case 9: case 11:switch ($data){
        case 1:return 1;break;case 2:return 2;break;case 3:return 3;break;case 4:return 4;break;case 5:return 5;break;
        case 6:return 6;break;case 7:return 7;break;case 8:return 8;break;case 9:return 9;break;case 10:return 10;break;
        case 11:return 11;break;case 12:return 12;break;case 13:return 13;break;case 14:return 14;break;case 15:return 15;break;
        case 16:return 16;break;case 17:return 17;break;case 18:return 18;break;case 19:return 19;break;case 20:return 20;break;
        case 21:return 21;break;case 22:return 22;break;case 23:return 23;break;case 24:return 24;break;case 25:return 25;break;
        case 26:return 26;break;case 27:return 27;break;case 28:return 28;break;case 29:return 29;break;case 30:return 30;break;
    };break;
        case 2:return 29;break;
     }
   }
   function MonthFunction($month){
    switch ($month){
        case 1: switch (App::getLocale()){
            case 'uz': return 'Yanvar';
            case 'ru': return 'Январь';
        }; break;
        case 2: switch (App::getLocale()){
            case 'uz': return 'Fevral';
            case 'ru': return 'Февраль';
        }; break;
        case 3: switch (App::getLocale()){
            case 'uz': return 'Mart';
            case 'ru': return 'Март';
        }; break;
        case 4: switch (App::getLocale()){
            case 'uz': return 'Aprel';
            case 'ru': return 'Aпреля';
        }; break;
        case 5: switch (App::getLocale()){
            case 'uz': return 'May';
            case 'ru': return 'Mай';
        }; break;
        case 6: switch (App::getLocale()){
            case 'uz': return 'Iyun';
            case 'ru': return 'Июнь';
        }; break;
        case 7:switch (App::getLocale()){
            case 'uz': return 'Iyul';
            case 'ru': return 'Июль';
        }; break;
        case 8: switch (App::getLocale()){
            case 'uz': return 'Avgust';
            case 'ru': return 'Август';
        }; break;
        case 9: switch (App::getLocale()){
            case 'uz': return 'Sentabr';
            case 'ru': return 'Cентябрь';
        }; break;
        case 10: switch (App::getLocale()){
            case 'uz': return 'Oktabr';
            case 'ru': return 'Октябрь';
        }; break;
        case 11: switch (App::getLocale()){
            case 'uz': return 'Noyabr';
            case 'ru': return 'Ноябрь';
        }; break;
        case 12: switch (App::getLocale()){
            case 'uz': return 'Dekabr';
            case 'ru': return 'Декабрь';
        }; break;
      }
   }
   function hafta($hatfa){
    switch ($hatfa){
        case 1: switch (App::getLocale()){
            case 'uz': return 'Dushanba';
            case 'ru': return 'Понедельник';
        }; break;
        case 2: switch (App::getLocale()){
            case 'uz': return 'Seshanba';
            case 'ru': return 'Bторник';
        }; break;
        case 3: switch (App::getLocale()){
            case 'uz': return 'Chorshanba';
            case 'ru': return 'Среда';
        }; break;
        case 4: switch (App::getLocale()){
            case 'uz': return 'Payshanba';
            case 'ru': return 'Четверг';
        }; break;
        case 5: switch (App::getLocale()){
            case 'uz': return 'Juma';
            case 'ru': return 'Пятница';
        }; break;
        case 6: switch (App::getLocale()){
            case 'uz': return 'Shanba';
            case 'ru': return 'Cуббота';
        }; break;
        case 7:switch (App::getLocale()){
            case 'uz': return 'Yakshanba';
            case 'ru': return 'Воскресенье';
        }; break;
    }
   }
?>
