<?php
/**
 * TrcIMPLAN Sitio Web - SMI PorRegiones
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

namespace SMI;

/**
 * Clase PorRegiones
 */
class PorRegiones extends \Base\Publicacion {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título y fecha
        $this->nombre      = 'Indicadores por Región';
        $this->fecha       = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear
        $this->archivo     = 'por-region';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Sistema Metropolitano de Indicadores: Encuentre los indicadores por región';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Por Region';
        // Opción de navegación a poner como activa
        $this->nombre_menu = 'Indicadores > Indicadores por Región';
        // Inicializar las lengüetas
        $this->lenguetas   = new \Base\Lenguetas('smi-por-regiones');
    } // constructor

    /**
     * Seccion Torreón HTML
     *
     * @return string Código HTML
     */
    protected function seccion_torreon_html() {
        return <<<FINAL
        <div class="row">
          <div class="col-md-2 indicadores-vinculos">
            <h3>Economía</h3>
            <ul>
              <li><a href="../indicadores-torreon/economia-apertura-de-una-empresa.html" target="_blank">Apertura de una empresa</a></li>
              <li><a href="../indicadores-torreon/economia-apertura-de-un-negocio-percentil-promedio.html" target="_blank">Apertura de un Negocio (percentil promedio)</a></li>
              <li><a href="../indicadores-torreon/economia-cantidad-de-creditos-hipotecarios-trimestral.html" target="_blank">Cantidad de Créditos Hipotecarios (trimestral)</a></li>
              <li><a href="../indicadores-torreon/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
              <li><a href="../indicadores-torreon/economia-cartera-hipotecaria-vencida.html" target="_blank">Cartera Hipotecaria Vencida</a></li>
              <li><a href="../indicadores-torreon/economia-centros-de-investigacion.html" target="_blank">Centros de Investigación</a></li>
              <li><a href="../indicadores-torreon/economia-ciudad-fronteriza-o-portuaria.html" target="_blank">Ciudad Fronteriza o Portuaria</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-de-la-mancha-urbana.html" target="_blank">Crecimiento de la Mancha Urbana</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" target="_blank">Crecimiento de la Población Ocupada sin Ingresos</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-del-pib-estatal.html" target="_blank">Crecimiento del PIB Estatal</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-del-salario-promedio.html" target="_blank">Crecimiento del Salario Promedio</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-en-jornadas-laborales-muy-largas.html" target="_blank">Crecimiento en Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-torreon/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" target="_blank">Crecimiento en los Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-torreon/economia-credito-a-las-empresas.html" target="_blank">Crédito a las Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-demandantes-de-conflicto-laboral.html" target="_blank">Demandantes de Conflicto Laboral</a></li>
              <li><a href="../indicadores-torreon/economia-densidad-poblacional.html" target="_blank">Densidad Poblacional</a></li>
              <li><a href="../indicadores-torreon/economia-diversificacion-economica.html" target="_blank">Diversificación Económica</a></li>
              <li><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
              <li><a href="../indicadores-torreon/economia-empleados-en-el-sector-formal.html" target="_blank">Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-torreon/economia-empresas.html" target="_blank">Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-empresas-certificadas-con-iso-9000-y-14000.html" target="_blank">Empresas Certificadas con ISO-9000 y 14000</a></li>
              <li><a href="../indicadores-torreon/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
              <li><a href="../indicadores-torreon/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" target="_blank">Flujo de Pasajeros del o Hacia el Extranjero</a></li>
              <li><a href="../indicadores-torreon/economia-gasto-en-nomina-por-empleado.html" target="_blank">Gasto en Nómina por Empleado</a></li>
              <li><a href="../indicadores-torreon/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-grandes-empresas-segun-cnn-expansion.html" target="_blank">Grandes Empresas (según CNN Expansión)</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
              <li><a href="../indicadores-torreon/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
              <li><a href="../indicadores-torreon/economia-inflacion-anual.html" target="_blank">Inflación Anual</a></li>
              <li><a href="../indicadores-torreon/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
              <li><a href="../indicadores-torreon/economia-inversion-extranjera-directa-neta.html" target="_blank">Inversión Extranjera Directa (Neta)</a></li>
              <li><a href="../indicadores-torreon/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
              <li><a href="../indicadores-torreon/economia-jornadas-laborales-muy-largas.html" target="_blank">Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-torreon/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-microempresas.html" target="_blank">Microempresas</a></li>
              <li><a href="../indicadores-torreon/economia-nuevas-empresas.html" target="_blank">Nuevas Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-obtencion-de-credito-creacion-de-garantias.html" target="_blank">Obtención de Crédito - Creación de Garantías</a></li>
              <li><a href="../indicadores-torreon/economia-ocupacion-hotelera.html" target="_blank">Ocupación Hotelera</a></li>
              <li><a href="../indicadores-torreon/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" target="_blank">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</a></li>
              <li><a href="../indicadores-torreon/economia-patentes.html" target="_blank">Patentes</a></li>
              <li><a href="../indicadores-torreon/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
              <li><a href="../indicadores-torreon/economia-permiso-de-construccion.html" target="_blank">Permiso de Construcción</a></li>
              <li><a href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
              <li><a href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
              <li><a href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
              <li><a href="../indicadores-torreon/economia-poblacion-ocupada-sin-ingresos.html" target="_blank">Población Ocupada Sin Ingresos</a></li>
              <li><a href="../indicadores-torreon/economia-posgrados-de-calidad.html" target="_blank">Posgrados de Calidad</a></li>
              <li><a href="../indicadores-torreon/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" target="_blank">Posgrados de Calidad (por cada 100mil de PEA)</a></li>
              <li><a href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
              <li><a href="../indicadores-torreon/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
              <li><a href="../indicadores-torreon/economia-productividad-media-laboral.html" target="_blank">Productividad Media Laboral</a></li>
              <li><a href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-licencia-para-negocio.html" target="_blank">Promedio de Horas para la Realización del Trámite de Licencia para Negocio</a></li>
              <li><a href="../indicadores-torreon/economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial.html" target="_blank">Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial</a></li>
              <li><a href="../indicadores-torreon/economia-registro-de-una-propiedad.html" target="_blank">Registro de una Propiedad</a></li>
              <li><a href="../indicadores-torreon/economia-registro-de-una-propiedad-percentil-promedio.html" target="_blank">Registro de una Propiedad (percentil promedio)</a></li>
              <li><a href="../indicadores-torreon/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" target="_blank">Salario Promedio Mensual para Trabajadores de Tiempo Completo</a></li>
              <li><a href="../indicadores-torreon/economia-sectores-que-han-frenado-el-crecimiento.html" target="_blank">Sectores que Han Frenado el Crecimiento</a></li>
              <li><a href="../indicadores-torreon/economia-sectores-que-han-presentado-alto-crecimiento.html" target="_blank">Sectores que Han Presentado Alto Crecimiento</a></li>
              <li><a href="../indicadores-torreon/economia-sitios-unesco.html" target="_blank">Sitios UNESCO</a></li>
              <li><a href="../indicadores-torreon/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
              <li><a href="../indicadores-torreon/economia-tasa-de-condiciones-criticas-de-ocupacion.html" target="_blank">Tasa de Condiciones Críticas de Ocupación</a></li>
              <li><a href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
              <li><a href="../indicadores-torreon/economia-tasa-de-informalidad.html" target="_blank">Tasa de Informalidad</a></li>
              <li><a href="../indicadores-torreon/economia-tierra-ejidal.html" target="_blank">Tierra Ejidal</a></li>
              <li><a href="../indicadores-torreon/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas Registradas en el SIEM</a></li>
              <li><a href="../indicadores-torreon/economia-trabajadores-asegurados.html" target="_blank">Trabajadores Asegurados</a></li>
              <li><a href="../indicadores-torreon/economia-trabajadores-asegurados-region.html" target="_blank">Trabajadores Asegurados (Región)</a></li>
              <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-la-industria-manufacturera.html" target="_blank">Unidades Económicas Dedicadas a la Industria Manufacturera</a></li>
              <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-al-comercio.html" target="_blank">Unidades Económicas Dedicadas al Comercio</a></li>
              <li><a href="../indicadores-torreon/economia-unidades-economicas-dedicadas-a-los-servicios.html" target="_blank">Unidades Económicas Dedicadas a los Servicios</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Gobierno</h3>
            <ul>
              <li><a href="../indicadores-torreon/gobierno-capacidad-financiera.html" target="_blank">Capacidad Financiera</a></li>
              <li><a href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-base.html" target="_blank">Capacitación a Empleados de Base</a></li>
              <li><a href="../indicadores-torreon/gobierno-capacitacion-a-empleados-de-confianza.html" target="_blank">Capacitación a Empleados de Confianza</a></li>
              <li><a href="../indicadores-torreon/gobierno-competencia-electoral.html" target="_blank">Competencia Electoral</a></li>
              <li><a href="../indicadores-torreon/gobierno-competencia-electoral-diferencia-de-votos.html" target="_blank">Competencia Electoral Diferencia de Votos</a></li>
              <li><a href="../indicadores-torreon/gobierno-competencia-electoral-votos-totales.html" target="_blank">Competencia Electoral Votos Totales</a></li>
              <li><a href="../indicadores-torreon/gobierno-cumplimiento-en-informacion-publica-minina.html" target="_blank">Cumplimiento en Información Pública Mínina</a></li>
              <li><a href="../indicadores-torreon/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" target="_blank">Duración de Período para Ediles y Delegados</a></li>
              <li><a href="../indicadores-torreon/gobierno-empleados-municipales.html" target="_blank">Empleados Municipales</a></li>
              <li><a href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
              <li><a href="../indicadores-torreon/gobierno-indice-de-herramientas-electronicas-de-gobiernos-locales.html" target="_blank">Índice de Herramientas Electrónicas de Gobiernos Locales</a></li>
              <li><a href="../indicadores-torreon/gobierno-indice-de-informacion-presupuestal.html" target="_blank">Índice de Información Presupuestal</a></li>
              <li><a href="../indicadores-torreon/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
              <li><a href="../indicadores-torreon/gobierno-ingresos-propios.html" target="_blank">Ingresos Propios</a></li>
              <li><a href="../indicadores-torreon/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
              <li><a href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
              <li><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html" target="_blank">Litros de Combustible Gastados por Habitante</a></li>
              <li><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-unidad-recolectora-de-residuos-solidos-propiedad-del-municipio.html" target="_blank">Litros de Combustible Gastados por Unidad Recolectora de Residuos Sólidos Propiedad del Municipio</a></li>
              <li><a href="../indicadores-torreon/gobierno-muertes-por-infecciones-instestinales.html" target="_blank">Muertes por Infecciones Instestinales</a></li>
              <li><a href="../indicadores-torreon/gobierno-participacion-ciudadana.html" target="_blank">Participación Ciudadana</a></li>
              <li><a href="../indicadores-torreon/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
              <li><a href="../indicadores-torreon/gobierno-periodistas-muertos-o-desaparecidos.html" target="_blank">Periodistas Muertos o Desaparecidos</a></li>
              <li><a href="../indicadores-torreon/gobierno-policias-operativos-de-seguridad-publica.html" target="_blank">Policías Operativos de Seguridad Pública</a></li>
              <li><a href="../indicadores-torreon/gobierno-promedio-de-horas-para-la-realizacion-del-tramite-de-carta-de-no-adeudo-predial.html" target="_blank">Promedio de Horas para la Realización del Trámite de Carta de No Adeudo Predial</a></li>
              <li><a href="../indicadores-torreon/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
              <li><a href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html" target="_blank">Vehículos Automotores por Habitante</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Seguridad</h3>
            <ul>
              <li><a href="../indicadores-torreon/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
              <li><a href="../indicadores-torreon/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-torreon/seguridad-cantidad-de-policias.html" target="_blank">Cantidad de Policías</a></li>
              <li><a href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html" target="_blank">Competencia de Servicios Notariales</a></li>
              <li><a href="../indicadores-torreon/seguridad-delitos.html" target="_blank">Delitos</a></li>
              <li><a href="../indicadores-torreon/seguridad-delitos-patrimoniales.html" target="_blank">Delitos Patrimoniales</a></li>
              <li><a href="../indicadores-torreon/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
              <li><a href="../indicadores-torreon/seguridad-monto-reportado-en-robo-de-mercancias.html" target="_blank">Monto Reportado en Robo de Mercancías</a></li>
              <li><a href="../indicadores-torreon/seguridad-percepcion-de-inseguridad.html" target="_blank">Percepción de Inseguridad</a></li>
              <li><a href="../indicadores-torreon/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-comun.html" target="_blank">Presuntos Delitos del Fuero Común</a></li>
              <li><a href="../indicadores-torreon/seguridad-presuntos-delitos-del-fuero-federal.html" target="_blank">Presuntos Delitos del Fuero Federal</a></li>
              <li><a href="../indicadores-torreon/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
              <li><a href="../indicadores-torreon/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
              <li><a href="../indicadores-torreon/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
              <li><a href="../indicadores-torreon/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
              <li><a href="../indicadores-torreon/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
              <li><a href="../indicadores-torreon/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
              <li><a href="../indicadores-torreon/seguridad-tasa-de-homicidios.html" target="_blank">Tasa de Homicidios</a></li>
              <li><a href="../indicadores-torreon/seguridad-tasa-de-robo-de-vehiculos.html" target="_blank">Tasa de Robo de VehÍculos</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sociedad</h3>
            <ul>
              <li><a href="../indicadores-torreon/sociedad-acceso-a-instituciones-de-salud.html" target="_blank">Acceso a Instituciones de Salud</a></li>
              <li><a href="../indicadores-torreon/sociedad-acceso-a-servicios-financieros.html" target="_blank">Acceso a Servicios Financieros</a></li>
              <li><a href="../indicadores-torreon/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
              <li><a href="../indicadores-torreon/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
              <li><a href="../indicadores-torreon/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Básicas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Iniciales</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Prácticas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-de-preescolar-por-docente.html" target="_blank">Alumnos de Preescolar por Docente</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-de-primaria-por-docente.html" target="_blank">Alumnos de Primaria por Docente</a></li>
              <li><a href="../indicadores-torreon/sociedad-alumnos-de-secundaria-por-docente.html" target="_blank">Alumnos de Secundaria por Docente</a></li>
              <li><a href="../indicadores-torreon/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
              <li><a href="../indicadores-torreon/sociedad-camas-de-hospital.html" target="_blank">Camas de Hospital</a></li>
              <li><a href="../indicadores-torreon/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" target="_blank">Crecimiento en Acceso a Servicios de Salud</a></li>
              <li><a href="../indicadores-torreon/sociedad-crecimiento-en-poblacion-altamente-calificada.html" target="_blank">Crecimiento en Población Altamente Calificada</a></li>
              <li><a href="../indicadores-torreon/sociedad-desigualdad-en-las-ciudades.html" target="_blank">Desigualdad en las Ciudades</a></li>
              <li><a href="../indicadores-torreon/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
              <li><a href="../indicadores-torreon/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
              <li><a href="../indicadores-torreon/sociedad-empresas-socialmente-responsables.html" target="_blank">Empresas Socialmente Responsables</a></li>
              <li><a href="../indicadores-torreon/sociedad-escuelas-de-calidad.html" target="_blank">Escuelas de Calidad</a></li>
              <li><a href="../indicadores-torreon/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
              <li><a href="../indicadores-torreon/sociedad-espacios-culturales-segun-imco.html" target="_blank">Espacios Culturales (según IMCO)</a></li>
              <li><a href="../indicadores-torreon/sociedad-estimacion-de-menores-huerfanos-por-agresiones.html" target="_blank">Estimación de Menores Huérfanos por Agresiones</a></li>
              <li><a href="../indicadores-torreon/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
              <li><a href="../indicadores-torreon/sociedad-grado-promedio-de-escolaridad.html" target="_blank">Grado Promedio de Escolaridad</a></li>
              <li><a href="../indicadores-torreon/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
              <li><a href="../indicadores-torreon/sociedad-indice-de-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
              <li><a href="../indicadores-torreon/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de Hacinamiento</a></li>
              <li><a href="../indicadores-torreon/sociedad-indice-de-marginacion.html" target="_blank">Índice de Marginación</a></li>
              <li><a href="../indicadores-torreon/sociedad-ingreso-promedio-de-la-mujer.html" target="_blank">Ingreso Promedio de la Mujer</a></li>
              <li><a href="../indicadores-torreon/sociedad-madres-adolescentes.html" target="_blank">Madres Adolescentes</a></li>
              <li><a href="../indicadores-torreon/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
              <li><a href="../indicadores-torreon/sociedad-medicos.html" target="_blank">Médicos</a></li>
              <li><a href="../indicadores-torreon/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
              <li><a href="../indicadores-torreon/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
              <li><a href="../indicadores-torreon/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
              <li><a href="../indicadores-torreon/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
              <li><a href="../indicadores-torreon/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" target="_blank">Muertes por Accidentes Relacionados con Transporte</a></li>
              <li><a href="../indicadores-torreon/sociedad-mujeres-en-la-fuerza-laboral.html" target="_blank">Mujeres en la Fuerza Laboral</a></li>
              <li><a href="../indicadores-torreon/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
              <li><a href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
              <li><a href="../indicadores-torreon/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" target="_blank">Personas por Debajo de la Línea de Bienestar</a></li>
              <li><a href="../indicadores-torreon/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
              <li><a href="../indicadores-torreon/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
              <li><a href="../indicadores-torreon/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
              <li><a href="../indicadores-torreon/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
              <li><a href="../indicadores-torreon/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
              <li><a href="../indicadores-torreon/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
              <li><a href="../indicadores-torreon/sociedad-promedio-de-descendencia-por-varon.html" target="_blank">Promedio de Descendencia por Varón</a></li>
              <li><a href="../indicadores-torreon/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
              <li><a href="../indicadores-torreon/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
              <li><a href="../indicadores-torreon/sociedad-rendimiento-academico.html" target="_blank">Rendimiento Académico</a></li>
              <li><a href="../indicadores-torreon/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
              <li><a href="../indicadores-torreon/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
              <li><a href="../indicadores-torreon/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
              <li><a href="../indicadores-torreon/sociedad-universidades.html" target="_blank">Universidades</a></li>
              <li><a href="../indicadores-torreon/sociedad-universidades-de-calidad.html" target="_blank">Universidades de Calidad</a></li>
              <li><a href="../indicadores-torreon/sociedad-uso-de-servicios-financieros.html" target="_blank">Uso de Servicios Financieros</a></li>
              <li><a href="../indicadores-torreon/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" target="_blank">Uso de Twitter como Proxy de Uso de Tecnologías de Información</a></li>
              <li><a href="../indicadores-torreon/sociedad-visitas-a-museos-inah.html" target="_blank">Visitas a Museos INAH</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" target="_blank">Viviendas con Drenaje (sólo conexión a red pública)</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-lineas-telefonicas-moviles.html" target="_blank">Viviendas con Líneas Telefónicas Móviles</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-con-piso-de-tierra.html" target="_blank">Viviendas con Piso de Tierra</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
              <li><a href="../indicadores-torreon/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sustentabilidad</h3>
            <ul>
              <li><a href="../indicadores-torreon/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-aerolineas.html" target="_blank">Aerolíneas</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" target="_blank">Aprovechamiento del Biogás en Rellenos Sanitarios</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" target="_blank">Capacidad de Tratamiento de Agua en Operación</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-concentracion-de-particulas-menores-a-10-micras.html" target="_blank">Concentración de Partículas menores a 10 micras</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-concentracion-de-particulas-suspendidas-totales.html" target="_blank">Concentración de Partículas Suspendidas Totales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-consumo-de-agua.html" target="_blank">Consumo de Agua</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-consumo-de-agua-facturado.html" target="_blank">Consumo de Agua Facturado</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" target="_blank">Consumo de Diesel en Transporte de Bienes</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-densidad-media-urbana.html" target="_blank">Densidad Media Urbana</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-desastres-naturales.html" target="_blank">Desastres Naturales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" target="_blank">Disposición Adecuada de Residuos Sólidos</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-economia-intensiva-en-energia.html" target="_blank">Economía Intensiva en Energía</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-emergencias-ambientales.html" target="_blank">Emergencias Ambientales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-empresas-certificadas-como-limpias.html" target="_blank">Empresas Certificadas como Limpias</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-flujo-de-pasajeros-aereos.html" target="_blank">Flujo de Pasajeros Aéreos</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" target="_blank">Índice de Gestión de Calidad del Aire</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-lineas-de-autobus.html" target="_blank">Líneas de Autobús</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-internacionales-mensuales.html" target="_blank">Pasajeros Aéreos Internacionales Mensuales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-pasajeros-aereos-totales-mensuales.html" target="_blank">Pasajeros Aéreos Totales Mensuales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-peatones.html" target="_blank">Peatones</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-avanzada.html" target="_blank">Red Carretera Avanzada</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-red-de-transporte-publico.html" target="_blank">Red de Transporte Público</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-sistema-de-transporte-masivo.html" target="_blank">Sistema de Transporte Masivo</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-superficie.html" target="_blank">Superficie</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-usuarios-de-automoviles.html" target="_blank">Usuarios de Automóviles</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-usuarios-de-bicicleta.html" target="_blank">Usuarios de Bicicleta</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-usuarios-de-modos-no-motorizados.html" target="_blank">Usuarios de Modos No Motorizados</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" target="_blank">Usuarios de Transporte Colectivo Privado</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-usuarios-de-transporte-publico.html" target="_blank">Usuarios de Transporte Público</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
              <li><a href="../indicadores-torreon/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
            </ul>
          </div>
        </div>
FINAL;
    } // seccion_torreon_html

    /**
     * Seccion Gómez Palacio HTML
     *
     * @return string Código HTML
     */
    protected function seccion_gomez_palacio_html() {
        return <<<FINAL
        <div class="row">
          <div class="col-md-2 indicadores-vinculos">
            <h3>Economía</h3>
            <ul>
              <li><a href="../indicadores-gomez-palacio/economia-apertura-de-un-negocio-percentil-promedio.html" target="_blank">Apertura de un Negocio (percentil promedio)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-cantidad-de-creditos-hipotecarios-trimestral.html" target="_blank">Cantidad de Créditos Hipotecarios (trimestral)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-cartera-hipotecaria-vencida.html" target="_blank">Cartera Hipotecaria Vencida</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-centros-de-investigacion.html" target="_blank">Centros de Investigación</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-ciudad-fronteriza-o-portuaria.html" target="_blank">Ciudad Fronteriza o Portuaria</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-de-la-mancha-urbana.html" target="_blank">Crecimiento de la Mancha Urbana</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" target="_blank">Crecimiento de la Población Ocupada sin Ingresos</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-del-pib-estatal.html" target="_blank">Crecimiento del PIB Estatal</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-del-salario-promedio.html" target="_blank">Crecimiento del Salario Promedio</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-en-jornadas-laborales-muy-largas.html" target="_blank">Crecimiento en Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" target="_blank">Crecimiento en los Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-credito-a-las-empresas.html" target="_blank">Crédito a las Empresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-demandantes-de-conflicto-laboral.html" target="_blank">Demandantes de Conflicto Laboral</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-densidad-poblacional.html" target="_blank">Densidad Poblacional</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-diversificacion-economica.html" target="_blank">Diversificación Económica</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-empleados-en-el-sector-formal.html" target="_blank">Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-empresas.html" target="_blank">Empresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-empresas-certificadas-con-iso-9000-y-14000.html" target="_blank">Empresas Certificadas con ISO-9000 y 14000</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" target="_blank">Flujo de Pasajeros del o Hacia el Extranjero</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-grandes-empresas-segun-cnn-expansion.html" target="_blank">Grandes Empresas (según CNN Expansión)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-inversion-extranjera-directa-neta.html" target="_blank">Inversión Extranjera Directa (Neta)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-jornadas-laborales-muy-largas.html" target="_blank">Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-microempresas.html" target="_blank">Microempresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-ocupacion-hotelera.html" target="_blank">Ocupación Hotelera</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" target="_blank">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-patentes.html" target="_blank">Patentes</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-poblacion-ocupada-sin-ingresos.html" target="_blank">Población Ocupada Sin Ingresos</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" target="_blank">Posgrados de Calidad (por cada 100mil de PEA)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-productividad-media-laboral.html" target="_blank">Productividad Media Laboral</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-registro-de-una-propiedad-percentil-promedio.html" target="_blank">Registro de una Propiedad (percentil promedio)</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" target="_blank">Salario Promedio Mensual para Trabajadores de Tiempo Completo</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-frenado-el-crecimiento.html" target="_blank">Sectores que Han Frenado el Crecimiento</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-sectores-que-han-presentado-alto-crecimiento.html" target="_blank">Sectores que Han Presentado Alto Crecimiento</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-sitios-unesco.html" target="_blank">Sitios UNESCO</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-tasa-de-condiciones-criticas-de-ocupacion.html" target="_blank">Tasa de Condiciones Críticas de Ocupación</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html" target="_blank">Tasa de Informalidad</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-tierra-ejidal.html" target="_blank">Tierra Ejidal</a></li>
              <li><a href="../indicadores-gomez-palacio/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas Registradas en el SIEM</a></li>
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
              <li><a href="../indicadores-gomez-palacio/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" target="_blank">Duración de Período para Ediles y Delegados</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-indice-de-informacion-presupuestal.html" target="_blank">Índice de Información Presupuestal</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-propios.html" target="_blank">Ingresos Propios</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-muertes-por-infecciones-instestinales.html" target="_blank">Muertes por Infecciones Instestinales</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-participacion-ciudadana.html" target="_blank">Participación Ciudadana</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-periodistas-muertos-o-desaparecidos.html" target="_blank">Periodistas Muertos o Desaparecidos</a></li>
              <li><a href="../indicadores-gomez-palacio/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Seguridad</h3>
            <ul>
              <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html" target="_blank">Competencia de Servicios Notariales</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-delitos.html" target="_blank">Delitos</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-delitos-patrimoniales.html" target="_blank">Delitos Patrimoniales</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-monto-reportado-en-robo-de-mercancias.html" target="_blank">Monto Reportado en Robo de Mercancías</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-percepcion-de-inseguridad.html" target="_blank">Percepción de Inseguridad</a></li>
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
              <li><a href="../indicadores-gomez-palacio/seguridad-tasa-de-homicidios.html" target="_blank">Tasa de Homicidios</a></li>
              <li><a href="../indicadores-gomez-palacio/seguridad-tasa-de-robo-de-vehiculos.html" target="_blank">Tasa de Robo de VehÍculos</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sociedad</h3>
            <ul>
              <li><a href="../indicadores-gomez-palacio/sociedad-acceso-a-instituciones-de-salud.html" target="_blank">Acceso a Instituciones de Salud</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-acceso-a-servicios-financieros.html" target="_blank">Acceso a Servicios Financieros</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Básicas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Iniciales</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Prácticas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-preescolar-por-docente.html" target="_blank">Alumnos de Preescolar por Docente</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-primaria-por-docente.html" target="_blank">Alumnos de Primaria por Docente</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-alumnos-de-secundaria-por-docente.html" target="_blank">Alumnos de Secundaria por Docente</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-camas-de-hospital.html" target="_blank">Camas de Hospital</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" target="_blank">Crecimiento en Acceso a Servicios de Salud</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-crecimiento-en-poblacion-altamente-calificada.html" target="_blank">Crecimiento en Población Altamente Calificada</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-desigualdad-en-las-ciudades.html" target="_blank">Desigualdad en las Ciudades</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-empresas-socialmente-responsables.html" target="_blank">Empresas Socialmente Responsables</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-escuelas-de-calidad.html" target="_blank">Escuelas de Calidad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-espacios-culturales-segun-imco.html" target="_blank">Espacios Culturales (según IMCO)</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-grado-promedio-de-escolaridad.html" target="_blank">Grado Promedio de Escolaridad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-indice-de-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de Hacinamiento</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-indice-de-marginacion.html" target="_blank">Índice de Marginación</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-ingreso-promedio-de-la-mujer.html" target="_blank">Ingreso Promedio de la Mujer</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-medicos.html" target="_blank">Médicos</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" target="_blank">Muertes por Accidentes Relacionados con Transporte</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-mujeres-en-la-fuerza-laboral.html" target="_blank">Mujeres en la Fuerza Laboral</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" target="_blank">Personas por Debajo de la Línea de Bienestar</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-rendimiento-academico.html" target="_blank">Rendimiento Académico</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-universidades.html" target="_blank">Universidades</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-universidades-de-calidad.html" target="_blank">Universidades de Calidad</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-uso-de-servicios-financieros.html" target="_blank">Uso de Servicios Financieros</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" target="_blank">Uso de Twitter como Proxy de Uso de Tecnologías de Información</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-visitas-a-museos-inah.html" target="_blank">Visitas a Museos INAH</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" target="_blank">Viviendas con Drenaje (sólo conexión a red pública)</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-lineas-telefonicas-moviles.html" target="_blank">Viviendas con Líneas Telefónicas Móviles</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-con-piso-de-tierra.html" target="_blank">Viviendas con Piso de Tierra</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
              <li><a href="../indicadores-gomez-palacio/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sustentabilidad</h3>
            <ul>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-aerolineas.html" target="_blank">Aerolíneas</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" target="_blank">Aprovechamiento del Biogás en Rellenos Sanitarios</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" target="_blank">Capacidad de Tratamiento de Agua en Operación</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-agua.html" target="_blank">Consumo de Agua</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" target="_blank">Consumo de Diesel en Transporte de Bienes</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-densidad-media-urbana.html" target="_blank">Densidad Media Urbana</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-desastres-naturales.html" target="_blank">Desastres Naturales</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" target="_blank">Disposición Adecuada de Residuos Sólidos</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-economia-intensiva-en-energia.html" target="_blank">Economía Intensiva en Energía</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-emergencias-ambientales.html" target="_blank">Emergencias Ambientales</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-empresas-certificadas-como-limpias.html" target="_blank">Empresas Certificadas como Limpias</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-flujo-de-pasajeros-aereos.html" target="_blank">Flujo de Pasajeros Aéreos</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" target="_blank">Índice de Gestión de Calidad del Aire</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-lineas-de-autobus.html" target="_blank">Líneas de Autobús</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-peatones.html" target="_blank">Peatones</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-avanzada.html" target="_blank">Red Carretera Avanzada</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-sistema-de-transporte-masivo.html" target="_blank">Sistema de Transporte Masivo</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-superficie.html" target="_blank">Superficie</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-automoviles.html" target="_blank">Usuarios de Automóviles</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-bicicleta.html" target="_blank">Usuarios de Bicicleta</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-modos-no-motorizados.html" target="_blank">Usuarios de Modos No Motorizados</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" target="_blank">Usuarios de Transporte Colectivo Privado</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-usuarios-de-transporte-publico.html" target="_blank">Usuarios de Transporte Público</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
              <li><a href="../indicadores-gomez-palacio/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
            </ul>
          </div>
        </div>
FINAL;
    } // seccion_gomez_palacio_html

    /**
     * Seccion Lerdo HTML
     *
     * @return string Código HTML
     */
    protected function seccion_lerdo_html() {
        return <<<FINAL
        <div class="row">
          <div class="col-md-2 indicadores-vinculos">
            <h3>Economía</h3>
            <ul>
              <li><a href="../indicadores-lerdo/economia-apertura-de-un-negocio-percentil-promedio.html" target="_blank">Apertura de un Negocio (percentil promedio)</a></li>
              <li><a href="../indicadores-lerdo/economia-cantidad-de-creditos-hipotecarios-trimestral.html" target="_blank">Cantidad de Créditos Hipotecarios (trimestral)</a></li>
              <li><a href="../indicadores-lerdo/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
              <li><a href="../indicadores-lerdo/economia-cartera-hipotecaria-vencida.html" target="_blank">Cartera Hipotecaria Vencida</a></li>
              <li><a href="../indicadores-lerdo/economia-centros-de-investigacion.html" target="_blank">Centros de Investigación</a></li>
              <li><a href="../indicadores-lerdo/economia-ciudad-fronteriza-o-portuaria.html" target="_blank">Ciudad Fronteriza o Portuaria</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-de-la-mancha-urbana.html" target="_blank">Crecimiento de la Mancha Urbana</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" target="_blank">Crecimiento de la Población Ocupada sin Ingresos</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-del-pib-estatal.html" target="_blank">Crecimiento del PIB Estatal</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-del-salario-promedio.html" target="_blank">Crecimiento del Salario Promedio</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-en-jornadas-laborales-muy-largas.html" target="_blank">Crecimiento en Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-lerdo/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" target="_blank">Crecimiento en los Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-lerdo/economia-credito-a-las-empresas.html" target="_blank">Crédito a las Empresas</a></li>
              <li><a href="../indicadores-lerdo/economia-demandantes-de-conflicto-laboral.html" target="_blank">Demandantes de Conflicto Laboral</a></li>
              <li><a href="../indicadores-lerdo/economia-densidad-poblacional.html" target="_blank">Densidad Poblacional</a></li>
              <li><a href="../indicadores-lerdo/economia-diversificacion-economica.html" target="_blank">Diversificación Económica</a></li>
              <li><a href="../indicadores-lerdo/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
              <li><a href="../indicadores-lerdo/economia-empleados-en-el-sector-formal.html" target="_blank">Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-lerdo/economia-empresas.html" target="_blank">Empresas</a></li>
              <li><a href="../indicadores-lerdo/economia-empresas-certificadas-con-iso-9000-y-14000.html" target="_blank">Empresas Certificadas con ISO-9000 y 14000</a></li>
              <li><a href="../indicadores-lerdo/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
              <li><a href="../indicadores-lerdo/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" target="_blank">Flujo de Pasajeros del o Hacia el Extranjero</a></li>
              <li><a href="../indicadores-lerdo/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
              <li><a href="../indicadores-lerdo/economia-grandes-empresas-segun-cnn-expansion.html" target="_blank">Grandes Empresas (según CNN Expansión)</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
              <li><a href="../indicadores-lerdo/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
              <li><a href="../indicadores-lerdo/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
              <li><a href="../indicadores-lerdo/economia-inversion-extranjera-directa-neta.html" target="_blank">Inversión Extranjera Directa (Neta)</a></li>
              <li><a href="../indicadores-lerdo/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
              <li><a href="../indicadores-lerdo/economia-jornadas-laborales-muy-largas.html" target="_blank">Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-lerdo/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
              <li><a href="../indicadores-lerdo/economia-microempresas.html" target="_blank">Microempresas</a></li>
              <li><a href="../indicadores-lerdo/economia-ocupacion-hotelera.html" target="_blank">Ocupación Hotelera</a></li>
              <li><a href="../indicadores-lerdo/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" target="_blank">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</a></li>
              <li><a href="../indicadores-lerdo/economia-patentes.html" target="_blank">Patentes</a></li>
              <li><a href="../indicadores-lerdo/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
              <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
              <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
              <li><a href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
              <li><a href="../indicadores-lerdo/economia-poblacion-ocupada-sin-ingresos.html" target="_blank">Población Ocupada Sin Ingresos</a></li>
              <li><a href="../indicadores-lerdo/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" target="_blank">Posgrados de Calidad (por cada 100mil de PEA)</a></li>
              <li><a href="../indicadores-lerdo/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
              <li><a href="../indicadores-lerdo/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
              <li><a href="../indicadores-lerdo/economia-productividad-media-laboral.html" target="_blank">Productividad Media Laboral</a></li>
              <li><a href="../indicadores-lerdo/economia-registro-de-una-propiedad-percentil-promedio.html" target="_blank">Registro de una Propiedad (percentil promedio)</a></li>
              <li><a href="../indicadores-lerdo/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" target="_blank">Salario Promedio Mensual para Trabajadores de Tiempo Completo</a></li>
              <li><a href="../indicadores-lerdo/economia-sectores-que-han-frenado-el-crecimiento.html" target="_blank">Sectores que Han Frenado el Crecimiento</a></li>
              <li><a href="../indicadores-lerdo/economia-sectores-que-han-presentado-alto-crecimiento.html" target="_blank">Sectores que Han Presentado Alto Crecimiento</a></li>
              <li><a href="../indicadores-lerdo/economia-sitios-unesco.html" target="_blank">Sitios UNESCO</a></li>
              <li><a href="../indicadores-lerdo/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
              <li><a href="../indicadores-lerdo/economia-tasa-de-condiciones-criticas-de-ocupacion.html" target="_blank">Tasa de Condiciones Críticas de Ocupación</a></li>
              <li><a href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
              <li><a href="../indicadores-lerdo/economia-tasa-de-informalidad.html" target="_blank">Tasa de Informalidad</a></li>
              <li><a href="../indicadores-lerdo/economia-tierra-ejidal.html" target="_blank">Tierra Ejidal</a></li>
              <li><a href="../indicadores-lerdo/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas Registradas en el SIEM</a></li>
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
              <li><a href="../indicadores-lerdo/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" target="_blank">Duración de Período para Ediles y Delegados</a></li>
              <li><a href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
              <li><a href="../indicadores-lerdo/gobierno-indice-de-informacion-presupuestal.html" target="_blank">Índice de Información Presupuestal</a></li>
              <li><a href="../indicadores-lerdo/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
              <li><a href="../indicadores-lerdo/gobierno-ingresos-propios.html" target="_blank">Ingresos Propios</a></li>
              <li><a href="../indicadores-lerdo/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
              <li><a href="../indicadores-lerdo/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
              <li><a href="../indicadores-lerdo/gobierno-muertes-por-infecciones-instestinales.html" target="_blank">Muertes por Infecciones Instestinales</a></li>
              <li><a href="../indicadores-lerdo/gobierno-participacion-ciudadana.html" target="_blank">Participación Ciudadana</a></li>
              <li><a href="../indicadores-lerdo/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
              <li><a href="../indicadores-lerdo/gobierno-periodistas-muertos-o-desaparecidos.html" target="_blank">Periodistas Muertos o Desaparecidos</a></li>
              <li><a href="../indicadores-lerdo/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Seguridad</h3>
            <ul>
              <li><a href="../indicadores-lerdo/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html" target="_blank">Competencia de Servicios Notariales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-delitos.html" target="_blank">Delitos</a></li>
              <li><a href="../indicadores-lerdo/seguridad-delitos-patrimoniales.html" target="_blank">Delitos Patrimoniales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
              <li><a href="../indicadores-lerdo/seguridad-monto-reportado-en-robo-de-mercancias.html" target="_blank">Monto Reportado en Robo de Mercancías</a></li>
              <li><a href="../indicadores-lerdo/seguridad-percepcion-de-inseguridad.html" target="_blank">Percepción de Inseguridad</a></li>
              <li><a href="../indicadores-lerdo/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
              <li><a href="../indicadores-lerdo/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
              <li><a href="../indicadores-lerdo/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
              <li><a href="../indicadores-lerdo/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
              <li><a href="../indicadores-lerdo/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
              <li><a href="../indicadores-lerdo/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
              <li><a href="../indicadores-lerdo/seguridad-tasa-de-homicidios.html" target="_blank">Tasa de Homicidios</a></li>
              <li><a href="../indicadores-lerdo/seguridad-tasa-de-robo-de-vehiculos.html" target="_blank">Tasa de Robo de VehÍculos</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sociedad</h3>
            <ul>
              <li><a href="../indicadores-lerdo/sociedad-acceso-a-instituciones-de-salud.html" target="_blank">Acceso a Instituciones de Salud</a></li>
              <li><a href="../indicadores-lerdo/sociedad-acceso-a-servicios-financieros.html" target="_blank">Acceso a Servicios Financieros</a></li>
              <li><a href="../indicadores-lerdo/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
              <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
              <li><a href="../indicadores-lerdo/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Básicas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Iniciales</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Prácticas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-de-preescolar-por-docente.html" target="_blank">Alumnos de Preescolar por Docente</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-de-primaria-por-docente.html" target="_blank">Alumnos de Primaria por Docente</a></li>
              <li><a href="../indicadores-lerdo/sociedad-alumnos-de-secundaria-por-docente.html" target="_blank">Alumnos de Secundaria por Docente</a></li>
              <li><a href="../indicadores-lerdo/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
              <li><a href="../indicadores-lerdo/sociedad-camas-de-hospital.html" target="_blank">Camas de Hospital</a></li>
              <li><a href="../indicadores-lerdo/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" target="_blank">Crecimiento en Acceso a Servicios de Salud</a></li>
              <li><a href="../indicadores-lerdo/sociedad-crecimiento-en-poblacion-altamente-calificada.html" target="_blank">Crecimiento en Población Altamente Calificada</a></li>
              <li><a href="../indicadores-lerdo/sociedad-desigualdad-en-las-ciudades.html" target="_blank">Desigualdad en las Ciudades</a></li>
              <li><a href="../indicadores-lerdo/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
              <li><a href="../indicadores-lerdo/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-empresas-socialmente-responsables.html" target="_blank">Empresas Socialmente Responsables</a></li>
              <li><a href="../indicadores-lerdo/sociedad-escuelas-de-calidad.html" target="_blank">Escuelas de Calidad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
              <li><a href="../indicadores-lerdo/sociedad-espacios-culturales-segun-imco.html" target="_blank">Espacios Culturales (según IMCO)</a></li>
              <li><a href="../indicadores-lerdo/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-grado-promedio-de-escolaridad.html" target="_blank">Grado Promedio de Escolaridad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
              <li><a href="../indicadores-lerdo/sociedad-indice-de-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
              <li><a href="../indicadores-lerdo/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de Hacinamiento</a></li>
              <li><a href="../indicadores-lerdo/sociedad-indice-de-marginacion.html" target="_blank">Índice de Marginación</a></li>
              <li><a href="../indicadores-lerdo/sociedad-ingreso-promedio-de-la-mujer.html" target="_blank">Ingreso Promedio de la Mujer</a></li>
              <li><a href="../indicadores-lerdo/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
              <li><a href="../indicadores-lerdo/sociedad-medicos.html" target="_blank">Médicos</a></li>
              <li><a href="../indicadores-lerdo/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
              <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
              <li><a href="../indicadores-lerdo/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
              <li><a href="../indicadores-lerdo/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" target="_blank">Muertes por Accidentes Relacionados con Transporte</a></li>
              <li><a href="../indicadores-lerdo/sociedad-mujeres-en-la-fuerza-laboral.html" target="_blank">Mujeres en la Fuerza Laboral</a></li>
              <li><a href="../indicadores-lerdo/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
              <li><a href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
              <li><a href="../indicadores-lerdo/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" target="_blank">Personas por Debajo de la Línea de Bienestar</a></li>
              <li><a href="../indicadores-lerdo/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
              <li><a href="../indicadores-lerdo/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
              <li><a href="../indicadores-lerdo/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
              <li><a href="../indicadores-lerdo/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
              <li><a href="../indicadores-lerdo/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
              <li><a href="../indicadores-lerdo/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
              <li><a href="../indicadores-lerdo/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
              <li><a href="../indicadores-lerdo/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
              <li><a href="../indicadores-lerdo/sociedad-rendimiento-academico.html" target="_blank">Rendimiento Académico</a></li>
              <li><a href="../indicadores-lerdo/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
              <li><a href="../indicadores-lerdo/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
              <li><a href="../indicadores-lerdo/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
              <li><a href="../indicadores-lerdo/sociedad-universidades.html" target="_blank">Universidades</a></li>
              <li><a href="../indicadores-lerdo/sociedad-universidades-de-calidad.html" target="_blank">Universidades de Calidad</a></li>
              <li><a href="../indicadores-lerdo/sociedad-uso-de-servicios-financieros.html" target="_blank">Uso de Servicios Financieros</a></li>
              <li><a href="../indicadores-lerdo/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" target="_blank">Uso de Twitter como Proxy de Uso de Tecnologías de Información</a></li>
              <li><a href="../indicadores-lerdo/sociedad-visitas-a-museos-inah.html" target="_blank">Visitas a Museos INAH</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" target="_blank">Viviendas con Drenaje (sólo conexión a red pública)</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-lineas-telefonicas-moviles.html" target="_blank">Viviendas con Líneas Telefónicas Móviles</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-con-piso-de-tierra.html" target="_blank">Viviendas con Piso de Tierra</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
              <li><a href="../indicadores-lerdo/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sustentabilidad</h3>
            <ul>
              <li><a href="../indicadores-lerdo/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-aerolineas.html" target="_blank">Aerolíneas</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" target="_blank">Aprovechamiento del Biogás en Rellenos Sanitarios</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" target="_blank">Capacidad de Tratamiento de Agua en Operación</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-consumo-de-agua.html" target="_blank">Consumo de Agua</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" target="_blank">Consumo de Diesel en Transporte de Bienes</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-densidad-media-urbana.html" target="_blank">Densidad Media Urbana</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-desastres-naturales.html" target="_blank">Desastres Naturales</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" target="_blank">Disposición Adecuada de Residuos Sólidos</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-economia-intensiva-en-energia.html" target="_blank">Economía Intensiva en Energía</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-emergencias-ambientales.html" target="_blank">Emergencias Ambientales</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-empresas-certificadas-como-limpias.html" target="_blank">Empresas Certificadas como Limpias</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-flujo-de-pasajeros-aereos.html" target="_blank">Flujo de Pasajeros Aéreos</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" target="_blank">Índice de Gestión de Calidad del Aire</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-lineas-de-autobus.html" target="_blank">Líneas de Autobús</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-peatones.html" target="_blank">Peatones</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-avanzada.html" target="_blank">Red Carretera Avanzada</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-sistema-de-transporte-masivo.html" target="_blank">Sistema de Transporte Masivo</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-superficie.html" target="_blank">Superficie</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-usuarios-de-automoviles.html" target="_blank">Usuarios de Automóviles</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-usuarios-de-bicicleta.html" target="_blank">Usuarios de Bicicleta</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-usuarios-de-modos-no-motorizados.html" target="_blank">Usuarios de Modos No Motorizados</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" target="_blank">Usuarios de Transporte Colectivo Privado</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-usuarios-de-transporte-publico.html" target="_blank">Usuarios de Transporte Público</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
              <li><a href="../indicadores-lerdo/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
            </ul>
          </div>
        </div>
FINAL;
    } // seccion_lerdo_html

    /**
     * Seccion Matamoros HTML
     *
     * @return string Código HTML
     */
    protected function seccion_matamoros_html() {
        return <<<FINAL
        <div class="row">
          <div class="col-md-2 indicadores-vinculos">
            <h3>Economía</h3>
            <ul>
              <li><a href="../indicadores-matamoros/economia-apertura-de-un-negocio-percentil-promedio.html" target="_blank">Apertura de un Negocio (percentil promedio)</a></li>
              <li><a href="../indicadores-matamoros/economia-cantidad-de-creditos-hipotecarios-trimestral.html" target="_blank">Cantidad de Créditos Hipotecarios (trimestral)</a></li>
              <li><a href="../indicadores-matamoros/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
              <li><a href="../indicadores-matamoros/economia-cartera-hipotecaria-vencida.html" target="_blank">Cartera Hipotecaria Vencida</a></li>
              <li><a href="../indicadores-matamoros/economia-centros-de-investigacion.html" target="_blank">Centros de Investigación</a></li>
              <li><a href="../indicadores-matamoros/economia-ciudad-fronteriza-o-portuaria.html" target="_blank">Ciudad Fronteriza o Portuaria</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-de-la-mancha-urbana.html" target="_blank">Crecimiento de la Mancha Urbana</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" target="_blank">Crecimiento de la Población Ocupada sin Ingresos</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-del-pib-estatal.html" target="_blank">Crecimiento del PIB Estatal</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-del-salario-promedio.html" target="_blank">Crecimiento del Salario Promedio</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-en-jornadas-laborales-muy-largas.html" target="_blank">Crecimiento en Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-matamoros/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" target="_blank">Crecimiento en los Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-matamoros/economia-credito-a-las-empresas.html" target="_blank">Crédito a las Empresas</a></li>
              <li><a href="../indicadores-matamoros/economia-demandantes-de-conflicto-laboral.html" target="_blank">Demandantes de Conflicto Laboral</a></li>
              <li><a href="../indicadores-matamoros/economia-densidad-poblacional.html" target="_blank">Densidad Poblacional</a></li>
              <li><a href="../indicadores-matamoros/economia-diversificacion-economica.html" target="_blank">Diversificación Económica</a></li>
              <li><a href="../indicadores-matamoros/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
              <li><a href="../indicadores-matamoros/economia-empleados-en-el-sector-formal.html" target="_blank">Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-matamoros/economia-empresas.html" target="_blank">Empresas</a></li>
              <li><a href="../indicadores-matamoros/economia-empresas-certificadas-con-iso-9000-y-14000.html" target="_blank">Empresas Certificadas con ISO-9000 y 14000</a></li>
              <li><a href="../indicadores-matamoros/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
              <li><a href="../indicadores-matamoros/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" target="_blank">Flujo de Pasajeros del o Hacia el Extranjero</a></li>
              <li><a href="../indicadores-matamoros/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
              <li><a href="../indicadores-matamoros/economia-grandes-empresas-segun-cnn-expansion.html" target="_blank">Grandes Empresas (según CNN Expansión)</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
              <li><a href="../indicadores-matamoros/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
              <li><a href="../indicadores-matamoros/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
              <li><a href="../indicadores-matamoros/economia-inversion-extranjera-directa-neta.html" target="_blank">Inversión Extranjera Directa (Neta)</a></li>
              <li><a href="../indicadores-matamoros/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
              <li><a href="../indicadores-matamoros/economia-jornadas-laborales-muy-largas.html" target="_blank">Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-matamoros/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
              <li><a href="../indicadores-matamoros/economia-microempresas.html" target="_blank">Microempresas</a></li>
              <li><a href="../indicadores-matamoros/economia-ocupacion-hotelera.html" target="_blank">Ocupación Hotelera</a></li>
              <li><a href="../indicadores-matamoros/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" target="_blank">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</a></li>
              <li><a href="../indicadores-matamoros/economia-patentes.html" target="_blank">Patentes</a></li>
              <li><a href="../indicadores-matamoros/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
              <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
              <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
              <li><a href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
              <li><a href="../indicadores-matamoros/economia-poblacion-ocupada-sin-ingresos.html" target="_blank">Población Ocupada Sin Ingresos</a></li>
              <li><a href="../indicadores-matamoros/economia-posgrados-de-calidad.html" target="_blank">Posgrados de Calidad</a></li>
              <li><a href="../indicadores-matamoros/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" target="_blank">Posgrados de Calidad (por cada 100mil de PEA)</a></li>
              <li><a href="../indicadores-matamoros/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
              <li><a href="../indicadores-matamoros/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
              <li><a href="../indicadores-matamoros/economia-productividad-media-laboral.html" target="_blank">Productividad Media Laboral</a></li>
              <li><a href="../indicadores-matamoros/economia-registro-de-una-propiedad-percentil-promedio.html" target="_blank">Registro de una Propiedad (percentil promedio)</a></li>
              <li><a href="../indicadores-matamoros/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" target="_blank">Salario Promedio Mensual para Trabajadores de Tiempo Completo</a></li>
              <li><a href="../indicadores-matamoros/economia-sectores-que-han-frenado-el-crecimiento.html" target="_blank">Sectores que Han Frenado el Crecimiento</a></li>
              <li><a href="../indicadores-matamoros/economia-sectores-que-han-presentado-alto-crecimiento.html" target="_blank">Sectores que Han Presentado Alto Crecimiento</a></li>
              <li><a href="../indicadores-matamoros/economia-sitios-unesco.html" target="_blank">Sitios UNESCO</a></li>
              <li><a href="../indicadores-matamoros/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
              <li><a href="../indicadores-matamoros/economia-tasa-de-condiciones-criticas-de-ocupacion.html" target="_blank">Tasa de Condiciones Críticas de Ocupación</a></li>
              <li><a href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
              <li><a href="../indicadores-matamoros/economia-tasa-de-informalidad.html" target="_blank">Tasa de Informalidad</a></li>
              <li><a href="../indicadores-matamoros/economia-tierra-ejidal.html" target="_blank">Tierra Ejidal</a></li>
              <li><a href="../indicadores-matamoros/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas Registradas en el SIEM</a></li>
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
              <li><a href="../indicadores-matamoros/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" target="_blank">Duración de Período para Ediles y Delegados</a></li>
              <li><a href="../indicadores-matamoros/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
              <li><a href="../indicadores-matamoros/gobierno-indice-de-informacion-presupuestal.html" target="_blank">Índice de Información Presupuestal</a></li>
              <li><a href="../indicadores-matamoros/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
              <li><a href="../indicadores-matamoros/gobierno-ingresos-propios.html" target="_blank">Ingresos Propios</a></li>
              <li><a href="../indicadores-matamoros/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
              <li><a href="../indicadores-matamoros/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
              <li><a href="../indicadores-matamoros/gobierno-muertes-por-infecciones-instestinales.html" target="_blank">Muertes por Infecciones Instestinales</a></li>
              <li><a href="../indicadores-matamoros/gobierno-participacion-ciudadana.html" target="_blank">Participación Ciudadana</a></li>
              <li><a href="../indicadores-matamoros/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
              <li><a href="../indicadores-matamoros/gobierno-periodistas-muertos-o-desaparecidos.html" target="_blank">Periodistas Muertos o Desaparecidos</a></li>
              <li><a href="../indicadores-matamoros/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Seguridad</h3>
            <ul>
              <li><a href="../indicadores-matamoros/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
              <li><a href="../indicadores-matamoros/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html" target="_blank">Competencia de Servicios Notariales</a></li>
              <li><a href="../indicadores-matamoros/seguridad-delitos.html" target="_blank">Delitos</a></li>
              <li><a href="../indicadores-matamoros/seguridad-delitos-patrimoniales.html" target="_blank">Delitos Patrimoniales</a></li>
              <li><a href="../indicadores-matamoros/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
              <li><a href="../indicadores-matamoros/seguridad-monto-reportado-en-robo-de-mercancias.html" target="_blank">Monto Reportado en Robo de Mercancías</a></li>
              <li><a href="../indicadores-matamoros/seguridad-percepcion-de-inseguridad.html" target="_blank">Percepción de Inseguridad</a></li>
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
              <li><a href="../indicadores-matamoros/seguridad-tasa-de-homicidios.html" target="_blank">Tasa de Homicidios</a></li>
              <li><a href="../indicadores-matamoros/seguridad-tasa-de-robo-de-vehiculos.html" target="_blank">Tasa de Robo de VehÍculos</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sociedad</h3>
            <ul>
              <li><a href="../indicadores-matamoros/sociedad-acceso-a-instituciones-de-salud.html" target="_blank">Acceso a Instituciones de Salud</a></li>
              <li><a href="../indicadores-matamoros/sociedad-acceso-a-servicios-financieros.html" target="_blank">Acceso a Servicios Financieros</a></li>
              <li><a href="../indicadores-matamoros/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
              <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
              <li><a href="../indicadores-matamoros/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Básicas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Iniciales</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Prácticas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-de-preescolar-por-docente.html" target="_blank">Alumnos de Preescolar por Docente</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-de-primaria-por-docente.html" target="_blank">Alumnos de Primaria por Docente</a></li>
              <li><a href="../indicadores-matamoros/sociedad-alumnos-de-secundaria-por-docente.html" target="_blank">Alumnos de Secundaria por Docente</a></li>
              <li><a href="../indicadores-matamoros/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
              <li><a href="../indicadores-matamoros/sociedad-camas-de-hospital.html" target="_blank">Camas de Hospital</a></li>
              <li><a href="../indicadores-matamoros/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" target="_blank">Crecimiento en Acceso a Servicios de Salud</a></li>
              <li><a href="../indicadores-matamoros/sociedad-crecimiento-en-poblacion-altamente-calificada.html" target="_blank">Crecimiento en Población Altamente Calificada</a></li>
              <li><a href="../indicadores-matamoros/sociedad-desigualdad-en-las-ciudades.html" target="_blank">Desigualdad en las Ciudades</a></li>
              <li><a href="../indicadores-matamoros/sociedad-diferencial-de-grado-promedio-de-escolaridad-por-genero.html" target="_blank">Diferencial de Grado Promedio de Escolaridad por Género</a></li>
              <li><a href="../indicadores-matamoros/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-empresas-socialmente-responsables.html" target="_blank">Empresas Socialmente Responsables</a></li>
              <li><a href="../indicadores-matamoros/sociedad-escuelas-de-calidad.html" target="_blank">Escuelas de Calidad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
              <li><a href="../indicadores-matamoros/sociedad-espacios-culturales-segun-imco.html" target="_blank">Espacios Culturales (según IMCO)</a></li>
              <li><a href="../indicadores-matamoros/sociedad-fecundidad.html" target="_blank">Fecundidad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-grado-promedio-de-escolaridad.html" target="_blank">Grado Promedio de Escolaridad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
              <li><a href="../indicadores-matamoros/sociedad-indice-de-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
              <li><a href="../indicadores-matamoros/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de Hacinamiento</a></li>
              <li><a href="../indicadores-matamoros/sociedad-indice-de-marginacion.html" target="_blank">Índice de Marginación</a></li>
              <li><a href="../indicadores-matamoros/sociedad-ingreso-promedio-de-la-mujer.html" target="_blank">Ingreso Promedio de la Mujer</a></li>
              <li><a href="../indicadores-matamoros/sociedad-maternidad-adolescente.html" target="_blank">Maternidad Adolescente</a></li>
              <li><a href="../indicadores-matamoros/sociedad-medicos.html" target="_blank">Médicos</a></li>
              <li><a href="../indicadores-matamoros/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
              <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
              <li><a href="../indicadores-matamoros/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
              <li><a href="../indicadores-matamoros/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" target="_blank">Muertes por Accidentes Relacionados con Transporte</a></li>
              <li><a href="../indicadores-matamoros/sociedad-mujeres-en-la-fuerza-laboral.html" target="_blank">Mujeres en la Fuerza Laboral</a></li>
              <li><a href="../indicadores-matamoros/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
              <li><a href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
              <li><a href="../indicadores-matamoros/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" target="_blank">Personas por Debajo de la Línea de Bienestar</a></li>
              <li><a href="../indicadores-matamoros/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
              <li><a href="../indicadores-matamoros/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
              <li><a href="../indicadores-matamoros/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
              <li><a href="../indicadores-matamoros/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
              <li><a href="../indicadores-matamoros/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
              <li><a href="../indicadores-matamoros/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
              <li><a href="../indicadores-matamoros/sociedad-razon-de-mortalidad-materna.html" target="_blank">Razón de Mortalidad Materna</a></li>
              <li><a href="../indicadores-matamoros/sociedad-razon-entre-mujeres-y-hombres-en-la-ensenanza-media-superior.html" target="_blank">Razón entre Mujeres y Hombres en la Enseñanza Media Superior</a></li>
              <li><a href="../indicadores-matamoros/sociedad-rendimiento-academico.html" target="_blank">Rendimiento Académico</a></li>
              <li><a href="../indicadores-matamoros/sociedad-rezago-alimentario.html" target="_blank">Rezago Alimentario</a></li>
              <li><a href="../indicadores-matamoros/sociedad-rezago-educativo.html" target="_blank">Rezago Educativo</a></li>
              <li><a href="../indicadores-matamoros/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
              <li><a href="../indicadores-matamoros/sociedad-universidades.html" target="_blank">Universidades</a></li>
              <li><a href="../indicadores-matamoros/sociedad-universidades-de-calidad.html" target="_blank">Universidades de Calidad</a></li>
              <li><a href="../indicadores-matamoros/sociedad-uso-de-servicios-financieros.html" target="_blank">Uso de Servicios Financieros</a></li>
              <li><a href="../indicadores-matamoros/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" target="_blank">Uso de Twitter como Proxy de Uso de Tecnologías de Información</a></li>
              <li><a href="../indicadores-matamoros/sociedad-visitas-a-museos-inah.html" target="_blank">Visitas a Museos INAH</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" target="_blank">Viviendas con Drenaje (sólo conexión a red pública)</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-lineas-telefonicas-moviles.html" target="_blank">Viviendas con Líneas Telefónicas Móviles</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-con-piso-de-tierra.html" target="_blank">Viviendas con Piso de Tierra</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
              <li><a href="../indicadores-matamoros/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sustentabilidad</h3>
            <ul>
              <li><a href="../indicadores-matamoros/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-aerolineas.html" target="_blank">Aerolíneas</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" target="_blank">Aprovechamiento del Biogás en Rellenos Sanitarios</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" target="_blank">Capacidad de Tratamiento de Agua en Operación</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-consumo-de-agua.html" target="_blank">Consumo de Agua</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" target="_blank">Consumo de Diesel en Transporte de Bienes</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-densidad-media-urbana.html" target="_blank">Densidad Media Urbana</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-desastres-naturales.html" target="_blank">Desastres Naturales</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" target="_blank">Disposición Adecuada de Residuos Sólidos</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-economia-intensiva-en-energia.html" target="_blank">Economía Intensiva en Energía</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-emergencias-ambientales.html" target="_blank">Emergencias Ambientales</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-empresas-certificadas-como-limpias.html" target="_blank">Empresas Certificadas como Limpias</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-flujo-de-pasajeros-aereos.html" target="_blank">Flujo de Pasajeros Aéreos</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" target="_blank">Índice de Gestión de Calidad del Aire</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-lineas-de-autobus.html" target="_blank">Líneas de Autobús</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-peatones.html" target="_blank">Peatones</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-avanzada.html" target="_blank">Red Carretera Avanzada</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-de-alimentadoras-estatales.html" target="_blank">Red Carretera de Alimentadoras Estatales</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-total.html" target="_blank">Red Carretera Total</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-red-carretera-troncal-federal.html" target="_blank">Red Carretera Troncal Federal</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-sistema-de-transporte-masivo.html" target="_blank">Sistema de Transporte Masivo</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-superficie.html" target="_blank">Superficie</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-usuarios-de-automoviles.html" target="_blank">Usuarios de Automóviles</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-usuarios-de-bicicleta.html" target="_blank">Usuarios de Bicicleta</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-usuarios-de-modos-no-motorizados.html" target="_blank">Usuarios de Modos No Motorizados</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" target="_blank">Usuarios de Transporte Colectivo Privado</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-usuarios-de-transporte-publico.html" target="_blank">Usuarios de Transporte Público</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
              <li><a href="../indicadores-matamoros/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
            </ul>
          </div>
        </div>
FINAL;
    } // seccion_matamoros_html

    /**
     * Seccion La Laguna HTML
     *
     * @return string Código HTML
     */
    protected function seccion_la_laguna_html() {
        return <<<FINAL
        <div class="row">
          <div class="col-md-2 indicadores-vinculos">
            <h3>Economía</h3>
            <ul>
              <li><a href="../indicadores-la-laguna/economia-apertura-de-un-negocio-percentil-promedio.html" target="_blank">Apertura de un Negocio (percentil promedio)</a></li>
              <li><a href="../indicadores-la-laguna/economia-cantidad-de-creditos-hipotecarios-trimestral.html" target="_blank">Cantidad de Créditos Hipotecarios (trimestral)</a></li>
              <li><a href="../indicadores-la-laguna/economia-cartera-hipotecaria.html" target="_blank">Cartera Hipotecaria</a></li>
              <li><a href="../indicadores-la-laguna/economia-cartera-hipotecaria-vencida.html" target="_blank">Cartera Hipotecaria Vencida</a></li>
              <li><a href="../indicadores-la-laguna/economia-centros-de-investigacion.html" target="_blank">Centros de Investigación</a></li>
              <li><a href="../indicadores-la-laguna/economia-ciudad-fronteriza-o-portuaria.html" target="_blank">Ciudad Fronteriza o Portuaria</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-de-la-mancha-urbana.html" target="_blank">Crecimiento de la Mancha Urbana</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-de-la-poblacion-ocupada-sin-ingresos.html" target="_blank">Crecimiento de la Población Ocupada sin Ingresos</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-del-pib-estatal.html" target="_blank">Crecimiento del PIB Estatal</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-del-salario-promedio.html" target="_blank">Crecimiento del Salario Promedio</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-en-jornadas-laborales-muy-largas.html" target="_blank">Crecimiento en Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-la-laguna/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" target="_blank">Crecimiento en los Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-la-laguna/economia-credito-a-las-empresas.html" target="_blank">Crédito a las Empresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-demandantes-de-conflicto-laboral.html" target="_blank">Demandantes de Conflicto Laboral</a></li>
              <li><a href="../indicadores-la-laguna/economia-densidad-poblacional.html" target="_blank">Densidad Poblacional</a></li>
              <li><a href="../indicadores-la-laguna/economia-diversificacion-economica.html" target="_blank">Diversificación Económica</a></li>
              <li><a href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html" target="_blank">Ejecución de Contratos</a></li>
              <li><a href="../indicadores-la-laguna/economia-empleados-en-el-sector-formal.html" target="_blank">Empleados en el Sector Formal</a></li>
              <li><a href="../indicadores-la-laguna/economia-empresas.html" target="_blank">Empresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-empresas-certificadas-con-iso-9000-y-14000.html" target="_blank">Empresas Certificadas con ISO-9000 y 14000</a></li>
              <li><a href="../indicadores-la-laguna/economia-empresas-exportadoras.html" target="_blank">Empresas Exportadoras</a></li>
              <li><a href="../indicadores-la-laguna/economia-flujo-de-pasajeros-del-o-hacia-el-extranjero.html" target="_blank">Flujo de Pasajeros del o Hacia el Extranjero</a></li>
              <li><a href="../indicadores-la-laguna/economia-grandes-empresas.html" target="_blank">Grandes Empresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-grandes-empresas-segun-cnn-expansion.html" target="_blank">Grandes Empresas (según CNN Expansión)</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-competitividad-urbana.html" target="_blank">Índice de Competitividad Urbana</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-comercio.html" target="_blank">Índice de Especialización Local en Comercio</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-industria-manufacturera.html" target="_blank">Índice de Especialización Local en Industria Manufacturera</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-construccion.html" target="_blank">Índice de Especialización Local en la Construcción</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-la-mineria.html" target="_blank">Índice de Especialización Local en la Minería</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-especializacion-local-en-servicios.html" target="_blank">Índice de Especialización Local en Servicios</a></li>
              <li><a href="../indicadores-la-laguna/economia-indice-de-gini.html" target="_blank">Índice de Gini</a></li>
              <li><a href="../indicadores-la-laguna/economia-inversion-extranjera-directa.html" target="_blank">Inversión Extranjera Directa</a></li>
              <li><a href="../indicadores-la-laguna/economia-inversion-extranjera-directa-neta.html" target="_blank">Inversión Extranjera Directa (Neta)</a></li>
              <li><a href="../indicadores-la-laguna/economia-inversion-per-capita.html" target="_blank">Inversión Per cápita</a></li>
              <li><a href="../indicadores-la-laguna/economia-jornadas-laborales-muy-largas.html" target="_blank">Jornadas Laborales Muy Largas</a></li>
              <li><a href="../indicadores-la-laguna/economia-medianas-empresas.html" target="_blank">Medianas Empresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-microempresas.html" target="_blank">Microempresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-ocupacion-hotelera.html" target="_blank">Ocupación Hotelera</a></li>
              <li><a href="../indicadores-la-laguna/economia-oferta-de-cuartos-de-hotel-de-cuatro-y-cinco-estrellas.html" target="_blank">Oferta de Cuartos de Hotel de Cuatro y Cinco Estrellas</a></li>
              <li><a href="../indicadores-la-laguna/economia-patentes.html" target="_blank">Patentes</a></li>
              <li><a href="../indicadores-la-laguna/economia-pequenas-empresas.html" target="_blank">Pequeñas Empresas</a></li>
              <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" target="_blank">Personal Ocupado en el Comercio</a></li>
              <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" target="_blank">Personal Ocupado en la Industria Manufacturera</a></li>
              <li><a href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" target="_blank">Personal Ocupado en los Servicios</a></li>
              <li><a href="../indicadores-la-laguna/economia-poblacion-ocupada-sin-ingresos.html" target="_blank">Población Ocupada Sin Ingresos</a></li>
              <li><a href="../indicadores-la-laguna/economia-posgrados-de-calidad-por-cada-100mil-de-pea.html" target="_blank">Posgrados de Calidad (por cada 100mil de PEA)</a></li>
              <li><a href="../indicadores-la-laguna/economia-produccion-bruta-total-per-capita.html" target="_blank">Producción Bruta Total Per Cápita</a></li>
              <li><a href="../indicadores-la-laguna/economia-productividad-laboral.html" target="_blank">Productividad Laboral</a></li>
              <li><a href="../indicadores-la-laguna/economia-productividad-media-laboral.html" target="_blank">Productividad Media Laboral</a></li>
              <li><a href="../indicadores-la-laguna/economia-registro-de-una-propiedad-percentil-promedio.html" target="_blank">Registro de una Propiedad (percentil promedio)</a></li>
              <li><a href="../indicadores-la-laguna/economia-salario-promedio-mensual-para-trabajadores-de-tiempo-completo.html" target="_blank">Salario Promedio Mensual para Trabajadores de Tiempo Completo</a></li>
              <li><a href="../indicadores-la-laguna/economia-sectores-que-han-frenado-el-crecimiento.html" target="_blank">Sectores que Han Frenado el Crecimiento</a></li>
              <li><a href="../indicadores-la-laguna/economia-sectores-que-han-presentado-alto-crecimiento.html" target="_blank">Sectores que Han Presentado Alto Crecimiento</a></li>
              <li><a href="../indicadores-la-laguna/economia-sitios-unesco.html" target="_blank">Sitios UNESCO</a></li>
              <li><a href="../indicadores-la-laguna/economia-tamano-del-mercado-hipotecario.html" target="_blank">Tamaño del Mercado Hipotecario</a></li>
              <li><a href="../indicadores-la-laguna/economia-tasa-de-condiciones-criticas-de-ocupacion.html" target="_blank">Tasa de Condiciones Críticas de Ocupación</a></li>
              <li><a href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html" target="_blank">Tasa de Desempleo Abierto</a></li>
              <li><a href="../indicadores-la-laguna/economia-tasa-de-informalidad.html" target="_blank">Tasa de Informalidad</a></li>
              <li><a href="../indicadores-la-laguna/economia-tierra-ejidal.html" target="_blank">Tierra Ejidal</a></li>
              <li><a href="../indicadores-la-laguna/economia-total-de-empresas-registradas-en-el-siem.html" target="_blank">Total de Empresas Registradas en el SIEM</a></li>
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
              <li><a href="../indicadores-la-laguna/gobierno-duracion-de-periodo-para-ediles-y-delegados.html" target="_blank">Duración de Período para Ediles y Delegados</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-indice-de-gobierno-electronico-municipal.html" target="_blank">Índice de Gobierno Electrónico Municipal</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-indice-de-informacion-presupuestal.html" target="_blank">Índice de Información Presupuestal</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-ingresos-por-cobro-de-servicios.html" target="_blank">Ingresos por Cobro de Servicios</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-ingresos-propios.html" target="_blank">Ingresos Propios</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-ingresos-totales.html" target="_blank">Ingresos Totales</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-ingresos-totales-per-capita.html" target="_blank">Ingresos Totales Per Cápita</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-muertes-por-infecciones-instestinales.html" target="_blank">Muertes por Infecciones Instestinales</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-participacion-ciudadana.html" target="_blank">Participación Ciudadana</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-participacion-electoral.html" target="_blank">Participación Electoral</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-periodistas-muertos-o-desaparecidos.html" target="_blank">Periodistas Muertos o Desaparecidos</a></li>
              <li><a href="../indicadores-la-laguna/gobierno-relacion-de-ingresos-propios-y-totales.html" target="_blank">Relación de Ingresos Propios y Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Seguridad</h3>
            <ul>
              <li><a href="../indicadores-la-laguna/seguridad-accidentes-viales.html" target="_blank">Accidentes Viales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-accidentes-viales-fatales.html" target="_blank">Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html" target="_blank">Competencia de Servicios Notariales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-delitos.html" target="_blank">Delitos</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-delitos-patrimoniales.html" target="_blank">Delitos Patrimoniales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-homicidios.html" target="_blank">Homicidios</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-monto-reportado-en-robo-de-mercancias.html" target="_blank">Monto Reportado en Robo de Mercancías</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-percepcion-de-inseguridad.html" target="_blank">Percepción de Inseguridad</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-porcentaje-de-accidentes-viales-fatales.html" target="_blank">Porcentaje de Accidentes Viales Fatales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-robo-a-negocios.html" target="_blank">Robo a Negocios</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-robo-a-transeuntes.html" target="_blank">Robo a Transeuntes</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html" target="_blank">Robo de Vehículos</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-robos-a-casa-habitacion.html" target="_blank">Robos a Casa Habitación</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-robos-totales.html" target="_blank">Robos Totales</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-secuestros.html" target="_blank">Secuestros</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html" target="_blank">Tasa de Homicidios</a></li>
              <li><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html" target="_blank">Tasa de Robo de VehÍculos</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sociedad</h3>
            <ul>
              <li><a href="../indicadores-la-laguna/sociedad-acceso-a-instituciones-de-salud.html" target="_blank">Acceso a Instituciones de Salud</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-acceso-a-servicios-financieros.html" target="_blank">Acceso a Servicios Financieros</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores.html" target="_blank">Adultos Mayores</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores-femenino.html" target="_blank">Adultos Mayores Femenino</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-adultos-mayores-masculino.html" target="_blank">Adultos Mayores Masculino</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-avanzadas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Avanzadas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Básicas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-iniciales.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Iniciales</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-cientificas-matematicas-practicas.html" target="_blank">Alumnos con Habilidades Científicas-Matemáticas Prácticas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-avanzadas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Avanzadas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-basicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Básicas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-habilidades-gramaticas-linguisticas-practicas.html" target="_blank">Alumnos con Habilidades Gramáticas-Lingüísticas Prácticas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-cientifico-matematico.html" target="_blank">Alumnos con Perfil Científico-Matemático</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-con-perfil-gramatico-espanol.html" target="_blank">Alumnos con Perfil Gramático-Español</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-de-preescolar-por-docente.html" target="_blank">Alumnos de Preescolar por Docente</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-de-primaria-por-docente.html" target="_blank">Alumnos de Primaria por Docente</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-alumnos-de-secundaria-por-docente.html" target="_blank">Alumnos de Secundaria por Docente</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-camas-censables.html" target="_blank">Camas Censables</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-camas-de-hospital.html" target="_blank">Camas de Hospital</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-crecimiento-en-acceso-a-servicios-de-salud.html" target="_blank">Crecimiento en Acceso a Servicios de Salud</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-crecimiento-en-poblacion-altamente-calificada.html" target="_blank">Crecimiento en Población Altamente Calificada</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-desigualdad-en-las-ciudades.html" target="_blank">Desigualdad en las Ciudades</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-discapacidad.html" target="_blank">Discapacidad</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-empresas-socialmente-responsables.html" target="_blank">Empresas Socialmente Responsables</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-escuelas-de-calidad.html" target="_blank">Escuelas de Calidad</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-espacios-culturales.html" target="_blank">Espacios Culturales</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-espacios-culturales-segun-imco.html" target="_blank">Espacios Culturales (según IMCO)</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-hogares-con-jefatura-femenina.html" target="_blank">Hogares con Jefatura Femenina</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-indice-de-desarrollo-humano-idh.html" target="_blank">Índice de Desarrollo Humano (IDH)</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-indice-de-hacinamiento.html" target="_blank">Índice de Hacinamiento</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-ingreso-promedio-de-la-mujer.html" target="_blank">Ingreso Promedio de la Mujer</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-medicos.html" target="_blank">Médicos</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-mortalidad.html" target="_blank">Mortalidad</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-mortalidad-infantil.html" target="_blank">Mortalidad Infantil</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-mortalidad-por-diabetes.html" target="_blank">Mortalidad por Diabetes</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-mortalidad-por-vih-sida.html" target="_blank">Mortalidad por VIH-SIDA</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-muertes-por-accidentes-relacionados-con-transporte.html" target="_blank">Muertes por Accidentes Relacionados con Transporte</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-mujeres-en-la-fuerza-laboral.html" target="_blank">Mujeres en la Fuerza Laboral</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-ocupacion-por-vivienda.html" target="_blank">Ocupación por Vivienda</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html" target="_blank">Organizaciones de la Sociedad Civil</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-personas-por-debajo-de-la-linea-de-bienestar.html" target="_blank">Personas por Debajo de la Línea de Bienestar</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-poblacion-catolica.html" target="_blank">Población Católica</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-poblacion-derechohabiente.html" target="_blank">Población Derechohabiente</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-poblacion-estimada.html" target="_blank">Población Estimada</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-pobreza.html" target="_blank">Pobreza</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-pobreza-extrema.html" target="_blank">Pobreza Extrema</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-pobreza-moderada.html" target="_blank">Pobreza Moderada</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-rendimiento-academico.html" target="_blank">Rendimiento Académico</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-tasa-de-mortalidad-materna.html" target="_blank">Tasa de Mortalidad Materna</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-universidades.html" target="_blank">Universidades</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-universidades-de-calidad.html" target="_blank">Universidades de Calidad</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-uso-de-servicios-financieros.html" target="_blank">Uso de Servicios Financieros</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-uso-de-twitter-como-proxy-de-uso-de-tecnologias-de-informacion.html" target="_blank">Uso de Twitter como Proxy de Uso de Tecnologías de Información</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-visitas-a-museos-inah.html" target="_blank">Visitas a Museos INAH</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-agua-de-la-red-publica.html" target="_blank">Viviendas con Agua de la Red Pública</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-computadora.html" target="_blank">Viviendas con Computadora</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje.html" target="_blank">Viviendas con Drenaje</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-drenaje-solo-conexion-a-red-publica.html" target="_blank">Viviendas con Drenaje (sólo conexión a red pública)</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-energia-electrica.html" target="_blank">Viviendas con Energía Eléctrica</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-internet.html" target="_blank">Viviendas con Internet</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-lineas-telefonicas-moviles.html" target="_blank">Viviendas con Líneas Telefónicas Móviles</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-con-piso-de-tierra.html" target="_blank">Viviendas con Piso de Tierra</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-habitadas.html" target="_blank">Viviendas Habitadas</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-que-disponen-de-retrete.html" target="_blank">Viviendas que Disponen de Retrete</a></li>
              <li><a href="../indicadores-la-laguna/sociedad-viviendas-totales.html" target="_blank">Viviendas Totales</a></li>
            </ul>
          </div>
          <div class="col-md-2 indicadores-vinculos">
            <h3>Sustentabilidad</h3>
            <ul>
              <li><a href="../indicadores-la-laguna/sustentabilidad-acceso-a-vialidades-pavimentadas.html" target="_blank">Acceso a Vialidades Pavimentadas</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-aerolineas.html" target="_blank">Aerolíneas</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-alumbrado-publico.html" target="_blank">Alumbrado Público</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-aprovechamiento-del-biogas-en-rellenos-sanitarios.html" target="_blank">Aprovechamiento del Biogás en Rellenos Sanitarios</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-area-no-urbanizada.html" target="_blank">Área No Urbanizada</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-capacidad-de-tratamiento-de-agua-en-operacion.html" target="_blank">Capacidad de Tratamiento de Agua en Operación</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-consumo-de-agua.html" target="_blank">Consumo de Agua</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-consumo-de-diesel-en-transporte-de-bienes.html" target="_blank">Consumo de Diesel en Transporte de Bienes</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-desastres-naturales.html" target="_blank">Desastres Naturales</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-aerea.html" target="_blank">Destinos Vía Aérea</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-destinos-via-terrestre.html" target="_blank">Destinos Vía Terrestre</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-disponibilidad-de-banqueta.html" target="_blank">Disponibilidad de Banqueta</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-disposicion-adecuada-de-residuos-solidos.html" target="_blank">Disposición Adecuada de Residuos Sólidos</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-economia-intensiva-en-energia.html" target="_blank">Economía Intensiva en Energía</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-emergencias-ambientales.html" target="_blank">Emergencias Ambientales</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-empresas-certificadas-como-limpias.html" target="_blank">Empresas Certificadas como Limpias</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-flujo-de-pasajeros-aereos.html" target="_blank">Flujo de Pasajeros Aéreos</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-generacion-de-basura.html" target="_blank">Generación de Basura</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-indice-de-gestion-de-calidad-del-aire.html" target="_blank">Índice de Gestión de Calidad del Aire</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-lineas-de-autobus.html" target="_blank">Líneas de Autobús</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-motorizacion.html" target="_blank">Motorización</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-internacionales-anuales.html" target="_blank">Pasajeros Aéreos Internacionales Anuales</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-pasajeros-aereos-totales-anual.html" target="_blank">Pasajeros Aéreos Totales Anual</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-peatones.html" target="_blank">Peatones</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-otro-municipio.html" target="_blank">Población que Trabaja en OTRO Municipio</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-poblacion-que-trabaja-en-su-propio-municipio.html" target="_blank">Población que Trabaja en su PROPIO Municipio</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-red-carretera-avanzada.html" target="_blank">Red Carretera Avanzada</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-sistema-de-transporte-masivo.html" target="_blank">Sistema de Transporte Masivo</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-sobreexplotacion-del-acuifero.html" target="_blank">Sobreexplotación del Acuífero</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-superficie.html" target="_blank">Superficie</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-traslados-a-pie.html" target="_blank">Traslados a Pie</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-automovil-particular.html" target="_blank">Uso de Automóvil Particular</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-bicicleta.html" target="_blank">Uso de Bicicleta</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-uso-de-transporte-publico.html" target="_blank">Uso de Transporte Público</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-usuarios-de-automoviles.html" target="_blank">Usuarios de Automóviles</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-usuarios-de-bicicleta.html" target="_blank">Usuarios de Bicicleta</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-usuarios-de-modos-no-motorizados.html" target="_blank">Usuarios de Modos No Motorizados</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-colectivo-privado.html" target="_blank">Usuarios de Transporte Colectivo Privado</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-usuarios-de-transporte-publico.html" target="_blank">Usuarios de Transporte Público</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-viviendas-deshabitadas.html" target="_blank">Viviendas Deshabitadas</a></li>
              <li><a href="../indicadores-la-laguna/sustentabilidad-viviendas-ocupadas-temporalmente.html" target="_blank">Viviendas Ocupadas Temporalmente</a></li>
            </ul>
          </div>
        </div>
FINAL;
    } // seccion_la_laguna_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-torreon', 'Torreón', $this->seccion_torreon_html());
        $this->lenguetas->agregar('smi-gomez-palacio', 'Gómez Palacio', $this->seccion_gomez_palacio_html());
        $this->lenguetas->agregar('smi-lerdo', 'Lerdo', $this->seccion_lerdo_html());
        $this->lenguetas->agregar('smi-matamoros', 'Matamoros', $this->seccion_matamoros_html());
        $this->lenguetas->agregar('smi-la-laguna', 'La Laguna', $this->seccion_la_laguna_html());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir contenido HTML
        $this->contenido = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript está dentro de las lengüetas
        $this->javascript = $this->lenguetas->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

} // Clase PorRegiones

?>
