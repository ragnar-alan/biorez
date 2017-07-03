@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Standard vizsgálat</h2>
                <p class="lead">
                    Ez a vizsgálat a kéz és láb akupunktúrás pontjain keresztül történik, ami a szervezet működéséről és
                    élettani helyzetéről 80-90%- os képet ad.
                </p>
                <div class="list-group">
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">SPED diagnosztika</h4>
                        <p class="list-group-item-text">A szervezet gyors, általános felmérése. Vizsgálja: a fej a mellkas a kismedence szerveit, és az alsó-felső végtagokat az erek állapotát és a degeneratív elváltozásokra is felhívja a figyelmet.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Lokális diagnosztika</h4>
                        <p class="list-group-item-text">A szerveken belüli eltéréseket mutatja meg.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vegyi anyagok jelenlétének vizsgálata</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Nehézfémek és radioaktív anyagok jelenlétének tesztelése.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Radioaktív terheltségi teszt.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vitaminok és nyomelemek meghatározása tesztelése.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vírusok tesztelése.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Paraziták, gombák és baktériumok meghatározása, tesztelése.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vér laboratóriumi paramétereinek meghatározása szúrás nélkül, az akupunktúrás pontok használatával.</h4>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">AFR teszt</h4>
                        <p class="list-group-item-text">A vizsgált szervek nagy felbontású képszerű vizsgálata, mely tájékoztat, hogy pillanatnyilag milyen állapotban vannak.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Homeopátia</h4>
                        <p class="list-group-item-text">Táplálék kiegészítők szükségességének vizsgálata. A kezelési programok szükségességének megállapítása.</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ URL::previous() }}" class="btn btn-primary">Vissza</a>
            </div>
        </div>
    </div>
@stop