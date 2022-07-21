<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    protected $fillable = [
        'name',
        'address',
    ];

    private static $contractor = [
        [
            "name" => "pt. abc",
            "address" => "nganjuk",
        ],
        [
            "name" => "pt. qwe",
            "address" => "Jatim",
        ], [
            "name" => "pt. asd",
            "address" => "kertosono",
        ],
    ];
    public function getAll()
    {
        $contractor = static::all();

        return $contractor;
    }

    public static function find($id)
    {
        $posts = static::all();

        return $posts->firstWhere('id', $id);
    }
}
