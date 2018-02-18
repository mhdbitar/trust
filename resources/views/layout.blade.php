<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--<title>@yield('title')</title>--}}

        <link href="{{ asset('css/style-ltr.min.css') }}" rel="stylesheet" type="text/css">

    </head>
    <body>

        @include('patials.navbar')
        @include('patials.slider')
        @include('patials.who')
        @include('patials.why')
        @include('patials.elements')
        @include('patials.services')
        @include('patials.video')
        @include('patials.form')
        @include('patials.footer')


    </body>
    <script src="{{asset('js/script.min.js')}}"></script>
    <script>
             var revapi;

        $(document).ready(function() {
            $('.navbar-nav').find('a').click((e)=>{e.preventDefault();})
           
            $(window).scroll(()=>{

               var wscroll = $(window).scrollTop();

               if(wscroll > 100 ){
                   $('.navbar').css('height','60');
               }else{
                   $('.navbar').css('height','100')
               }
            })


            revapi = $('.tp-banner').revolution({
                delay: 9000,
                startwidth: 1170,
                startheight: 650,
                lazyLoad: "on",
                hideTimerBar: "on",
                fullWidth: "on",
                touchenabled: "on",
                navigationStyle: "round",
                forceFullWidth: "on",
                navigationVAlign: "bottom",
                navigationVOffset: "80",
                navigationHOffset: "-10",
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1]

            });
        });

        var scrollY = 0;
        var distance = 40;
        var speed = 28;
        function autoScrollto(el) {
            
            var currentY = window.pageYOffset; // the current place y in window
            var ypos = currentY + window.innerHeight; // height of window  +  current height for testing
            var bodyHeight = document.body.offsetHeight; //  total height of document
            var targetY = document.getElementById(el).offsetTop; // destence from top to element
            var animator = setTimeout('autoScrollto(\'' + el + '\')', speed);

            if (targetY > bodyHeight) {
                clearTimeout(animator);
                
            } else {

                if (currentY < targetY - distance) {
                    scrollY = currentY + distance;
                    window.scrollTo(0, scrollY);
                    if(currentY > 100 ){$('.navbar').css('height','60')}else{$('.navbar').css('height','100')}
                    
                } else if(currentY > targetY){
                    scrollY = currentY - distance;
                    window.scrollTo(0, scrollY);
                    if(currentY > 100 ){$('.navbar').css('height','60')}else{$('.navbar').css('height','100')}
                }else{
                    
                    clearTimeout(animator);
                   
                }

            }

        }
        var players = $('.youtube-player')
        var loadplayer = function(event){
        var target = event.currentTarget 
        var iframe = document.createElement('iframe');
        
        iframe.height = target.clientHeight
        iframe.width = target.clientwidth
        iframe.src = "https://www.youtube.com/embed/"  + 
                    target.dataset.videoId + '?autoplay=1' ;
        iframe.setAttribute('frameborder', 0);

        if (target.children.length) {
            target.replaceChild(iframe, target.firstElementChild)
          } else {
            target.appendChild(iframe)
          }
        }
        
        var config = { once: true }
        
        Array.from(players).forEach(function (player) {
          player.addEventListener('click', loadplayer, config)
        })
        

    </script>
   
</html>
