<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $appends = ['status_label'];

    //MEMBUAT RELASI KE MODEL DISTRICT.PHP
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
            return '<h3><span class="badge badge-danger">Baru</span></h3>';
        } elseif ($this->status == 1) {
            return '<h3><span class="badge badge-primary">Dikonfirmasi</span></h3>';
        } elseif ($this->status == 2) {
            return '<h3><span class="badge badge-info">Proses</span></h3>';
        } elseif ($this->status == 3) {
            return '<h3><span class="badge badge-warning">Dikirim</span></h3>';
        }
        return '<h3><span class="badge badge-success">Selesai</span></h3>';
    }

    //MEMBUAT RELASI KE TABLE ORDER_DETAILS DENGAN JENIS RELASI ONE TO MANY
    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
