<?php

namespace App\Http\Resources;

use App\Models\QRForBook;
use App\Models\UserClaimBook;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class UserResource extends JsonResource
{

    public function __construct($resource) 
    {
        parent::__construct($resource);    
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        $qr_code = UserClaimBook::where('user_id', $this->id)->first();

        if ($qr_code == null) {
            $qr_code = 0;
        }else{
            $qr_code = $qr_code->id;
        }

        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" =>  $this->email,
            "email_verified_at" =>  $this->email_verified_at,
            "password" =>  $this->password,
            "xp" =>  $this->xp,
            "mission_index" =>  $this->mission_index,
            "alamat" =>  $this->alamat,
            "tgl_lahir" =>  $this->tgl_lahir,
            "profile" =>  $this->profile,
            "avatar" =>  $this->avatar,
            "login" =>  $this->login,
            "book_id" => $qr_code,
        ];
    }
}
