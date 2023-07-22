<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MissionQuestionConnectorResource extends JsonResource
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
        $question = Question::where('missions_id', $this->resource->id)->get();

        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'xp' => $this->resource->xp,
            'question' => QuestionResource::collection($question),
        ];
    }
}
