<?php
// content="text/plain; charset=utf-8"
//require_once ("../../jpgraph/jpgraph.php");
//require_once ("../../jpgraph/jpgraph_pie.php");
//require_once ("../../jpgraph/jpgraph_pie3d.php");
//require_once ("../../jpgraph/jpgraph_canvas.php");
//require_once ("../../jpgraph/jpgraph_iconplot.php");
//require_once ("../../jpgraph/jpgraph_flags.php");
include ("/usr/share/php/jpgraph/src/jpgraph.php");
include ("/usr/share/php/jpgraph/src/jpgraph_pie.php");
include ("/usr/share/php/jpgraph/src/jpgraph_pie3d.php");
require_once '../../negocio/gestores/GEstadistica.php';
class Estadistica {
    function MostrarTorta($data, $titulo, $nombres) {
        $graph = new PieGraph(700, 600, 'auto');
        $graph->SetMargin(1, 1, 40, 1);
        $graph->SetMarginColor('navy');
        $graph->img->SetAntiAliasing();
        $graph->title->Set($titulo);
        $graph->title->SetColor('white');
        $p1 = new PiePlot3D($data);
        $p1->SetSize(0.35);
        $p1->SetCenter(0.5);
        $p1->value->SetColor("white");
        $p1->SetLabelPos(0.2);
        $p1->SetLegends($nombres);
        $p1->ExplodeAll();
        $graph->Add($p1);
        $graph->Stroke();
    }
    function GraficarCantGenero() {
        $gestor = new GEstadistica();
        $ins = $gestor->getCantGenero();
        $i = 0;
        foreach ($ins as $reg) {
            $data[$i] = $reg[0];
            $nombres[$i] = $reg[1];
            $i = $i + 1;
        }
        $this->MostrarTorta($data, "Alumnos por género", $nombres);
    }
}
$a = new Estadistica();
//$a->MostrarTorta(array('8', '55', '34'), 'xxx', array('a', 'b', 'c'));
$a->GraficarCantGenero();
?>