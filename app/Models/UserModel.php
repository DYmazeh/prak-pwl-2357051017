<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $guarded = ['id'];
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
            ->select('user.*', 'kelas.nama_kelas as nama_kelas')
            ->get();
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) \Illuminate\Support\Str::uuid();
            }
        });
    }
}
