<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <ul>
                        <li>
                            <a class="navbar-brand minimal-padding" href="{{ action('HomeController@index') }}">
                                <span style="float:left;margin-top: 12%;">Biorez</span>
                                <img class="img-responsive logo-width" src="{{ asset('assets/image/logo.png') }}" alt="logo"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ action("HomeController@index") }}" class="">{{ t("home", "nav") }}</a></li>
                        <li class=" dropdown">
                        <li><a href="{{ action("MedicalExaminationController@index") }}">{{ t("examinations", "nav") }}</a></li>
                        <li><a href="{{ action("HistoryController@index") }}">{{ t("past", "nav") }}</a></li>
                        <li><a href="{{ action("AboutBiorezonancyController@index") }}">{{ t("what_is_that", "nav") }}</a></li>
                        <li><a href="{{ action("AboutController@index") }}">{{ t("about", "nav") }}</a></li>
                        <li><a href="{{ action("ContactController@index") }}">{{ t("contact", "nav") }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>