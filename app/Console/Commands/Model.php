<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use DB;

class Model extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'model';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $tables = DB::select('SELECT * FROM information_schema.tables;');
        $bar = $this->output->createProgressBar(count($tables));
        $bar->start();
        foreach ($tables as $key => $table) {
            $className = str_replace("_", "", ucwords($table->TABLE_NAME, "_"));
            Artisan::call("krlove:generate:model", [
                'class-name' => $className,
                '-tn' => $table->TABLE_NAME
            ]);
            $bar->advance();
            dump('success generate model '. $className);
        }
        $bar->finish();
        dd('succes generate all model');
    }
}
