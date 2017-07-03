@extends('layouts.layout')
@section('content')
    <div class="container">
        <h2>Kapcsolat</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="row-fluid">
                    <div class="row-fluid">
                        <div class="col-md-6">
                            <h3>Elérhetőségeim</h3>
                            Email cím: kecskerezonancia[kukac]gmail.com<br>
                            Címünk: Doki Centrum <br>
                            Kecskemét, Hosszú utca 10 I. em.
                        </div>
                        <div class="col-md-6">
                            <h3>Üzenjen most</h3>
                            <form action="/contact/send" method="post">
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <div class="input-group has-feedback" id="nameGroup">
                                            <span class="input-group-addon">Név:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <input class="form-control" type="text" name="userName" id="name"
                                                   placeholder="Az ön neve, amin szólíthatom">
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
                                            <input class="form-control" type="email" name="userEmail" id="email"
                                                   placeholder="Az ön email címe amin kereshetem">
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
                                            <textarea class="form-control" rows="4" name="message" id="message"
                                                      placeholder="Üzenete"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12 text-center">
                                        <div class="g-recaptcha" data-sitekey="6LdArycUAAAAAAUHXQh10hpiJIka9aU9-fSc1oGp"></div>
                                    </div>
                                </div>
                                <div class="row-fluid">
                                    <div class="col-md-12 separator2">&nbsp;</div>
                                </div>
                                <div class="row-fluid text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default" id="sendMessage">Üzenet küldése
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop