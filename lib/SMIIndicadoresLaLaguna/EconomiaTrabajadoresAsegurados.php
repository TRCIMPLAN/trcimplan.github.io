<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna EconomiaTrabajadoresAsegurados
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

namespace SMIIndicadoresLaLaguna;

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
        $this->nombre      = 'Trabajadores Asegurados en La Laguna';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, La Laguna, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2013-11-30', 'valor' => '256808', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '253116', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-01-31', 'valor' => '254644', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-02-28', 'valor' => '255740', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '257532', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-04-30', 'valor' => '258709', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '259707', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '260725', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => '261332', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => '264250', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '266616', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 13500 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '267301', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => '268101', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '264904', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => '265053', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '267403', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '268943', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '270311', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '270352', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '271743', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '272455', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '274856', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '273771', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '275539', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '276239', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '272417', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '274382', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '277139', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '277295', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '279007', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '280088', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '283028', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '282497', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '285716', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '286807', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => '')));
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
      <h3>Gráfica de Trabajadores Asegurados en La Laguna</h3>
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
      data: [{ fecha: '2013-11-30', dato: 256808 },{ fecha: '2013-12-31', dato: 253116 },{ fecha: '2014-01-31', dato: 254644 },{ fecha: '2014-02-28', dato: 255740 },{ fecha: '2014-03-31', dato: 257532 },{ fecha: '2014-04-30', dato: 258709 },{ fecha: '2014-05-31', dato: 259707 },{ fecha: '2014-06-30', dato: 260725 },{ fecha: '2014-07-31', dato: 261332 },{ fecha: '2014-08-31', dato: 264250 },{ fecha: '2014-09-30', dato: 266616 },{ fecha: '2014-10-31', dato: 267301 },{ fecha: '2014-11-30', dato: 268101 },{ fecha: '2014-12-31', dato: 264904 },{ fecha: '2015-01-31', dato: 265053 },{ fecha: '2015-02-28', dato: 267403 },{ fecha: '2015-03-31', dato: 268943 },{ fecha: '2015-04-30', dato: 270311 },{ fecha: '2015-05-31', dato: 270352 },{ fecha: '2015-06-30', dato: 271743 },{ fecha: '2015-07-31', dato: 272455 },{ fecha: '2015-08-31', dato: 274856 },{ fecha: '2015-09-30', dato: 273771 },{ fecha: '2015-10-31', dato: 275539 },{ fecha: '2015-11-30', dato: 276239 },{ fecha: '2015-12-31', dato: 272417 },{ fecha: '2016-01-31', dato: 274382 },{ fecha: '2016-02-29', dato: 277139 },{ fecha: '2016-03-31', dato: 277295 },{ fecha: '2016-04-30', dato: 279007 },{ fecha: '2016-05-31', dato: 280088 },{ fecha: '2016-06-30', dato: 283028 },{ fecha: '2016-07-31', dato: 282497 },{ fecha: '2016-08-31', dato: 285716 },{ fecha: '2016-09-30', dato: 286807 }],
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
            <td>30/09/2016</td>
            <td>187057</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>30/09/2016</td>
            <td>76824</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>30/09/2016</td>
            <td>14257</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>30/09/2016</td>
            <td>8669</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>30/09/2016</td>
            <td>286807</td>
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
      data: [{ region: 'Torreón', dato: 187057 },{ region: 'Gómez Palacio', dato: 76824 },{ region: 'Lerdo', dato: 14257 },{ region: 'Matamoros', dato: 8669 },{ region: 'La Laguna', dato: 286807 }],
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
