<?php

namespace App\Http\Controllers;

use App\Models\Allocation;
use Illuminate\Http\Request;

class UnduplicateController extends Controller
{
    public function __invoke()
    {
        $tables = [
            'allocations',
            'disbursements',
            'feasibility_studies',
            'neps',
            'resettlement_action_plans',
            'right_of_ways',
        ];

        foreach ($tables as $table) {
            $rawQuery = 'DELETE t1 FROM '.$table.' t1 INNER JOIN '. $table.' t2 WHERE t1.id > t2.id AND t1.project_id = t2.project_id;';
            \DB::table($table)->selectRaw($rawQuery);
        }

        return 'done cleaning';
    }
}
