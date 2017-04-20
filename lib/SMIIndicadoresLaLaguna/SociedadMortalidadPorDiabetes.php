<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SociedadMortalidadPorDiabetes
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
 * Clase SociedadMortalidadPorDiabetes
 */
class SociedadMortalidadPorDiabetes extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Mortalidad por Diabetes en La Laguna';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-mortalidad-por-diabetes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Tasa de mortalidad por diabetes mellitus. Defunciones por diabetes por cada diez mil defunciones.
Se incluye en el subíndice "Sociedad Incluyente, Preparada y Sana" de IMCO.';
        $this->claves      = 'IMPLAN, La Laguna, Salud, Índice de Competitividad Urbana';
        // Para el Organizador
        $this->categorias  = array('Salud', 'Índice de Competitividad Urbana');
        $this->fuentes     = array('SINAIS (SSA)');
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
            array('fecha' => '2000-12-31', 'valor' => '6.1000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2001-12-31', 'valor' => '6.4000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2002-12-31', 'valor' => '6.7000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2003-12-31', 'valor' => '7.2000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2004-12-31', 'valor' => '7.7000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '8.7000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2006-12-31', 'valor' => '8.3000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '8.1000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '8.3000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '8.2000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '7.8000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '7.7000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '7.1000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => 'Dirección General de Información en Salud (DGIS). Base de datos de defunciones generales 1979-2007. [en línea]: Sistema Nacional de Información en Salud (SINAIS). [México]: Secretaría de Salud. <http://www.sinais.salud.gob.mx> [Consulta: 01 abril 2014].'),
            array('fecha' => '2013-12-31', 'valor' => '7.5000', 'fuente_nombre' => 'SINAIS (SSA)', 'notas' => '')));
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
      <h3>Gráfica de Mortalidad por Diabetes en La Laguna</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Por cada 10 mil.</p>
      <h3>Observaciones</h3>
<p>Los datos pueden modificarse debido al manejo de los registros administrativos por parte de la Secretaria de Salud.</p>

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
      data: [{ fecha: '2000-12-31', dato: 6.1000 },{ fecha: '2001-12-31', dato: 6.4000 },{ fecha: '2002-12-31', dato: 6.7000 },{ fecha: '2003-12-31', dato: 7.2000 },{ fecha: '2004-12-31', dato: 7.7000 },{ fecha: '2005-12-31', dato: 8.7000 },{ fecha: '2006-12-31', dato: 8.3000 },{ fecha: '2007-12-31', dato: 8.1000 },{ fecha: '2008-12-31', dato: 8.3000 },{ fecha: '2009-12-31', dato: 8.2000 },{ fecha: '2010-12-31', dato: 7.8000 },{ fecha: '2011-12-31', dato: 7.7000 },{ fecha: '2012-12-31', dato: 7.1000 },{ fecha: '2013-12-31', dato: 7.5000 }],
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
      <h3>Gráfica con los últimos datos de Mortalidad por Diabetes</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Mortalidad por Diabetes</h3>
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
            <td>31/12/2013</td>
            <td>7.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2013</td>
            <td>8.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2013</td>
            <td>7.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2013</td>
            <td>6.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/12/2013</td>
            <td>7.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>31/12/2013</td>
            <td>8.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>31/12/2013</td>
            <td>6.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>31/12/2013</td>
            <td>7.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 10 mil.</p>
      <h3>Observaciones</h3>
<p>Los datos pueden modificarse debido al manejo de los registros administrativos por parte de la Secretaria de Salud.</p>

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
      data: [{ region: 'Torreón', dato: 7.4000 },{ region: 'Gómez Palacio', dato: 8.0000 },{ region: 'Lerdo', dato: 7.3000 },{ region: 'Matamoros', dato: 6.8000 },{ region: 'La Laguna', dato: 7.5000 },{ region: 'Coahuila', dato: 8.1000 },{ region: 'Durango', dato: 6.6000 },{ region: 'Nacional', dato: 7.4000 }],
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

} // Clase SociedadMortalidadPorDiabetes

?>
