<?php
/**
 * TrcIMPLAN - SMI Categorías Empresas (Creado por Central:SmiLanzadera)
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
 * Clase Empresas
 */
class Empresas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Empresas';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'empresas';
        $this->imagen           = '../imagenes/categorias/empresas.jpg';
        $this->imagen_previa    = '../imagenes/categorias/empresas.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Empresas';
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
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Apertura de Negocios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-negocios.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">9.5</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">243</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">270</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/12/2012, IMCO">256.5</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Exportadoras</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">113</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">55</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">11</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">5</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">184</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.13 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">0.98 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">0.00 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">0.58 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.07 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Medianas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.57 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">2.36 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.69 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Microempresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">89.65 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">88.88 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">92.70 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">95.38 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">89.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Nuevas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-nuevas-empresas.html" data-toggle="tooltip" title="Cantidad, 30/04/2015, Ventanilla Universal, Dirección de Desarrollo Económico del Municipio de Torreón">203</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Obtención de crédito - Creación de garantías</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-obtencion-de-credito-creacion-de-garantias.html" data-toggle="tooltip" title="Días, 31/12/2007, Doing Business">13</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Pequeñas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.65 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.78 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">5.62 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">2.31 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.54 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Permiso de Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-permiso-de-construccion.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">107</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Promedio de horas para la realización del trámite de licencia para negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html" data-toggle="tooltip" title="Horas, 31/12/2014, Ayuntamiento de Torreón">30</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de Propiedades</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-propiedades.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">28</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Total de Empresas registradas en el SIEM</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-total-de-empresas-registradas-en-el-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7,402</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-total-de-empresas-registradas-en-el-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">2,032</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-total-de-empresas-registradas-en-el-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">178</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-total-de-empresas-registradas-en-el-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">173</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-total-de-empresas-registradas-en-el-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">9,785</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.55 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.52 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">9.58 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.69 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas al Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">42.73 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.63 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">48.67 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">51.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.28 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.92 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">42.09 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">39.23 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">35.17 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">43.06 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Empresa Socialmente Responsable</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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

} // Clase Empresas

?>
