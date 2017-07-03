@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Kompley Onkológiai vizsgálat</h2>
                <p class="lead">
                    A Komplex Onkológiai Kivizsgálás pontosabb eredményekkel szolgál, mintha CT-re, MR-re, vérvizsgálatra
                    vagy ultrahangra, tükrözésre menne! Itt választ kap minden kérdéseire a ki nem mutatott betegségekkel
                    kapcsolatban is.
                    A kórházakban csak néhány rákos sejttípust tudnak tesztelni, ezzel szemben mi a rendelőnkben 81-féle
                    jóindulatú és 67-féle rosszindulatú rákos sejtet tudunk azonosítani vizsgálati módszerünkkel. Nemcsak a
                    rákos sejtek jelenlétét állapítjuk meg, hanem sejttípus és elterjedtség szerint is pontos adatokkal
                    szolgálunk a testében esetleg előforduló daganatos sejtekről. Szúrás, vágás nélkül megtudja, hogy jó
                    vagy rosszindulatú sejtburjánzásról van-e szó, így nem veszélyeztetjük a még ép sejteket fertőzéssel.
                </p>
                <div class="list-group">
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Komplex állapotfelmérés</h4>
                        <p class="list-group-item-text">A szervek közötti csapatmunkát vizsgáljuk. Kiderül, hol van alulműködés vagy túlműködés az egyes
                            szerveinél.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Azonnali vérkép meghatározása</h4>
                        <p class="list-group-item-text">Szúrás nélkül, az akupunktúrás pontokon keresztül: 20 paraméter vizsgálata pl. máj-, vesefunkciók, vércukorszint, koleszterinszint stb.</p>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Jóindulatú daganatos sejtek jelenlétének, elterjedtségük mértékének vizsgálata. 81-féle sejttípus</h4>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Rosszindulatú daganatos sejtek jelenlétének, elterjedtségük mértékének vizsgálata. 67-féle sejttípus</h4>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">AFR teszt.</h4>
                        <p class="list-group-item-text">A vizsgált szervek négyzetcentiméteres felbontású képszerű vizsgálata, mely megmutatja, hogy
                            pillanatnyilag milyen állapotban vannak.</p>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Nehézfémek és radioaktív anyagok jelenlétének tesztelése</h4>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Parazita, gomba és baktérium teszt</h4>
                        <p class="list-group-item-text">Élősködőket, parazitákat és gombákat vizsgálunk. Megnézzük bármelyikből van-e betegségeket okozó
                            mennyiség a szervezetében.56-féle parazita, 48-féle baktérium és 38-féle gomba jelenlétének tesztelése.</p>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Vegyszerterheltség vizsgálata</h4>
                        <p class="list-group-item-text">Itt kiderül van-e valamilyen gyógyszermaradvány, radioaktív anyag, nehézfém a szervezetében.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vírusok tesztelése</h4>
                        <p class="list-group-item-text">11 vírust vizsgálunk meg, hogy előfordul-e az Ön szervezetében betegséget okozó mennyiségben. (Köztük a DNS-t károsító vírust is.)</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Vitamin és nyomelem háztartás tesztelése</h4>
                        <p class="list-group-item-text">Kiderül, hogy a szervezete működéséhez minden szükséges vitamin és nyomelem megvan-e.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Homeopátia-teszt 1.</h4>
                        <p class="list-group-item-text">Homeopátiás készítmények, táplálékkiegészítők szükségességének vizsgálata.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Homeopátia-teszt 2.</h4>
                        <p class="list-group-item-text">A kezelési programok szükségességének tesztelése</p>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Radioaktív terheltségi teszt</h4>
                        <p class="list-group-item-text">Kifejezetten a veszélyes környezetben dolgozóknak ajánlott: kiderül, hogy káros hatással van-e szervezetére</p>
                    </a>
                    <a href="#" class="list-group-item deafultCursor">
                        <h4 class="list-group-item-heading">Gyógyszer vagy egyéb hozott anyag tesztelése</h4>
                        <p class="list-group-item-text">Kiderül, hogy káros hatással van-e szervezetére, esetleg érdemes lenne-e kicserélni.</p>
                    </a>
                    <a href="#" class="list-group-item defaultCursor">
                        <h4 class="list-group-item-heading">Azonnali eredmény kiértékelés, személyes konzultációval</h4>
                        <p class="list-group-item-text">Így nem kell napokat, heteket várnia a vizsgálatok eredményeire, azonnal elkezdheti az Önnek kialakított terápiát és azonnal a gyógyulás útjára léphet, egészségesebb, sikeresebb emberként élheti életét.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop