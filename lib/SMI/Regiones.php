<?php
/*
 * TrcIMPLAN SMIv2 - Regiones
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
namespace SMI;

/**
 * Clase Regiones
 */
class Regiones extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre           = 'Indicadores por Región';
     // $this->autor            = 'Autor';
     // $this->fecha            = '2014-00-00';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'por-region';
     // $this->imagen_previa    = 'por-region/imagen-previa.jpg';
     // $this->encabezado       = '<img class="img-responsive encabezado-imagen" src="titulo/encabezado.jpg">';
     // $this->encabezado_color = '#646464';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = '';
        $this->claves           = 'IMPLAN, Torreon, Indicadores';
        $this->categorias       = array('Indicadores');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio       = 'smi';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu      = 'Indicadores > Indicadores por Región';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido        = <<<FIN
<p><b>Instrucciones:</b> De clic en la pestaña del municipio o de La Laguna para mostrar los listados de indicadores por Economía, Gobierno, Seguridad, Sociedad y Sustentabilidad. Al dar clic en el vínculo del indicador, éste se abrirá en una nueva pestaña de su navegador. Aproveche que su navegador puede mostrar varios indicadores en pestañas.</p>
  <ul class="nav nav-tabs lenguetas" id="smi-regiones-">
    <li><a href="#regiontorreon" data-toggle="tab">Torreón</a></li>
    <li><a href="#regiongomez-palacio" data-toggle="tab">Gómez Palacio</a></li>
    <li><a href="#regionlerdo" data-toggle="tab">Lerdo</a></li>
    <li><a href="#regionmatamoros" data-toggle="tab">Matamoros</a></li>
    <li><a href="#regionla-laguna" data-toggle="tab">La Laguna</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="regiontorreon">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-torreon/economia-apertura-de-negocios.html" target="_blank">Apertura de Negocios</a></li>
      <li><a href="../indicadores-torreon/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-torreon/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
      <li><a href="../indicadores-torreon/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-torreon/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-torreon/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-torreon/economia-inflacion-anual.html" target="_blank">Inflación anual</a></li>
      <li><a href="../indicadores-torreon/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-torreon/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-torreon/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-torreon/economia-nuevas-empresas.html" target="_blank">Nuevas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-obtencion-de-credito---creacion-de-garantias.html" target="_blank">Obtención de crédito - Creación de garantías</a></li>
      <li><a href="../indicadores-torreon/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-permiso-de-construccion.html" target="_blank">Permiso de Construcción</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-torreon/economia-posgrados-de-calidad.html" target="_blank">Posgrados de Calidad</a></li>
      <li><a href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-torreon/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-torreon/economia-registro-de-propiedades.html" target="_blank">Registro de Propiedades</a></li>
      <li><a href="../indicadores-torreon/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-torreon/economia-tasa-de-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-torreon/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-torreon/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-torreon/economia-trabajadores-asegurados--region-.html" target="_blank">Trabajadores Asegurados (Región)</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-torreon/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-torreon/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-torreon/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-torreon/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-torreon/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-torreon/seguridad-cantidad-de-policias.html" target="_blank">Cantidad de Policías</a></li>
      <li><a href="../indicadores-torreon/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-torreon/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-torreon/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-torreon/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-torreon/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-torreon/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html" target="_blank">Estimación de Menores Huérfanos por Agresiones</a></li>
      <li><a href="../indicadores-torreon/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-torreon/sociedad-indice-de-desarrollo-humano--idh-.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-torreon/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-torreon/sociedad-madres-adolescentes.html" target="_blank">Madres Adolescentes</a></li>
      <li><a href="../indicadores-torreon/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-torreon/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-torreon/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html" target="_blank">Promedio de Descendencia por Varón</a></li>
      <li><a href="../indicadores-torreon/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-torreon/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-torreon/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-torreon/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-torreon/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-torreon/sociedad-usuarios-de-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-consumo-de-agua-facturado.html" target="_blank">Consumo de Agua Facturado</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales.html" target="_blank">Pasajeros Aéreos Internacionales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales.html" target="_blank">Pasajeros Aéreos Totales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-de-transporte-publico.html" target="_blank">Red de Transporte Público</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-volumen-tratado-de-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="tab-pane" id="regiongomez-palacio">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-del-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-indice-de-desarrollo-humano--idh-.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-usuarios-de-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-pasajeros-aereos-internacionales.html" target="_blank">Pasajeros Aéreos Internacionales</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-pasajeros-aereos-totales.html" target="_blank">Pasajeros Aéreos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-volumen-tratado-de-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="tab-pane" id="regionlerdo">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-lerdo/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-lerdo/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-lerdo/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-lerdo/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-lerdo/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-lerdo/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-lerdo/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-lerdo/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-lerdo/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-lerdo/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-lerdo/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-lerdo/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-lerdo/economia-tasa-de-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-lerdo/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-lerdo/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-lerdo/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-lerdo/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-lerdo/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-lerdo/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-lerdo/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-lerdo/seguridad-presuntos-delitos-del-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-lerdo/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-lerdo/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-lerdo/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-lerdo/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-lerdo/sociedad-indice-de-desarrollo-humano--idh-.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-lerdo/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-lerdo/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-lerdo/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-lerdo/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-lerdo/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-lerdo/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-lerdo/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-lerdo/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-lerdo/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-lerdo/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-lerdo/sociedad-usuarios-de-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-pasajeros-aereos-internacionales.html" target="_blank">Pasajeros Aéreos Internacionales</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-pasajeros-aereos-totales.html" target="_blank">Pasajeros Aéreos Totales</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-volumen-tratado-de-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="tab-pane" id="regionmatamoros">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-matamoros/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-matamoros/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-matamoros/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-matamoros/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-matamoros/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-matamoros/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-matamoros/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-matamoros/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-matamoros/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-matamoros/economia-posgrados-de-calidad.html" target="_blank">Posgrados de Calidad</a></li>
      <li><a href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-matamoros/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-matamoros/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-matamoros/economia-tasa-de-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-matamoros/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-matamoros/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-matamoros/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-matamoros/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-matamoros/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-matamoros/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-matamoros/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-matamoros/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-del-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-matamoros/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-matamoros/seguridad-presuntos-delitos-del-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-matamoros/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-matamoros/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-matamoros/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-matamoros/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-matamoros/sociedad-indice-de-desarrollo-humano--idh-.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-matamoros/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-matamoros/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-matamoros/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-matamoros/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-matamoros/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-matamoros/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-matamoros/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-matamoros/sociedad-usuarios-de-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-pasajeros-aereos-internacionales.html" target="_blank">Pasajeros Aéreos Internacionales</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-pasajeros-aereos-totales.html" target="_blank">Pasajeros Aéreos Totales</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-volumen-tratado-de-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="tab-pane" id="regionla-laguna">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-la-laguna/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-la-laguna/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-la-laguna/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-la-laguna/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-la-laguna/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-la-laguna/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-la-laguna/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-la-laguna/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-la-laguna/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-la-laguna/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-la-laguna/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-la-laguna/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-la-laguna/economia-sectores-que-han-frenado-el-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-la-laguna/economia-sectores-que-han-presentado-alto-crecimiento--2008-2012-.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-la-laguna/economia-tasa-de-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-la-laguna/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-la-laguna/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-la-laguna/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-la-laguna/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-la-laguna/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-la-laguna/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-la-laguna/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-indice-de-desarrollo-humano--idh-.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-usuarios-de-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-la-laguna/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-internacionales.html" target="_blank">Pasajeros Aéreos Internacionales</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-totales.html" target="_blank">Pasajeros Aéreos Totales</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-traslados-a-pie.html" target="_blank">Traslados a Pie</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-automovil-particular.html" target="_blank">Uso de Automóvil Particular</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-bicicleta.html" target="_blank">Uso de Bicicleta</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-transporte-publico.html" target="_blank">Uso de Transporte Público</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-la-laguna/sustentabilidad-volumen-tratado-de-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
  </div>
FIN;
        $this->javascript  = <<<FIN
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES regiontorreon
$(document).ready(function(){
  $('#smi-regiones- a[href="#regiontorreon"]').tab('show')
});
FIN;
    } // constructor

} // Clase Regiones

?>
