<script type="text/javascript" src="../vendor/jssor/jssor.slider.min.js"></script>
<script>
  // Photo Slider Presentacion Monitores inicia
  jQuery(document).ready(function ($) {
    var options = {
        $AutoPlay: true,
        $ChanceToShow: 5,
        $DragOrientation: 1,
        $AutoPlayInterval: 12000
    };
    var jssor_slider1 = new $JssorSlider$("presentacion-monitor-empleo", options);
    function ScaleSlider() {
        var parentWidth = $('#presentacion-monitor-empleo').parent().width();
        if (parentWidth) {
            jssor_slider1.$ScaleWidth(parentWidth);
        }
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
  });
  // Photo Slider Presentacion Sector Automotriz termina
</script>
