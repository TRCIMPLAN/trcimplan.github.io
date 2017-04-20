<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadUniversidades
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
 * Clase SociedadUniversidades
 */
class SociedadUniversidades extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Universidades en Gómez Palacio';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sociedad-universidades';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Planteles de Instituciones de Educación Superior.';
        $this->claves      = 'IMPLAN, Gómez Palacio, Educación';
        // Para el Organizador
        $this->categorias  = array('Educación');
        $this->fuentes     = array('CIESLAG-FOMEC');
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
            array('fecha' => '2014-03-31', 'valor' => '9', 'fuente_nombre' => 'CIESLAG-FOMEC', 'notas' => '')));
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
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Universidades</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Universidades</h3>
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
            <td>31/03/2014</td>
            <td>18</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/03/2014</td>
            <td>9</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/03/2014</td>
            <td>3</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/03/2014</td>
            <td>1</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/03/2014</td>
            <td>31</td>
            <td>CIESLAG-FOMEC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Las escuelas y facultades de la UAdeC son contabilizadas en una unidad. Únicamente se contabilizan los planteles ubicados en Matamoros, Torreón, Gómez Palacio y Lerdo.</p>

<ul>
<li>Escuela Normal de la Laguna</li>
<li>Escuela Normal de Torreón</li>
<li>Instituto 18 de Marzo</li>
<li>Instituto Superior Francisco Gonzalez de la Vega</li>
<li>Instituto Tecnológico de Torreón (ITA 10)</li>
<li>Instituto Tecnológico y de Estudios Superiores de Monterrey Campus Laguna</li>
<li>Instituto Tecnológico de la Laguna</li>
<li>Instituto Tecnológico Superior de Lerdo</li>
<li>Universidad Autónoma Agraria Antonio Narro</li>
<li>Universidad Autónoma de Coahuila</li>
<li>Universidad Autónoma de la Laguna</li>
<li>Universidad Autónoma del Noreste</li>
<li>Universidad Iberoamericana</li>
<li>Universidad Juárez del Estado de Durango</li>
<li>Universidad La Salle</li>
<li>Universidad Pedagógica Nacional</li>
<li>Universidad del Valle de México</li>
<li>Universidad Tec Milenio</li>
<li>Universidad Interamericana para el Desarrollo</li>
<li>Universidad Politécnica de Gómez Palacio</li>
<li>Universidad del Desarrollo Profesional</li>
<li>National Institute of Information Technologies</li>
<li>Universidad Tecnológica de Torreón</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Matamoros</li>
<li>Instituto Estatal de Desarrollo Docente e investigación Educativa Unidad Torreón</li>
<li>Universidad Autónoma de Durango Campus Gómez Palacio</li>
<li>Universidad Autónoma de Durango Campus Torreón</li>
<li>Instituto Ma Esther Zuno de Echeverría</li>
<li>Instituto de Estudios Superiores y Educación Normal Gral. Lázaro Cárdenas</li>
<li>Universidad Tecnológica de La Laguna Durango</li>
<li>Universidad Pedagógica de Durango-UGP</li>
</ul>

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
      data: [{ region: 'Torreón', dato: 18 },{ region: 'Gómez Palacio', dato: 9 },{ region: 'Lerdo', dato: 3 },{ region: 'Matamoros', dato: 1 },{ region: 'La Laguna', dato: 31 }],
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

} // Clase SociedadUniversidades

?>
