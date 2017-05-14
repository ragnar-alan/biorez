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
                <p class="text-justify indentation">
                    Ez a vizsgálat a kéz és láb akupunktúrás pontjain keresztül történik, ami a szervezet működéséről és élettani helyzetéről 80-90%- os képet ad.
                    <ul class="text-left originalHtml" style="padding-left:15px;">
                        <li>SPED diagnosztika</li>
                        <li>Lokális diagnosztika</li>
                    </ul>
                </p>
                <a href="{{action('MedicalExaminationController@standardExamination')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-male fa-5x"></i>
                <h3>Komplex férfi vizsgálat</h3>
                <p class="text-justify indentation">
                    A Komplex Férfi Kivizsgálás pontosabb eredményekkel szolgál, mintha CT-re, MR-re, vérvizsgálatra vagy ultrahangra, tükrözésre menne! Itt választ kap minden kérdésére a férfiaknál gyakran előforduló problémákkal és egyéb, ki nem mutatott betegségekkel kapcsolatban.
                </p>
                <a href="{{action('MedicalExaminationController@complexManExamination')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-female fa-5x"></i>
                <h3>Komplex női vizsgálat</h3>
                <p class="text-justify indentation">
                    A Komplex Női Kivizsgálás részletesebb, nagyságrendekkel több információval szolgál, mintha klasszikus nőgyógyászati szűrésre, vérvizsgálatra vagy ultrahangra menne! Itt választ kap minden kérdésére a nőknél gyakran előforduló problémákkal, a női test működésének különleges összefüggéseivel, és más, ki nem mutatott betegségekkel kapcsolatban.
                </p>
                <a href="{{action('MedicalExaminationController@complexWomanExamination')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex onkológiai vizsgálat</h3>
                <p class="text-justify indentation">A Komplex Onkológiai Kivizsgálás pontosabb eredményekkel szolgál, mintha CT-re, MR-re, vérvizsgálatra vagy ultrahangra, tükrözésre menne! Itt választ kap minden kérdéseire a ki nem mutatott betegségekkel kapcsolatban is
                </p>
                <a href="{{action('MedicalExaminationController@complexOncoExamination')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex rheuma vizsgálat</h3>
                <p class="text-justify indentation">
                    A Komplex Reumatológiai Kivizsgálás sokkal több információt ad testéről, mint a megszokott klinikai vizsgálatok! Itt választ kap minden kérdésére reumatológiai problémáival és egyéb, ki nem mutatott betegségekkel kapcsolatban.
                </p>
                <a href="{{action('MedicalExaminationController@complexRheumaExamination')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex allergia vizsgálat</h3>
                <p class="text-justify indentation">
                    Tudja mi az allergia ELSŐ számú oka, amit a legtöbb orvos nem vesz figyelembe? Módszerünkkel szabadulhat meg az allergiás rohamoktól az állandó tüsszögéstől és a gyötrelmes orrdugulástól mindenféle vegyszer és gyógyszer nélkül! A Komplex Allergia és Fül-Orr-Gégészeti Kivizsgálás pontosabb eredményekkel szolgál, mintha vérvizsgálatra, allergia tesztekre vagy ultrahangra, tükrözésre menne!
                </p>
                <a href="{{action('MedicalExaminationController@complexAllergyExamination')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-child fa-5x"></i>
                <h3>Baba váró vizsgálat</h3>
                <p class="text-justify">
                    Akkor Babaváró vizsgálatunkkal elképzelhető, hogy élete során most került a legközelebb édes kisbabája megszületéséhez…
                </p>
                <a href="{{action('MedicalExaminationController@pregnantExamination')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
    </div>
@stop