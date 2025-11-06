<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LetterResource extends JsonResource
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
            'nomor_surat' => $this->nomor_surat,
            'perihal' => $this->perihal,
            'kategori' => $this->kategori,
            'file_path' => $this->file_path ? url('storage/' .$this->file_path) : null,
            'user'          => [
                'id'   => $this->user->id ?? null,
                'name' => $this->user->name ?? null,
                'email'=> $this->user->email ?? null,
            ],
            'created_at'    => $this->created_at->format('d-m-Y H:i'),
            'updated_at'    => $this->updated_at->format('d-m-Y H:i'),
        ];
    }
}
