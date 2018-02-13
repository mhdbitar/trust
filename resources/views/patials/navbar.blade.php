<header id="nav">

    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-toggleable-md navbar-light w-100 navbar-c fixed-top">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="logo" src="{{asset('img/logo.png')}}" alt=""></a>

                <div class="collapse navbar-collapse px-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link links" href="#" onclick="autoScrollto('nav')" >@lang('site.home') <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#"  onclick="autoScrollto('who')">@lang('site.about')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#"  onclick="autoScrollto('why')">@lang('site.why_trust')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#" onclick="autoScrollto('services')">@lang('site.our_serv')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link links" href="#"  onclick="autoScrollto('video')">@lang('site.video')</a>
                        </li>
                    </ul>
                    <button class="btn btn-header">Pro Order</button>
                </div>
            </nav>
        </div>
    </div>

</header>