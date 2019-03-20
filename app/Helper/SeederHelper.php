<?php

namespace App\Helper;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeder Helper save or update data in table fill created at and updated at
 *
 * Class SeederHelper
 * @package App\Helper
 */
class SeederHelper extends Seeder
{

    /**
     * Save or update database records
     *
     * @param $table
     * @param $attributes
     */
    public function saveOrUpdate($table, $attributes)
    {
        foreach ($attributes as $attr) {
            $record = DB::table($table)->find($attr['id']);

            if ($record != null) {
                $attr['updated_at'] = Carbon::now();
                if ($record->created_at == null) {
                    $attr['created_at'] = Carbon::now();
                }

                DB::table($table)->updateOrInsert(['id' => $attr['id']], $attr);
            } else {
                $attr['created_at'] = Carbon::now();

                DB::table($table)->updateOrInsert(['id' => $attr['id']], $attr);
            }
        }
    }

}