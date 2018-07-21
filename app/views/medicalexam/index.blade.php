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
                <h3>Alap vizsgálat</h3>
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
                <i class="circle circle-icons fa fa-medkit fa-5x"></i>
                <h3>Komplex vizsgálat</h3>
                <p class="text-justify indentation">
                    Tudja mi az allergia ELSŐ számú oka, amit a legtöbb orvos nem vesz figyelembe? Módszerünkkel szabadulhat meg az allergiás rohamoktól az állandó tüsszögéstől és a gyötrelmes orrdugulástól mindenféle vegyszer és gyógyszer nélkül! A Komplex Allergia és Fül-Orr-Gégészeti Kivizsgálás pontosabb eredményekkel szolgál, mintha vérvizsgálatra, allergia tesztekre vagy ultrahangra, tükrözésre menne!
                </p>
                <a href="{{action('MedicalExaminationController@complexAllergyExamination')}}" class="btn btn-success">Tovább</a>
            </div>
            <div class="col-lg-4 text-center main-box">
                <i class="circle circle-icons fa fa-user-md fa-5x"></i>
                <h3>Ellenőrző vizsgálat</h3>
                <p class="text-justify indentation">A Komplex Onkológiai Kivizsgálás pontosabb eredményekkel szolgál, mintha CT-re, MR-re, vérvizsgálatra vagy ultrahangra, tükrözésre menne! Itt választ kap minden kérdéseire a ki nem mutatott betegségekkel kapcsolatban is
                </p>
                <a href="{{action('MedicalExaminationController@complexOncoExamination')}}" class="btn btn-success">Tovább</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Kezelés</h2>
                <h3>2.000 Ft / kezelés</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p style="font-size: 20px;line-height: 30px;">
                    A kezelés lényege, hogy az egészséges rezgéseket megerősítse, a hibás, kóros rezgéseket pedig megszüntesse.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>Táplálék kiegészítő</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p style="font-size: 20px;line-height: 30px;">
                    A kezelés lényege, hogy az egészséges rezgéseket megerősítse, a hibás, kóros rezgéseket pedig megszüntesse.
                </p>
            </div>
        </div>
    </div>
@stop