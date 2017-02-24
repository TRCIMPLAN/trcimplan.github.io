<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio GobiernoCompetenciaElectoral
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
 * Clase GobiernoCompetenciaElectoral
 */
class GobiernoCompetenciaElectoral extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Competencia Electoral en Gómez Palacio';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'gobierno-competencia-electoral';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Diferencia entre los dos candidatos con más votación entre el total de votos. Forma parte de subíndice de "Sistema Político Estable y Funcional". Mide la diferencia de votos entre el primero y segundo lugar como proporción del total de votos de las últimas elecciones federales. Este indicador asume que una mayor competencia electoral supone contextos más propicios para una mayor rendición de cuentas.';
        $this->claves                    = 'IMPLAN, Gómez Palacio, Participación Ciudadana, Gobierno, Índice de Competitividad Urbana';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Participación Ciudadana', 'Gobierno', 'Índice de Competitividad Urbana');
        $this->fuentes                   = array('IMCO', 'INE-IEPCC');
        $this->regiones                  = array('Gómez Palacio');
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
            <td>31/12/2008</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>43.48 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.52 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>4.52 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>4.48 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>4.52 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>4.52 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Unidades: Porcentaje de votos totales. Fuente: IFE, 2009 y 2012.</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Competencia Electoral en Gómez Palacio con fuente IMCO</h3>
      <div id="graficaDatosImco" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Unidades: Porcentaje de votos totales. Fuente: IFE, 2009 y 2012.</p>

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
      data: [{ fecha: '2008-12-31', dato: 43.4800 },{ fecha: '2009-12-31', dato: 43.4800 },{ fecha: '2010-12-31', dato: 43.4800 },{ fecha: '2011-12-31', dato: 4.5200 },{ fecha: '2012-12-31', dato: 4.5200 }],
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
      <h3>Gráfica con los últimos datos de Competencia Electoral</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Competencia Electoral</h3>
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
            <td>2013-07-07</td>
            <td>1.77 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>4.52 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>5.15 %</td>
            <td>IMCO</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-07-07</td>
            <td>39.67 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-07-07</td>
            <td>6.70 %</td>
            <td>INE-IEPCC</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Unidades: Porcentaje de votos totales. Fuente: IFE, 2009 y 2012.</p>

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
      data: [{ region: 'Torreón', dato: 1.7700 },{ region: 'Gómez Palacio', dato: 4.5200 },{ region: 'Lerdo', dato: 5.1500 },{ region: 'Matamoros', dato: 39.6700 },{ region: 'La Laguna', dato: 6.7000 }],
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

} // Clase GobiernoCompetenciaElectoral

?>
