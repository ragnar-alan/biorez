@extends('layouts.layout')
@section('content')
    <div class="container">
        <h2>Kapcsolat</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="row-fluid">
                    <div class="row-fluid">
                        <div class="col-md-6">
                            <h3>Online elérhetőségeim</h3>
                            Email cím: kecskerezonancia[kukac]gmail.com<br>
                            Telefonszámom: {{-- TODO --}}

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
                                            {{-- TODO --}}
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop