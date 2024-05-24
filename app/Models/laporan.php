<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class laporan extends Model
    {
        use HasFactory;

        protected $fillable = [
            'nama',
            'alamat',
            'tanggal_kejadian',
            'kategori',
            'foto',
            'laporan'
        ];

        public function tanggapans()
        {
            return $this->hasMany(Tanggapan::class, 'laporan_id', 'id');
        }
    }
