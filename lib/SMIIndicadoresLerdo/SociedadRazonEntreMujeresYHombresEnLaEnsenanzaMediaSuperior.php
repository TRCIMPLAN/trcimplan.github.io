<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior
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
 * Clase SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior
 */
class SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Razón entre Mujeres y Hombres en la Enseñanza Media Superior en Lerdo';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-01-22T13:57:45';
        // El nombre del archivo a crear
        $this->archivo                   = 'sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Se calcula dividiendo la Población Femenina entre 15 y 17 años que asiste a la escuela entre la Población Masculina entre 15 y 17 años que asiste a la escuela. El índice de paridad entre los géneros (IPG) es la relación entre el valor correspondiente al sexo femenino y el correspondiente al sexo masculino para un indicador dado. Un IPG de 1 significa paridad entre los géneros.';
        $this->claves                    = 'IMPLAN, Lerdo, Educación, Género, Objetivos del Milenio';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Educación', 'Género', 'Objetivos del Milenio');
        $this->fuentes                   = array('INEGI. Censos de Población y Vivienda');
        $this->regiones                  = array('Lerdo');
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        return <<<FINAL
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/2010</td>
            <td>1.0300</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Mujeres por Hombres.</p>
      <h3>Observaciones</h3>
<p>La UNESCO considera que existe equidad de género en educación, si el IPG se ubica entre 0.96 y 1.04. Referencia: Data Sources for MDG Monitoring. Technical Note.
Consulta la <a href="http://www3.inegi.org.mx/sistemas/iter/default.aspx?ev=5">Base de Datos</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Razón entre Mujeres y Hombres en la Enseñanza Media Superior</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Razón entre Mujeres y Hombres en la Enseñanza Media Superior</h3>
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
            <td>2010-12-31</td>
            <td>1.0020</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>1.0210</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>1.0300</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>1.0780</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td>0.9940</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td>1.0230</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td>1.0140</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Mujeres por Hombres.</p>
      <h3>Observaciones</h3>
<p>La UNESCO considera que existe equidad de género en educación, si el IPG se ubica entre 0.96 y 1.04. Referencia: Data Sources for MDG Monitoring. Technical Note.
Consulta la <a href="http://www3.inegi.org.mx/sistemas/iter/default.aspx?ev=5">Base de Datos</a></p>

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
      data: [{ region: 'Torreón', dato: 1.0020 },{ region: 'Gómez Palacio', dato: 1.0210 },{ region: 'Lerdo', dato: 1.0300 },{ region: 'Matamoros', dato: 1.0780 },{ region: 'Coahuila', dato: 0.9940 },{ region: 'Durango', dato: 1.0230 },{ region: 'Nacional', dato: 1.0140 }],
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
        // Definir contenido HTML en el esquema
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
        // JavaScript está dentro de las lengüetas
        $this->javascript = $this->lenguetas->javascript();
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

} // Clase SociedadRazonEntreMujeresYHombresEnLaEnsenanzaMediaSuperior

?>
