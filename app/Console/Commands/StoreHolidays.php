<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Holiday;
use Illuminate\Support\Facades\Http;

class StoreHolidays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'store:holidays';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command to execute store holidays into db.it should be run only one time';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::get('https://openholidaysapi.org/PublicHolidays?countryIsoCode=CH&languageIsoCode=EN&validFrom=2024-01-01&validTo=2024-12-30');
        if ($response->successful()) {
            $holidays = json_decode($response->getBody()->getContents(), true);
            $holidaysArray = [];
            foreach ($holidays as $holiday) {
                if(!empty($holiday['id'])) {
                    $holidaysArray[] = [
                        'name'       => $holiday['name'][0]['text'],
                        'start_date' => $holiday['startDate'],
                        'end_date'   => $holiday['endDate'],
                        'type'       => $holiday['type'],
                        'created_at' => now(),
                        'updated_at' => now()
                    ];
                }
            }
            if(!empty($holidaysArray)) {
                Holiday::insert($holidaysArray);
            }
            return 1;
        }
        return 0;
    }
}
