<?php
/**
 * archive-accueil.php
 * Project: kartoffel-und-bier
 * User:    Félix Dion Robidoux
 *          Michel Chouinard
 * Date:    02/12/2014
 * Time:    7:59 PM
 */

/**
 * DO NOT REMOVE THIS FILE FOR NOW...
 *
 * I MAY DECIDE TO OFFER THE ARCHIVE TO THE VISITOR AT SOME TIME WITHOUT HAVING TO EDIT THE FUNCTIONS FILE.
 *
 * For now, visitors that bookmark ou type http://{domain}/accueil will be redirecten to the home page and the
 * index.php file will serve them.  At some time we may use this file to display all older post that the manager
 * wrote.
 */
wp_redirect( home_url() );

exit;