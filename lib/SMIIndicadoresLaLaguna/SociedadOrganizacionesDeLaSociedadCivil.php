<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadOrganizacionesDeLaSociedadCivil
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
 * Clase SociedadOrganizacionesDeLaSociedadCivil
 */
class SociedadOrganizacionesDeLaSociedadCivil extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Organizaciones de la Sociedad Civil en La Laguna';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-organizaciones-de-la-sociedad-civil';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Dentro del Índice de Competitividad Urbana del IMCO forma parte de subíndice de "Sistema Político Estable y Funcional". Este indicador busca captar la capacidad de la sociedad para organizarse y ejercer presión social sobre las autoridades. Se incluyen iglesias y organizaciones religiosas.';
        $this->claves      = 'IMPLAN, La Laguna, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('IMCO', 'RFOSC');
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
            'valor' => array('enca' => 'Dato', 'formato' => 'decimal'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2008-12-31', 'valor' => '6.3110', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '6.3110', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '6.3110', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '6.3110', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '6.3110', 'fuente_nombre' => 'IMCO', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '41.2200', 'fuente_nombre' => 'RFOSC', 'notas' => 'Consulta de [Base de Datos](http://www.corresponsabilidad.gob.mx/?p=f8e8b1feff822753a39b21de69259fd6&)'),
            array('fecha' => '2016-11-25', 'valor' => '49.1400', 'fuente_nombre' => 'RFOSC', 'notas' => '')));
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
      <h3>Gráfica de Organizaciones de la Sociedad Civil en La Laguna con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta <a href="http://www.corresponsabilidad.gob.mx/">Base de Datos</a></p>

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
  if (typeof vargraficaDatosImco === 'undefined') {
    vargraficaDatosImco = Morris.Line({
      element: 'graficaDatosImco',
      data: [{ fecha: '2008-12-31', dato: 6.3110 },{ fecha: '2009-12-31', dato: 6.3110 },{ fecha: '2010-12-31', dato: 6.3110 },{ fecha: '2011-12-31', dato: 6.3110 },{ fecha: '2012-12-31', dato: 6.3110 }],
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
      <h3>Gráfica de Organizaciones de la Sociedad Civil en La Laguna con fuente RFOSC</h3>
      <div id="graficaDatosRfosc" class="grafica"></div>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta <a href="http://www.corresponsabilidad.gob.mx/">Base de Datos</a></p>

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
  if (typeof vargraficaDatosRfosc === 'undefined') {
    vargraficaDatosRfosc = Morris.Line({
      element: 'graficaDatosRfosc',
      data: [{ fecha: '2014-03-31', dato: 41.2200 },{ fecha: '2016-11-25', dato: 49.1400 }],
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
      <h3>Gráfica con los últimos datos de Organizaciones de la Sociedad Civil</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Organizaciones de la Sociedad Civil</h3>
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
            <td>25/11/2016</td>
            <td>55.0500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>25/11/2016</td>
            <td>57.5500</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>25/11/2016</td>
            <td>31.3000</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>25/11/2016</td>
            <td>11.0100</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>25/11/2016</td>
            <td>49.1400</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>25/11/2016</td>
            <td>26.4300</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>25/11/2016</td>
            <td>143.3800</td>
            <td>RFOSC</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>25/11/2016</td>
            <td>28.8400</td>
            <td>RFOSC</td>
            <td>http://www.corresponsabilidad.gob.mx/ http://166.78.45.36/portal/</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Unidades: Organizaciones por cada 100 mil habitantes. Fuente: Secretaría de Gobernación (SEGOB), 2013. 
Registro Federal de Organizaciones de la Sociedad Civil. Consulta <a href="http://www.corresponsabilidad.gob.mx/">Base de Datos</a></p>

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
      data: [{ region: 'Torreón', dato: 55.0500 },{ region: 'Gómez Palacio', dato: 57.5500 },{ region: 'Lerdo', dato: 31.3000 },{ region: 'Matamoros', dato: 11.0100 },{ region: 'La Laguna', dato: 49.1400 },{ region: 'Coahuila', dato: 26.4300 },{ region: 'Durango', dato: 143.3800 },{ region: 'Nacional', dato: 28.8400 }],
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

} // Clase SociedadOrganizacionesDeLaSociedadCivil

?>
