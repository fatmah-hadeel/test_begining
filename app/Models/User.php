<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Storage;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'last_name',
        'phone_no',
        'city',
        'nationality',
        'educational_level',
        'educational_body',
        'DB',
        'place_of_birth',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // this method will upload avatar photo for the user profile
    public static function uploadAvatar($image)
    {

        $filename = $image->getClientOriginalName();
        (new self())->deleteOldImage();
        Storage::disk('do_spaces')->push($filename, file_get_contents($image));
//        $image->storeAs('images',$filename,'do_spaces');
        auth()->user()->update(['avatar' => $filename]);
    }

    // this method will get avatar photo from digitalOcean space
    public function getFile($id){
        $document = Document::where('id','=', $id)->firstOrFail();
        $file = Storage::disk('do_spaces')->get($document->file);
        $mimetype = \GuzzleHttp\Psr7\mimetype_from_filename($document->file);
        $headers = [
            'Content-Type' => $mimetype,
        ];
        return response($file, 200, $headers);
    }







    // this method will delete old images ones the suer update avatar image
    protected function deleteOldImage()
    {
        if(auth()->user()->avatar){
            Storage::delete('/public/images/'.auth()->user()->avatar);
        }
    }

}
