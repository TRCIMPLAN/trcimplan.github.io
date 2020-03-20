<?php
/**
 * TrcIMPLAN Sitio Web - Autores Config
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

namespace Configuracion;

/**
 * Clase AutoresConfig
 */
class AutoresConfig {

    const VINCULOS_INDICE          = '\\Base\\VinculosTarjetas';                    // Ruta a la clase para el índice de autores, en autores/index.html
    const VINCULOS_INDIVIDUAL      = '\\Base\\VinculosAcordeonesListados';          // Ruta a la clase para listar las publicaciones de cada autor, a usarse en las páginas de los autores
    const ORDENAR_POR              = 'dir_nombre_asc';                              // Texto que usa el Recolector para ordenar las publicaciones, puede ser fecha_desc o dir_nombre_asc
    const DIRECTORIO               = 'autores';                                     // Nombre del directorio que se creará en la raiz para depositar los archivos HTML
    const NAVEGACION_OPCION_ACTIVA = 'Institucional > Quienes Somos';               // Opción del menú activa cuando esté en el índice, debe ser un valor en /Configuracion/NavegacionConfig
    const INDICE_TITULO            = 'Quienes Somos';                               // Título para la página índice
    const INDICE_DESCRIPCION       = 'Quienes son integrantes del IMPLAN Torreón.'; // Descripción para la página índice
    const INDICE_CLAVES            = 'Personal, Personas, Autores';                 // Claves para la página índice
    public $autores                = array();                                       // Arreglo asociativo con instancias de \Base\Autor
    public $mostrar_no_definidos   = FALSE;                                         // Verdadero pone todos los autores encontrados, falso solo los definidos aquí
    public $imagen_tamano          = 128;                                           // Tamaño del icono a usuarse en \Base\PaginasAutoresIndice

