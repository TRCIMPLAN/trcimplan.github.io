<?php
/**
 * TrcIMPLAN Sitio Web - InformacionParaPrevenirElSuicidioEscasa
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

namespace Blog;

/**
 * Clase InformacionParaPrevenirElSuicidioEscasa
 */
class InformacionParaPrevenirElSuicidioEscasa extends \Base\PublicacionSchemaBlogPosting {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Información para prevenir el suicidio, escasa.';
        $this->autor                      = 'Lic. Elí Castrejón Rodríguez';
        $this->fecha                      = '2021-09-27T00:00';
        // El nombre del archivo a crear
        $this->archivo                    = 'informacion-para-prevenir-el-suicidio-escasa-sep-2021';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Hablar del suicidio es complicado. Quién lo hace es sobreviviente, perdió a alguien, o por su trabajo ha debido informarse. Para el resto es un tema que se ignora, involuntariamente porque es una de esas cosas que sí pasan, pero nunca a uno; o conscientemente si se estigmatiza o se desinforma con juicios erróneos sobre las causas y las víctimas. Cada caso es diferente, pero encontramos rasgos similares como la falta de información sobre su prevención y la falta de tacto una vez que ha sucedido.';
        $this->claves                     = 'IMPLAN, Torreon, suicidio, prevencion';
        // Ruta al archivo markdown con el contenido
        $this->contenido_archivo_markdown = 'lib/Blog/InformacionParaPrevenirElSuicidioEscasa.md';
        // Para el Organizador
        $this->categorias                 = array('Salud','Población');
        $this->fuentes                    = array('INEGI');
        $this->regiones                   = array('Torreón', 'Gómez Palacio', 'Lerdo', 'Matamoros', 'La Laguna');
    } // constructor

} // Clase InformacionParaPrevenirElSuicidioEscasa

?>
