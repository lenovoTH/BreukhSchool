<?php

namespace App\Http\Resources;

use App\Http\Resources\ClasseResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NiveauResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'libelleNiv' => $this->libelleNiv,
            'classe' => ClasseResource::collection($this->classes)
            // 'classes' => $this->classes
        ];
    }
}
