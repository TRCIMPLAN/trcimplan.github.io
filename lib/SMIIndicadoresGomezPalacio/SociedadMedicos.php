<?php
/**
 * SociedadMedicos.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadMedicos
 */
class SociedadMedicos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Médicos en Gómez Palacio';
        $this->nombre_menu = 'Indicadores Gómez Palacio';
        $this->directorio  = 'indicadores-gomez-palacio';
        $this->archivo     = 'sociedad-medicos';
        $this->descripcion = 'Médicos en contacto con pacientes por cada diez mil personas.';
        $this->claves      = 'Gómez Palacio, Salud';
        $this->categorias  = array('Salud');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Médicos en contacto con pacientes por cada diez mil personas.</p>

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
            <td class="centrado">31/12/2001</td>
            <td class="derecha">3.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2002</td>
            <td class="derecha">4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2003</td>
            <td class="derecha">4.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2004</td>
            <td class="derecha">4.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2005</td>
            <td class="derecha">4.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2006</td>
            <td class="derecha">3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2007</td>
            <td class="derecha">4.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2008</td>
            <td class="derecha">5.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2009</td>
            <td class="derecha">5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2010</td>
            <td class="derecha">4.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2011</td>
            <td class="derecha">4.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2012</td>
            <td class="derecha">4.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td class="centrado">31/12/2013</td>
            <td class="derecha">4.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Por cada 10 mil.</p>
      <h3>Observaciones</h3>
