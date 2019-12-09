<script>
    var slider = new MasterSlider();
    slider.setup('masterslider' , {
            loop: !0,
            width:630,
            height:944,
            layout: "autofill",
            fillMode: "fit",
            view:"parallaxMask"
        });
    slider.control('arrows', {autohide:!1});
    slider.control('bullets' , {autohide:!1, dir:"h", align:"top", margin: -80});
</script>