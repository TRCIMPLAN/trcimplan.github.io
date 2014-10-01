<?php
/*
 * SMIbeta - Publicación Configuración
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
namespace Configuracion;

/**
 * Clase PublicacionConfig
 */
class PublicacionConfig {

    public $fecha                     = '1980-01-01'; // La fecha en forma de YYYY-MM-DD HH:MM, siendo así se ordena cronológicamente
    public $autor                     = 'TrcIMPLAN';  // El nombre o apodo a quien se le atribuye
    public $aparece_en_pagina_inicial = true;         // Verdadero si va aparecer en la página de inicio
    public $imagen_previa             = '';           // Ruta relativa a un archivo de imagen para la vista previa
    public $icono                     = '';           // Nombre del icono Font Awsome
    public $estado                    = 'publicar';   // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'

} // Clase PublicacionConfig

?>
