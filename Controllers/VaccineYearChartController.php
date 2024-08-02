<?php

namespace App\Http\Controllers;
use App\Models\VaccineRecord;
use App\Models\Vaccine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class VaccineYearChartController extends Controller
{
    public function index(){
        $vaccineCounts = DB::table('vaccine_record')
            ->select(DB::raw('count(*) as vaccine_count'),
                DB::raw('monthname(vaccinated_date) as monthen'))
                ->join('vaccine', 'vaccine_record.vac_id', '=', 'vaccine.id')
                ->whereYear('vaccinated_date', 2023)
                ->groupBy(DB::raw('monthname(vaccinated_date)'))
                ->orderBy(DB::raw('month(vaccinated_date)'))
                ->pluck('vaccine_count','monthen');
        $labels = $vaccineCounts->keys();
        $data = $vaccineCounts->values();
        return view('vaccine.vaccine_year_chart',compact('labels','data'));
    }

}
