<script type="text/javascript" src="../js/jssor.slider.min.js"></script>
<script>
  // PHOTO SLIDER PRESENTACION
  jQuery(document).ready(function ($) {
    var options = {
        $AutoPlay: true,
        $ChanceToShow: 5,
        $DragOrientation: 1,
        $AutoPlayInterval: 12000
    };
    var jssor_slider1 = new $JssorSlider$("aire_para_todos_container", options);
    function ScaleSlider() {
        var parentWidth = $('#aire_para_todos_container').parent().width();
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
</script>
<script>
  // PHOTO SLIDER FOTOGALERIA
  jQuery(document).ready(function ($) {
    var options = {
        $AutoPlay: true,
        $ChanceToShow: 5,
        $DragOrientation: 1,
        $AutoPlayInterval: 12000
    };
    var jssor_slider1 = new $JssorSlider$("diagnostico_integral_container", options);
    function ScaleSlider() {
        var parentWidth = $('#diagnostico_integral_container').parent().width();
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
</script>
