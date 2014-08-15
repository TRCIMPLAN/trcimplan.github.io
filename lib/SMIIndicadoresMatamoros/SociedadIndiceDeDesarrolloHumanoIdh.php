<?php
/**
 * SociedadIndiceDeDesarrolloHumanoIdh.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadIndiceDeDesarrolloHumanoIdh
 */
class SociedadIndiceDeDesarrolloHumanoIdh extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Índice de Desarrollo Humano (IDH) en Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-indice-de-desarrollo-humano--idh-';
        $this->descripcion = 'El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).';
        $this->claves      = 'Matamoros, Bienestar';
        $this->categorias  = array('Bienestar');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
El Índice de Desarrollo Humano (IDH) desarrollado por el Programa de Naciones Unidas para el Desarrollo, abarca tres temas fundamentales: salud, educación e ingreso. Su metodología original aplicada a países se compone de: esperanza de vida al nacer, tasa de matriculación escolar, tasa de alfabetización y PIB per cápita anual en dólares. Para calcular el IDH a nivel municipal (IDHM) en México, se han llevado a cabo algunos ajustes debido a las restricciones en la disponibilidad de información, a nivel municipal, de los indicadores establecidos en su definición original, por lo cual se compone de: sobrevivencia infantil, tasa de asistencia escolar, tasa de alfabetización e Ingreso promedio per cápita anual en dólares. La metodología completa se puede consultar en [PNUD](http://www.undp.org.mx/desarrollohumano/disco/index.html).

<h4>Información recopilada</h4>
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
<td class="centrado">31/03/2005</td>
<td class="derecha">0.7820</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
</tbody>
</table>
<b>Unidad:</b> De 0 a 1.




<h4>En otras regiones</h4>

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
<td>2005-03-31</td>
<td class="derecha">0.8470</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2005-03-31</td>
<td class="derecha">0.8160</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
<tr>
<td>Lerdo</td>
<td>2005-03-31</td>
<td class="derecha">0.7970</td>
<td>Programa de Naciones Unidas para el Desarrollo (PNUD)</td>
<td>Descargar [base de datos](http://www.undp.org.mx/desarrollohumano/disco/index.html)</td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase SociedadIndiceDeDesarrolloHumanoIdh

?>
