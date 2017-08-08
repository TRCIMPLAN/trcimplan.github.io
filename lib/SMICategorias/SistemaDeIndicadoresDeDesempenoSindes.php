<?php
/**
 * TrcIMPLAN Sitio Web - SMICategorias SistemaDeIndicadoresDeDesempenoSindes
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
 * Clase SistemaDeIndicadoresDeDesempenoSindes
 */
class SistemaDeIndicadoresDeDesempenoSindes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre        = 'Sistema de Indicadores de Desempeño (SINDES)';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'sistema-de-indicadores-de-desempeno-sindes';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Sistema de Indicadores de Desempeño (SINDES). En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Sistema de Indicadores de Desempeño (SINDES)';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/sistema-de-indicadores-de-desempeno-sindes.jpg';
        $this->imagen_previa = '../imagenes/categorias/sistema-de-indicadores-de-desempeno-sindes.jpg';
        $this->imagen_id     = 'categorias-sistema-de-indicadores-de-desempeno-sindes';
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Gasto en Nómina por Empleado</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-gasto-en-nomina-por-empleado.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Ayuntamiento de Torreón">$ 63,791.74</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Promedio de Horas para la Realización del Trámite de Licencia para Negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">30</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">38</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Base</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-base.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">0.4</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacitación a Empleados de Confianza</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-confianza.html" data-toggle="tooltip" title="Horas, 30/12/2014, Ayuntamiento de Torreón">3.15</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Empleados Municipales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-empleados-municipales.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">6.22</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Litros de Combustible Gastados por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html" data-toggle="tooltip" title="Litros por Persona, 31/12/2014, Ayuntamiento de Torreón">2.4</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio.html" data-toggle="tooltip" title="Litros, 30/06/2014, Ayuntamiento de Torreón">$ 21,430.36</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Policías Operativos de Seguridad Pública</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, Ayuntamiento de Torreón">0.97</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Promedio de Horas para la Realización del Trámite de Carta de No Adeudo Predial</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-promedio-de-horas-para-la-realizacion-del-tramite-de-carta-de-no-adeudo-predial.html" data-toggle="tooltip" title="Horas, 30/06/2014, Ayuntamiento de Torreón">0.11</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Vehículos Automotores por Habitante</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html" data-toggle="tooltip" title="Por habitante, 31/12/2014, Ayuntamiento de Torreón">0.19</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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

} // Clase SistemaDeIndicadoresDeDesempenoSindes

?>