    /**
     * Constructor
     */
    public function __construct() {
        // Autor constructor parámetros: apodo, titulo, nombre_completo, icono, empresa, cargo, semblanza, email, twitter, perfil_archivo, estatus
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Adriana Vargas Flores',             'lic-adriana-vargas-flores',             'IMPLAN Torreón', 'Integración de Proyectos',              '', 'vargasadriana09@gmail.com', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Alejandra Martínez Avilés',         'arq-alejandra-martinez-aviles',         'IMPLAN Torreón', 'Analista de Costos',                    'Tel. de Contacto: (871) 5007078, ext.2305', 'info@trcimplan.gob.mx', '');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Alejandra Villarreal Meza',         'lic-alejandra-villarreal-meza',         'IMPLAN Torreón', 'Secretario Técnico',                    '', 'alexavm10@hotmail.com', '');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'José Alejandro Reyes Carrillo',     'lic-jose-alejandro-reyes-carrillo',     'IMPLAN Torreón', 'Coordinación Jurídica',                 '', 'transparencia@trcimplan.gob.mx', '');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Alicia Valdez Ibarra',              'lic-alicia-valdez-ibarra',              'IMPLAN Torreón', 'Director de Proyectos Estratégicos',    'Tel. de Contacto: (871) 5007078, ext.2305', 'alicia.valdez.ibarra@gmail.com', 'alicia_vi');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Ana Luisa Pacheco Meraz',           'lic-ana-luisa-pacheco-meraz',           'IMPLAN Torreón', 'Indicadores Sociodemográficos',         'Tel. de Contacto: (871) 5007078, ext.2311', 'info@trcimplan.gob.mx', 'anapm56');
        //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Alfredo Viesca Domínguez',          'lic-alfredo-viesca-dominguez',          'IMPLAN Torreón', 'Investigación Cualitativa',             '', 'alvidom27@hotmail.com', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Carla Estefanía Tovar Triana',      'arq-carla-estefania-tovar-triana',      'IMPLAN Torreón', 'Integración de Proyectos',              'Tel. de Contacto: (871) 5007078, ext.2316', 'info@trcimplan.gob.mx', '');
    //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Cecilio Pedro Secunza Schott',      'arq-cecilio-pedro-secunza-schott',      'IMPLAN Torreón', 'Director de Planeación Urbana',         'Tel. de Contacto: (871) 5007078, ext.2316', 'cecilio_88@hotmail.com', 'ceciliosecunza');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Daniel Alejandro López Murga',      'lic-daniel-alejandro-lopez-murga',      'IMPLAN Torreón', 'Indicadores Económicos',                'Tel. de Contacto: (871) 5007078, ext.2311', 'daniel_lmd@hotmail.com', 'daniellpzmur');

    //~ $this->autores[] = new \Base\Autor('', 'Arq.', 'Daniela Patricia Corral Hernández', 'arq-daniela-patricia-corral-hernandez', 'IMPLAN Torreón', 'Analista SIG',                          '', 'daniela.corral07@gmail.com', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Eduardo Holguín Zehfuss',           'lic-eduardo-holguin-zehfuss',           'IMPLAN Torreón', 'Director General',                      'Tel. de Contacto: (871) 5007078, ext.2317', 'eholguin@trcimplan.gob.mx', 'Eduardo_Holguin');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Felipe de Jesús Medina Delgado',    'lic-felipe-de-jesus-medina-delgado',    'IMPLAN Torreón', 'Asistente de Direcciones',              'Tel. de Contacto: (871) 5007078, ext.2317', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Frida García Gutiérrez',            'lic-frida-valeria-garcia-gutierrez',    'IMPLAN Torreón', 'Integración de Proyectos',              'Tel. de Contacto: (871) 5007078, ext.2305', 'info@trcimplan.gob.mx', 'garciafrida07');
    //~ $this->autores[] = new \Base\Autor('', 'Ing.', 'Guillermo Valdés Lozano',           'ing-guillermo-valdes-lozano',           'IMPLAN Torreón', 'Programación y Software',               'Desarrollador de los sistemas informáticos. Responsable del sitio web. Colabora en iniciativas de gobierno abierto.', 'gvaldes@trcimplan.gob.mx', 'guivaloz', 'guillermo-valdes-lozano.md');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Gerardo Villa González',            'lic-gerardo-villa-gonzalez',            'IMPLAN Torreón', 'Coordinación Jurídica',                 'Tel. de Contacto: (871) 5007078, ext.2311', 'transparencia@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Daniela Elizabeth Cuevas Garza',    'lic-daniela-elizabeth-cuevas-garza',    'IMPLAN Torreón', 'Coordinación Jurídica',                 'Tel. de Contacto: (871) 5007078, ext.2311', 'transparencia@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Ihanelly Hernández Villa',          'arq-ihanelly-hernandez-villa',          'IMPLAN Torreón', 'Regeneración Urbana',                   'Tel. de Contacto: (871) 5007078, ext.2316', 'info@trcimplan.gob.mx', 'ihanelly_64');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Israel Sinai Charur Méndez',        'lic-israel-sinai-charur-mendez',        'IMPLAN Torreón', 'Difusión y Diseño Gráfico',             'Tel. de Contacto: (871) 5007078, ext.2461', 'info@trcimplan.gob.mx', 'sunnocharur');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Iván de Luna Aldape',               'lic-ivan-de-luna-aldape',               'IMPLAN Torreón', 'Director de Investigación Estratégica', 'Tel. de Contacto: (871) 5007078, ext.2341', 'ideluna@trcimplan.gob.mx', 'idelunaa');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Jair Miramontes Chávez',            'arq-jair-miramontes-chavez',            'IMPLAN Torreón', 'Sistemas de Información Geográfica',    'Tel. de Contacto: (871) 5007078, ext.2316', 'info@trcimplan.gob.mx', 'Jairmi');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Jesús Antonio García Aguirre',      'lic-jesus-antonio-garcia-aguirre',      'IMPLAN Torreón', 'Coordinador Administrativo',            'Tel. de Contacto: (871) 5007078, ext.2302', 'jgarcia@trcimplan.gob.mx', '');
    //~     $this->autores[] = new \Base\Autor('', 'Lic.', 'José de Jesús Ruiz Fernández',      'lic-jose-de-jesus-ruiz-fernandez',      'IMPLAN Torreón', 'Director de Competitividad Sectorial',  '', 'jruiz@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'José Antonio Ramírez Reyes',        'arq-jose-antonio-ramirez-reyes',        'IMPLAN Torreón', 'Director de Planeación Urbana',         'Tel. de Contacto: (871) 5007078, ext.2338', 'jose.ramirez@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Arq.', 'Julio Alexis Magaña Cisneros',      'arq-julio-alexis-magana-cisneros',      'IMPLAN Torreón', 'Estudios Sectoriales',                  'Tel. de Contacto: (871) 5007078, ext.2316', 'info@trcimplan.gob.mx', 'jokeralex53');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Macarena Garcia Aguilar',           'lic-macarena-garcia-aguilar',           'IMPLAN Torreón', 'Gestión y Difusión Social',             'Tel. de Contacto: (871) 5007078, ext.2353', 'info@trcimplan.gob.mx', 'macarenaga_');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Maira Ivonne Flores Reyes',         'lic-maira-ivonne-flores-reyes',         'IMPLAN Torreón', 'Integración de Proyectos',              'Tel. de Contacto: (871) 5007078, ext.2353', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'María Teresa Sánchez Domínguez',    'lic-maria-teresa-sanchez-dominguez',    'IMPLAN Torreón', 'Asistente Presidencia',                 'Tel. de Contacto: (871) 5007078, ext.2317', 'info@trcimplan.gob.mx', 'Maryteredoming3');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Miriam Janeth González Quintana',   'lic-miriam-janeth-gonzalez-quintana',   'IMPLAN Torreón', 'Planeación Estratégica Integral',       'Tel. de Contacto: (871) 5007078, ext.2305', 'info@trcimplan.gob.mx', 'MiriamJglz');
        $this->autores[] = new \Base\Autor('', 'C.',   'Nayeli Alejandra García Rodríguez', 'lic-nayeli-alejandra-garcia-aguirre',   'IMPLAN Torreón', 'Auxiliar Administrativo',               'Tel. de Contacto: (871) 5007078', 'info@trcimplan.gob.mx', 'nayeli_garcia08');
        $this->autores[] = new \Base\Autor('', 'Lsci.', 'Víctor Manuel Gómez Reynoso',      'lsci-victor-manuel-gomez-reynoso',      'IMPLAN Torreón', 'Programación y Software',               'Tel. de Contacto: (871) 5007078, ext.2311', 'info@trcimplan.gob.mx', 'VGomezReynoso');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Nina Graciela Hernández Jayme',     'lic-nina-graciela-hernandez-jayme',     'IMPLAN Torreón', 'Analista',                              'Tel. de Contacto: (871) 5007078, ext.2338', 'info+aplica@trcimplan.gob.mx', '');
    //~    $this->autores[] = new \Base\Autor('', 'Lic.', 'Eduardo José Moye López',           'lic-eduardo-jose-moye-lopez',           'IMPLAN Torreón', 'Vinculación Universidad Empresa',       'Tel. de Contacto: (871) 5007078, ext.2311', 'eduardomoye@me.com', '');
        $this->autores[] = new \Base\Autor('', 'C.',   'Jesús Manuel Sotomayor Serrano',    'jesus-manuel-sotomayor-serrano',        'IMPLAN Torreón', 'Asistente de Presidencia',              'Tel. de Contacto: (871) 5007078', 'info@trcimplan.gob.mx', 'JMSotomayor82');
    //~     $this->autores[] = new \Base\Autor('', 'Lic.', 'Natalia Morga Torres',              'lic-natalia-morga-torres',              'IMPLAN Torreón', 'Analista de Costos',                    '', '@hotmail.com', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Pedro Eleazar González Valdez',     'lic-pedro-eleazar-gonzalez-valdez',     'IMPLAN Torreón', 'Indicadores Económicos',                'Tel. de Contacto: (871) 5007078, ext.2311', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Bernardo García Colores García',    'lic-bernardo-garcia-colores-garcia',    'IMPLAN Torreón', 'Analista SIG',                          'Tel. de Contacto: (871) 5007078, ext.2305', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Lic.', 'Jesús Abraham Salazar Valadez',     'lic-jesus-abraham-salazar-valadez',     'IMPLAN Torreón', 'Director de Competitividad Sectorial',  'Tel. de Contacto: (871) 5007078, ext.2338', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'Sra.', 'Olga Lidia Delgado Ramírez',        'sra-olga-lidia-delgado-ramirez',        'IMPLAN Torreón', 'Servicios de Limpieza',                 'Tel. de Contacto: (871) 5007078', '', '');
        $this->autores[] = new \Base\Autor('', 'C.P.', 'Santa Julia Camarillo Aguirre',     'cp-santa-julia-camarillo-aguirre',      'IMPLAN Torreón', 'Contador',                              'Tel. de Contacto: (871) 5007078, ext.2315', 'info@trcimplan.gob.mx', '');
        $this->autores[] = new \Base\Autor('', 'C.P.', 'Janeth Ramírez Facio',              'cp-janeth-ramirez-facio',               'IMPLAN Torreón', 'Auxiliar Administrativo',               'Tel. de Contacto: (871) 5007078', 'info@trcimplan.gob.mx', 'JanethFacio');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Javier de Jesús Valencia Jiménez',  'lic-javier-de-jesus-valencia-jimenez',  'IMPLAN Torreón', 'Auxiliar Administrativo',               '', 'javier_111192@hotmail.com', '');
    //~ $this->autores[] = new \Base\Autor('', 'Ing.', 'Luis Campos Hinojosa',              'unknown',                               'IMPLAN Torreón', 'Director de Investigación Estratégica', '', 'lcampos@trcimplan.gob.mx', '');
    //~ $this->autores[] = new \Base\Autor('', 'Lic.', 'Luis A. Gutiérrez Arizpe',           'lic-luis-a-gutierrez-arizpe',           'IMPLAN Torreón', 'Indicadores Sociodemográficos',         'Tel. de Contacto: (871) 5007078, ext.2311', 'info@trcimplan.gob.mx', 'anapm56');


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
