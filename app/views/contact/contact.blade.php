@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row-fluid">
                    <div class="row-fluid">
                        <div class="col-md-12 text-center">Az alábbi elérhetőségeken vagyok elérhető. Emailben a nap 24 órájában, telefonon pedig 9 órától 22 óráig.</div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-6">
                            <h3>Online elérhetőségeim</h3>
                            Email cím: boros.tamas456[kukac]gmail.com<br>
                            Skype: boros.tamas456<br>
                            Facebook <a class="links" href="https://www.facebook.com/boros.tamas1">adatlapom</a><br>
                            Facebook <a class="links" href="https://www.facebook.com/TomiDevPage">fejlesztői oldalam</a><br>
                            Üzenet Facebookra: boros.tamas1[kukac]facebook.com<br>
                            LinkedIn <a class="links" href="https://www.linkedin.com/pub/tam%C3%A1s-boros/93/299/a5a">profil</a>
                        </div>
                        <div class="col-md-6">
                            <h3>Üzenjen most</h3>
                            <form>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="input-group has-feedback" id="nameGroup">
                                            <span class="input-group-addon">Név:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <input class="form-control" type="text" id="name" placeholder="Az ön neve, amin szólíthatom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="input-group has-feedback" id="emailGroup">
                                            <span class="input-group-addon">Em@il:&nbsp;</span>
                                            <input class="form-control" type="email" id="email" placeholder="Az ön email címe amin kereshetem">
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="input-group" id="messageGroup">
                                            <span class="input-group-addon">Üzenet:</span>
                                            <textarea class="form-control" rows="4" id="message" placeholder="Üzenete"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="input-group has-feedback" id="captchaGroup">
                                            <span class="input-group-addon"><span id="elso">'.$rand[0].'</span>+<span id="masodik">'.$rand[1].'</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span></span>
                                            <input class="form-control" type="text" id="captcha" placeholder="Ön nem egy robot, ugye?">
                                            <input type="hidden" id="captchaNum" value="'.$captchaNum.'">
                                        </div>
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12"><button type="button" class="btn btn-default" id="sendMessage">Üzenet küldése</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-12 separator">&nbsp;</div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <h3>Offline elérhetőségek</h3>
                            Telefonszámom: +36-30/272-6576
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <h3>Önéletrajzom letöltése PDF formátumban (magyar)</h3>
                            A letöltéshez kattintson a <a class="links" href="../resources/HU_Europass-CV-Boros.pdf">IDE</a>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <h3>Download my CV in PDF file format(english)</h3>
                            To download the file click <a class="links" href="../resources/EN_Europass-CV-Boros.pdf">HERE</a>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="col-md-12">
                            <h3>Vcard letöltése</h3>
                            A letöltéshez kattintson a <a class="links" href="../resources/boros_tamas.vcf">IDE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop