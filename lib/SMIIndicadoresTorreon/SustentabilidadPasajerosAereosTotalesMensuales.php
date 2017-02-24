<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SustentabilidadPasajerosAereosTotalesMensuales
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
 * Clase SustentabilidadPasajerosAereosTotalesMensuales
 */
class SustentabilidadPasajerosAereosTotalesMensuales extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Pasajeros Aéreos Totales Mensuales en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-05-20T15:50:37';
        // El nombre del archivo a crear
        $this->archivo                   = 'sustentabilidad-pasajeros-aereos-totales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Flujo de pasajeros aéreos en el Aeropuerto Internacional Francisco Sarabia.';
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
            <td>31/01/2012</td>
            <td>31198</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2012</td>
            <td>29353</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2012</td>
            <td>34010</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2012</td>
            <td>30685</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2012</td>
            <td>35988</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2012</td>
            <td>38722</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2012</td>
            <td>39255</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2012</td>
            <td>34182</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2012</td>
            <td>37614</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2012</td>
            <td>35856</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>34398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2013</td>
            <td>33338</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2013</td>
            <td>30032</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2013</td>
            <td>33574</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2013</td>
            <td>34288</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2013</td>
            <td>35548</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2013</td>
            <td>36960</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2013</td>
            <td>46259</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2013</td>
            <td>42396</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2013</td>
            <td>40305</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>44357</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2013</td>
            <td>44446</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>45895</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2014</td>
            <td>40735</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2014</td>
            <td>38383</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2014</td>
            <td>43883</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2014</td>
            <td>42197</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2014</td>
            <td>46761</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2014</td>
            <td>44214</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2014</td>
            <td>50483</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2014</td>
            <td>46847</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2014</td>
            <td>41393</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2014</td>
            <td>43946</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2014</td>
            <td>42264</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2014</td>
            <td>42677</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2015</td>
            <td>36810</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>28/02/2015</td>
            <td>35740</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/03/2015</td>
            <td>45201</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2015</td>
            <td>43676</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/05/2015</td>
            <td>45529</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2015</td>
            <td>45626</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2015</td>
            <td>51813</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2015</td>
            <td>50115</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2015</td>
            <td>46698</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/10/2015</td>
            <td>52057</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/11/2015</td>
            <td>50786</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>52398</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/01/2016</td>
            <td>42204</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>29/02/2016</td>
            <td>42939</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/03/2016</td>
            <td>51846</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/04/2016</td>
            <td>52300</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/05/2016</td>
            <td>55215</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/06/2016</td>
            <td>53902</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/07/2016</td>
            <td>61928</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>31/08/2016</td>
            <td>59501</td>
            <td>Operadora Mexicana de Aeropuertos (OMA)</td>
            <td></td>
          </tr>
          <tr>
            <td>30/09/2016</td>
            <td>53258</td>
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
      <h3>Gráfica de Pasajeros Aéreos Totales Mensuales en Torreón</h3>
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
      data: [{ fecha: '2012-01-31', dato: 31198 },{ fecha: '2012-02-29', dato: 29353 },{ fecha: '2012-03-31', dato: 34010 },{ fecha: '2012-04-30', dato: 30685 },{ fecha: '2012-05-31', dato: 35988 },{ fecha: '2012-07-31', dato: 38722 },{ fecha: '2012-08-31', dato: 39255 },{ fecha: '2012-09-30', dato: 34182 },{ fecha: '2012-10-31', dato: 37614 },{ fecha: '2012-11-30', dato: 35856 },{ fecha: '2012-12-31', dato: 34398 },{ fecha: '2013-01-31', dato: 33338 },{ fecha: '2013-02-28', dato: 30032 },{ fecha: '2013-03-31', dato: 33574 },{ fecha: '2013-04-30', dato: 34288 },{ fecha: '2013-05-31', dato: 35548 },{ fecha: '2013-06-30', dato: 36960 },{ fecha: '2013-07-31', dato: 46259 },{ fecha: '2013-08-31', dato: 42396 },{ fecha: '2013-09-30', dato: 40305 },{ fecha: '2013-10-31', dato: 44357 },{ fecha: '2013-11-30', dato: 44446 },{ fecha: '2013-12-31', dato: 45895 },{ fecha: '2014-01-31', dato: 40735 },{ fecha: '2014-02-28', dato: 38383 },{ fecha: '2014-03-31', dato: 43883 },{ fecha: '2014-04-30', dato: 42197 },{ fecha: '2014-05-31', dato: 46761 },{ fecha: '2014-06-30', dato: 44214 },{ fecha: '2014-07-31', dato: 50483 },{ fecha: '2014-08-31', dato: 46847 },{ fecha: '2014-09-30', dato: 41393 },{ fecha: '2014-10-31', dato: 43946 },{ fecha: '2014-11-30', dato: 42264 },{ fecha: '2014-12-31', dato: 42677 },{ fecha: '2015-01-31', dato: 36810 },{ fecha: '2015-02-28', dato: 35740 },{ fecha: '2015-03-31', dato: 45201 },{ fecha: '2015-04-30', dato: 43676 },{ fecha: '2015-05-31', dato: 45529 },{ fecha: '2015-06-30', dato: 45626 },{ fecha: '2015-07-31', dato: 51813 },{ fecha: '2015-08-31', dato: 50115 },{ fecha: '2015-09-30', dato: 46698 },{ fecha: '2015-10-31', dato: 52057 },{ fecha: '2015-11-30', dato: 50786 },{ fecha: '2015-12-31', dato: 52398 },{ fecha: '2016-01-31', dato: 42204 },{ fecha: '2016-02-29', dato: 42939 },{ fecha: '2016-03-30', dato: 51846 },{ fecha: '2016-04-30', dato: 52300 },{ fecha: '2016-05-30', dato: 55215 },{ fecha: '2016-06-30', dato: 53902 },{ fecha: '2016-07-31', dato: 61928 },{ fecha: '2016-08-31', dato: 59501 },{ fecha: '2016-09-30', dato: 53258 }],
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

} // Clase SustentabilidadPasajerosAereosTotalesMensuales

?>