<p>Dirección General de Información en Salud (DGIS). Base de datos de recursos (infraestructura, materiales y humanos) de la Secretaría de Salud y los Servicios Estatales de Salud 2001-2013: <a href="http://www.sinais.salud.gob.mx">Sistema Nacional de Información en Salud</a> (SINAIS). México: Secretaría de Salud. Consulta: 23 Octubre 2014.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
<h3>Gráfica</h3>
<div id="Morrisdzonajhc" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
            <td>2001-12-31</td>
            <td class="derecha">2.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2002-12-31</td>
            <td class="derecha">1.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2003-12-31</td>
            <td class="derecha">1.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2004-12-31</td>
            <td class="derecha">1.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2005-12-31</td>
            <td class="derecha">1.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2006-12-31</td>
            <td class="derecha">1.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2007-12-31</td>
            <td class="derecha">2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2008-12-31</td>
            <td class="derecha">2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2009-12-31</td>
            <td class="derecha">2.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2010-12-31</td>
            <td class="derecha">2.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2011-12-31</td>
            <td class="derecha">2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2012-12-31</td>
            <td class="derecha">2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Torreón</td>
            <td>2013-12-31</td>
            <td class="derecha">2.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2001-12-31</td>
            <td class="derecha">5.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2002-12-31</td>
            <td class="derecha">5.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2003-12-31</td>
            <td class="derecha">5.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2004-12-31</td>
            <td class="derecha">5.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2005-12-31</td>
            <td class="derecha">5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2006-12-31</td>
            <td class="derecha">4.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2007-12-31</td>
            <td class="derecha">6.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td class="derecha">5.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2009-12-31</td>
            <td class="derecha">5.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">6.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2011-12-31</td>
            <td class="derecha">6.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td class="derecha">6.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2013-12-31</td>
            <td class="derecha">6.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2001-12-31</td>
            <td class="derecha">3.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2002-12-31</td>
            <td class="derecha">3.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2003-12-31</td>
            <td class="derecha">3.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2004-12-31</td>
            <td class="derecha">3.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2005-12-31</td>
            <td class="derecha">3.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2006-12-31</td>
            <td class="derecha">3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2007-12-31</td>
            <td class="derecha">3.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td class="derecha">4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2009-12-31</td>
            <td class="derecha">4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2010-12-31</td>
            <td class="derecha">4.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2011-12-31</td>
            <td class="derecha">4.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td class="derecha">4.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2013-12-31</td>
            <td class="derecha">4.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2001-12-31</td>
            <td class="derecha">3.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2002-12-31</td>
            <td class="derecha">2.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2003-12-31</td>
            <td class="derecha">3.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2004-12-31</td>
            <td class="derecha">3.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2005-12-31</td>
            <td class="derecha">2.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2006-12-31</td>
            <td class="derecha">2.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2007-12-31</td>
            <td class="derecha">3.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td class="derecha">3.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2009-12-31</td>
            <td class="derecha">3.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">3.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2011-12-31</td>
            <td class="derecha">3.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td class="derecha">3.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2013-12-31</td>
            <td class="derecha">3.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2001-12-31</td>
            <td class="derecha">3.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2002-12-31</td>
            <td class="derecha">3.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2003-12-31</td>
            <td class="derecha">3.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2004-12-31</td>
            <td class="derecha">3.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2005-12-31</td>
            <td class="derecha">3.0000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2006-12-31</td>
            <td class="derecha">3.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2007-12-31</td>
            <td class="derecha">3.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2008-12-31</td>
            <td class="derecha">3.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2009-12-31</td>
            <td class="derecha">4.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2010-12-31</td>
            <td class="derecha">4.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2011-12-31</td>
            <td class="derecha">4.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-12-31</td>
            <td class="derecha">4.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2012-12-31</td>
            <td class="derecha">4.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2013-12-31</td>
            <td class="derecha">4.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2001-12-31</td>
            <td class="derecha">5.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2002-12-31</td>
            <td class="derecha">6.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2003-12-31</td>
            <td class="derecha">6.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2004-12-31</td>
            <td class="derecha">6.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2005-12-31</td>
            <td class="derecha">6.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2006-12-31</td>
            <td class="derecha">7.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2007-12-31</td>
            <td class="derecha">7.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2008-12-31</td>
            <td class="derecha">7.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2009-12-31</td>
            <td class="derecha">8.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2010-12-31</td>
            <td class="derecha">7.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2011-12-31</td>
            <td class="derecha">7.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2012-12-31</td>
            <td class="derecha">8.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2013-12-31</td>
            <td class="derecha">8.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2001-12-31</td>
            <td class="derecha">5.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2002-12-31</td>
            <td class="derecha">5.3000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2003-12-31</td>
            <td class="derecha">5.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2004-12-31</td>
            <td class="derecha">5.4000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2004-12-31</td>
            <td class="derecha">5.7000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2005-12-31</td>
            <td class="derecha">5.9000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2006-12-31</td>
            <td class="derecha">6.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2007-12-31</td>
            <td class="derecha">6.5000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2008-12-31</td>
            <td class="derecha">6.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2009-12-31</td>
            <td class="derecha">7.1000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2010-12-31</td>
            <td class="derecha">7.2000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2011-12-31</td>
            <td class="derecha">7.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-12-31</td>
            <td class="derecha">7.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2012-12-31</td>
            <td class="derecha">7.6000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2013-12-31</td>
            <td class="derecha">7.8000</td>
            <td>SINAIS (SSA)</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#smi-indicador a:first').tab('show')
});
// LENGUETA
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorrisdzonajhc === 'undefined') {
    varMorrisdzonajhc = Morris.Line({
      element: 'Morrisdzonajhc',
      data: [{ fecha: '2001-12-31', dato: 3.7000 },{ fecha: '2002-12-31', dato: 4.0000 },{ fecha: '2003-12-31', dato: 4.1000 },{ fecha: '2004-12-31', dato: 4.3000 },{ fecha: '2005-12-31', dato: 4.3000 },{ fecha: '2006-12-31', dato: 3.9000 },{ fecha: '2007-12-31', dato: 4.2000 },{ fecha: '2008-12-31', dato: 5.1000 },{ fecha: '2009-12-31', dato: 5.3000 },{ fecha: '2010-12-31', dato: 4.9000 },{ fecha: '2011-12-31', dato: 4.4000 },{ fecha: '2012-12-31', dato: 4.5000 },{ fecha: '2013-12-31', dato: 4.2000 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase SociedadMedicos

?>
