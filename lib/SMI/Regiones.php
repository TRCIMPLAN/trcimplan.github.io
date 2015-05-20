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
    <li><a href="#regionlaguna" data-toggle="tab">La Laguna</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="regiontorreon">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-torreon/economia-apertura-negocios.html" target="_blank">Apertura de Negocios</a></li>
      <li><a href="../indicadores-torreon/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-torreon/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-torreon/economia-ejecucion-contratos.html" target="_blank">Ejecución de Contratos</a></li>
      <li><a href="../indicadores-torreon/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-torreon/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-indice-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-torreon/economia-indice-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-indice-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-indice-especializacion-local-en-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-torreon/economia-indice-especializacion-local-en-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-torreon/economia-indice-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-torreon/economia-indice-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-torreon/economia-inflacion-anual.html" target="_blank">Inflación anual</a></li>
      <li><a href="../indicadores-torreon/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-torreon/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-torreon/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-torreon/economia-nuevas-empresas.html" target="_blank">Nuevas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-obtencion-credito-creacion-garantias.html" target="_blank">Obtención de crédito - Creación de garantías</a></li>
      <li><a href="../indicadores-torreon/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-torreon/economia-permiso-construccion.html" target="_blank">Permiso de Construcción</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-personal-ocupado-en-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-torreon/economia-posgrados-calidad.html" target="_blank">Posgrados de Calidad</a></li>
      <li><a href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-torreon/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-torreon/economia-registro-propiedades.html" target="_blank">Registro de Propiedades</a></li>
      <li><a href="../indicadores-torreon/economia-sectores-que-han-frenado-crecimiento-20082012.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-torreon/economia-tamano-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-torreon/economia-tasa-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-torreon/economia-tasa-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-torreon/economia-total-empresas-registradas-en-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-torreon/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-torreon/economia-trabajadores-asegurados-region.html" target="_blank">Trabajadores Asegurados (Región)</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-torreon/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral-diferencia-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-torreon/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-torreon/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-torreon/gobierno-indice-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-torreon/gobierno-indice-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-por-cobro-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-torreon/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-torreon/gobierno-relacion-ingresos-propios-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-torreon/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-torreon/seguridad-cantidad-policias.html" target="_blank">Cantidad de Policías</a></li>
      <li><a href="../indicadores-torreon/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-torreon/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-torreon/seguridad-personas-involucradas-en-delitos-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-torreon/seguridad-porcentaje-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-torreon/seguridad-robo-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-torreon/seguridad-robos-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-torreon/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-torreon/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
      <li><a href="../indicadores-torreon/seguridad-tasa-extorsion.html" target="_blank">Tasa de Extorsión</a></li>
      <li><a href="../indicadores-torreon/seguridad-tasa-homicidio-doloso.html" target="_blank">Tasa de Homicidio Doloso</a></li>
      <li><a href="../indicadores-torreon/seguridad-tasa-robo-vehiculo-con-violencia.html" target="_blank">Tasa de Robo de Vehículo con Violencia</a></li>
      <li><a href="../indicadores-torreon/seguridad-tasa-robo-vehiculo-sin-violencia.html" target="_blank">Tasa de Robo de Vehículo sin Violencia</a></li>
      <li><a href="../indicadores-torreon/seguridad-tasa-secuestro.html" target="_blank">Tasa de Secuestro</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-torreon/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientificomatematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramaticoespanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-torreon/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-torreon/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-torreon/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-torreon/sociedad-estimacion-menores-huerfanos-por-agresiones.html" target="_blank">Estimación de Menores Huérfanos por Agresiones</a></li>
      <li><a href="../indicadores-torreon/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-torreon/sociedad-indice-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-torreon/sociedad-indice-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-torreon/sociedad-madres-adolescentes.html" target="_blank">Madres Adolescentes</a></li>
      <li><a href="../indicadores-torreon/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-torreon/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-torreon/sociedad-mortalidad-por-vihsida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-torreon/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-torreon/sociedad-organizaciones-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-torreon/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-torreon/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-torreon/sociedad-promedio-descendencia-por-varon.html" target="_blank">Promedio de Descendencia por Varón</a></li>
      <li><a href="../indicadores-torreon/sociedad-razon-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-torreon/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-torreon/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-torreon/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-torreon/sociedad-tasa-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-torreon/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-torreon/sociedad-usuarios-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-agua-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-que-disponen-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-torreon/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-torreon/sustentabilidad-acceso-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-consumo-agua-facturado.html" target="_blank">Consumo de Agua Facturado</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-disponibilidad-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-generacion-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales-mensuales.html" target="_blank">Pasajeros Aéreos Internacionales Mensuales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales-mensuales.html" target="_blank">Pasajeros Aéreos Totales Mensuales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-red-transporte-publico.html" target="_blank">Red de Transporte Público</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-sobreexplotacion-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-torreon/sustentabilidad-volumen-tratado-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
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
      <li><a href="../indicadores-gomez-palacio/economia-indice-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-especializacion-local-en-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-especializacion-local-en-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-indice-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-crecimiento-20082012.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tamano-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tasa-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-tasa-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-total-empresas-registradas-en-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-gomez-palacio/economia-unidades-economicas-dedicadas-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral-diferencia-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-indice-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-indice-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-por-cobro-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-gomez-palacio/gobierno-relacion-ingresos-propios-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-personas-involucradas-en-delitos-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-porcentaje-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-presuntos-delitos-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robo-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robos-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-tasa-extorsion.html" target="_blank">Tasa de Extorsión</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-tasa-homicidio-doloso.html" target="_blank">Tasa de Homicidio Doloso</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-tasa-robo-vehiculo-con-violencia.html" target="_blank">Tasa de Robo de Vehículo con Violencia</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-tasa-robo-vehiculo-sin-violencia.html" target="_blank">Tasa de Robo de Vehículo sin Violencia</a></li>
      <li><a href="../indicadores-gomez-palacio/seguridad-tasa-secuestro.html" target="_blank">Tasa de Secuestro</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientificomatematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramaticoespanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-indice-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-indice-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vihsida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-organizaciones-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-razon-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-tasa-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-usuarios-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-agua-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-que-disponen-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-acceso-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-generacion-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-gomez-palacio/sustentabilidad-volumen-tratado-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
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
      <li><a href="../indicadores-lerdo/economia-indice-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-especializacion-local-en-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-especializacion-local-en-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-lerdo/economia-indice-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-lerdo/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-lerdo/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-lerdo/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-lerdo/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-lerdo/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-lerdo/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-lerdo/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-lerdo/economia-sectores-que-han-frenado-crecimiento-20082012.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-lerdo/economia-tamano-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-lerdo/economia-tasa-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-lerdo/economia-tasa-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-lerdo/economia-total-empresas-registradas-en-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-lerdo/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-lerdo/economia-unidades-economicas-dedicadas-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-lerdo/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral-diferencia-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-lerdo/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-lerdo/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-lerdo/gobierno-indice-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-lerdo/gobierno-indice-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-por-cobro-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-lerdo/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-lerdo/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-lerdo/gobierno-relacion-ingresos-propios-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-lerdo/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-lerdo/seguridad-personas-involucradas-en-delitos-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-lerdo/seguridad-porcentaje-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-presuntos-delitos-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-lerdo/seguridad-presuntos-delitos-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robo-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robos-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-lerdo/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-lerdo/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
      <li><a href="../indicadores-lerdo/seguridad-tasa-extorsion.html" target="_blank">Tasa de Extorsión</a></li>
      <li><a href="../indicadores-lerdo/seguridad-tasa-homicidio-doloso.html" target="_blank">Tasa de Homicidio Doloso</a></li>
      <li><a href="../indicadores-lerdo/seguridad-tasa-robo-vehiculo-con-violencia.html" target="_blank">Tasa de Robo de Vehículo con Violencia</a></li>
      <li><a href="../indicadores-lerdo/seguridad-tasa-robo-vehiculo-sin-violencia.html" target="_blank">Tasa de Robo de Vehículo sin Violencia</a></li>
      <li><a href="../indicadores-lerdo/seguridad-tasa-secuestro.html" target="_blank">Tasa de Secuestro</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientificomatematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramaticoespanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-lerdo/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-lerdo/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-lerdo/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-lerdo/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-lerdo/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-lerdo/sociedad-indice-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-lerdo/sociedad-indice-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-lerdo/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-lerdo/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-vihsida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-lerdo/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-lerdo/sociedad-organizaciones-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-lerdo/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-lerdo/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-lerdo/sociedad-razon-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-lerdo/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-lerdo/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-lerdo/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-lerdo/sociedad-tasa-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-lerdo/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-lerdo/sociedad-usuarios-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-agua-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-que-disponen-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-lerdo/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-lerdo/sustentabilidad-acceso-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-disponibilidad-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-generacion-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-lerdo/sustentabilidad-volumen-tratado-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
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
      <li><a href="../indicadores-matamoros/economia-indice-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-especializacion-local-en-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-especializacion-local-en-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-matamoros/economia-indice-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-matamoros/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-matamoros/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-matamoros/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-matamoros/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-matamoros/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-matamoros/economia-posgrados-calidad.html" target="_blank">Posgrados de Calidad</a></li>
      <li><a href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-matamoros/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-matamoros/economia-sectores-que-han-frenado-crecimiento-20082012.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-matamoros/economia-tamano-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-matamoros/economia-tasa-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-matamoros/economia-tasa-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-matamoros/economia-total-empresas-registradas-en-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-matamoros/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-matamoros/economia-unidades-economicas-dedicadas-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-matamoros/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral-diferencia-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-matamoros/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-matamoros/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-matamoros/gobierno-indice-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-matamoros/gobierno-indice-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-por-cobro-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-matamoros/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-matamoros/gobierno-relacion-ingresos-propios-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-matamoros/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-fuero-comun.html" target="_blank">Personas Involucradas en Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-matamoros/seguridad-personas-involucradas-en-delitos-fuero-federal.html" target="_blank">Personas Involucradas en Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-matamoros/seguridad-porcentaje-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-presuntos-delitos-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
      <li><a href="../indicadores-matamoros/seguridad-presuntos-delitos-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robo-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robos-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-matamoros/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-matamoros/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
      <li><a href="../indicadores-matamoros/seguridad-tasa-extorsion.html" target="_blank">Tasa de Extorsión</a></li>
      <li><a href="../indicadores-matamoros/seguridad-tasa-homicidio-doloso.html" target="_blank">Tasa de Homicidio Doloso</a></li>
      <li><a href="../indicadores-matamoros/seguridad-tasa-robo-vehiculo-con-violencia.html" target="_blank">Tasa de Robo de Vehículo con Violencia</a></li>
      <li><a href="../indicadores-matamoros/seguridad-tasa-robo-vehiculo-sin-violencia.html" target="_blank">Tasa de Robo de Vehículo sin Violencia</a></li>
      <li><a href="../indicadores-matamoros/seguridad-tasa-secuestro.html" target="_blank">Tasa de Secuestro</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientificomatematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramaticoespanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-matamoros/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-matamoros/sociedad-diferencial-grado-promedio-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
      <li><a href="../indicadores-matamoros/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-matamoros/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-matamoros/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-matamoros/sociedad-indice-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-matamoros/sociedad-indice-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-matamoros/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
      <li><a href="../indicadores-matamoros/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-vihsida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-matamoros/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-matamoros/sociedad-organizaciones-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-matamoros/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-matamoros/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-matamoros/sociedad-razon-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
      <li><a href="../indicadores-matamoros/sociedad-razon-entre-mujeres-hombres-en-ensenanza-media-superior.html" target="_blank">Razón Entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
      <li><a href="../indicadores-matamoros/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
      <li><a href="../indicadores-matamoros/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
      <li><a href="../indicadores-matamoros/sociedad-tasa-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-matamoros/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-matamoros/sociedad-usuarios-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-agua-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-matamoros/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-matamoros/sustentabilidad-acceso-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-disponibilidad-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-generacion-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-matamoros/sustentabilidad-volumen-tratado-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
    </ul>
  </div>
</div>
    </div>
    <div class="tab-pane" id="regionlaguna">
<div class="row">
  <div class="col-md-2 indicadores-vinculos">
    <h3>Economía</h3>
    <ul>
      <li><a href="../indicadores-laguna/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
      <li><a href="../indicadores-laguna/economia-desempleo.html" target="_blank">Desempleo</a></li>
      <li><a href="../indicadores-laguna/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
      <li><a href="../indicadores-laguna/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
      <li><a href="../indicadores-laguna/economia-indice-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
      <li><a href="../indicadores-laguna/economia-indice-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
      <li><a href="../indicadores-laguna/economia-indice-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
      <li><a href="../indicadores-laguna/economia-indice-especializacion-local-en-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
      <li><a href="../indicadores-laguna/economia-indice-especializacion-local-en-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
      <li><a href="../indicadores-laguna/economia-indice-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
      <li><a href="../indicadores-laguna/economia-indice-gini.html" target="_blank">Índice de Gini</a></li>
      <li><a href="../indicadores-laguna/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
      <li><a href="../indicadores-laguna/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
      <li><a href="../indicadores-laguna/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
      <li><a href="../indicadores-laguna/economia-microempresas.html" target="_blank">Microempresas</a></li>
      <li><a href="../indicadores-laguna/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
      <li><a href="../indicadores-laguna/economia-personal-ocupado-en-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
      <li><a href="../indicadores-laguna/economia-personal-ocupado-en-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
      <li><a href="../indicadores-laguna/economia-personal-ocupado-en-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
      <li><a href="../indicadores-laguna/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
      <li><a href="../indicadores-laguna/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
      <li><a href="../indicadores-laguna/economia-sectores-que-han-frenado-crecimiento-20082012.html" target="_blank">Sectores que Han Frenado el Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-laguna/economia-sectores-que-han-presentado-alto-crecimiento-20082012.html" target="_blank">Sectores que Han Presentado Alto Crecimiento (2008-2012)</a></li>
      <li><a href="../indicadores-laguna/economia-tamano-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
      <li><a href="../indicadores-laguna/economia-tasa-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
      <li><a href="../indicadores-laguna/economia-tasa-informalidad.html" target="_blank">Tasa de informalidad</a></li>
      <li><a href="../indicadores-laguna/economia-total-empresas-registradas-en-siem.html" target="_blank">Total de Empresas registradas en el SIEM</a></li>
      <li><a href="../indicadores-laguna/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
      <li><a href="../indicadores-laguna/economia-unidades-economicas-dedicadas-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
      <li><a href="../indicadores-laguna/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
      <li><a href="../indicadores-laguna/economia-unidades-economicas-dedicadas-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Gobierno</h3>
    <ul>
      <li><a href="../indicadores-laguna/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
      <li><a href="../indicadores-laguna/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
      <li><a href="../indicadores-laguna/gobierno-competencia-electoral-diferencia-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
      <li><a href="../indicadores-laguna/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
      <li><a href="../indicadores-laguna/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
      <li><a href="../indicadores-laguna/gobierno-indice-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
      <li><a href="../indicadores-laguna/gobierno-indice-informacion-presupuestal.html" target="_blank">índice de Información Presupuestal</a></li>
      <li><a href="../indicadores-laguna/gobierno-ingresos-por-cobro-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
      <li><a href="../indicadores-laguna/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
      <li><a href="../indicadores-laguna/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
      <li><a href="../indicadores-laguna/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
      <li><a href="../indicadores-laguna/gobierno-relacion-ingresos-propios-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Seguridad</h3>
    <ul>
      <li><a href="../indicadores-laguna/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
      <li><a href="../indicadores-laguna/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-laguna/seguridad-delitos.html" target="_blank">Delitos</a></li>
      <li><a href="../indicadores-laguna/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
      <li><a href="../indicadores-laguna/seguridad-porcentaje-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
      <li><a href="../indicadores-laguna/seguridad-robo-negocios.html" target="_blank">Robo a Negocios</a></li>
      <li><a href="../indicadores-laguna/seguridad-robo-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
      <li><a href="../indicadores-laguna/seguridad-robo-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
      <li><a href="../indicadores-laguna/seguridad-robos-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
      <li><a href="../indicadores-laguna/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
      <li><a href="../indicadores-laguna/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
      <li><a href="../indicadores-laguna/seguridad-tasa-extorsion.html" target="_blank">Tasa de Extorsión</a></li>
      <li><a href="../indicadores-laguna/seguridad-tasa-homicidio-doloso.html" target="_blank">Tasa de Homicidio Doloso</a></li>
      <li><a href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-con-violencia.html" target="_blank">Tasa de Robo de Vehículo con Violencia</a></li>
      <li><a href="../indicadores-laguna/seguridad-tasa-robo-vehiculo-sin-violencia.html" target="_blank">Tasa de Robo de Vehículo sin Violencia</a></li>
      <li><a href="../indicadores-laguna/seguridad-tasa-secuestro.html" target="_blank">Tasa de Secuestro</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sociedad</h3>
    <ul>
      <li><a href="../indicadores-laguna/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
      <li><a href="../indicadores-laguna/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
      <li><a href="../indicadores-laguna/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
      <li><a href="../indicadores-laguna/sociedad-alumnos-con-perfil-cientificomatematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
      <li><a href="../indicadores-laguna/sociedad-alumnos-con-perfil-gramaticoespanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
      <li><a href="../indicadores-laguna/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
      <li><a href="../indicadores-laguna/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
      <li><a href="../indicadores-laguna/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
      <li><a href="../indicadores-laguna/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
      <li><a href="../indicadores-laguna/sociedad-indice-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
      <li><a href="../indicadores-laguna/sociedad-indice-hacinamiento.html" target="_blank">Índice de hacinamiento</a></li>
      <li><a href="../indicadores-laguna/sociedad-medicos.html" target="_blank">Médicos</a></li>
      <li><a href="../indicadores-laguna/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
      <li><a href="../indicadores-laguna/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
      <li><a href="../indicadores-laguna/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
      <li><a href="../indicadores-laguna/sociedad-mortalidad-por-vihsida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
      <li><a href="../indicadores-laguna/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
      <li><a href="../indicadores-laguna/sociedad-organizaciones-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
      <li><a href="../indicadores-laguna/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
      <li><a href="../indicadores-laguna/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
      <li><a href="../indicadores-laguna/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
      <li><a href="../indicadores-laguna/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
      <li><a href="../indicadores-laguna/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
      <li><a href="../indicadores-laguna/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
      <li><a href="../indicadores-laguna/sociedad-tasa-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
      <li><a href="../indicadores-laguna/sociedad-universidades.html" target="_blank">Universidades</a></li>
      <li><a href="../indicadores-laguna/sociedad-usuarios-internet.html" target="_blank">Usuarios de Internet</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-con-agua-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-que-disponen-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
      <li><a href="../indicadores-laguna/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
    </ul>
  </div>
  <div class="col-md-2 indicadores-vinculos">
    <h3>Sustentabilidad</h3>
    <ul>
      <li><a href="../indicadores-laguna/sustentabilidad-acceso-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-disponibilidad-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-generacion-basura.html" target="_blank">Generación de Basura</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-sobreexplotacion-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-traslados-pie.html" target="_blank">Traslados a Pie</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-uso-automovil-particular.html" target="_blank">Uso de Automóvil Particular</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-uso-bicicleta.html" target="_blank">Uso de Bicicleta</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-uso-transporte-publico.html" target="_blank">Uso de Transporte Público</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
      <li><a href="../indicadores-laguna/sustentabilidad-volumen-tratado-aguas-residuales.html" target="_blank">Volumen Tratado de Aguas Residuales</a></li>
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
