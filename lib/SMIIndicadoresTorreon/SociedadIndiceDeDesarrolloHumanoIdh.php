<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadIndiceDeDesarrolloHumanoIdh
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
 * Clase SociedadIndiceDeDesarrolloHumanoIdh
 */
class SociedadIndiceDeDesarrolloHumanoIdh extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Índice de Desarrollo Humano (IDH) en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'sociedad-indice-de-desarrollo-humano-idh';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves                    = 'IMPLAN, Torreón, Bienestar';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Bienestar');
        $this->fuentes                   = array('INAFED-PNUD');
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
            <td>31/12/2000</td>
            <td>0.8595</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>31/12/2005</td>
            <td>0.8915</td>
            <td>INAFED-PNUD</td>
            <td>Descargar [base de datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>0.8976</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Índice de Desarrollo Humano (IDH) en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> De 0 a 1.</p>
FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2000-12-31', dato: 0.8595 },{ fecha: '2005-12-31', dato: 0.8915 },{ fecha: '2010-12-31', dato: 0.8976 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Índice de Desarrollo Humano (IDH)</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Índice de Desarrollo Humano (IDH)</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2010-12-31</td>
            <td>0.8976</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td>0.8681</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td>0.8661</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td>0.8404</td>
            <td>INAFED-PNUD</td>
            <td>Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td>0.8680</td>
            <td>INAFED-PNUD</td>
            <td>El dato es un promedio de los cuatro municipios que integran la Zona Metropolitana de la Laguna. Se publica únicamente como referencia. Consulta la [Base de Datos](http://www.inafed.gob.mx/es/inafed/Socioeconomico_Municipal)</td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td>0.7760</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td>0.7320</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td>0.7500</td>
            <td>INAFED-PNUD</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> De 0 a 1.</p>
FINAL;
    } // seccion_otras_regiones_html

    /**
     * Sección Otras Regiones JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_otras_regiones_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 0.8976 },{ region: 'Gómez Palacio', dato: 0.8681 },{ region: 'Lerdo', dato: 0.8661 },{ region: 'Matamoros', dato: 0.8404 },{ region: 'La Laguna', dato: 0.8680 },{ region: 'Coahuila', dato: 0.7760 },{ region: 'Durango', dato: 0.7320 },{ region: 'Nacional', dato: 0.7500 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
FINAL;
    } // seccion_otras_regiones_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
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

} // Clase SociedadIndiceDeDesarrolloHumanoIdh

?>
