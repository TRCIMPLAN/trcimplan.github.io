<?php
/**
 * TrcIMPLAN - SMI Categorías Vialidad (Creado por Central:SmiLanzadera)
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
 * Clase Vialidad
 */
class Vialidad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Vialidad';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'vialidad';
        $this->imagen           = '../imagenes/categorias/vialidad.jpg';
        $this->imagen_previa    = '../imagenes/categorias/vialidad.jpg';
        $this->imagen_id        = 'categorias-vialidad';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Vialidad';
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
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.38 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.72 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.65 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">1.82 %</a></td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">0.82 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">94 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">91 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">74 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, IMPLAN">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disponibilidad de Banqueta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">83 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">66 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">60 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, INEGI">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, INEGI">217</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, INEGI">364</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, INEGI">289</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, INEGI">164</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2014, INEGI">260</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Traslados a Pie</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-traslados-a-pie.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">19 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Automóvil Particular</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-uso-de-automovil-particular.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">49 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Bicicleta</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-uso-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">2 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Transporte Público</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-uso-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">30 %</a></td>
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

} // Clase Vialidad

?>
