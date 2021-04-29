<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'make' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3IAZki/+=*~F?0nL%p#M;G3S^}xWpo/t(Id5zj,vX*:_[ozMz`e^Na,|%~T`,w:<' );
define( 'SECURE_AUTH_KEY',  '9<^ETI,Uu?EDfO@rt8HWJ~M`@kWYasAiXawqIay_`Kt9=QoXj,U;<xhcf~,G65vg' );
define( 'LOGGED_IN_KEY',    'A,UQoa6}2FJ)|Ti,d5B3~^hebn tS>ceB:o/tMtTm!~Vx9qaVlDC@.-8/>ON+55L' );
define( 'NONCE_KEY',        'Yi[hE {OA?!xp,!sU}3QMk?CB.#!bnzp^0m*6,u5fj&CaONmG}2%;-h$2iqkg%#[' );
define( 'AUTH_SALT',        '5BE()N>4T&Zc%MNW,9U+-V}}CK}}80*K(dN);Fq5hzbH2OycA839@GTD|~2^jQ=w' );
define( 'SECURE_AUTH_SALT', '.*s-W^!t(*FBbt1.KnC>I AWwlP2/Cm0yHD(<1[C9O/+#UXn$j:n8V%w0SQmCq91' );
define( 'LOGGED_IN_SALT',   'JjFWbQX~;BP8_%k9]U6n:/ 3[&r6[,p6AcNS=2r7@C/E(AO$=r3aDkd{,<n<D0*=' );
define( 'NONCE_SALT',       '7 ?CgliXg<MeSFw)).)|D&@4~^5[ef5J0}xC<.1uLc~f`qz/Gxkm8O%t5)7wA3&3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
