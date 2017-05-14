<div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <ul>
                        <li>
                            <a class="navbar-brand minimal-padding" href="{{ action('HomeController@index') }}">
                                <span style="float:left">Biorez</span>
                                <img class="img-responsive logo-width" src="{{ asset('assets/image/logo.png') }}" alt="logo"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ action("HomeController@index") }}" class="">{{ t("home", "nav") }}</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ t("procedures","nav") }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class=" dropdown">
                                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ t("treatments", "nav") }}</a>
                                </li>
                                <li><a href="#">{{ t("examinations", "nav") }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ action("HistoryController@index") }}">{{ t("past", "nav") }}</a></li>
                        <li><a href="#">{{ t("what_is_that", "nav") }}</a></li>
                        <li><a href="{{ action("AboutController@index") }}">{{ t("about", "nav") }}</a></li>
                        <li><a href="#">{{ t("contact", "nav") }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>