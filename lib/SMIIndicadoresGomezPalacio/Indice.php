<?php
/**
 * TrcIMPLAN SMIv2 - Indice
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase Indice
 */
class Indice extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Indicadores de Gómez Palacio';
        $this->nombre_menu   = 'Indicadores > Indicadores por Región';
        $this->directorio    = 'indicadores-gomez-palacio';
        $this->archivo       = 'index';
        $this->descripcion   = 'Matriz de indicadores de Gómez Palacio';
        $this->imagen_previa = '../imagenes/imagen-previa.jpg';
        $this->icono         = '';
        $this->claves        = 'IMPLAN, Indicadores, Gómez Palacio';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Gómez Palacio</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 614,765,352.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desempleo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">9,705</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Exportadoras</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">55</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">0.98 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Competitividad Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">42.5700</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">9.88 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">60.23 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-especializacion-local-en-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">2.23 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Minería</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-especializacion-local-en-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">0.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">4.91 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Gini</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-indice-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, CONEVAL">0.4208</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 214.49</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2012, Elaboración propia con datos obtenidos del INEGI">$ 640.48</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Medianas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">2.36 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Microempresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">88.88 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Pequeñas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.78 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-personal-ocupado-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.61 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-personal-ocupado-en-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">32.10 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-personal-ocupado-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">30.28 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">$ 157,032.38</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Frenado el Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-sectores-que-han-frenado-crecimiento-20082012.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">9.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">19.55 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-tamano-mercado-hipotecario.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">85</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-tasa-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-tasa-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">43.63 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Total de Empresas registradas en el SIEM</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-total-empresas-registradas-en-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">2,032</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 28/02/2015, Instituto Mexicano del Seguro Social (IMSS)">74,991</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-unidades-economicas-dedicadas-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas al Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.63 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomezpalacio/economia-unidades-economicas-dedicadas-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">42.09 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacidad Financiera</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">64.43 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 30/06/2012, INE-IEPCC">4.48 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Diferencia de Votos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-competencia-electoral-diferencia-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">5,784</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Votos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">120,131</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Cumplimiento en Información Pública Mínina</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 31/08/2014, ICAI-IDAIP">86.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Gobierno Electrónico Municipal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-indice-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.4763</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-indice-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">35.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos por Cobro de Servicios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-ingresos-por-cobro-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 523,339,253.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2013, INEGI">$ 1,065,239,676.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales Per Cápita</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2012, Elaboración propia con datos obtenidos del INEGI">$ 3,328.92</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">58.31 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Relación de Ingresos Propios y Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-gomezpalacio/gobierno-relacion-ingresos-propios-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">42.09 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, INEGI">1,128</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">29</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">425</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">15</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-personas-involucradas-en-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">31,455</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Personas Involucradas en Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-personas-involucradas-en-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">11</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-porcentaje-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, INEGI">1.94 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-presuntos-delitos-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">13,584</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delitos del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-presuntos-delitos-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">9</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">34</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">16</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">54</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">22</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">177</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-gomezpalacio/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">20,263</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">10,863</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Masculino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">9,400</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">35.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">37.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas Censables</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">74</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.2000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Discapacidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">10</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Hogares con Jefatura Femenina</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">23.19 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8681</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de hacinamiento</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">0.9700</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Maternidad Adolescente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">16.30 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">4.2000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, SINAIS (SSA)">5.0000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">9.1000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">8.0000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">2.9000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ocupación por Vivienda</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-ocupacion-por-vivienda.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI. Censos de Población y Vivienda">3.9000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-organizaciones-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">45.8400</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Católica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.80 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Derechohabiente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">241,537</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">350,513</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">37.29 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">5.30 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">31.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-razon-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">33.3000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" data-toggle="tooltip" title="Mujeres por Hombres, 31/12/2010, INEGI. Censos de Población y Vivienda">1.0210</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Alimentario</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">18.11 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.31 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Tasa de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-tasa-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.4000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">9</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Agua de la Red Pública</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-con-agua-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">28.87 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Drenaje</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-con-drenaje.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">95.19 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Energía Eléctrica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-con-energia-electrica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">99.44 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-con-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Habitadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-habitadas.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">83,973</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que Disponen de Retrete</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-que-disponen-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">97.10 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Totales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-gomezpalacio/sociedad-viviendas-totales.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">108,682</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-acceso-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMPLAN">88.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Alumbrado Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">1.30 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Área No Urbanizada</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-area-no-urbanizada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">92.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Aérea</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-destinos-via-aerea.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, Operadora Mexicana de Aeropuertos (OMA)">NO TIENE</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Terrestre</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disponibilidad de Banqueta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-disponibilidad-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">84.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Generación de Basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-generacion-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.7000</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2013, INEGI">333</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Internacionales Anuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" data-toggle="tooltip" title="Personas, 31/12/2013, Operadora Mexicana de Aeropuertos (OMA)">NO TIENE</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Totales Anual</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-pasajeros-aereos-totales-anual.html" data-toggle="tooltip" title="Personas, 31/12/2013, Operadora Mexicana de Aeropuertos (OMA)">NO TIENE</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en OTRO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">12.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en su PROPIO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">78.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera de Alimentadoras Estatales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">111</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Total</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">361</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Troncal Federal</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">71</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-sobreexplotacion-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMCO-CONAGUA">100.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Deshabitadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.68 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Ocupadas Temporalmente</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">3.30 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Volumen Tratado de Aguas Residuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-gomezpalacio/sustentabilidad-volumen-tratado-aguas-residuales.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.8300</a></td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>

FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Indice

?>
