<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';
    protected $guarded = ['id'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function getAvatar()
    {
      return (!$this->avatar) ? asset('/img/userDefault.jpg') : asset('/img/user/'.$this->avatar);
    }

    public function getLogo()
    {
      return (!$this->logo_sekolah) ? asset('/img/logoDefault.png') : asset('/img/logo/'.$this->logo_sekolah);
    }
}
