<?php
/*
 * SMIbeta - Plan Estratégico Metropolitano - Mesa 1
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace PlanEstrategicoMetropolitano;

/**
 * Clase Mesa1
 */
class Mesa1 extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Plan Estratégico Metropolitano - Mesa 1';
     // $this->autor         = 'Autor';
        $this->fecha         = '2014-10-06';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'mesa-1';
     // $this->imagen_previa = 'mesa-1/imagen-previa.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="mesa-1/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = '';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Plan Estratégico Metropolitano');
        // El nombre del directorio en la raíz del sitio donde se escribirá el archivo HTML.
        $this->directorio    = 'plan-estrategico-metropolitano';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación.
        $this->nombre_menu   = 'Plan Estratégico Metropolitano > Mesa 1';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'publicar';
        // El contenido HTML y el JavaScript
        $this->contenido     = <<<FINAL
<h3>Elaboración del Plan Estratégico Metropolitano</h3>

<p>9 octubre 2014 en la Sala Magna, ETLAC, ITESM Campus Laguna.</p>

<img class="img-responsive" src="mesa-1/invitacion.jpg" alt="Elaboración del Plan Estratégico Metropolitano">

<h3>¿Cómo participar?</h3>

<p>Envíanos tu proyecto, solicitud o inquietud <strong><a href="http://trcimplan.mx/interaccion-web/index.php/722512/lang-es-MX" target="_blank">llenando esta encuesta en línea</a></strong>. Sólo necesitas tener una dirección de <strong>correo electrónico</strong> para que recibas un <strong>mensaje automático de invitación</strong> a la misma.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Mesa1

?>
