<?php
/**
 * TrcIMPLAN - SMI Categorías Seguridad (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMICategorias;

/**
 * Clase Seguridad
 */
class Seguridad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Seguridad';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'seguridad';
        $this->imagen           = '../imagenes/categorias/seguridad.jpg';
        $this->imagen_previa    = '../imagenes/categorias/seguridad.jpg';
        $this->imagen_id        = 'categorias-seguridad';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Seguridad';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
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
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Periodistas Muertos o Desaparecidos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">5</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMCO">6</a></td>
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
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">4,421</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">1,682</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">362</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">164</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">6,509</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">17</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">29</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">6</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2014, INEGI">55</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Cantidad de Policías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-cantidad-de-policias.html" data-toggle="tooltip" title="Cantidad, 28/02/2014, Ayuntamiento de Torreón">768</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">745</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">467</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">127</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">34</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1,373</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos Patrimoniales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">110</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">80</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">20</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">2</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">212</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">7</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">3</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">23</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Monto Reportado en Robo de Mercancías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.07</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.16</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.03</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.01</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html" data-toggle="tooltip" title="Pesos, 31/12/2012, IMCO">$ 0.09</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Percepción de Inseguridad</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">65.97 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">71.71 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">68.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">31,455</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">2,561</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">11</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">78</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.38 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.72 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.65 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.82 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.82 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">6,647</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">13,584</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">1,100</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">90</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">NO TIENE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">19</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">30</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">14</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">9</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-negocios.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">53</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">13</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">46</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">22</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">5</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">51</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">50</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">32</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">11</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">93</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">211</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">155</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">31</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">397</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/01/2016, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">109.7160</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">43.7146</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">41.8962</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">36.2831</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">77.5463</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">23.1372</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">7.5040</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">40.1776</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">8.3992</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2012, IMCO">19.0018</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo Sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase Seguridad

?>
