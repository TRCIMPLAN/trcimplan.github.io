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
namespace SMIIndicadoresLaguna;

/**
 * Clase Indice
 */
class Indice extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Indicadores de La Laguna';
        $this->nombre_menu   = 'Indicadores > Indicadores por Región';
        $this->directorio    = 'indicadores-laguna';
        $this->archivo       = 'index';
        $this->descripcion   = 'Matriz de indicadores de La Laguna';
        $this->imagen_previa = '../imagenes/imagen-previa.jpg';
        $this->icono         = '';
        $this->claves        = 'IMPLAN, Indicadores, La Laguna';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 5,671,976,037.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desempleo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">35,416</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empresas Exportadoras</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-empresas-exportadoras.html" data-toggle="tooltip" title="Cantidad de Empresas, 24/11/2014, Secretaría de Economía">184</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.07 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Competitividad Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">45.1100</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">8.33 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">71.10 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-especializacion-local-en-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">3.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Minería</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-especializacion-local-en-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">1.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">7.15 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Gini</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-indice-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, CONEVAL">0.4238</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 271.40</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2012, Elaboración propia con datos obtenidos del INEGI">$ 411.88</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Medianas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Microempresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">89.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Pequeñas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.54 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-personal-ocupado-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">28.03 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-personal-ocupado-en-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">28.59 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-personal-ocupado-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">32.99 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">$ 149,559.46</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Frenado el Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-sectores-que-han-frenado-crecimiento-20082012.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">16.81 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">30.86 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-tamano-mercado-hipotecario.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">401</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-tasa-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.85 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-tasa-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2014, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">43.37 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Total de Empresas registradas en el SIEM</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-total-empresas-registradas-en-siem.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">9,785</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 28/02/2015, Instituto Mexicano del Seguro Social (IMSS)">267,403</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-unidades-economicas-dedicadas-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.69 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas al Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.28 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-laguna/economia-unidades-economicas-dedicadas-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">43.06 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacidad Financiera</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">69.07 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">6.70 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Diferencia de Votos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-competencia-electoral-diferencia-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">32,140</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Votos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">479,785</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Cumplimiento en Información Pública Mínina</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, ICAI-IDAIP">80.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Gobierno Electrónico Municipal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-indice-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.5440</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-indice-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">26.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos por Cobro de Servicios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-ingresos-por-cobro-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2012, INEGI">$ 1,400,461,048.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2013, INEGI">$ 3,661,978,820.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales Per Cápita</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2012, Elaboración propia con datos obtenidos del INEGI">$ 2,772.32</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">57.68 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Relación de Ingresos Propios y Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-laguna/gobierno-relacion-ingresos-propios-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">40.93 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, INEGI">3,362</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">66</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">1,175</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">30</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-porcentaje-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, INEGI">1.61 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Negocios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-negocios.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">122</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a Transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-transeuntes.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">92</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robo-vehiculos.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">97</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a Casa Habitación</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robos-casa-habitacion.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">79</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">487</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Extorsión</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-extorsion.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidio Doloso</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-homicidio-doloso.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo con Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-con-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de Vehículo sin Violencia</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-sin-violencia.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-laguna/seguridad-tasa-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2015, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">NO DISPONIBLE</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">82,328</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">44,790</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Masculino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">37,538</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-alumnos-con-perfil-cientificomatematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">42.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-alumnos-con-perfil-gramaticoespanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">40.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas Censables</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">173</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Discapacidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">4.30 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">13</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Hogares con Jefatura Femenina</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">23.67 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-indice-desarrollo-humano-idh.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, INAFED-PNUD">0.8680</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de hacinamiento</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-indice-hacinamiento.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI. Censos de Población y Vivienda">1.0600</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">3.5000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, SINAIS (SSA)">5.6000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2013, SINAIS (SSA)">12.2000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">7.5000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por VIH-SIDA</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-mortalidad-por-vihsida.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SINAIS (SSA)">3.4000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ocupación por Vivienda</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-ocupacion-por-vivienda.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI. Censos de Población y Vivienda">3.9500</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-organizaciones-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">41.2200</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Católica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-poblacion-catolica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">82.80 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Derechohabiente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">870,763</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">1,298,270</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">32.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">4.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">28.60 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Tasa de Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-tasa-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">5.3000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">31</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Usuarios de Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-usuarios-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, INEGI">NO TIENE</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Agua de la Red Pública</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-con-agua-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.04 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">33.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Drenaje</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-con-drenaje.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">96.26 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Energía Eléctrica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-con-energia-electrica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">99.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-con-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">23.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Habitadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-habitadas.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">317,832</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que Disponen de Retrete</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-que-disponen-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">97.54 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Totales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-laguna/sociedad-viviendas-totales.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">408,227</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-acceso-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMPLAN">88.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Alumbrado Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">2.69 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Área No Urbanizada</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-area-no-urbanizada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">94.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Aérea</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-destinos-via-aerea.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, Operadora Mexicana de Aeropuertos (OMA)">7</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Terrestre</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Disponibilidad de Banqueta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-disponibilidad-banqueta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">82.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Generación de Basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-generacion-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.0300</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2013, INEGI">251</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Internacionales Anuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" data-toggle="tooltip" title="Personas, 31/12/2014, Operadora Mexicana de Aeropuertos (OMA)">54,154</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Totales Anual</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-pasajeros-aereos-totales-anual.html" data-toggle="tooltip" title="Personas, 31/12/2014, Operadora Mexicana de Aeropuertos (OMA)">523,783</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en OTRO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">10.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en su PROPIO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">82.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-sobreexplotacion-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMCO-CONAGUA">82.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Traslados a Pie</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-traslados-pie.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">19.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Automóvil Particular</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-uso-automovil-particular.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">49.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Bicicleta</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-uso-bicicleta.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">2.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Uso de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-uso-transporte-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2011, Logit">30.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Deshabitadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">19.45 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Ocupadas Temporalmente</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">3.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Volumen Tratado de Aguas Residuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-laguna/sustentabilidad-volumen-tratado-aguas-residuales.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">1.7800</a></td>
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
