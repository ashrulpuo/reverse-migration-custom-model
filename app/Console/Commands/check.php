<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class check extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check';

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
        $path = app_path();
        $file = [];
        foreach (glob($path . '/*.php') as $filename) {
            $file[] = $filename;
        }
        foreach ($file as $key => $value) {
            $trim = str_replace("/Users/pocketdata/Desktop/docker-webstack/projects/reverse/app/", "", $value);
            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $trim);
            $content = file($value);

            // dd($content);
            $delLineNumber = [];
            foreach ($content as $lineNumber => &$lineContent) {
                if (strpos($lineContent, '$primaryKey')) {
                    dump('model'. " - " .$trim. " - " . " ada ");
                } else {
                    dump('model'. " - " .$trim. " - " . " tiada ");
                }
            }
        }
    }
}
