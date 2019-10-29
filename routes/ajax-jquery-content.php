<?php
 
$lig = $_POST["ligne"];
$oldprop = $_POST["oldprop"];
$lig++;
$html = '<div class="row">';
$html.= '<div><label for="prop'.$lig.'">Proposition '.$lig.'</label></div>';
$html.= '<div><input type="text" class="form-control" id="prop'.$lig.'"></div>';
$html.= '<div><label for="oldprop'.$lig.'">Dernière proposition </label></div>';
$html.= '<div><input type="text" class="form-control" id="oldprop'.$lig.'" value="'.$oldprop.'" readonly></div>';
$html.= '<div><button type="button" class="btn btn-primary" id="button'.$lig.'" onclick="clickbutton('.$lig.')">Valider</button></div>';
$html.= '</div>';

echo $html;