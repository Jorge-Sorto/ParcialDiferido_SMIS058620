<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Libro extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'cod_libro' =>$this->code_libro,
            'isbn' =>$this->isbn,
            'titulo' =>$this->titulo,
            'annio_publicacion' =>$this->annio_publicacion,
            'precio' =>$this->precio,
            'descripcion' =>$this->descripcion

        ];
    }
}
