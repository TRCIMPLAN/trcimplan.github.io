<?php
/**
 * TrcIMPLAN - SMI Categorías Finanzas Públicas (Creado por Central:SmiLanzadera)
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
 * Clase FinanzasPublicas
 */
class FinanzasPublicas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Finanzas Públicas';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'finanzas-publicas';
        $this->imagen           = '../imagenes/categorias/finanzas-publicas.jpg';
        $this->imagen_previa    = '../imagenes/categorias/finanzas-publicas.jpg';
        $this->imagen_id        = 'categorias-finanzas-publicas';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Finanzas Públicas';
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
    <td class="indicador color1">Gasto en Nómina por Empleado</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-gasto-en-nomina-por-empleado.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Ayuntamiento de Torreón">$ 63,791.74</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacidad Financiera</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">65.2382 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">40.4069 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">86.7984 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">18.6306 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">58.0197 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos por Cobro de Servicios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2013, INEGI">$ 848,020,707.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 523,339,253.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 54,082,713.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 30,798,906.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 1,400,461,048.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Propios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">29.8231 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.4262 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">15.0065 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">8.7762 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-propios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">32.6557 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 2,077,991,769.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 929,690,716.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 525,402,020.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 231,643,308.00</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 3,764,727,813.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales Per Cápita</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 3,038.38</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 2,652.37</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 3,470.10</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 2,060.27</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">$ 2,899.81</a></td>
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
    <td class="indicador color2">Relación de Ingresos Propios y Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">38.3748 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomez-palacio/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">24.3200 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-lerdo/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">33.3260 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-matamoros/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">9.7467 %</a></td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-la-laguna/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Elaboración propia con datos obtenidos del INEGI">32.4379 %</a></td>
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

} // Clase FinanzasPublicas

?>
