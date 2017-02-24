<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias ServiciosPublicos
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

namespace SMICategorias;

/**
 * Clase ServiciosPublicos
 */
class ServiciosPublicos extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Servicios Públicos';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo                   = 'servicios-publicos';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Sistema Metropolitano de Indicadores - Categoría Servicios Públicos';
        $this->claves                    = 'IMPLAN, Indicadores, Categoría, Servicios Públicos';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores > Indicadores por Categoría';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = FALSE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array();
        $this->fuentes                   = array();
        $this->regiones                  = array();
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen                    = '../imagenes/categorias/servicios-publicos.jpg';
        $this->imagen_previa             = '../imagenes/categorias/servicios-publicos.jpg';
        $this->imagen_id                 = 'categorias-servicios-publicos';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir contenido HTML en el esquema
        $this->contenido->articleBody = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Alumbrado Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">3.53 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">5.58 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">9.09 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">15.42 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">5.61 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-de-transporte-publico.html" data-toggle="tooltip" title="Kilómetros, 31/03/2014, IMPLAN">250</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase ServiciosPublicos

?>
