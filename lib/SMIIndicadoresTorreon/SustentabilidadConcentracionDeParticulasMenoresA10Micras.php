<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadConcentracionDeParticulasMenoresA10Micras
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
 * Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras
 */
class SustentabilidadConcentracionDeParticulasMenoresA10Micras extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Concentración de Partículas menores a 10 micras en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2017-04-04T09:26:11';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-concentracion-de-particulas-menores-a-10-micras';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Calidad del aire por la medición de las partículas menores a 10 microgramos por metro cúbico en promedio de 24 horas. La Norma Oficial Mexicana NOM-025-SSA1-2014 indica que el límite para efectos de protección de la salud es 75 ug por m3.';
        $this->claves      = 'IMPLAN, Torreón, Recursos Naturales';
        // Para el Organizador
        $this->categorias  = array('Recursos Naturales');
        $this->fuentes     = array('DIF Revolución', 'HECAT', 'Centro Cultural José R. Mijares');
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
            array('fecha' => '2016-01-12', 'valor' => '59', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-13', 'valor' => '67', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-01-19', 'valor' => '83', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-20', 'valor' => '123', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-01-26', 'valor' => '40', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-01-27', 'valor' => '36', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-02-02', 'valor' => '27', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-03', 'valor' => '49', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-02-09', 'valor' => '61', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-10', 'valor' => '91', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-02-16', 'valor' => '84', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-17', 'valor' => '87', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-02-23', 'valor' => '54', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-02-24', 'valor' => '84', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-03-01', 'valor' => '49', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-02', 'valor' => '89', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-03-08', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-09', 'valor' => '59', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-03-12', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-15', 'valor' => '56', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-16', 'valor' => '71', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-03-19', 'valor' => '57', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-26', 'valor' => '30', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-29', 'valor' => '21', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '92', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-04-05', 'valor' => '55', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-04-06', 'valor' => '96', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-04-13', 'valor' => '64', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-04-20', 'valor' => '103', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-04-27', 'valor' => '47', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-05-03', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-10', 'valor' => '44', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-11', 'valor' => '68', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-05-17', 'valor' => '30', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-18', 'valor' => '66', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-05-24', 'valor' => '51', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-05-25', 'valor' => '136', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-01', 'valor' => '77', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-06-07', 'valor' => '50', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-08', 'valor' => '34', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-06-14', 'valor' => '37', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-15', 'valor' => '105', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-06-21', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-06-22', 'valor' => '59', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-06-29', 'valor' => '54', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-07-05', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-06', 'valor' => '66', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-07-12', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-13', 'valor' => '45', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-07-19', 'valor' => '28', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-20', 'valor' => '65', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-07-26', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-07-27', 'valor' => '64', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-08-02', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-03', 'valor' => '52', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-08-09', 'valor' => '25', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-10', 'valor' => '52', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-08-16', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-17', 'valor' => '32', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-08-23', 'valor' => '35', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-08-24', 'valor' => '32', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-09-06', 'valor' => '29', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-07', 'valor' => '71', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-09-13', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-14', 'valor' => '64', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-09-20', 'valor' => '43', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-21', 'valor' => '52', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-09-27', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-09-27', 'valor' => '41', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-09-28', 'valor' => '63', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-10-04', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-04', 'valor' => '111', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-05', 'valor' => '97', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-10-11', 'valor' => '48', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-11', 'valor' => '106', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-12', 'valor' => '109', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-10-18', 'valor' => '64', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-18', 'valor' => '169', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-19', 'valor' => '109', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-10-25', 'valor' => '42', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-10-25', 'valor' => '70', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-10-26', 'valor' => '64', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-11-01', 'valor' => '70', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-01', 'valor' => '155', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-02', 'valor' => '109', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-11-08', 'valor' => '41', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-08', 'valor' => '71', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-09', 'valor' => '25', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-11-15', 'valor' => '47', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-15', 'valor' => '116', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-16', 'valor' => '90', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-11-22', 'valor' => '49', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-22', 'valor' => '89', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-23', 'valor' => '76', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-11-29', 'valor' => '34', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-11-29', 'valor' => '84', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '105', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-12-06', 'valor' => '65', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-06', 'valor' => '149', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-07', 'valor' => '99', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-12-13', 'valor' => '68', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-13', 'valor' => '174', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-14', 'valor' => '180', 'fuente_nombre' => 'HECAT', 'notas' => ''),
            array('fecha' => '2016-12-20', 'valor' => '76', 'fuente_nombre' => 'DIF Revolución', 'notas' => ''),
            array('fecha' => '2016-12-20', 'valor' => '192', 'fuente_nombre' => 'Centro Cultural José R. Mijares', 'notas' => ''),
            array('fecha' => '2016-12-21', 'valor' => '126', 'fuente_nombre' => 'HECAT', 'notas' => '')));
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
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente DIF Revolución</h3>
      <div id="graficaDatosDifRevolucion" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

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
  if (typeof vargraficaDatosDifRevolucion === 'undefined') {
    vargraficaDatosDifRevolucion = Morris.Line({
      element: 'graficaDatosDifRevolucion',
      data: [{ fecha: '2016-01-12', dato: 59 },{ fecha: '2016-01-19', dato: 83 },{ fecha: '2016-01-26', dato: 40 },{ fecha: '2016-02-02', dato: 27 },{ fecha: '2016-02-09', dato: 61 },{ fecha: '2016-02-16', dato: 84 },{ fecha: '2016-02-23', dato: 54 },{ fecha: '2016-03-01', dato: 49 },{ fecha: '2016-03-08', dato: 34 },{ fecha: '2016-03-12', dato: 42 },{ fecha: '2016-03-15', dato: 56 },{ fecha: '2016-03-19', dato: 57 },{ fecha: '2016-03-26', dato: 30 },{ fecha: '2016-03-29', dato: 21 },{ fecha: '2016-04-05', dato: 55 },{ fecha: '2016-05-03', dato: 42 },{ fecha: '2016-05-10', dato: 44 },{ fecha: '2016-05-17', dato: 30 },{ fecha: '2016-05-24', dato: 51 },{ fecha: '2016-05-31', dato: 43 },{ fecha: '2016-06-07', dato: 50 },{ fecha: '2016-06-14', dato: 37 },{ fecha: '2016-06-21', dato: 28 },{ fecha: '2016-07-05', dato: 28 },{ fecha: '2016-07-12', dato: 35 },{ fecha: '2016-07-19', dato: 28 },{ fecha: '2016-07-26', dato: 35 },{ fecha: '2016-08-02', dato: 43 },{ fecha: '2016-08-09', dato: 25 },{ fecha: '2016-08-16', dato: 35 },{ fecha: '2016-08-23', dato: 35 },{ fecha: '2016-09-06', dato: 29 },{ fecha: '2016-09-13', dato: 42 },{ fecha: '2016-09-20', dato: 43 },{ fecha: '2016-09-27', dato: 48 },{ fecha: '2016-10-04', dato: 42 },{ fecha: '2016-10-11', dato: 48 },{ fecha: '2016-10-18', dato: 64 },{ fecha: '2016-10-25', dato: 42 },{ fecha: '2016-11-01', dato: 70 },{ fecha: '2016-11-08', dato: 41 },{ fecha: '2016-11-15', dato: 47 },{ fecha: '2016-11-22', dato: 49 },{ fecha: '2016-11-29', dato: 34 },{ fecha: '2016-12-06', dato: 65 },{ fecha: '2016-12-13', dato: 68 },{ fecha: '2016-12-20', dato: 76 }],
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
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente HECAT</h3>
      <div id="graficaDatosHecat" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

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
  if (typeof vargraficaDatosHecat === 'undefined') {
    vargraficaDatosHecat = Morris.Line({
      element: 'graficaDatosHecat',
      data: [{ fecha: '2016-01-13', dato: 67 },{ fecha: '2016-01-20', dato: 123 },{ fecha: '2016-01-27', dato: 36 },{ fecha: '2016-02-03', dato: 49 },{ fecha: '2016-02-10', dato: 91 },{ fecha: '2016-02-17', dato: 87 },{ fecha: '2016-02-24', dato: 84 },{ fecha: '2016-03-02', dato: 89 },{ fecha: '2016-03-09', dato: 59 },{ fecha: '2016-03-16', dato: 71 },{ fecha: '2016-03-30', dato: 92 },{ fecha: '2016-04-06', dato: 96 },{ fecha: '2016-04-13', dato: 64 },{ fecha: '2016-04-20', dato: 103 },{ fecha: '2016-04-27', dato: 47 },{ fecha: '2016-05-11', dato: 68 },{ fecha: '2016-05-18', dato: 66 },{ fecha: '2016-05-25', dato: 136 },{ fecha: '2016-06-01', dato: 77 },{ fecha: '2016-06-08', dato: 34 },{ fecha: '2016-06-15', dato: 105 },{ fecha: '2016-06-22', dato: 59 },{ fecha: '2016-06-29', dato: 54 },{ fecha: '2016-07-06', dato: 66 },{ fecha: '2016-07-13', dato: 45 },{ fecha: '2016-07-20', dato: 65 },{ fecha: '2016-07-27', dato: 64 },{ fecha: '2016-08-03', dato: 52 },{ fecha: '2016-08-10', dato: 52 },{ fecha: '2016-08-17', dato: 32 },{ fecha: '2016-08-24', dato: 32 },{ fecha: '2016-09-07', dato: 71 },{ fecha: '2016-09-14', dato: 64 },{ fecha: '2016-09-21', dato: 52 },{ fecha: '2016-09-28', dato: 63 },{ fecha: '2016-10-05', dato: 97 },{ fecha: '2016-10-12', dato: 109 },{ fecha: '2016-10-19', dato: 109 },{ fecha: '2016-10-26', dato: 64 },{ fecha: '2016-11-02', dato: 109 },{ fecha: '2016-11-09', dato: 25 },{ fecha: '2016-11-16', dato: 90 },{ fecha: '2016-11-23', dato: 76 },{ fecha: '2016-11-30', dato: 105 },{ fecha: '2016-12-07', dato: 99 },{ fecha: '2016-12-14', dato: 180 },{ fecha: '2016-12-21', dato: 126 }],
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
     * Sección Gráfica 3 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_3_html() {
        return <<<FINAL
      <h3>Gráfica de Concentración de Partículas menores a 10 micras en Torreón con fuente Centro Cultural José R. Mijares</h3>
      <div id="graficaDatosCentroCulturalJoseRMijares" class="grafica"></div>
      <p><b>Unidad:</b> ug por m3.</p>
      <h3>Observaciones</h3>
<ul>
<li>En 2016 Torreón contaba con 7 equipos manuales de PST (Partículas Suspendidas Totales) y 3 equipos de PM10 (Partículas Menores a 10 micras). En 2017 sólo se tienen operando los 3 equipos de PM10.</li>
<li>Se ajustaron las fuentes para generar varias gráficas, una por cada estación de monitoreo.</li>
<li>Fuente: <a href="http://www.torreon.gob.mx/medioambiente/">Dirección General de Medio Ambiente de Torreón</a></li>
<li>Descarga: <a href="http://datostrc.gob.mx/datasets/ver/32732">Portal de Datos Públicos de Torreón - Resultados de Monitoreo Atmosférico</a></li>
<li><a href="http://www.salud.gob.mx/unidades/cdi/nom/025ssa13.html">Norma Oficial Mexicana NOM-025-SSA1-1993</a></li>
<li><a href="http://dof.gob.mx/nota_detalle.php?codigo=5357042&amp;fecha=20/08/2014">Norma Oficial Mexicana NOM-025-SSA1-2014</a></li>
</ul>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 3 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_3_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosCentroCulturalJoseRMijares === 'undefined') {
    vargraficaDatosCentroCulturalJoseRMijares = Morris.Line({
      element: 'graficaDatosCentroCulturalJoseRMijares',
      data: [{ fecha: '2016-09-27', dato: 41 },{ fecha: '2016-10-04', dato: 111 },{ fecha: '2016-10-11', dato: 106 },{ fecha: '2016-10-18', dato: 169 },{ fecha: '2016-10-25', dato: 70 },{ fecha: '2016-11-01', dato: 155 },{ fecha: '2016-11-08', dato: 71 },{ fecha: '2016-11-15', dato: 116 },{ fecha: '2016-11-22', dato: 89 },{ fecha: '2016-11-29', dato: 84 },{ fecha: '2016-12-06', dato: 149 },{ fecha: '2016-12-13', dato: 174 },{ fecha: '2016-12-20', dato: 192 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica-3', 'Gráfica 3', $this->seccion_grafica_3_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_3_javascript());
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

} // Clase SustentabilidadConcentracionDeParticulasMenoresA10Micras

?>
