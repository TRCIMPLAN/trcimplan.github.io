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

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Pasajeros Aéreos Totales Mensuales en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2015-05-20T15:50:37';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-totales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Flujo de pasajeros aéreos en el Aeropuerto Internacional Francisco Sarabia.';
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
            array('fecha' => '2012-01-31', 'valor' => '31198', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-02-29', 'valor' => '29353', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-03-31', 'valor' => '34010', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-04-30', 'valor' => '30685', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-05-31', 'valor' => '35988', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-07-31', 'valor' => '38722', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-08-31', 'valor' => '39255', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-09-30', 'valor' => '34182', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-10-31', 'valor' => '37614', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-11-30', 'valor' => '35856', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '34398', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-01-31', 'valor' => '33338', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-02-28', 'valor' => '30032', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-03-31', 'valor' => '33574', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-04-30', 'valor' => '34288', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-05-31', 'valor' => '35548', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '36960', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-07-31', 'valor' => '46259', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-08-31', 'valor' => '42396', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-09-30', 'valor' => '40305', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-10-31', 'valor' => '44357', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-11-30', 'valor' => '44446', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '45895', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-01-31', 'valor' => '40735', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-02-28', 'valor' => '38383', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '43883', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-04-30', 'valor' => '42197', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '46761', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '44214', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => '50483', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => '46847', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '41393', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-10-31', 'valor' => '43946', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => '42264', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '42677', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => '36810', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '35740', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '45201', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '43676', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '45529', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '45626', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '51813', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '50115', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '46698', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '52057', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '50786', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '52398', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '42204', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '42939', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-03-30', 'valor' => '51846', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '52300', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-05-30', 'valor' => '55215', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '53902', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '61928', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '59501', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '53258', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => '')));
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

} // Clase SustentabilidadPasajerosAereosTotalesMensuales

?>
