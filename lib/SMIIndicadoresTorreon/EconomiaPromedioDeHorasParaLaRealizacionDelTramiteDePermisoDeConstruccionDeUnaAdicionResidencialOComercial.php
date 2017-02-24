<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial
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

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial
 */
class EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2015-07-14T15:22:04';
        // El nombre del archivo a crear
        $this->archivo                   = 'economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Determina el número de horas requeridas para realizar el trámite de permiso de construcción de una adición (residencial/comercial). Calculado por Número de Horas Empleadas para el Trámite de Permisos de Construcción de Una Adición, entre Número de Permisos de Construcción Una Adición Otorgados.';
        $this->claves                    = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Gobierno';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Sistema de Indicadores de Desempeño (SINDES)', 'Gobierno');
        $this->fuentes                   = array('Ayuntamiento de Torreón');
        $this->regiones                  = array('Torreón');
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        return <<<FINAL
      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>30/06/2014</td>
            <td>38</td>
            <td>Ayuntamiento de Torreón</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Horas.</p>
      <h3>Observaciones</h3>
<p>Sistema de Indicadores de Desempeño (SINDES) con metodología de la Asociación de Administración de ciudades y condados (ICMA) http://www.icmaml.org/sindes/</p>

FINAL;
    } // seccion_datos_html

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir contenido HTML en el esquema
        $this->contenido->articleBody = $this->lenguetas->html();
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

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial

?>
