@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Vizsgálatok</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-user-o fa-5x"></i>
                <h3>Standard vizsgálat</h3>
                <p class="text-justify">A szervezet egészének informatikai rehabilitációjával foglalkozó terápiás irányzatot összefoglaló néven biorezonancia terápiának (BRT) nevezik. A biorezonancia terápiát az űrhajósok egészségmegőrzésére kezdték kifejleszteni.
                    Az 1920-as évektől foglalkoznak tudósok a bioinformatikával. A szervezet működésének (az életnek) alapja a jól működő, összehangolt sejtinformációs rendszer.
                </p>
                <a href="{{url('history')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-male fa-5x"></i>
                <h3>Komplex férfi vizsgálat</h3>
                <ul class="text-justify originalHtml">
                    <li>Akut és krónikus fájdalmak, gyulladásos betegségek esetén.</li>
                    <li>Allergiás bőrgyulladások, ekcéma, pikkelysömör, gyulladásos-pattanásos bőr esetén.</li>
                    <li>Alvási zavarok esetén.</li>
                    <li>Asztma, szénanátha esetén.</li>
                    <li>Cukorbetegség és mellékhatásainak esetén.</li>
                    <li>Depresszív lelkiállapotban.</li>
                    <li>Emésztési zavarok, székelési nehézségek esetén.</li>
                    <li>Hajhullás, kopaszodás esetén.</li>
                </ul>
                <a href="#" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-female fa-5x"></i>
                <h3>Komplex női vizsgálat</h3>
                <p class="text-justify">Daru Bálint vagyok, 1978-óta dolgozom az egészségügyben, jelenleg a Bács-Kiskun Megyei Kórházban.
                    Hamar megtapasztaltam, hogy a nyugati orvoslás mellett másra is szükség van a helyes és teljes értékű betegellátáshoz.
                    Kerestem azt a lehetőséget, módszert, amivel az eddig tanultakat kiegészíthettem.</p>
                <a href="{{url('about')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex onkológiai vizsgálat</h3>
                <p class="text-justify">A szervezet egészének informatikai rehabilitációjával foglalkozó terápiás irányzatot összefoglaló néven biorezonancia terápiának (BRT) nevezik. A biorezonancia terápiát az űrhajósok egészségmegőrzésére kezdték kifejleszteni.
                    Az 1920-as évektől foglalkoznak tudósok a bioinformatikával. A szervezet működésének (az életnek) alapja a jól működő, összehangolt sejtinformációs rendszer.
                </p>
                <a href="{{url('history')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex rheuma vizsgálat</h3>
                <ul class="text-justify originalHtml">
                    <li>Akut és krónikus fájdalmak, gyulladásos betegségek esetén.</li>
                    <li>Allergiás bőrgyulladások, ekcéma, pikkelysömör, gyulladásos-pattanásos bőr esetén.</li>
                    <li>Alvási zavarok esetén.</li>
                    <li>Asztma, szénanátha esetén.</li>
                    <li>Cukorbetegség és mellékhatásainak esetén.</li>
                    <li>Depresszív lelkiállapotban.</li>
                    <li>Emésztési zavarok, székelési nehézségek esetén.</li>
                    <li>Hajhullás, kopaszodás esetén.</li>
                </ul>
                <a href="#" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex allergia vizsgálat</h3>
                <p class="text-justify">Daru Bálint vagyok, 1978-óta dolgozom az egészségügyben, jelenleg a Bács-Kiskun Megyei Kórházban.
                    Hamar megtapasztaltam, hogy a nyugati orvoslás mellett másra is szükség van a helyes és teljes értékű betegellátáshoz.
                    Kerestem azt a lehetőséget, módszert, amivel az eddig tanultakat kiegészíthettem.</p>
                <a href="{{url('about')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-child fa-5x"></i>
                <h3>Baba váró vizsgálat</h3>
                <p class="text-justify">Daru Bálint vagyok, 1978-óta dolgozom az egészségügyben, jelenleg a Bács-Kiskun Megyei Kórházban.
                    Hamar megtapasztaltam, hogy a nyugati orvoslás mellett másra is szükség van a helyes és teljes értékű betegellátáshoz.
                    Kerestem azt a lehetőséget, módszert, amivel az eddig tanultakat kiegészíthettem.</p>
                <a href="{{url('about')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
    </div>
@stop