<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Amy Silva">
<meta name="copyright" content="Amy Silva">
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta name="creation_Date" content="01-10-2019">

<link rel="preload" as="font" href="/assets/webfonts/lineto-circular-pro-black.woff2" type="font/woff2" crossorigin="">
<link rel="preload" as="font" href="/assets/webfonts/lineto-circular-pro-medium.woff2" type="font/woff2" crossorigin="">
<link rel="stylesheet" type="text/css" href="/assets/css/material.min.css">
<link rel="stylesheet" type="text/css" href="/assets/css/main.min.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- <script async="" src="/assets/js/jquery.fittext.js"></script> -->
<script async="" src="/assets/js/jquery.lettering.js"></script>
<script async="" src="/assets/js/jquery.textillate.js"></script>
<script async="" src="/assets/js/material.min.js"></script>
<script async="" src="/assets/js/app.min.js"></script>

<script>
    $(function () {
        $('.tlt').lettering();
        var $tlt = $('.tlt').textillate({ 
            loop: false,
            minDisplayTime: 40000,
            initialDelay: 0,
            autoStart: false,
            in: {
                effect: 'bounceIn',
                delayScale: .7,
                delay: 150,
                sync: false,
                shuffle: false,
                reverse: false
            },
        });
        
        $tlt.textillate('start');
        $tlt.on('mouseenter', function () { $tlt.textillate('start'); });
    })
</script>