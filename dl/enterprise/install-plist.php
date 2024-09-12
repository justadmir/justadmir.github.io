<?php
// Get the 'app' parameter from the URL
$app = $_GET['app'];

// Check if the 'app' parameter is set
if (isset($app) && !empty($app)) {
  // Check if the 'app' parameter ends with '.plist'
  if (substr($app, -6) !== '.plist') {
    // If it doesn't end with '.plist', display an error message
    echo "Error: 'app' parameter must end with '.plist'.";
  } else {
    // Construct the redirect URL
    $redirectUrl = "itms-services://?action=download-manifest&url=$app";
    
    // Redirect the user to the constructed URL
    header("Location: $redirectUrl");
    exit;
  }
} else {
  // If the 'app' parameter is not set, display an error message
  echo "Error: 'app' parameter is required.";
}
?>
