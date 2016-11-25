<?php
/**
 * TrcIMPLAN Sitio Web - Autores Config
 *
 * Copyright (C) 2016 IMPLAN Torreón
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

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    const VINCULOS_INDICE          = '\\Base\\VinculosTarjetas';           // Ruta a la clase para el índice de autores, en autores/index.html
    const VINCULOS_INDIVIDUAL      = '\\Base\\VinculosAcordeonesListados'; // Ruta a la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    const ORDENAR_POR              = 'dir_nombre_asc';                     // Texto que usa el Recolector para ordenar las publicaciones, puede ser fecha_desc o dir_nombre_asc
    const DIRECTORIO               = 'autores';                            // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = 'Institucional > Quienes Somos';      // Opción del menú activa cuando esté en el índice, debe ser un valor en /Configuracion/NavegacionConfig
    const INDICE_TITULO            = 'Quienes Somos';                      // Título para la página índice
    const INDICE_DESCRIPCION       = 'Quienes son integrantes del IMPLAN Torreón.'; // Descripción para la página índice
    const INDICE_CLAVES            = 'Personal, Personas, Autores';        // Claves para la página índice
    public $autores                = array();                              // Arreglo asociativo con instancias de \Base\Autor
    public $mostrar_no_definidos   = FALSE;                                // Verdadero pone todos los autores encontrados, falso solo los definidos aquí
    public $imagen_tamano          = 128;                                  // Tamaño del icono a usuarse en \Base\PaginasAutoresIndice

    /**
     * Constructor
     */
    public function __construct() {
        // Autor constructor parámetros: apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, perfil_archivo, estatus
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Adriana Vargas Flores', 'unknown',
            'IMPLAN Torreón', 'Integración de Proyectos',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alejandra Villarreal Meza', 'unknown',
            'IMPLAN Torreón', 'Secretario Técnico',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alfredo Viesca Domínguez', 'lic-alfredo-viesca-dominguez',
            'IMPLAN Torreón', 'Investigación Cualitativa',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Alicia Valdez Ibarra', 'lic-alicia-valdez-ibarra',
            'IMPLAN Torreón', 'Indicadores Económicos',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Ángeles Melisa Rodríguez Salas', 'unknown',
            'IMPLAN Torreón', 'Analista de Costos',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Cecilio Pedro Secunza Schott', 'arq-cecilio-pedro-secunza-schott',
            'IMPLAN Torreón', 'Regeneración Urbana',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Daniela Patricia Corral Hernández', 'arq-daniela-patricia-corral-hernandez',
            'IMPLAN Torreón', 'Analista SIG',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Eduardo Holguín Zehfuss', 'lic-eduardo-holguin-zehfuss',
            'IMPLAN Torreón', 'Director General Ejecutivo',
            '',
            'eholguin@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Felipe de Jesús Medina Delgado', 'unknown',
            'IMPLAN Torreón', 'Asistente de Direcciones',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Guillermo Valdés Lozano', 'ing-guillermo-valdes-lozano',
            'IMPLAN Torreón', 'Programación y Software',
            'Desarrollador de los sistemas informáticos. Responsable del sitio web. Apoya las iniciativas de gobierno abierto y el uso del software libre.',
            'gvaldes@trcimplan.gob.mx', 'guivaloz', 'guillermo-valdes-lozano.md');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Israel Sinai Charur Méndez', 'unknown',
            'IMPLAN Torreón', 'Difusión y Diseño Gráfico',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Janeth Ramírez Facio', 'unknown',
            'IMPLAN Torreón', 'Auxiliar Administrativo',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Javier de Jesús Valencia Jiménez', 'unknown',
            'IMPLAN Torreón', 'Contador',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Jesús Antonio García Aguirre', 'unknown',
            'IMPLAN Torreón', 'Coordinador Administrativo',
            '',
            'jgarcia@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Jesús Javier Morán García', 'unknown',
            'IMPLAN Torreón', 'Coordinador Jurídico',
            '',
            'transparencia@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Ilse Ávila García', 'arq-ilse-avila-garcia',
            'IMPLAN Torreón', 'Director de Proyectos Estratégicos',
            '',
            'iavila@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Jair Miramontes Chávez', 'arq-jair-miramontes-chavez',
            'IMPLAN Torreón', 'Sistemas de Información Geográfica',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Luis A. Gutiérrez Arizpe', 'lic-luis-a-gutierrez-arizpe',
            'IMPLAN Torreón', 'Indicadores Sociodemográficos',
            '',
            'lgutierrez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Luis Campos Hinojosa', 'ing-luis-campos-hinojosa',
            'IMPLAN Torreón', 'Director de Planeación Urbana',
            '',
            'lcampos@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Natalia Zavala López', 'unknown',
            'IMPLAN Torreón', 'Asistente Presidencia',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Nayeli Alejandra García Aguirre', 'unknown',
            'IMPLAN Torreón', 'Asistente Presidencia',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', '', 'Olga L. Delgado Ramírez', 'unknown',
            'IMPLAN Torreón', 'Servicios de Limpieza',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Lic.', 'Rodrigo González Morales', 'lic-rodrigo-gonzalez-morales',
            'IMPLAN Torreón', 'Director de Investigación Estratégica',
            '',
            'rgonzalez@trcimplan.gob.mx',  '');
        $this->autores[] = new \Base\Autor(
            '', 'C.P.', 'Santa Julia Camarillo Aguirre', 'unknown',
            'IMPLAN Torreón', 'Contadora',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Arq.', 'Teresita Benítez Saludado', 'arq-teresita-benitez-saludado',
            'IMPLAN Torreón', 'Estudios Sectoriales',
            '',
            '', '');
        $this->autores[] = new \Base\Autor(
            '', 'Ing.', 'Víctor M. Gómez Reynoso', 'unknown',
            'IMPLAN Torreón', 'Soporte Técnico',
            '',
            '', '');
    } // constructor

    /**
     * Obtener
     *
     * @param  string Apodo, titulo + nombre completo, nombre completo
     * @return mixed  La instancia de Autor encontrada, falso si no se haya
     */
    public function obtener($texto_a_buscar) {
        foreach ($this->autores as $autor) {
            if ($autor->apodo == $texto_a_buscar) {
                return $autor;
            } elseif ("{$autor->titulo} {$autor->nombre_completo}" == $texto_a_buscar) {
                return $autor;
            } elseif ($autor->nombre_completo == $texto_a_buscar) {
                return $autor;
            }
        }
        return false;
    } // obtener

} // Clase AutoresConfig

?>
