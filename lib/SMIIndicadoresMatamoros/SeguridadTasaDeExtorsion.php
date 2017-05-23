<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros SeguridadTasaDeExtorsion
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

namespace SMIIndicadoresMatamoros;

/**
 * Clase SeguridadTasaDeExtorsion
 */
class SeguridadTasaDeExtorsion extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Tasa de Extorsión en Matamoros';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2015-04-29T14:02:12';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-tasa-de-extorsion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = '';
        $this->claves      = 'IMPLAN, Matamoros, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública');
        $this->regiones    = array('Matamoros');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'caracter'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2015-03-31', 'valor' => 'Y', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => 'El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.')));
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
      <h3>Gráfica con los últimos datos de Tasa de Extorsión</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Tasa de Extorsión</h3>
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
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/03/2015</td>
            <td>No disponible</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td>El dato proporcionado es estatal. De clic en la pestaña Otras Regiones.</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>30/04/2017</td>
            <td>0.26 %</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>30/04/2017</td>
            <td>1.11 %</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 100 mil.</p>
      <h3>Observaciones</h3>
<p>Fuente: <a href="http://secretariadoejecutivo.gob.mx/incidencia-delictiva/incidencia-delictiva-fuero-comun.php">Secretariado Ejecutivo del Sistema Nacional de Seguridad</a></p>

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
      data: [{ region: 'Torreón', dato: 0 },{ region: 'Gómez Palacio', dato: 0 },{ region: 'Lerdo', dato: 0 },{ region: 'Matamoros', dato: 0 },{ region: 'La Laguna', dato: 0 },{ region: 'Coahuila', dato: 0.2600 },{ region: 'Durango', dato: 1.1100 }],
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

} // Clase SeguridadTasaDeExtorsion

?>
