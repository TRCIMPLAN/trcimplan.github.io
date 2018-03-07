<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias MedioAmbiente
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
 * Clase MedioAmbiente
 */
class MedioAmbiente extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Medio ambiente';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'medio-ambiente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Medio ambiente. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Medio ambiente';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/por-defecto.jpg';
        $this->imagen_previa = '../imagenes/categorias/por-defecto.jpg';
        $this->imagen_id     = 'categorias-por-defecto';
        // Para el Organizador
        $this->categorias    = array();
        $this->fuentes       = array();
        $this->regiones      = array();
        // Iniciar el contenido que será un SchemaArticle
        $this->contenido = new \Base\SchemaArticle();
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Definir propiedades del contenido que es un SchemaArticle
        $this->contenido->big_heading   = TRUE;
        $this->contenido->headline      = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
        $this->contenido->articleBody   = <<<FINAL
<h3>Zona Metropolitana de La Laguna</h3>
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
    <td class="indicador color5">Árboles plantados por año</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-arboles-plantados-por-ano.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2015, DGMA">2,453.5985</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con depósitos de basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-depositos-de-basura.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con financiamiento de gestión de residuos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-financiamiento-de-gestion-de-residuos.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con mecanismos de sanción en materia de residuos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-mecanismos-de-sancion-en-materia-de-residuos.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con programas de cuidado de flora y fauna</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-programas-de-cuidado-de-flora-y-fauna.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con programas de limpieza</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-programas-de-limpieza.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento con promoción a la reforestación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-con-promocion-a-la-reforestacion.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento de capacitación en protección de recursos naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-de-capacitacion-en-proteccion-de-recursos-naturales.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento de legislación en residuos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-de-legislacion-en-residuos.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento de Normatividad en Recursos Naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-de-normatividad-en-recursos-naturales.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento de Reglamentos de Recursos Naturales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-de-reglamentos-de-recursos-naturales.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Cumplimiento de reglamentos de residuos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-cumplimiento-de-reglamentos-de-residuos.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2016, DGMA">1</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Hectáreas de zonas verdes</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-hectareas-de-zonas-verdes.html" data-toggle="tooltip" title="Hectáreas por cada 100,000 habitantes, 31/12/2017, DGMA">82.3</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Número de vehículos motorizados de dos ruedas per cápita</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-numero-de-vehiculos-motorizados-de-dos-ruedas-per-capita.html" data-toggle="tooltip" title="Por habitante, 31/12/2015, DGVyMU">0.001</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población con servicio regular de recogida de residuos.</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-poblacion-con-servicio-regular-de-recogida-de-residuos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, Dirección General de Servicios Públicos Municipales">100 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Porcentaje de cambio en el número de especies autóctonas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-porcentaje-de-cambio-en-el-numero-de-especies-autoctonas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, DGMA">2.7778 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Proporción de viviendas con recolección de basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-proporcion-de-viviendas-con-recoleccion-de-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">98.86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-proporcion-de-viviendas-con-recoleccion-de-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">87.55 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-proporcion-de-viviendas-con-recoleccion-de-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">90.55 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-proporcion-de-viviendas-con-recoleccion-de-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">74.67 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Regalo o venta de residuos reutilizables.</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-regalo-o-venta-de-residuos-reutilizables.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">63.00 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-regalo-o-venta-de-residuos-reutilizables.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">67.30 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-regalo-o-venta-de-residuos-reutilizables.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">59.13 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-regalo-o-venta-de-residuos-reutilizables.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">66.08 %</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Residuos peligrosos generados</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-residuos-peligrosos-generados.html" data-toggle="tooltip" title="Toneladas Pér Cápita, 31/12/2015, Dirección General de Servicios Públicos Municipales">0.02</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Residuos sólidos eliminados en vertederos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-residuos-solidos-eliminados-en-vertederos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, Dirección General de Servicios Públicos Municipales">98.6425 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Residuos sólidos reciclados</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-residuos-solidos-reciclados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, Dirección General de Servicios Públicos Municipales">1.3575 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Residuos sólidos recogidos per capita</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-residuos-solidos-recogidos-per-capita.html" data-toggle="tooltip" title="Toneladas Pér Cápita, 31/12/2015, Dirección General de Servicios Públicos Municipales">0.3588</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Separación básica de residuos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-separacion-basica-de-residuos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">43 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas que queman o entierran la basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-que-queman-o-entierran-la-basura.html" data-toggle="tooltip" title="Porcentaje, 31/01/2018, INEGI">1.13 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-viviendas-que-queman-o-entierran-la-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">11.91 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-viviendas-que-queman-o-entierran-la-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">13.21 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-viviendas-que-queman-o-entierran-la-basura.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">24.36 %</a></td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>

FINAL;
        // Entregar
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript
        $this->javascript = <<<FINAL
FINAL;
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

} // Clase MedioAmbiente

?>
