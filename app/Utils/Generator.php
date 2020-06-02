<?php
namespace App\Utils;

class Generator
{
    public static function build() {
        $use = 'use OwenIt\Auditing\Contracts\Auditable;';
        $secondParam = 'use \OwenIt\Auditing\Auditable;';
        $thirdParam = "
    /**
    * The name of the 'created at' column.
    *
    * @var string
    */
    const CREATED_AT = 'daftar_pada';";

        $fourParam = "
    /**
    * The name of the 'updated at' column.
    *
    * @var string
    */
    const UPDATED_AT = 'kemaskini_pada';\n";

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
                if ($lineNumber == 4) {
                    $lineContent .= $use . PHP_EOL;
                }
                if ($lineContent == "class" . " " . $withoutExt . " " . "extends Model\n") {
                    $remove = str_replace("\n", "", $lineContent);
                    $newClass = $remove . " implements Auditable\n{";
                    $delLineNumber[] = $lineNumber + 1;

                    $replaced = $array[$lineNumber] = $newClass;
                    $lineContent = $replaced;
                    $replaced .= $newClass . PHP_EOL;
                    $lineContent .= "\n" . "\t" . $secondParam . PHP_EOL;
                    $lineContent .= $thirdParam . PHP_EOL;
                    $lineContent .= $fourParam . PHP_EOL;
                    // dd($lineContent);
                }

                if (in_array($lineNumber, $delLineNumber)) {
                    unset($content[$lineNumber]);
                }
            }
            $allContent = implode("", $content);
            file_put_contents($value, $allContent);
        }
        dump('success 50%');

        foreach ($file as $key => $value) {
            $trim = str_replace("/Users/pocketdata/Desktop/docker-webstack/projects/reverse/app/", "", $value);
            $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $trim);
            $content = file($value);

            // dd($content);
            $delLineNumber = [];
            foreach ($content as $lineNumber => &$lineContent) {
                if(strpos($lineContent, '$primaryKey')) {
                    $start = strpos($lineContent, '\'') + 1;
                    $length = strlen($lineContent)  - $start - 3 ; 
                    
                    // strpos($lineContent, '\';') - 3 ;
                    $e = substr($lineContent, $start, $length);
                
                    $primaryKey = (!empty($e) ?? 'id');
                    $a = '$model';
                    $b = '->daftar_oleh';
                    $c = '->kemaskini_oleh';
                    $d = '->'.$primaryKey;
                $functionParam = "
    /**
    * auto generate UUID
    */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($a) {
            $a$d = Str::uuid(); 
            $a$b = Auth::user()$d;
        });
        self::updating(function ($a) {
            $a$c = Auth::user()$d;
        });
    }";
                // $test = array_search($lineContent, $content);
                $lineContent .= $functionParam . PHP_EOL;
            }

                if (in_array($lineNumber, $delLineNumber)) {
                    unset($content[$lineNumber]);
                }
            }
            $allContent = implode("", $content);
            file_put_contents($value, $allContent);
        }
        dd('success all file');
    }
}
