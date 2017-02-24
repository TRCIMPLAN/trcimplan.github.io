<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresMatamoros EconomiaTrabajadoresAsegurados
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
 * Clase EconomiaTrabajadoresAsegurados
 */
class EconomiaTrabajadoresAsegurados extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Trabajadores Asegurados en Matamoros';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-11-07T09:04:55';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-trabajadores-asegurados';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Total de trabajadores asegurados en el Instituto Mexicano del Seguro Social a nivel municipal';
        $this->claves                    = 'IMPLAN, Matamoros, Empleo';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empleo');
        $this->fuentes                   = array('Instituto Mexicano del Seguro Social (IMSS)');
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
            <td>30/11/2013</td>
            <td>7638</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>6798</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>7000</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>7024</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>7060</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>7118</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>7176</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>7363</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>7542</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>7875</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>7763</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td>La diferencia de trabajadores asegurados entre el 31 de Diciembre de 2013 y el 30 de Septiembre de 2014, es de 965 trabajadores más durante el presente año.</td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>7698</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>7630</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>7474</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>7477</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>7547</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>7559</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>7652</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>7779</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>8032</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>8042</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>8060</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>7993</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>8084</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>8084</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>7860</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>7852</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>8025</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>8243</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>8387</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>8286</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>8557</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2016</td>
            <td>8551</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2016</td>
            <td>8773</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>8669</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Trabajadores Asegurados en Matamoros</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

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
      data: [{ fecha: '2013-11-30', dato: 7638 },{ fecha: '2013-12-31', dato: 6798 },{ fecha: '2014-01-31', dato: 7000 },{ fecha: '2014-02-28', dato: 7024 },{ fecha: '2014-03-31', dato: 7060 },{ fecha: '2014-04-30', dato: 7118 },{ fecha: '2014-05-31', dato: 7176 },{ fecha: '2014-06-30', dato: 7363 },{ fecha: '2014-07-31', dato: 7542 },{ fecha: '2014-08-31', dato: 7875 },{ fecha: '2014-09-30', dato: 7763 },{ fecha: '2014-10-31', dato: 7698 },{ fecha: '2014-11-30', dato: 7630 },{ fecha: '2014-12-31', dato: 7474 },{ fecha: '2015-01-31', dato: 7477 },{ fecha: '2015-02-28', dato: 7547 },{ fecha: '2015-03-31', dato: 7559 },{ fecha: '2015-04-30', dato: 7652 },{ fecha: '2015-05-31', dato: 7779 },{ fecha: '2015-06-30', dato: 8032 },{ fecha: '2015-07-31', dato: 8042 },{ fecha: '2015-08-31', dato: 8060 },{ fecha: '2015-09-30', dato: 7993 },{ fecha: '2015-10-31', dato: 8084 },{ fecha: '2015-11-30', dato: 8084 },{ fecha: '2015-12-31', dato: 7860 },{ fecha: '2016-01-31', dato: 7852 },{ fecha: '2016-02-29', dato: 8025 },{ fecha: '2016-03-31', dato: 8243 },{ fecha: '2016-04-30', dato: 8387 },{ fecha: '2016-05-31', dato: 8286 },{ fecha: '2016-06-30', dato: 8557 },{ fecha: '2016-07-31', dato: 8551 },{ fecha: '2016-08-31', dato: 8773 },{ fecha: '2016-09-30', dato: 8669 }],
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
      <h3>Gráfica con los últimos datos de Trabajadores Asegurados</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Trabajadores Asegurados</h3>
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
            <td>2016-09-30</td>
            <td>187057</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2016-09-30</td>
            <td>76824</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2016-09-30</td>
            <td>14257</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2016-09-30</td>
            <td>8669</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2016-09-30</td>
            <td>286807</td>
            <td>Instituto Mexicano del Seguro Social (IMSS)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Datos obtenidos de <a href="http://datos.imss.gob.mx/dataset">IMSS</a></p>

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
      data: [{ region: 'Torreón', dato: 187057 },{ region: 'Gómez Palacio', dato: 76824 },{ region: 'Lerdo', dato: 14257 },{ region: 'Matamoros', dato: 8669 },{ region: 'La Laguna', dato: 286807 }],
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

} // Clase EconomiaTrabajadoresAsegurados

?>
