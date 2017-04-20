<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosInternacionalesAnuales
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
 * Clase SustentabilidadPasajerosAereosInternacionalesAnuales
 */
class SustentabilidadPasajerosAereosInternacionalesAnuales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Pasajeros Aéreos Internacionales Anuales en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales-anuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Total de pasajeros que llegan o salen del Aeropuerto Internacional Francisco Sarabia de Torreón, Coahuila.';
        $this->claves      = 'IMPLAN, Torreón, Movilidad';
        // Para el Organizador
        $this->categorias  = array('Movilidad');
        $this->fuentes     = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            array('fecha' => '2005-12-31', 'valor' => '64316', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2006-12-31', 'valor' => '73900', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '80742', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '77199', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '53112', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '51238', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '51401', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '61443', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '55446', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '54154', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '54307', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => '')));
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
      <h3>Gráfica de Pasajeros Aéreos Internacionales Anuales en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>El flujo de pasajeros a nivel internacional es de:</p>

<ul>
<li>2013 = 1,833,223</li>
<li>2012 = 1,825,145</li>
<li>2011 = 1,784,252</li>
<li>2010 = 1,927,529</li>
<li>2009 = 1,806,105</li>
<li>2008 = 2,327,839</li>
<li>2007 = 2,471,947</li>
<li>2006 = 2,525,279</li>
<li>2005 = 2,479,772</li>
</ul>

<p>Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

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
      data: [{ fecha: '2005-12-31', dato: 64316 },{ fecha: '2006-12-31', dato: 73900 },{ fecha: '2007-12-31', dato: 80742 },{ fecha: '2008-12-31', dato: 77199 },{ fecha: '2009-12-31', dato: 53112 },{ fecha: '2010-12-31', dato: 51238 },{ fecha: '2011-12-31', dato: 51401 },{ fecha: '2012-12-31', dato: 61443 },{ fecha: '2013-12-31', dato: 55446 },{ fecha: '2014-12-31', dato: 54154 },{ fecha: '2015-12-31', dato: 54307 }],
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
      <h3>Gráfica con los últimos datos de Pasajeros Aéreos Internacionales Anuales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Pasajeros Aéreos Internacionales Anuales</h3>
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
            <td>31/12/2015</td>
            <td>54307</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2013</td>
            <td>No tiene</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2013</td>
            <td>No tiene</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2013</td>
            <td>No tiene</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/12/2015</td>
            <td>54307</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>31/12/2015</td>
            <td>14551000</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>El flujo de pasajeros a nivel internacional es de:</p>

<ul>
<li>2013 = 1,833,223</li>
<li>2012 = 1,825,145</li>
<li>2011 = 1,784,252</li>
<li>2010 = 1,927,529</li>
<li>2009 = 1,806,105</li>
<li>2008 = 2,327,839</li>
<li>2007 = 2,471,947</li>
<li>2006 = 2,525,279</li>
<li>2005 = 2,479,772</li>
</ul>

<p>Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

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
      data: [{ region: 'Torreón', dato: 54307 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 54307 },{ region: 'Nacional', dato: 14551000 }],
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

} // Clase SustentabilidadPasajerosAereosInternacionalesAnuales

?>
