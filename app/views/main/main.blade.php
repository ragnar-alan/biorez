@extends('layouts.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 slider">

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    Biorezonanciás állapotfelmérés!
                </h1>
                <p>
                    A módszer az egész testet vizsgálja, az akupunktúrás végpontokon keresztül, szúrás, vágás, kellemetlenség nélkül. Az egészséges állapottól való legkisebb eltérés is mérhető, így már akár az elváltozások megjelenése előtt jelezhetők egyes betegségek! A kezelés lényege, hogy az egészséges rezgéseket megerősítse, a hibás, kóros rezgéseket pedig megszüntesse. A vizsgálat során felállított állapotfelmérés eredménye után azonnal megkezdhető a személyre szabott kezelés, melynek során egészséges sejtekre jellemző rezgésekkel segítjük a szervezet harmonikus működését. A Biorezonanciás vizsgálat és energetikai kezelés nem helyettesíti, és nem válthatja ki a szükséges orvosi diagnosztikát és annak módszereit, illetve a szükséges orvos-gyógyászati terápiát - kezelést!
                </p>
                <div class="row">
                    <div class="col-lg-12">&nbsp;</div>
                </div>
                <div class="row">
                    <div class="col-lg-4 text-center main-box">
                        <i class="circle fa fa-history fa-5x"></i>
                        <h3>Bio rezonancia történelem</h3>
                            <p class="text-justify">A szervezet egészének informatikai rehabilitációjával foglalkozó terápiás irányzatot összefoglaló néven biorezonancia terápiának (BRT) nevezik. A biorezonancia terápiát az űrhajósok egészségmegőrzésére kezdték kifejleszteni.
                                Az 1920-as évektől foglalkoznak tudósok a bioinformatikával. A szervezet működésének (az életnek) alapja a jól működő, összehangolt sejtinformációs rendszer.
                            </p>
                        <a href="{{url('history')}}" class="btn btn-success">Tovább</a>
                    </div>
                    <div class="col-lg-4 text-center main-box">
                        <i class="circle fa fa-question-circle fa-5x"></i>
                        <h3>Mikor alkalmazható?</h3>
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
                    </div>
                    <div class="col-lg-4 text-center main-box">
                        <i class="circle fa fa-user-md fa-5x"></i>
                        <h3>Ismerj meg</h3>
                        <p class="text-justify">Daru Bálint vagyok, 1978-óta dolgozom az egészségügyben, jelenleg a Bács-Kiskun Megyei Kórházban.
                            Hamar megtapasztaltam, hogy a nyugati orvoslás mellett másra is szükség van a helyes és teljes értékű betegellátáshoz.
                            Kerestem azt a lehetőséget, módszert, amivel az eddig tanultakat kiegészíthettem.</p>
                        <a href="{{url('about')}}" class="btn btn-success">Tovább</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop