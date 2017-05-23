<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaTrabajadoresAsegurados
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
        $this->nombre      = 'Trabajadores Asegurados en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves      = 'IMPLAN, Torreón, Empleo';
        // Para el Organizador
        $this->categorias  = array('Empleo');
        $this->fuentes     = array('Instituto Mexicano del Seguro Social (IMSS)');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2013-11-30', 'valor' => '162744', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '161591', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-01-31', 'valor' => '161679', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-02-28', 'valor' => '162541', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '163726', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-04-30', 'valor' => '164698', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '165762', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '166473', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => '167134', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => '169162', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '170628', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => 'La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 9037 trabajadores más durante el presente año.'),
            array('fecha' => '2014-10-31', 'valor' => '171233', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => '171804', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '169066', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => '169434', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '171485', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '172263', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '172563', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '173179', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '174252', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '174614', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '176500', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '175798', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '177681', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '178305', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '175813', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '177367', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '179103', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '179362', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '180602', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '181231', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '183582', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '183430', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '185952', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '187057', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-10-31', 'valor' => '187365', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '187176', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '183240', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-01-31', 'valor' => '183426', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-02-28', 'valor' => '185458', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '186824', 'fuente_nombre' => 'Instituto Mexicano del Seguro Social (IMSS)', 'notas' => '')));
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
      <h3>Gráfica de Trabajadores Asegurados en Torreón</h3>
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
      data: [{ fecha: '2013-11-30', dato: 162744 },{ fecha: '2013-12-31', dato: 161591 },{ fecha: '2014-01-31', dato: 161679 },{ fecha: '2014-02-28', dato: 162541 },{ fecha: '2014-03-31', dato: 163726 },{ fecha: '2014-04-30', dato: 164698 },{ fecha: '2014-05-31', dato: 165762 },{ fecha: '2014-06-30', dato: 166473 },{ fecha: '2014-07-31', dato: 167134 },{ fecha: '2014-08-31', dato: 169162 },{ fecha: '2014-09-30', dato: 170628 },{ fecha: '2014-10-31', dato: 171233 },{ fecha: '2014-11-30', dato: 171804 },{ fecha: '2014-12-31', dato: 169066 },{ fecha: '2015-01-31', dato: 169434 },{ fecha: '2015-02-28', dato: 171485 },{ fecha: '2015-03-31', dato: 172263 },{ fecha: '2015-04-30', dato: 172563 },{ fecha: '2015-05-31', dato: 173179 },{ fecha: '2015-06-30', dato: 174252 },{ fecha: '2015-07-31', dato: 174614 },{ fecha: '2015-08-31', dato: 176500 },{ fecha: '2015-09-30', dato: 175798 },{ fecha: '2015-10-31', dato: 177681 },{ fecha: '2015-11-30', dato: 178305 },{ fecha: '2015-12-31', dato: 175813 },{ fecha: '2016-01-31', dato: 177367 },{ fecha: '2016-02-29', dato: 179103 },{ fecha: '2016-03-31', dato: 179362 },{ fecha: '2016-04-30', dato: 180602 },{ fecha: '2016-05-31', dato: 181231 },{ fecha: '2016-06-30', dato: 183582 },{ fecha: '2016-07-31', dato: 183430 },{ fecha: '2016-08-31', dato: 185952 },{ fecha: '2016-09-30', dato: 187057 },{ fecha: '2016-10-31', dato: 187365 },{ fecha: '2016-11-30', dato: 187176 },{ fecha: '2016-12-31', dato: 183240 },{ fecha: '2017-01-31', dato: 183426 },{ fecha: '2017-02-28', dato: 185458 },{ fecha: '2017-03-31', dato: 186824 }],
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
