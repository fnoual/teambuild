<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Indice;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Zxing\QrReader;

class AppController extends Controller
{
    public function update()
    {
        return view('welcome');
//        $indices = Indice::all();
//
//        $indices->map(function ($indice,$key) {
//            QrCode::color(0, 0, 0)->generate($indice->id, storage_path("qrcodes\\caisses\\caisse_" . $indice->caisse_id . "\\indice_" . $key . ".svg"));
//        });
//
//        $groups = Group::orderBy('number')->get();
//
//        $groups->map(function ($group,$key) {
//            QrCode::color(0, 0, 0)->generate($group->id, storage_path("qrcodes\\groupes\\groupe-" . $group->number . ".svg"));
//        });
    }
}
