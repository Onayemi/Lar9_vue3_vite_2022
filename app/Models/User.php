<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Mail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    // protected $guarded = [];

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

    // public function accounts()
    // {
    //     return $this->hasMany(Account::class, 'user_id');
    // }

    public static function sendCustomerEmail($data, $pdf){
        $path = Storage::put('public/storage/uploads/'.'-'.rand().'_'.time().'.'.'pdf', $pdf->output());
        Storage::put($path, $pdf->output());

        $viewData['title'] = "Welcome to Remlextech.com";
        $viewData['date'] = date('m/d/Y');
        $viewData['name'] = $data->name;
        $viewData['email'] = $data->email;

        Mail::send('email.customer_pdf', $viewData, function ($m) use($data, $pdf, $path) {
            $m->from('onayemi18@gmail.com', env('APP_NAME'));
            $m->to($data->email)->subject($data->name)
            ->attachData($pdf->output(), $path, [
                'mime' => 'application/pdf',
                'as' => $data->name.'.'.'pdf'
            ]); 
        });
    }
}
