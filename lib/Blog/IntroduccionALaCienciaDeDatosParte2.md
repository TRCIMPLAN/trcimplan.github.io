
**La información puede ser inmensamente poderosa para comprender y dirigir los complejos problemas sociales.** Para lograr este objetivo, no sólo se necesitan los datos correctos, también la gente correcta que sea capaz de obtener los números esenciales; aquellos que apunten a los detalles técnicos críticos y den soporte a las decisiones más importantes.

Quien aspire a ser un **Científico de Datos** deberá dominar no sólo una, sino un gran número de herramientas; que usará como un hipotético [MacGyver](https://es.wikipedia.org/wiki/MacGyver) quien con lo que tenga "a la mano", sea capaz de "atrapar" a la solución del problema que enfrente.

Dando continuidad a esta serie de publicaciones, **se mostrará un ejercicio práctico de cómo obtener un conjunto grande de datos abiertos y realizar un análisis con los datos que contiene.** El reto es conocer las escuelas de educación básica de nuestro estado.

### Requerimientos

En esta guía mostraremos cómo obtener, incorporar y analizar datos abiertos.

* Recomiendo que tenga instalado un **motor de base de datos relacional** como [MariaDB](https://mariadb.org/), [PostgreSQL](http://www.postgresql.org/) u otro que opere con comandos **SQL**. He documentado para **PostgreSQL.**
* Recomiendo la _suite de oficina_ **LibreOffice** la cual es **software libre**. Podría usar Microsoft Office, aunque **no lo recomiendo** por ser [software privativo](https://es.wikipedia.org/wiki/Software_propietario). Verá que trabajo con **LibreOffice**
* Sistema Operativo con **navegador de internet** y **descompresor de archivos ZIP.** Tanto GNU/Linux, Windows o MacOS tienen estas herramientas. En esta guía verá imágenes de **GNU/Linux** y **KDE** como entorno gráfico.

### Obtenga datos abiertos en datos.gob.mx

La plataforma [datos.gob.mx](http://datos.gob.mx) es el sitio oficial de **Datos Abiertos** del **Gobierno de la República.** Allí se encuentra el **Catálogo de Datos Abiertos** que de manera gradual está incorporando todos los Datos Abiertos del Gobierno de la República. En su navegador de internet, vaya a [datos.gob.mx](http://datos.gob.mx) y de clic en **Explora los Datos**.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/01-datos.gob.mx.png" alt="">

La forma más fácil de encontrar alguna información es escribir algunas palabras que la describan en el campo de búsqueda. Escriba "escuelas" y presione **ENTER**.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/02-datos.gob.mx-buscar-escuelas.png" alt="">

Al momento de escribir esta guía, el primer resultado es el **Censo de Escuelas, Maestros y Alumnos de Educación Básica y Especial**. De clic sobre este texto.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/03-datos.gob.mx-resultado-busqueda.png" alt="">

Así tendrá a la vista varios conjuntos de **datos abiertos** que la **Secretaría de Educación Pública** proporciona con la información de los centros escolares de educación básica, media superior y superior.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/04-datos.gob.mx-censo-de-escuelas.png" alt="">

Busque en este listado el **Catálogo Centros de Trabajo** el cual contiene la información de los planteles educativos. De clic sobre este título y **descargará un archivo ZIP** llamado **CATALOGO_CT.zip**.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/05-datos.gob.mx-descargar-catalogo-centros-de-trabajo.png" alt="">

Los **archivos ZIP ayudan a disminuir los tiempos de descarga.** Esta reducción de tamaño es muy notable en archivos que contienen texto. De clic con el botón derecho y elija la opción para extraer o descomprimir; esta opción puede variar según su sistema operativo y la versión que use. Por lo general todos los S.O. modernos la tienen.

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/06-desempacar-archivo-zip.png" alt="">

Un **archivo CSV es texto separado por comas.** Es uno de los tipos recomendados para publicar datos abiertos por su portabilidad y flexibilidad. **Pero, debe revisar su tamaño antes de tratar de abrirlo,** algunos CSV pueden pesar varios megabytes y sobrepasar las capacidades de una hoja de cálculo, como Microsoft Excel o LibreOffice. Observe que en este caso, se tiene un archivo CSV de **¡30 millones de bytes (MB) y 273,318 renglones o filas!**

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/08-analizar-archivo-csv.png" alt="">

### Alimente su base de datos

Cuando la cantidad o complejidad de los datos rebasen las capacidades de una hoja de cálculo, deberá utilizar una base de datos relacional como [MariaDB](https://mariadb.org/) o [PostgreSQL](http://www.postgresql.org/). Estos "motores" son capaces de lidar con miles o millones de registros con un gran desempeño y absoluta confiabilidad. Cree un archivo con nombre **sep_centros_trabajos.sql** y escriba este comando SQL para **crear una tabla con las mismas columnas que el archivo CSV.**

    --
    -- sep_centros_trabajos.sql
    --
    CREATE TABLE sep_centros_trabajos (
        id_inm           character(6),
        clave_ct         character(11),
        ent              character(2),
        mun              character(3),
        loc              character(4),
        ent_admon        character(2),
        nombrect         character varying,
        c_estatus_ct     character(1),
        nivel            character(1),
        modalidad        character(1),
        turno            character(1),
        control          character(1),
        ct_multigrado    character(1),
        ent_carga        character(2),
        mun_carga        character(3),
        loc_carga        character(4),
        extra            character varying
    );

Tome nota que los tipos de datos de cada columna son congruentes con las líneas del archivo CSV. Por ejemplo, la columna **clave_ct** siempre tiene 11 caracteres, por eso se define como **character(11)**. En alguna línea hay un dato demás que remedié agregando una columna **extra** como _polizón_.

El siguiente paso es **crear una nueva base de datos** con nombre **sep_censo_escuelas**, que con PostgreSQL se hace desde la terminal con el comando **createdb**. Por costumbre, le asigno que el _dueño_ de esta base de datos sea otro usuario (previamente creado) llamado **trcimplan**. Este usuario no tiene privilegios mayores, lo que me asegura que si otro sistema lo toma u otro usuario se hace pasar por éste, **no nos haga** _travesuras_ en el servidor.

    $ createdb -O trcimplan sep_censo_escuelas

Sigue **cargar el archivo sep_centros_trabajos.sql y ordenar su ejecución.** Así la tabla estará lista, aunque vacía por el momento:

    $ psql -U trcimplan -f sep_centros_trabajos.sql sep_censo_escuelas

Continuamos con la _carga masiva_ de las **273,318 líneas** que están en el archivo **CATALOGO_CT.csv**. Antes de mostrar las órdenas a escribir, revisaremos estos detalles que no hay que subestimar.

* **No cualquier usuario PostgreSQL puede ejecutar el comando COPY**: Porque requiere un **superusuario**. Como recordará, he recomendado que el _dueño_ tenga pocos privilegios, entre los que está **NO** ejecutar **COPY**. Así que uso mi usuario habital que sí tiene dicho _poder_.
* **La ubicación del archivo**: El comando COPY de PostgreSQL es bastante quejoso cuando se le da una ruta elaborada. Así que haga una copia a una ruta corta, en mi ejemplo, a **/tmp**.
* **La codificación de caracteres del archivo CSV**: Se desearía que los datos abiertos usen **UTF-8** el cual es el estándard moderno. Pero este archivo ofrecido por la **S.E.P.** está en el anticuado **ISO 8859-1**. Afortunadamente, [PostgreSQL puede cambiar la codificación al cargar archivos](http://www.postgresql.org/docs/current/static/multibyte.html) con la orden **encoding.**
* **Identificar el caracter que separa los datos de cada columna**: Observe que se usan comas para separar los datos, inclusive los textos están entre comillas; respetando la forma en que un archivo CSV debe ser escrito.
* **Si la primer línea contiene los encabezados de las columnas**: Entonces no debe agregarse como un registro a la base de datos, sólo la primer línea.

Con estos detalles identificados y convertidos a específicas instrucciones, realizamos la **carga del archivo CSV a la base de datos.** Identifique Usted mismo la función de cada pieza:

    $ psql sep_censo_escuelas
    sep_censo_escuelas=# \encoding LATIN1
    sep_censo_escuelas=# COPY sep_centros_trabajos FROM '/tmp/CATALOGO_CT.csv' DELIMITER ',' CSV HEADER;
    sep_censo_escuelas=# \q

### Con LibreOffice Base podrá comunicarse con PostgreSQL

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/11-libreoffice-base-paso-1.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/12-libreoffice-base-paso-2.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/13-libreoffice-base-paso-3.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/14-libreoffice-base-prueba-de-conexion.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/15-libreoffice-base-paso-4.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/16-libreoffice-base-guardar.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/17-libreoffice-base-tablas.png" alt="">

<img class="img-responsive" src="introduccion-a-la-ciencia-de-datos-parte-2/18-libreoffice-base-tabla-sep_censo_escuelas.png" alt="">

### Referencias

* [Datos.gob.mx](http://datos.gob.mx/)
* [Sistema Nacional de información Estadística Educativa](http://www.snie.sep.gob.mx/)
