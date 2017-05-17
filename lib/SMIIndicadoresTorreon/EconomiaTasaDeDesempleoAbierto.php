<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTasaDeDesempleoAbierto
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaTasaDeDesempleoAbierto
 */
class EconomiaTasaDeDesempleoAbierto extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Tasa de Desempleo Abierto en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-tasa-de-desempleo-abierto';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Número total de desempleados entre la Población económicamente activa.';
        $this->claves      = 'IMPLAN, Torreón, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('INEGI', 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'IMCO');
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'porcentaje'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '1990-03-12', 'valor' => '2.6600', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2000-02-14', 'valor' => '1.0400', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2005-03-31', 'valor' => '5.0445', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-06-30', 'valor' => '4.1096', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-09-30', 'valor' => '2.5037', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '2.6700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-03-31', 'valor' => '5.2239', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-06-30', 'valor' => '4.9787', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-09-30', 'valor' => '7.0667', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2006-12-31', 'valor' => '5.1200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-03-31', 'valor' => '6.4917', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-06-30', 'valor' => '3.8748', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-09-30', 'valor' => '5.2555', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '6.4900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-03-31', 'valor' => '5.8993', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-06-30', 'valor' => '5.7949', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-09-30', 'valor' => '5.5556', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '4.0500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '3.9337', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-03-31', 'valor' => '7.4100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-06-30', 'valor' => '6.1200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-09-30', 'valor' => '9.4700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '6.4600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '6.2896', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-03-31', 'valor' => '7.5800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-06-25', 'valor' => '7.4600', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2010-06-30', 'valor' => '8.6200', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-09-30', 'valor' => '8.5600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '6.6800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '6.8149', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-03-31', 'valor' => '4.3600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-06-30', 'valor' => '5.8500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-09-30', 'valor' => '6.8000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '5.6400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '5.9403', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-03-31', 'valor' => '4.5300', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-06-30', 'valor' => '5.5000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-09-30', 'valor' => '5.5600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '4.7600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '4.7797', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2013-03-31', 'valor' => '4.7000', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '5.6500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-09-30', 'valor' => '5.2700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '4.0600', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '5.4400', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '5.1100', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '4.5700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '7.0900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '6.2700', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '6.2834', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '5.1100', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '6.2500', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '4.9333', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '5.4775', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '5.7800', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '5.6900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '4.0900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '4.2900', 'fuente_nombre' => 'Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos', 'notas' => '')));
        // Entregar
        return $this->datos_tabla->html();
    } // seccion_datos_html

    /**
     * Sección Datos JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_datos_javascript() {
        return $this->datos_tabla->javascript();
    } // seccion_datos_javascript

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Desempleo Abierto en Torreón con fuente INEGI</h3>
      <div id="graficaDatosInegi" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosInegi === 'undefined') {
    vargraficaDatosInegi = Morris.Line({
      element: 'graficaDatosInegi',
      data: [{ fecha: '1990-03-12', dato: 2.6600 },{ fecha: '2000-02-14', dato: 1.0400 },{ fecha: '2010-06-25', dato: 7.4600 },{ fecha: '2015-08-31', dato: 5.1100 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 2 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_2_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Desempleo Abierto en Torreón con fuente Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</h3>
      <div id="graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 2 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_2_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos === 'undefined') {
    vargraficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos = Morris.Line({
      element: 'graficaDatosEncuestaNacionalDeOcupacionYEmpleoEnoeMicrodatos',
      data: [{ fecha: '2005-03-31', dato: 5.0445 },{ fecha: '2005-06-30', dato: 4.1096 },{ fecha: '2005-09-30', dato: 2.5037 },{ fecha: '2005-12-31', dato: 2.6700 },{ fecha: '2006-03-31', dato: 5.2239 },{ fecha: '2006-06-30', dato: 4.9787 },{ fecha: '2006-09-30', dato: 7.0667 },{ fecha: '2006-12-31', dato: 5.1200 },{ fecha: '2007-03-31', dato: 6.4917 },{ fecha: '2007-06-30', dato: 3.8748 },{ fecha: '2007-09-30', dato: 5.2555 },{ fecha: '2007-12-31', dato: 6.4900 },{ fecha: '2008-03-31', dato: 5.8993 },{ fecha: '2008-06-30', dato: 5.7949 },{ fecha: '2008-09-30', dato: 5.5556 },{ fecha: '2008-12-31', dato: 4.0500 },{ fecha: '2009-03-31', dato: 7.4100 },{ fecha: '2009-06-30', dato: 6.1200 },{ fecha: '2009-09-30', dato: 9.4700 },{ fecha: '2009-12-31', dato: 6.4600 },{ fecha: '2010-03-31', dato: 7.5800 },{ fecha: '2010-06-30', dato: 8.6200 },{ fecha: '2010-09-30', dato: 8.5600 },{ fecha: '2010-12-31', dato: 6.6800 },{ fecha: '2011-03-31', dato: 4.3600 },{ fecha: '2011-06-30', dato: 5.8500 },{ fecha: '2011-09-30', dato: 6.8000 },{ fecha: '2011-12-31', dato: 5.6400 },{ fecha: '2012-03-31', dato: 4.5300 },{ fecha: '2012-06-30', dato: 5.5000 },{ fecha: '2012-09-30', dato: 5.5600 },{ fecha: '2012-12-31', dato: 4.7600 },{ fecha: '2013-03-31', dato: 4.7000 },{ fecha: '2013-06-30', dato: 5.6500 },{ fecha: '2013-09-30', dato: 5.2700 },{ fecha: '2013-12-31', dato: 4.0600 },{ fecha: '2014-03-31', dato: 5.4400 },{ fecha: '2014-06-30', dato: 5.1100 },{ fecha: '2014-09-30', dato: 4.5700 },{ fecha: '2014-12-31', dato: 7.0900 },{ fecha: '2015-03-31', dato: 6.2700 },{ fecha: '2015-06-30', dato: 6.2834 },{ fecha: '2015-09-30', dato: 6.2500 },{ fecha: '2015-12-31', dato: 4.9333 },{ fecha: '2016-03-31', dato: 5.4775 },{ fecha: '2016-06-30', dato: 5.7800 },{ fecha: '2016-09-30', dato: 5.6900 },{ fecha: '2016-12-31', dato: 4.0900 },{ fecha: '2017-03-31', dato: 4.2900 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Gráfica 3 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_3_html() {
        return <<<FINAL
      <h3>Gráfica de Tasa de Desempleo Abierto en Torreón con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 3.9337 },{ fecha: '2009-12-31', dato: 6.2896 },{ fecha: '2010-12-31', dato: 6.8149 },{ fecha: '2011-12-31', dato: 5.9403 },{ fecha: '2012-12-31', dato: 4.7797 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Tasa de Desempleo Abierto</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Desempleo Abierto</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>31/03/2017</td>
            <td>4.29 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/03/2017</td>
            <td>5.97 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/03/2017</td>
            <td>2.65 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/03/2017</td>
            <td>5.67 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/03/2017</td>
            <td>4.86 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>31/03/2017</td>
            <td>4.55 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>31/03/2017</td>
            <td>4.03 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>31/03/2017</td>
            <td>3.39 %</td>
            <td>Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Media nacional del indicador:</p>

<ul>
<li>2010 = 3.72</li>
<li>2010 = 0.98%</li>
<li>1990 = 2.32%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/consulta_resultados/iter2010.aspx?c=27329&amp;s=est">INEGI. Censos de población y vivienda</a></p>

<p>Media Nacional 2014:
1er. Trimestre: 4.80 %
2do. Trimestre: 4.90 %
3er. Trimestre: 5.20 %</p>

FINAL;
    } // seccion_otras_regiones_html

    /**
     * Sección Otras Regiones JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_otras_regiones_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 4.2900 },{ region: 'Gómez Palacio', dato: 5.9700 },{ region: 'Lerdo', dato: 2.6500 },{ region: 'Matamoros', dato: 5.6700 },{ region: 'La Laguna', dato: 4.8600 },{ region: 'Coahuila', dato: 4.5500 },{ region: 'Durango', dato: 4.0300 },{ region: 'Nacional', dato: 3.3900 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
FINAL;
    } // seccion_otras_regiones_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica-1', 'Gráfica 1', $this->seccion_grafica_1_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_1_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-2', 'Gráfica 2', $this->seccion_grafica_2_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_2_javascript());
        $this->lenguetas->agregar('smi-indicador-grafica-3', 'Gráfica 3', $this->seccion_grafica_3_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_3_javascript());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir el contenido de esta publicación que es un SchemaArticle
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript de las lengüetas, es el de las gráficas
        $this->javascript[] = $this->lenguetas->javascript();
        // JavaScript para la carga completa del documento, es el de la tabla con los datos
        $this->javascript[] = $this->datos_tabla->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaTasaDeDesempleoAbierto

?>
