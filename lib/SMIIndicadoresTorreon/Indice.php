<?php
/**
 * Indice.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase Indice
 */
class Indice extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre        = 'Indicadores de Torreón';
        $this->nombre_menu   = 'Indicadores Torreón';
        $this->directorio    = 'indicadores-torreon';
        $this->archivo       = 'index';
        $this->descripcion   = 'Matriz de indicadores de Torreón';
        $this->imagen_previa = '../imagenes/imagen-previa.jpg';
        $this->icono         = '';
        $this->claves        = 'IMPLAN, Indicadores, Torreón';
        $this->categorias    = array('Indicadores');
        $this->contenido     = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Apertura de Negocio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-apertura-de-negocio.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">9.5000</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Cartera Hipotecaria</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-cartera-hipotecaria.html" data-toggle="tooltip" title="Pesos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">$ 4,664,619,926.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desempleo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">19,536</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desocupados como porcentaje de la PEA</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-desocupados-como-porcentaje-de-la-pea.html" data-toggle="tooltip" title="Porcentaje, 25/06/2010, INEGI">7.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Ejecución de Contratos</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-ejecucion-de-contratos.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">270</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Grandes Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-grandes-empresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.13 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Competitividad Urbana</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-competitividad-urbana.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2012, IMCO">50.6700</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">7.45 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">76.06 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-construccion.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">3.60 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en la Minería</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-mineria.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">1.40 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Especialización Local en Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-especializacion-local-en-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">8.05 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Índice de Gini</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-indice-de-gini.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2010, CONEVAL">0.4520</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Extranjera Directa</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-extranjera-directa.html" data-toggle="tooltip" title="Millones de dólares, 31/12/2012, Elaboración propia con datos obtenidos del INEGI y la Secretaría de Economía">$ 46.50</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Inversión Per cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-inversion-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2012, Elaboración propia con datos obtenidos del INEGI">$ 348.09</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Medianas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-medianas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">1.57 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Microempresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-microempresas.html" data-toggle="tooltip" title="Porcentaje, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">89.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Obtención de crédito - Creación de garantías</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-obtencion-de-credito---creacion-de-garantias.html" data-toggle="tooltip" title="Días, 31/12/2007, Doing Business">13</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Pequeñas Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-pequenas-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Permiso de Construcción</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-permiso-de-construccion.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">107</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.65 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">25.70 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">35.64 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Posgrados de Calidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-posgrados-de-calidad.html" data-toggle="tooltip" title="Cantidad de Posgrados, 30/04/2014, CONACYT">11</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Producción Bruta Total Per Cápita</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">$ 197,853.91</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Registro de Propiedades</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-registro-de-propiedades.html" data-toggle="tooltip" title="Días, 31/10/2013, Doing Business">28</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Frenado el Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">7.36 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Sectores que Han Presentado Alto Crecimiento (2008-2012)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, Elaboración propia con datos obtenidos del INEGI">15.92 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tamaño del Mercado Hipotecario</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" data-toggle="tooltip" title="Cantidad de Créditos, 31/03/2014, Comisión Nacional Bancaria y de Valores (CNBV)">284</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Total de Empresas</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-total-de-empresas.html" data-toggle="tooltip" title="Cantidad de Empresas, 31/07/2014, Sistema de Información Empresarial Mexicano (SIEM)">7,402</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 30/09/2014, Instituto Mexicano del Seguro Social (IMSS)">170,628</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados (Región)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados--region-.html" data-toggle="tooltip" title="Personas, 31/12/2013, IMSS Subdelegación Torreón">187,050</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">8.55 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas al Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">42.73 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Unidades Económicas Dedicadas a los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/10/2013, INEGI">44.92 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Capacidad Financiera</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-capacidad-financiera.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">74.22 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral.html" data-toggle="tooltip" title="Porcentaje, 07/07/2013, INE-IEPCC">1.77 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Diferencia de Votos</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral-diferencia-de-votos.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">4,367</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Competencia Electoral Votos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-competencia-electoral-votos-totales.html" data-toggle="tooltip" title="Cantidad, 01/07/2012, INE-IEPCC">246,044</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Cumplimiento en información pública mínina</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-cumplimiento-en-informacion-publica-minina.html" data-toggle="tooltip" title="Porcentaje, 30/06/2014, ICAI-IDAIP">98.72 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Índice de Gobierno Electrónico Municipal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html" data-toggle="tooltip" title="De 0 a 1, 31/12/2011, CIDE">0.6916</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">índice de Información Presupuestal</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, IMCO">22.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos por Cobro de Servicios</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-por-cobro-de-servicios.html" data-toggle="tooltip" title="Pesos, 31/12/2013, INEGI">$ 848,020,707.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-totales.html" data-toggle="tooltip" title="Pesos, 31/12/2013, INEGI">$ 1,927,501,368.00</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Ingresos Totales Per Cápita</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html" data-toggle="tooltip" title="Pesos, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">$ 2,821.23</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Participación Electoral</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-participacion-electoral.html" data-toggle="tooltip" title="Porcentaje, 01/07/2012, INE-IEPCC">53.75 %</a></td>
  </tr>
  <tr>
    <td class="subindice color2">Gobierno</td>
    <td class="indicador color2">Relación de Ingresos Propios y Totales</td>
    <td class="derecha color2"><a class="vinculo" href="../indicadores-torreon/gobierno-relacion-de-ingresos-propios-y-totales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, Elaboración propia con datos obtenidos del INEGI">43.99 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, INEGI">1,831</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI">23</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Cantidad de Policías</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-cantidad-de-policias.html" data-toggle="tooltip" title="Cantidad, 28/02/2014, Ayuntamiento de Torreón">768</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-delitos.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">754</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-homicidios.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">24</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Porcentaje de Accidentes Viales Fatales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, INEGI">1.17 %</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delincuentes del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delincuentes-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">765</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delincuentes del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delincuentes-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">194</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Presuntos Delincuentes por Narcóticos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-presuntos-delincuentes-por-narcoticos.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">111</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a negocios.</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-negocios-.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">92</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo a transeuntes</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">56</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robo de Vehículos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robo-de-vehiculos.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">97</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos a casa habitación.</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-a-casa-habitacion-.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">81</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Robos Totales</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-robos-totales.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">403</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Secuestros</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-secuestros.html" data-toggle="tooltip" title="Cantidad, 30/09/2014, Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública">0</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Sentenciados en Materia de Narcóticos Registrados en el Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-sentenciados-en-materia-de-narcoticos-registrados-en-el-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">108</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Sentenciados Registrados del Fuero Común</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-sentenciados-registrados-del-fuero-comun.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">392</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Sentenciados Registrados del Fuero Federal</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-sentenciados-registrados-del-fuero-federal.html" data-toggle="tooltip" title="Cantidad, 31/12/2008, INEGI">194</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Delitos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-delitos.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SNSP">1,466.3600</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Homicidios</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">45.7600</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Policías por Habitante</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-policias-por-habitante.html" data-toggle="tooltip" title="Por cada mil, 28/02/2014, Ayuntamiento de Torreón">1.0997</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Robo de VehÍculos</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">232.8200</a></td>
  </tr>
  <tr>
    <td class="subindice color3">Seguridad</td>
    <td class="indicador color3">Tasa de Secuestro</td>
    <td class="derecha color3"><a class="vinculo" href="../indicadores-torreon/seguridad-tasa-de-secuestro.html" data-toggle="tooltip" title="Por cada 100 mil, 31/12/2013, SNSP">1.6300</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">45,139</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Femenino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">25,310</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Adultos Mayores Masculino</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-adultos-mayores-masculino.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">19,829</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Científico-Matemático</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">46.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Alumnos con Perfil Gramático-Español</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html" data-toggle="tooltip" title="Porcentaje, 31/12/2013, SEP">44.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Camas Censables</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-camas-censables.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">51</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Diferencial de Grado Promedio de Escolaridad por Género</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI">-0.3200</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Discapacidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-discapacidad.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI. Censos de Población y Vivienda">10.17 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Espacios Culturales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-espacios-culturales.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, CONACULTA-IMPLAN">16</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Estimación de Menores Huérfanos por Agresiones</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1,253</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Fecundidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-fecundidad.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, INEGI. Censos de Población y Vivienda">2.1300</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Hogares con Jefatura Femenina</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">24.91 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Índice de Desarrollo Humano (IDH)</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-indice-de-desarrollo-humano--idh-.html" data-toggle="tooltip" title="De 0 a 1, 31/03/2005, Programa de Naciones Unidas para el Desarrollo (PNUD)">0.8470</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Madres Adolescentes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-madres-adolescentes.html" data-toggle="tooltip" title="Cantidad, 31/12/2013, SINAIS (SSA)">1,778</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Maternidad Adolescente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-maternidad-adolescente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">13.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Médicos</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-medicos.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2013, SINAIS (SSA)">2.5000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, SINAIS (SSA)">6.1000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Infantil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-infantil.html" data-toggle="tooltip" title="Por cada mil, 31/12/2012, SINAIS (SSA)">12.2000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad Materna</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-materna.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">4.6000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Mortalidad por Diabetes</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" data-toggle="tooltip" title="Por cada 10 mil, 31/12/2012, SINAIS (SSA)">7.0000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Ocupación por Vivienda</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-ocupacion-por-vivienda.html" data-toggle="tooltip" title="Promedio, 31/12/2010, INEGI. Censos de Población y Vivienda">3.7000</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Organizaciones de la Sociedad Civil</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" data-toggle="tooltip" title="Por cada 100 mil, 31/03/2014, RFOSC">47.9800</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Derechohabiente</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-derechohabiente.html" data-toggle="tooltip" title="Personas, 31/12/2010, INEGI">453,423</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Población Estimada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-poblacion-estimada.html" data-toggle="tooltip" title="Cantidad, 30/06/2014, CONAPO">683,914</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">26.80 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Extrema</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-extrema.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">2.84 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Pobreza Moderada</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-pobreza-moderada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, CONEVAL">24.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Promedio de Descendencia por Varón</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html" data-toggle="tooltip" title="Cantidad, 31/12/2012, IMPLAN">1.6600</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Alimentario</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-alimentario.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">17.77 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Rezago Educativo</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-rezago-educativo.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONEVAL">10.83 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Universidades</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-universidades.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, CIESLAG-FOMEC">18</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Agua de la Red Pública</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-agua-de-la-red-publica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.18 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Computadora</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">38.74 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Drenaje</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-drenaje.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.23 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Energía Eléctrica</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-energia-electrica.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">99.61 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas con Internet</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-con-internet.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">28.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Habitadas</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-habitadas.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">172,719</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas que Disponen de Retrete</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">98.71 %</a></td>
  </tr>
  <tr>
    <td class="subindice color4">Sociedad</td>
    <td class="indicador color4">Viviendas Totales</td>
    <td class="derecha color4"><a class="vinculo" href="../indicadores-torreon/sociedad-viviendas-totales.html" data-toggle="tooltip" title="Cantidad, 31/12/2010, INEGI">224,234</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Acceso a Vialidades Pavimentadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMPLAN">93.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Alumbrado Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">2.16 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Área No Urbanizada</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-area-no-urbanizada.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">88.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Consumo de Agua Facturado</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-consumo-de-agua-facturado.html" data-toggle="tooltip" title="Metros cúbicos per cápita, 31/12/2013, SIMAS">41.9900</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Aérea</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-destinos-via-aerea.html" data-toggle="tooltip" title="Cantidad, 03/11/2014, Operadora Mexicana de Aeropuertos (OMA)">8</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Destinos Vía Terrestre</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-destinos-via-terrestre.html" data-toggle="tooltip" title="Cantidad, 31/03/2014, IMPLAN">28</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Generación de Basura</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-generacion-de-basura.html" data-toggle="tooltip" title="Kilogramos diarios por cada diez personas, 31/12/2010, INEGI">8.6000</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Motorización</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-motorizacion.html" data-toggle="tooltip" title="Por cada mil habitantes, 31/12/2012, INEGI">226</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Internacionales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales.html" data-toggle="tooltip" title="Personas, 31/12/2013, Operadora Mexicana de Aeropuertos (OMA)">55,446</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Pasajeros Aéreos Totales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales.html" data-toggle="tooltip" title="Personas, 31/12/2013, Operadora Mexicana de Aeropuertos (OMA)">508,133</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en OTRO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">4.20 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Población que Trabaja en su PROPIO Municipio</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, CONAPO">89.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera de Alimentadoras Estatales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">0</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Total</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red Carretera Troncal Federal</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" data-toggle="tooltip" title="Kilómetros, 31/12/2012, INEGI">226</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Red de Transporte Público</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-red-de-transporte-publico.html" data-toggle="tooltip" title="Kilómetros, 31/03/2014, IMPLAN">250</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Sobreexplotación del Acuífero</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, IMCO-CONAGUA">100.00 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Deshabitadas</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">20.57 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Viviendas Ocupadas Temporalmente</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-viviendas-ocupadas-temporalmente.html" data-toggle="tooltip" title="Porcentaje, 31/12/2010, INEGI">2.90 %</a></td>
  </tr>
  <tr>
    <td class="subindice color5">Sustentabilidad</td>
    <td class="indicador color5">Volumen Tratado de Aguas Residuales</td>
    <td class="derecha color5"><a class="vinculo" href="../indicadores-torreon/sustentabilidad-volumen-tratado-de-aguas-residuales.html" data-toggle="tooltip" title="Litros por segundo por cada mil habitantes, 31/12/2010, IMCO-CONAGUA">2.4400</a></td>
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
