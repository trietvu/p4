<?php

namespace App\Http\Controllers;

use Khill\Lavacharts\Lavacharts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller{

    $lava = new Lavacharts; // See note below for Laravel

    $reasons = $lava->DataTable();

    $reasons->addStringColumn('Reasons')
            ->addNumberColumn('Percent')
            ->addRow(array('Check Reviews', 5))
            ->addRow(array('Watch Trailers', 2))
            ->addRow(array('See Actors Other Work', 4))
            ->addRow(array('Settle Argument', 89));

    $piechart = $lava->PieChart('IMDB')
                     ->setOptions(array(
                       'datatable' => $reasons,
                       'title' => 'Reasons I visit IMDB',
                       'is3D' => true,
                         'slices' => array(
                            $lava->Slice(array(
                              'offset' => 0.2
                            )),
                            $lava->Slice(array(
                              'offset' => 0.25
                            )),
                            $lava->Slice(array(
                              'offset' => 0.3
                            ))
                          )
                      ));

}
