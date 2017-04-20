<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo GobiernoCapacidadFinanciera
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

namespace SMIIndicadoresLerdo;

/**
 * Clase GobiernoCapacidadFinanciera
 */
class GobiernoCapacidadFinanciera extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Capacidad Financiera en Lerdo';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'gobierno-capacidad-financiera';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Ingresos propios entre gastos corrientes. Indicador incluido en el índice de competitividad 2012 del Centro de Investigación y Docencia Económicas (CIDE).';
        $this->claves      = 'IMPLAN, Lerdo, Finanzas Públicas';
        // Para el Organizador
        $this->categorias  = array('Finanzas Públicas');
        $this->fuentes     = array('Elaboración propia con datos obtenidos del INEGI');
        $this->regiones    = array('Lerdo');
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
            array('fecha' => '2007-12-31', 'valor' => '25.5200', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '27.7100', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '46.3000', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '24.1400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '26.0300', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '23.7600', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '87.6400', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => 'El incremento en la capacidad financiera del municipio de Lerdo se debe a un considerable aumento en sus ingresos propios.'),
            array('fecha' => '2013-12-31', 'valor' => '87.6404', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '86.7984', 'fuente_nombre' => 'Elaboración propia con datos obtenidos del INEGI', 'notas' => '')));
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
      <h3>Gráfica de Capacidad Financiera en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El indicador de capacidad financiera a nivel nacional es de:</p>

<ul>
<li>2013 = 41.15%</li>
<li>2012 = 39.41%</li>
<li>2011 = 39.94%</li>
<li>2010 = 41.63%</li>
<li>2009 = 40.87%</li>
<li>2008 = 43.36%</li>
<li>2007 = 44.48%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

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
      data: [{ fecha: '2007-12-31', dato: 25.5200 },{ fecha: '2008-12-31', dato: 27.7100 },{ fecha: '2009-12-31', dato: 46.3000 },{ fecha: '2010-12-31', dato: 24.1400 },{ fecha: '2011-12-31', dato: 26.0300 },{ fecha: '2012-12-31', dato: 23.7600 },{ fecha: '2013-12-31', dato: 87.6404 },{ fecha: '2014-12-31', dato: 86.7984 }],
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
      <h3>Gráfica con los últimos datos de Capacidad Financiera</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Capacidad Financiera</h3>
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
            <td>31/12/2014</td>
            <td>65.24 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2014</td>
            <td>40.41 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2014</td>
            <td>86.80 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2014</td>
            <td>18.63 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/12/2014</td>
            <td>58.02 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>31/12/2014</td>
            <td>52.78 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>31/12/2014</td>
            <td>39.75 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>31/12/2014</td>
            <td>39.16 %</td>
            <td>Elaboración propia con datos obtenidos del INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>El indicador de capacidad financiera a nivel nacional es de:</p>

<ul>
<li>2013 = 41.15%</li>
<li>2012 = 39.41%</li>
<li>2011 = 39.94%</li>
<li>2010 = 41.63%</li>
<li>2009 = 40.87%</li>
<li>2008 = 43.36%</li>
<li>2007 = 44.48%</li>
</ul>

<p>Datos obtenidos de <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/finanzaspublicas/FPMun.asp?s=est&amp;c=11289&amp;proy=efipem_fmun">INEGI. Estadística de finanzas públicas estatales y municipales</a></p>

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
      data: [{ region: 'Torreón', dato: 65.2382 },{ region: 'Gómez Palacio', dato: 40.4069 },{ region: 'Lerdo', dato: 86.7984 },{ region: 'Matamoros', dato: 18.6306 },{ region: 'La Laguna', dato: 58.0197 },{ region: 'Coahuila', dato: 52.7785 },{ region: 'Durango', dato: 39.7498 },{ region: 'Nacional', dato: 39.1581 }],
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

} // Clase GobiernoCapacidadFinanciera

?>
