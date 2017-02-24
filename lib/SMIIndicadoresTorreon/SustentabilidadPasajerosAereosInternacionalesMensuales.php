<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosInternacionalesMensuales
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
 * Clase SustentabilidadPasajerosAereosInternacionalesMensuales
 */
class SustentabilidadPasajerosAereosInternacionalesMensuales extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Pasajeros Aéreos Internacionales Mensuales en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-05-20T16:23:28';
        // El nombre del archivo a crear
        $this->archivo                   = 'sustentabilidad-pasajeros-aereos-internacionales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Flujo de pasajeros que llegan del, o, se dirigen fuera de territorio nacional.';
        $this->claves                    = 'IMPLAN, Torreón, Movilidad';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Movilidad');
        $this->fuentes                   = array('Operadora Mexicana de Aeropuertos (OMA)');
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
            <td>29/02/2012</td>
            <td>3568</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>4470</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>5159</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>5212</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2012</td>
            <td>4803</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>6871</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>6486</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>4764</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>4574</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>4910</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>6037</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>5014</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>3553</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>5185</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>4624</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>4426</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>4251</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>5464</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>4568</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>4180</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>3897</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>4413</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>5871</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>4749</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>4749</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>4303</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>4326</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>4003</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>4316</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>5537</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>4950</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>4557</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>4210</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>4229</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>5423</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>4659</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>3070</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>3916</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>4189</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>4301</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>4630</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>01/07/2015</td>
            <td>5815</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>5462</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>4460</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>4196</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>4175</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>5434</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>4022</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>3301</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2016</td>
            <td>5294</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>4905</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2016</td>
            <td>5695</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>4579</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2016</td>
            <td>4885</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2016</td>
            <td>4369</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>4178</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Toda referencia sobre volumen de pasajeros se refiere a pasajeros terminales, los cuales incluyen los pasajeros de los tres tipos de aviación (comercial, charter y aviación general), y excluye los pasajeros en tránsito.Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Pasajeros Aéreos Internacionales Mensuales en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Personas.</p>
      <h3>Observaciones</h3>
<p>Toda referencia sobre volumen de pasajeros se refiere a pasajeros terminales, los cuales incluyen los pasajeros de los tres tipos de aviación (comercial, charter y aviación general), y excluye los pasajeros en tránsito.Se considera a nivel metropolitano. Consulta la <a href="http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/">Base de Datos</a></p>

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
      data: [{ fecha: '2012-02-29', dato: 3568 },{ fecha: '2012-03-31', dato: 4470 },{ fecha: '2012-04-30', dato: 5159 },{ fecha: '2012-05-31', dato: 5212 },{ fecha: '2012-06-30', dato: 4803 },{ fecha: '2012-07-31', dato: 6871 },{ fecha: '2012-08-31', dato: 6486 },{ fecha: '2012-09-30', dato: 4764 },{ fecha: '2012-10-31', dato: 4574 },{ fecha: '2012-11-30', dato: 4910 },{ fecha: '2012-12-31', dato: 6037 },{ fecha: '2013-01-31', dato: 5014 },{ fecha: '2013-02-28', dato: 3553 },{ fecha: '2013-03-31', dato: 5185 },{ fecha: '2013-04-30', dato: 4624 },{ fecha: '2013-05-31', dato: 4426 },{ fecha: '2013-06-30', dato: 4251 },{ fecha: '2013-07-31', dato: 5464 },{ fecha: '2013-08-31', dato: 4568 },{ fecha: '2013-09-30', dato: 4180 },{ fecha: '2013-10-31', dato: 3897 },{ fecha: '2013-11-30', dato: 4413 },{ fecha: '2013-12-31', dato: 5871 },{ fecha: '2014-01-31', dato: 4749 },{ fecha: '2014-02-28', dato: 4749 },{ fecha: '2014-03-31', dato: 4303 },{ fecha: '2014-04-30', dato: 4326 },{ fecha: '2014-05-31', dato: 4003 },{ fecha: '2014-06-30', dato: 4316 },{ fecha: '2014-07-31', dato: 5537 },{ fecha: '2014-08-31', dato: 4950 },{ fecha: '2014-09-30', dato: 4557 },{ fecha: '2014-10-31', dato: 4210 },{ fecha: '2014-11-30', dato: 4229 },{ fecha: '2014-12-31', dato: 5423 },{ fecha: '2015-01-31', dato: 4659 },{ fecha: '2015-02-28', dato: 3070 },{ fecha: '2015-03-31', dato: 3916 },{ fecha: '2015-04-30', dato: 4189 },{ fecha: '2015-05-31', dato: 4301 },{ fecha: '2015-06-30', dato: 4630 },{ fecha: '2015-07-01', dato: 5815 },{ fecha: '2015-08-31', dato: 5462 },{ fecha: '2015-09-30', dato: 4460 },{ fecha: '2015-10-31', dato: 4196 },{ fecha: '2015-11-30', dato: 4175 },{ fecha: '2015-12-31', dato: 5434 },{ fecha: '2016-01-31', dato: 4022 },{ fecha: '2016-02-29', dato: 3301 },{ fecha: '2016-03-31', dato: 5294 },{ fecha: '2016-04-30', dato: 4905 },{ fecha: '2016-05-31', dato: 5695 },{ fecha: '2016-06-30', dato: 4579 },{ fecha: '2016-07-31', dato: 4885 },{ fecha: '2016-08-31', dato: 4369 },{ fecha: '2016-09-30', dato: 4178 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
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

} // Clase SustentabilidadPasajerosAereosInternacionalesMensuales

?>
