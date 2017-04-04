<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias Macroeconomia
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
 * Clase Macroeconomia
 */
class Macroeconomia extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Macroeconomía';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo                   = 'macroeconomia';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Sistema Metropolitano de Indicadores - Categoría Macroeconomía';
        $this->claves                    = 'IMPLAN, Indicadores, Categoría, Macroeconomía';
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
        $this->imagen                    = '../imagenes/categorias/macroeconomia.jpg';
        $this->imagen_previa             = '../imagenes/categorias/macroeconomia.jpg';
        $this->imagen_id                 = 'categorias-macroeconomia';
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del PIB Estatal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">3.12 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">1.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">3.12 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html" data-toggle="tooltip" title="Tasa de cambio, 31/12/2012, IMCO">2.75 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inflación Anual</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inflacion-anual.html" data-toggle="tooltip" title="Porcentaje, 31/12/2016, INEGI">2.94 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 46.50</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 214.49</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/05/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 9.79</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 0.61</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 271.40</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 570.42</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 339.25</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 546.12</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 585.97</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 506.52</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 225,170.46</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 154,519.29</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 26,085.15</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 18,450.05</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 164,908.36</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

} // Clase Macroeconomia

?>
