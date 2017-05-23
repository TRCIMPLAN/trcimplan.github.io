<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio EconomiaTrabajadoresAsegurados
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Trabajadores Asegurados en Gómez Palacio';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Gómez Palacio, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones    = array('Gómez Palacio');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2013-11-30', 'valor' => '72687', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '71209', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-01-31', 'valor' => '72154', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-02-28', 'valor' => '72228', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '72852', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-04-30', 'valor' => '73102', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '73102', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '73542', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => '73320', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => '73899', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '74974', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 3,765 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '75410', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => '75673', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '75458', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => '75552', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '74991', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '75673', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '76556', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '75489', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '75526', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '75788', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '76240', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '75868', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '75622', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '75613', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '74514', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '75077', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '75898', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '75262', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '75604', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '75643', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '76248', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '76152', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '76340', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '76824', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-10-31', 'valor' => '77803', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '77966', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '76569', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-01-31', 'valor' => '76953', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-02-28', 'valor' => '76309', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '76145', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => '')));
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
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Trabajadores Asegurados en Gómez Palacio</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2013-11-30', dato: 72687 },{ fecha: '2013-12-31', dato: 71209 },{ fecha: '2014-01-31', dato: 72154 },{ fecha: '2014-02-28', dato: 72228 },{ fecha: '2014-03-31', dato: 72852 },{ fecha: '2014-04-30', dato: 73102 },{ fecha: '2014-05-31', dato: 73102 },{ fecha: '2014-06-30', dato: 73542 },{ fecha: '2014-07-31', dato: 73320 },{ fecha: '2014-08-31', dato: 73899 },{ fecha: '2014-09-30', dato: 74974 },{ fecha: '2014-10-31', dato: 75410 },{ fecha: '2014-11-30', dato: 75673 },{ fecha: '2014-12-31', dato: 75458 },{ fecha: '2015-01-31', dato: 75552 },{ fecha: '2015-02-28', dato: 74991 },{ fecha: '2015-03-31', dato: 75673 },{ fecha: '2015-04-30', dato: 76556 },{ fecha: '2015-05-31', dato: 75489 },{ fecha: '2015-06-30', dato: 75526 },{ fecha: '2015-07-31', dato: 75788 },{ fecha: '2015-08-31', dato: 76240 },{ fecha: '2015-09-30', dato: 75868 },{ fecha: '2015-10-31', dato: 75622 },{ fecha: '2015-11-30', dato: 75613 },{ fecha: '2015-12-31', dato: 74514 },{ fecha: '2016-01-31', dato: 75077 },{ fecha: '2016-02-29', dato: 75898 },{ fecha: '2016-03-31', dato: 75262 },{ fecha: '2016-04-30', dato: 75604 },{ fecha: '2016-05-31', dato: 75643 },{ fecha: '2016-06-30', dato: 76248 },{ fecha: '2016-07-31', dato: 76152 },{ fecha: '2016-08-31', dato: 76340 },{ fecha: '2016-09-30', dato: 76824 },{ fecha: '2016-10-31', dato: 77803 },{ fecha: '2016-11-30', dato: 77966 },{ fecha: '2016-12-31', dato: 76569 },{ fecha: '2017-01-31', dato: 76953 },{ fecha: '2017-02-28', dato: 76309 },{ fecha: '2017-03-31', dato: 76145 }],
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
      <h3>Gráfica con los últimos datos de Trabajadores Asegurados</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Trabajadores Asegurados</h3>
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
            <td>186824</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/03/2017</td>
            <td>76145</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/03/2017</td>
            <td>15139</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/03/2017</td>
            <td>8415</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/03/2017</td>
            <td>286523</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>31/03/2017</td>
            <td>734936</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>31/03/2017</td>
            <td>235926</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

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
      data: [{ region: 'Torreón', dato: 186824 },{ region: 'Gómez Palacio', dato: 76145 },{ region: 'Lerdo', dato: 15139 },{ region: 'Matamoros', dato: 8415 },{ region: 'La Laguna', dato: 286523 },{ region: 'Coahuila', dato: 734936 },{ region: 'Durango', dato: 235926 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
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

} // Clase EconomiaTrabajadoresAsegurados

?>
