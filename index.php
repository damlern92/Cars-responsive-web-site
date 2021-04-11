<?php 
/* 
 *  This is the main page.
 *  the templates, and any content-specific modules.
 */

// Validate what page to show:
if (isset($_GET['page'])) {
    $p = $_GET['page'];
} elseif (isset($_POST['page'])) { // Forms
    $p = $_POST['page'];
} else {
    $p = NULL;
}

// Determine what page to display:
switch ($p) {

    case 'home':
        $page = 'home.php';
        $page_title = 'Home';
        break;

    case 'about-us':
        $page = 'about-us.php';
        $page_title = 'About us';
        break;

    case 'galery':
        $page = 'galery.php';
        $page_title = 'Galery';
        break;
    
    // Default is to include the main page.
    default:
        $page = 'home.php';
        $page_title = 'Home page';
        break;
        
} // End of main switch.

// Include the header file:
include('./includes/header.html');

// Include the content-specific module:
// $page is determined from the above switch.
include('./modules/' . $page);

// Include the footer file to complete the template:
include('./includes/footer.html');