<?php

namespace App\Http\Resources;

use App\Models\Choice;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
        $choice = Choice::where('questions_id', $this->resource->id)->get();

        return [
            'id' => $this->resource->id,
            // 'missions_id' => $this->resource->missions_id,
            'pertanyaan' => $this->resource->pertanyaan,
            'choice' => $choice,
        ];
    }
}
