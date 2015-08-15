
<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script>
  // Photo slider
  jQuery(document).ready(function ($) {
    var options = {
        $AutoPlay: true,
        $ChanceToShow: 5,
        $DragOrientation: 1,
        $AutoPlayInterval: 12000
    };
    var jssor_slider1 = new $JssorSlider$("pmsl_container", options);
    // responsive code begin
    function ScaleSlider() {
        var parentWidth = $('#pmsl_container').parent().width();
        if (parentWidth) {
            jssor_slider1.$ScaleWidth(parentWidth);
        }
        else
            window.setTimeout(ScaleSlider, 30);
    }
    // Scale slider after document ready
    ScaleSlider();
    // Scale slider while window load/resize/orientationchange.
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    // responsive code end
  });
</script>

