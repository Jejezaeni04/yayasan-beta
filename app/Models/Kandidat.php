<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $table = 'kandidats'; // Define the table name (optional if it follows Laravel's naming convention)

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'votes_count',
        'bulan',
        'tahun',
        'nama_kandidat',
        'email',
        'foto_kandidat',
        'pendidikan',
        'pekerjaan',
        'tinggi_badan',
        'berat_badan',
        'bahasa',
        'kebudayaan',
        'musik',
        'pengetahuan',
        'approve',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'votes_count' => 'integer',
        'approve' => 'string', // Cast to ENUM type if necessary
    ];

    /**
     * Get the user that owns the kandidat.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
{
    return $this->hasMany(Vote::class);
}

}
