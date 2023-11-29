<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon as SupportCarbon;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
        'birthday',
        'avata',
        'phone',
        'address',
        'role_id',
        'deleted'
    ];
    public function addUser($dataInsert){
        $this->create([
            'name'=> $dataInsert['name'],
            'email'=> $dataInsert['email'],
            'password'=> bcrypt($dataInsert['confirm_password']),
            'birthday'=>$dataInsert['birthday'],
            'phone'=> $dataInsert['phone'],
            'address'=> $dataInsert['address'],
            'role_id'=> $dataInsert['role_id'],
            'avata'=> (isset($dataInsert['avata']) ? $dataInsert['avata'] : '')
        ]);
    }
    public function updateUser($dataUpdate,$id){
        // dd($dataUpdate);
        DB::table('users')->where('id',$id)->update([
            'name' => $dataUpdate['name'],
            'email' => $dataUpdate['email'],
            'birthday' => $dataUpdate['birthday'],
            'phone' => $dataUpdate['phone'],
            'address' => $dataUpdate['address'],
            'role_id' => $dataUpdate['role_id'],
            'avata' => (isset($dataUpdate['avata']) ? $dataUpdate['avata'] : '')
        ]);
    }





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
        'password' => 'hashed',
    ];
}
