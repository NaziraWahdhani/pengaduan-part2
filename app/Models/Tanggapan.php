<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Tanggapan extends Model
    {
        use HasFactory;

        protected $fillable = ['tanggapan', 'laporan_id'];

        public function laporans()
        {
            return $this->belongsTo(Laporan::class, 'laporan_id', 'id');
        }

    }
