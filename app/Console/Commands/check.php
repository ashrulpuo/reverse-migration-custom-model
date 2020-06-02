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

        $e = '$primaryKey';
        $functionParam = "
    /**
    * The primary key for the model.
    * 
    * @var string
    */
    protected $e = 'id';";

        foreach ($file as $key => $value) {
            $content = file($value);
            $contents = file_get_contents($value);
            $pattern = preg_quote($e, '/');
            $pattern = "/^.*$pattern.*\$/m";

            if (preg_match_all($pattern, $contents, $matches)) {
                echo "Found matches:\n";
                echo implode("\n", $matches[0]);
                echo "\n";
            } else {
                foreach ($content as $lineNumber => &$lineContent) {
                    if (strpos($lineContent, '$table')) {
                        $lineContent .= $functionParam . PHP_EOL;
                        dump('success add to - '. $value);
                    }
                }
            }
            $allContent = implode("", $content);
            file_put_contents($value, $allContent);
        }
        dd("\n success check all file");
    }
}
