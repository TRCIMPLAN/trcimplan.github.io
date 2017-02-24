<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaPermisoDeConstruccion
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
 * Clase EconomiaPermisoDeConstruccion
 */
class EconomiaPermisoDeConstruccion extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Permiso de Construcción en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-permiso-de-construccion';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Número de días necesarios para conseguir un permiso de construcción.';
        $this->claves                    = 'IMPLAN, Torreón, Empresas, Doing Business';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Empresas', 'Doing Business');
        $this->fuentes                   = array('Doing Business');
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
            <td>31/12/2012</td>
            <td>72</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 11
- Costo (% del ingreso per cápita): 37.4 
- Ranking en permiso de construcción: 10</td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>107</td>
            <td>Doing Business</td>
            <td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en permiso de construcción fueron los siguientes para Torreón: 
Procedimientos (número) = 13 ; 
Costo (% de ingreso per cápita) = 40,6</td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>94</td>
            <td>Doing Business</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Días.</p>
FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Permiso de Construcción en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Días.</p>
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
      data: [{ fecha: '2012-12-31', dato: 72 },{ fecha: '2013-10-31', dato: 107 },{ fecha: '2015-12-31', dato: 94 }],
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

} // Clase EconomiaPermisoDeConstruccion

?>
