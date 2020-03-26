

Share
Ahora que ya sabes cómo desplegar contenedores en Docker y crear imágenes también; vamos a resolver una situación más particular. Imaginemos que tenemos un proyecto hecho en WordPress en el que configuramos una tienda online con la extensión WooCommerce. Supongamos que nos dedicamos a trabajar como diseñadores independientes y tenemos 5 clientes que nos piden el diseño de una tienda online. ¡Y sólo tenemos 2 semanas para entregar! Ahora, configurar e instalar WordPress y WooCommerce es una tarea que toma un tiempo considerable. Pero con Docker este proceso es mucho más fácil. Docker nos permite obtener toda la configuración y el entorno de desarrollo para correr nuestra aplicación. De esta manera, podemos tenerla lista para llevarla a producción en cualquier lugar. En este tutorial te enseñaré cómo hacerlo con WordPress.
Crear un contenedor Wordpress en Docker
El primer paso es abrir la Docker Quickstart Terminal y descargar la última versión de WordPress con el siguiente comando:
$ curl https://wordpress.org/latest.tar.gz | tar -xvzf -
wordpress/wp-includes/class-wp-role.php
wordpress/wp-includes/class-simplepie.php
wordpress/wp-includes/class-wp-http-encoding.php
wordpress/wp-includes/functions.php
wordpress/wp-includes/class-http.php
wordpress/wp-includes/date.php
wordpress/wp-includes/class-wp-image-editor-imagick.php
wordpress/wp-includes/class-wp-user-query.php
wordpress/wp-includes/class-wp-tax-query.php
wordpress/wp-includes/kses.php
wordpress/wp-includes/class-wp-xmlrpc-server.php
wordpress/wp-includes/rest-api/
wordpress/wp-includes/rest-api/class-wp-rest-response.php
wordpress/wp-includes/rest-api/class-wp-rest-request.php
wordpress/wp-includes/rest-api/class-wp-rest-server.php
wordpress/wp-includes/embed.php
wordpress/wp-includes/class-pop3.php
wordpress/wp-includes/script-loader.php
wordpress/wp-includes/ID3/
wordpress/wp-includes/ID3/module.audio.ogg.php
wordpress/wp-includes/ID3/license.commercial.txt
wordpress/wp-includes/ID3/module.audio.ac3.php
wordpress/wp-includes/ID3/module.audio-video.riff.php
wordpress/wp-includes/ID3/getid3.php
wordpress/wp-includes/ID3/readme.txt
wordpress/wp-includes/ID3/license.txt
wordpress/wp-includes/ID3/getid3.lib.php
wordpress/wp-includes/ID3/module.tag.lyrics3.php
wordpress/wp-includes/ID3/module.tag.apetag.php
wordpress/wp-includes/ID3/module.audio.mp3.php
wordpress/wp-includes/ID3/module.audio.dts.php
wordpress/wp-includes/ID3/module.audio-video.matroska.php
wordpress/wp-includes/ID3/module.audio-video.flv.php
wordpress/wp-includes/ID3/module.audio-video.quicktime.php
wordpress/wp-includes/ID3/module.tag.id3v1.php
wordpress/wp-includes/ID3/module.audio.flac.php
wordpress/wp-includes/ID3/module.audio-video.asf.php
 wordpress/wp-includes/ID3/module.tag.id3v2.php8
 6933k 86 5963k 0 0 387k 0 0:00:17 0:00:15 0:00:02 374kwordp
ress/wp-includes/cron.php
wordpress/wp-includes/class-wp-admin-bar.php
wordpress/wp-includes/class-wp-customize-section.php
wordpress/wp-includes/class-wp.php
wordpress/wp-includes/default-widgets.php
...Continua la descarga de más archivos de Wordpress (Yo he resumido el proceso) ...
wordpress/wp-includes/rest-api.php
wordpress/wp-includes/update.php
wordpress/wp-includes/comment.php
wordpress/wp-config-sample.php

// Terminada la descarga, puedo ver que el último archivo que me descargo fue wp-config-sample.php
Una vez ejecutada la descarga anterior, se nos creará un directorio llamado wordpress. Para comprobar si se creó el directorio wordpress, podemos listar los archivos con el comando:
$ ls
Documents
<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', "db:3306");
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

$table_prefix  = 'wp_';
define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');