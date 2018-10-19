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
        $this->nombre        = 'Medio Ambiente';
        $this->fecha         = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo       = 'medio-ambiente';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion   = 'Sistema Metropolitano de Indicadores: Categoría Medio Ambiente. En PC, mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con la información detallada del indicador.';
        $this->claves        = 'IMPLAN, Indicadores, Categoría, Medio Ambiente';
        // Rutas relativas a las imágenes, apuntan a íconos interactivos para cada categoría
        $this->imagen        = '../imagenes/categorias/medio-ambiente.jpg';
        $this->imagen_previa = '../imagenes/categorias/medio-ambiente.jpg';
        $this->imagen_id     = 'categorias-medio-ambiente';
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
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas donde separan en Orgánico e Inorgánico los Residuos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-donde-separan-en-organico-e-inorganico-los-residuos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, Dirección General de Medio Ambiente">43 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas donde todos sus Focos son ahorradores</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-donde-todos-sus-focos-son-ahorradores.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">44.3 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que Disponen de Calentador Solar de Agua</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-calentador-solar-de-agua.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">1.5 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que disponen de Panel Solar para tener Electricidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-panel-solar-para-tener-electricidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI. Censos de Población y Vivienda">1 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Aprovechamiento del Biogás en Rellenos Sanitarios</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" data-toggle="tooltip" title="1)SI TIENE, 0)NO TIENE, 31/12/2012, IMCO">0</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Capacidad de Tratamiento de Agua en Operación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">1.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.5</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2012, IMCO">1.9</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Concentración de Partículas menores a 10 micras</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-concentracion-de-particulas-menores-a-10-micras.html" data-toggle="tooltip" title="ug por m3, 21/12/2016, HECAT">126</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Concentración de Partículas Suspendidas Totales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-concentracion-de-particulas-suspendidas-totales.html" data-toggle="tooltip" title="ug por m3, 21/12/2016, Esc. Secundaria Técnica No. 83">371</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disposición Adecuada de Residuos Sólidos</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">0.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">94.7 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Empresas Certificadas como Limpias</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.2</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">3.8</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.4</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">0.0</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, IMCO">1.8</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Generación de Basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2015, Dirección General de Servicios Públicos Municipales">7.70</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.70</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">7.80</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">2.80</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.03</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Índice de Gestión de Calidad del Aire</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">211</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">405</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">304</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">170</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">271</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Peatones</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">12.06 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">16.89 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">21.32 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">23.45 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-peatones.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">16.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sistema de Transporte Masivo</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html" data-toggle="tooltip" title="de 0 a 3, 31/12/2012, IMCO">1</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">28.4 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">100.0 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">82.1 %</a></td>
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
    <td class="indicador color5">Tratamiento de Aguas Residuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-tratamiento-de-aguas-residuales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, CONAGUA">79.29 %</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Unidad administrativa de gestión de calidad del aire estatal</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-unidad-administrativa-de-gestion-de-calidad-del-aire-estatal.html" data-toggle="tooltip" title="De 0 a 4, 31/12/2015, Centro Mario Molina (CMM)">2</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
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
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Automóviles</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.87 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">26.39 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">25.61 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">19.06 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-automoviles.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">29.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Bicicleta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">5.80 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">10.57 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">9.23 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">9.84 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">8.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Modos No Motorizados</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">17.86 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">27.46 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">30.55 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">33.29 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-modos-no-motorizados.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">24.47 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Transporte Colectivo Privado</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">6.21 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.76 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.07 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">12.64 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">7.68 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Usuarios de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">36.68 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.99 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">33.52 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">31.08 %</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2015, INEGI">34.91 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Zonas verdes</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-zonas-verdes.html" data-toggle="tooltip" title="Hectáreas, 31/12/2017, Ayuntamiento de Torreón">82.3</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<h3>Otras regiones</h3>
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Coahuila</th>
    <th>Durango</th>
    <th>Nacional</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Capacidad de Tratamiento de Agua en Operación</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-coahuila/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.39</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-durango/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.60</a></td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Generación de Basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-coahuila/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.8</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-durango/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">6.1</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-nacional/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">7.6</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-coahuila/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">257</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-durango/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">325</a></td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-nacional/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2015, INEGI">245</a></td>
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
