<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadCamasCensables
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
 * Clase SociedadCamasCensables
 */
class SociedadCamasCensables extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Camas Censables en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'sociedad-camas-censables';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = '';
        $this->claves                    = 'IMPLAN, Torreón, Salud';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Salud');
        $this->fuentes                   = array('SINAIS (SSA)', 'Secretaria de Salud del Estado de Coahuila');
        $this->regiones                  = array('Torreón');
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
            <td>31/12/2001</td>
            <td>42</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2002</td>
            <td>42</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>42</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2003</td>
            <td>72</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2004</td>
            <td>42</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>42</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2006</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2007</td>
            <td>48</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>51</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>875</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>838</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/08/2015</td>
            <td>893</td>
            <td>Secretaria de Salud del Estado de Coahuila</td>
            <td>A la cifra 2014 se agregan las 55 camas censables nuevas disponibles con el nuevo Hospital General de la ciudad (Julio 2015)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<ol>
<li>Hasta los datos de 2012 la Dirección General de Información de Salud (DGIS) considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio. Para 2013 y 2014 se agregan las cifras de las unidades pertenecientes al IMSS, SEDENA, SSA, ISSSTE y Universitarios.</li>
<li>Los datos de años anteriores a 2013 irán aumentando debido a la carga de la información concerniente al punto anterior.</li>
</ol>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Camas Censables en Torreón con fuente SINAIS (SSA)</h3>
      <div id="graficaDatosSinaisSsa" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<ol>
<li>Hasta los datos de 2012 la Dirección General de Información de Salud (DGIS) considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio. Para 2013 y 2014 se agregan las cifras de las unidades pertenecientes al IMSS, SEDENA, SSA, ISSSTE y Universitarios.</li>
<li>Los datos de años anteriores a 2013 irán aumentando debido a la carga de la información concerniente al punto anterior.</li>
</ol>

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
  if (typeof vargraficaDatosSinaisSsa === 'undefined') {
    vargraficaDatosSinaisSsa = Morris.Line({
      element: 'graficaDatosSinaisSsa',
      data: [{ fecha: '2001-12-31', dato: 42 },{ fecha: '2002-12-31', dato: 42 },{ fecha: '2003-12-31', dato: 72 },{ fecha: '2004-12-31', dato: 42 },{ fecha: '2005-12-31', dato: 42 },{ fecha: '2006-12-31', dato: 51 },{ fecha: '2007-12-31', dato: 48 },{ fecha: '2008-12-31', dato: 51 },{ fecha: '2009-12-31', dato: 51 },{ fecha: '2010-12-31', dato: 51 },{ fecha: '2011-12-31', dato: 51 },{ fecha: '2012-12-31', dato: 51 },{ fecha: '2013-12-31', dato: 875 },{ fecha: '2014-12-31', dato: 838 }],
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
      <h3>Gráfica con los últimos datos de Camas Censables</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Camas Censables</h3>
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
            <td>2015-08-30</td>
            <td>893</td>
            <td>Secretaria de Salud del Estado de Coahuila</td>
            <td>A la cifra 2014 se agregan las 55 camas censables nuevas disponibles con el nuevo Hospital General de la ciudad (Julio 2015)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2014-12-31</td>
            <td>346</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2014-12-31</td>
            <td>38</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2014-12-31</td>
            <td>40</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2014-12-31</td>
            <td>1262</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2014-12-31</td>
            <td>2686</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2014-12-31</td>
            <td>1700</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2014-12-31</td>
            <td>88903</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<ol>
<li>Hasta los datos de 2012 la Dirección General de Información de Salud (DGIS) considera únicamente al Hospital General de Torreón y el Hospital Integral de Matamoros, Hospital General de Lerdo y el Hospital General de Gómez Palacio. Para 2013 y 2014 se agregan las cifras de las unidades pertenecientes al IMSS, SEDENA, SSA, ISSSTE y Universitarios.</li>
<li>Los datos de años anteriores a 2013 irán aumentando debido a la carga de la información concerniente al punto anterior.</li>
</ol>

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
      data: [{ region: 'Torreón', dato: 893 },{ region: 'Gómez Palacio', dato: 346 },{ region: 'Lerdo', dato: 38 },{ region: 'Matamoros', dato: 40 },{ region: 'La Laguna', dato: 1262 },{ region: 'Coahuila', dato: 2686 },{ region: 'Durango', dato: 1700 },{ region: 'Nacional', dato: 88903 }],
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

} // Clase SociedadCamasCensables

?>
