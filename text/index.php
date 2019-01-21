<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21.01.2019
 * Time: 14:32
 */

$tekst = $_GET['n1'];

echo ucfirst(strtolower($tekst));
echo '<br>'
?>

<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 21.01.2019
 * Time: 14:32
 */

$tekst2 = $_GET['n2'];

$punktid = strtoupper(implode('.',str_split($tekst2)));
echo $punktid.'.';

?>
