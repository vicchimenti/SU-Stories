<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
try {
    /* Version 2.1.1 */
   
    include_once(__DIR__ . '/config.php'); 
} catch (\UnderflowException $eCourseCompare) {
    $errorAC[] = $eCourseCompare->getMessage();
} catch (\RuntimeException $eCourseCompare) {
    $errorAC[] = $eCourseCompare->getMessage();
} catch (\InvalidArgumentException $eCourseCompare) {
    $errorAC[] = $eCourseCompare->getMessage();
} catch (\LengthException $eCourseCompare) {
    $errorAC[] = $eCourseCompare->getMessage();
} catch (\Exception $eCourseCompare) {
    $errorAC[] = $eCourseCompare->getMessage();
}
?>
