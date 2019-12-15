<?php 
date_default_timezone_set('America/Los Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
    case 'index.php':
        $title = 'Fabricio Calvet-Recktenwall';
        $PageID = 'FABRICIO CALVET-RECKTENWALL';
    break;

    case 'work.php':
        $title = 'All Galleries';
        $PageID = 'ALL GALLERIES';
    break;

    case 'gallery.php':
        $title = 'Gallery Title';
        $PageID = 'GALLERY TITLE';
    break;

    case 'contact.php':
        $title = 'Contact';
        $PageID = 'CONTACT';
    break;

    case 'sultan.php':
        $title = 'Sultan 2019';
        $PageID = 'SULTAN 2019';
    break;

    case 'summerstreet.php':
        $title = 'Summer Streets 2019';
        $PageID = 'SUMMER STREETS 2019';
    break;

    default:
        $title = THIS_PAGE;
        $PageID = ''; 
}
?>