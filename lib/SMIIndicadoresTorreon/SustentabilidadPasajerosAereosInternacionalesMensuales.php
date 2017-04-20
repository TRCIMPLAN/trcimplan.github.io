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

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Pasajeros Aéreos Internacionales Mensuales en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2015-05-20T16:23:28';
        // El nombre del archivo a crear
        $this->archivo     = 'sustentabilidad-pasajeros-aereos-internacionales-mensuales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Flujo de pasajeros que llegan del, o, se dirigen fuera de territorio nacional.';
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
            array('fecha' => '2012-02-29', 'valor' => '3568', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-03-31', 'valor' => '4470', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-04-30', 'valor' => '5159', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-05-31', 'valor' => '5212', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-06-30', 'valor' => '4803', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-07-31', 'valor' => '6871', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-08-31', 'valor' => '6486', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-09-30', 'valor' => '4764', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-10-31', 'valor' => '4574', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-11-30', 'valor' => '4910', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '6037', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-01-31', 'valor' => '5014', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-02-28', 'valor' => '3553', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-03-31', 'valor' => '5185', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-04-30', 'valor' => '4624', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-05-31', 'valor' => '4426', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-06-30', 'valor' => '4251', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-07-31', 'valor' => '5464', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-08-31', 'valor' => '4568', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-09-30', 'valor' => '4180', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-10-31', 'valor' => '3897', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-11-30', 'valor' => '4413', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2013-12-31', 'valor' => '5871', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-01-31', 'valor' => '4749', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-02-28', 'valor' => '4749', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-03-31', 'valor' => '4303', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-04-30', 'valor' => '4326', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-05-31', 'valor' => '4003', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-06-30', 'valor' => '4316', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-07-31', 'valor' => '5537', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-08-31', 'valor' => '4950', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-09-30', 'valor' => '4557', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-10-31', 'valor' => '4210', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-11-30', 'valor' => '4229', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '5423', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-01-31', 'valor' => '4659', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '3070', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '3916', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '4189', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '4301', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '4630', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-07-01', 'valor' => '5815', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '5462', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '4460', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '4196', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '4175', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '5434', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '4022', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '3301', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '5294', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '4905', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '5695', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '4579', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '4885', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '4369', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '4178', 'fuente_nombre' => 'Operadora Mexicana de Aeropuertos (OMA)', 'notas' => '')));
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

} // Clase SustentabilidadPasajerosAereosInternacionalesMensuales

?>
