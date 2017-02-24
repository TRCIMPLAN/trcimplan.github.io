<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros GobiernoCumplimientoEnInformacionPublicaMinina
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
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Cumplimiento en Información Pública Mínina en Matamoros';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'gobierno-cumplimiento-en-informacion-publica-minina';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Cumplimiento sobre total de obligaciones.';
        $this->claves                    = 'IMPLAN, Matamoros, Transparencia';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Transparencia');
        $this->fuentes                   = array('ICAI-IDAIP');
        $this->regiones                  = array('Matamoros');
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
            <td>03/03/2014</td>
            <td>63.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>64.10 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>80.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>82.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>74.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>77.33 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>72.67 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>98.67 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>70.67 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Cumplimiento en Información Pública Mínina en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Porcentaje.</p>
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
      data: [{ fecha: '2014-03-03', dato: 63.0000 },{ fecha: '2014-06-30', dato: 64.1000 },{ fecha: '2014-09-30', dato: 80.0000 },{ fecha: '2014-10-31', dato: 82.0000 },{ fecha: '2014-11-30', dato: 74.0000 },{ fecha: '2014-12-31', dato: 77.3300 },{ fecha: '2015-01-31', dato: 72.6700 },{ fecha: '2015-02-28', dato: 98.6700 },{ fecha: '2015-03-31', dato: 70.6700 }],
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
      <h3>Gráfica con los últimos datos de Cumplimiento en Información Pública Mínina</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Cumplimiento en Información Pública Mínina</h3>
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
            <td>2015-03-31</td>
            <td>89.33 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-08-31</td>
            <td>86.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-08-31</td>
            <td>100.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-03-31</td>
            <td>70.67 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td>80.00 %</td>
            <td>ICAI-IDAIP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
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
      data: [{ region: 'Torreón', dato: 89.3300 },{ region: 'Gómez Palacio', dato: 86.0000 },{ region: 'Lerdo', dato: 100.0000 },{ region: 'Matamoros', dato: 70.6700 },{ region: 'La Laguna', dato: 80.0000 }],
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

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
