<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    private static $blog_posts = [
        [
            "name" => "Judul Satu",
            "email" => "judul-satu",
            "password" => "Isa Mulia",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda atque voluptatem error ipsum. Qui distinctio at incidunt deserunt pariatur nulla, nihil illum, accusantium, autem excepturi voluptas a dicta? Enim vel rerum aperiam et corrupti saepe exercitationem autem, illo quaerat sit sed expedita obcaecati quo architecto voluptas atque maxime praesentium tenetur eligendi ad ea error! Ut necessitatibus possimus maiores modi neque, voluptas culpa nihil facilis dolores vel qui minima quos officiis consectetur laborum debitis, vitae sequi! Nostrum ex eum quas facere?"
        ],
        [
            "title" => "Judul dua",
            "slug" => "judul-dua",
            "author" => "Isa Mulia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, corporis praesentium. Dolor consequuntur nemo esse sunt numquam praesentium quis blanditiis ducimus iure, maxime earum. Eum, ducimus assumenda. Ad blanditiis aliquid expedita minima vitae quo voluptatum quam doloremque harum sapiente corrupti veritatis dolorem eum nobis deserunt facere nesciunt consectetur omnis maiores nisi accusantium incidunt, itaque tempore! Modi quidem distinctio dolores beatae porro autem est inventore amet ex laboriosam soluta aliquid odit, eum, architecto iure corporis nobis voluptatum officiis sapiente impedit quibusdam et! Hic esse expedita, aspernatur eaque laudantium ipsum nobis, tempora explicabo soluta cumque cupiditate a saepe non ut quaerat exercitationem, odio repellendus aperiam illo. Rerum placeat aliquid sed, veritatis animi corrupti molestias maxime nostrum! Fugit doloribus tempore esse odio a."
        ],
        [
            "title" => "Judul tiga",
            "slug" => "judul-tiga",
            "author" => "insan mulia",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, corporis praesentium. Dolor consequuntur nemo esse sunt numquam praesentium quis blanditiis ducimus iure, maxime earum. Eum, ducimus assumenda. Ad blanditiis aliquid expedita minima vitae quo voluptatum quam doloremque harum sapiente corrupti veritatis dolorem eum nobis deserunt facere nesciunt consectetur omnis maiores nisi accusantium incidunt, itaque tempore! Modi quidem distinctio dolores beatae porro autem est inventore amet ex laboriosam soluta aliquid odit, eum, architecto iure corporis nobis voluptatum officiis sapiente impedit quibusdam et! Hic esse expedita, aspernatur eaque laudantium ipsum nobis, tempora explicabo soluta cumque cupiditate a saepe non ut quaerat exercitationem, odio repellendus aperiam illo. Rerum placeat aliquid sed, veritatis animi corrupti molestias maxime nostrum! Fugit doloribus tempore esse odio a."
        ]
    ];

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
