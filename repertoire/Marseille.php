<?php

#Le fichier jpgraph.php doit être inclus quelque soit le type de graphique voulu
require_once("jpgraph/src/jpgraph.php");
#Le fichier jpgraph_bar.php est dédié au tracé d'histogramme.
require_once("jpgraph/src/jpgraph_pie.php");


$bdd= new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8', 'root', 'root');

$rep = $bdd->query('select POURCENTAGE from FREQUENTATION where NOM_GARE="Marseille Saint-Charles" and ANNEE=2013 order by POURCENTAGE') ;

$donnees = array();
while ($ligne = $rep ->fetch()) {
    $donnees[] = ($ligne['POURCENTAGE']);
}

$data = $donnees;

// Create the Pie Graph. 
$graph = new PieGraph(350,250);

// Some data
$data = $donnees;
 
// A new graph
$graph = new PieGraph(400,420);
$graph->SetAntiAliasing();
 
//$graph->title->SetFont(FF_ARIAL, FS_BOLD, 14);
$graph->title->Set('Marseille Saint-Charles');
$graph->title->SetMargin(10);
 
//$graph->subtitle->SetFont(FF_ARIAL, FS_BOLD, 10);
$graph->subtitle->Set('2013');
 
// The pie plot
$p1 = new PiePlot($data);
$p1->SetSliceColors(array('darkred','navy','lightblue','orange','gray','teal'));
 
// Move center of pie to the left to make better room
// for the legend
$p1->SetSize(0.3);
$p1->SetCenter(0.5,0.47);
$p1->value->Show();
//$p1->value->SetFont(FF_ARIAL,FS_NORMAL,10);
 
// Legends
$p1->SetLegends(array("19 ans et moins", "60 ans et plus","50 ans à 59 ans","20 ans à 29 ans","40 ans à 49 ans","30 ans à 39 ans","Non communiqué"));
$graph->legend->SetPos(0.5,0.97,'center','bottom');
$graph->legend->SetColumns(3);
 
$graph->Add($p1);
$graph->Stroke();

?>