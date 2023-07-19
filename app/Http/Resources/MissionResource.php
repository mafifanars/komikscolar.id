<?php

namespace App\Http\Resources;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MissionResource extends JsonResource
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
        // return parent::toArray($request);
        $mission = Mission::where('mission_sections_id', $this->resource->id)->get();

        return [
            'name' => $this->resource->name,
            'mission' => $mission,
        ];
    }
}
