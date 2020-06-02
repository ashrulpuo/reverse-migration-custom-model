<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * @property string $alamat_induk_sejarah_id
 * @property string $alamat_induk_id
 * @property string $daftar_oleh
 * @property string $kemaskini_oleh
 * @property int $lokaliti_id
 * @property string $deleted_at
 * @property string $daftar_pada
 * @property string $kemaskini_pada
 * @property Pengguna $pengguna
 * @property Pengguna $pengguna
 * @property Lokaliti $lokaliti
 */
class AlamatIndukSejarah extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'alamatIndukSejarah';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'alamat_induk_sejarah_id';

    /**
    * auto generate UUID
    */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->alamat_induk_sejarah_id = Str::uuid(); 
            $model->daftar_oleh = Auth::user()->id;
        });
        self::updating(function ($model) {
            $model->kemaskini_oleh = Auth::user()->id;
        });
    }

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
    * The name of the 'created at' column.
    *
    * @var string
    */
    const CREATED_AT = 'daftar_pada';

    /**
    * The name of the 'updated at' column.
    *
    * @var string
    */
    const UPDATED_AT = 'kemaskini_pada';

    /**
     * @var array
     */
    protected $fillable = ['alamat_induk_id', 'daftar_oleh', 'kemaskini_oleh', 'lokaliti_id', 'deleted_at', 'daftar_pada', 'kemaskini_pada'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penggunaDaftar()
    {
        return $this->belongsTo('App\Pengguna', 'daftar_oleh', 'pengguna_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penggunaKemaskini()
    {
        return $this->belongsTo('App\Pengguna', 'kemaskini_oleh', 'pengguna_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lokaliti()
    {
        return $this->belongsTo('App\Lokaliti', 'alamat_induk_id', 'lokaliti_id');
    }
}
