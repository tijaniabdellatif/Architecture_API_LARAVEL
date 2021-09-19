<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PublishersResouce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return [
           'id' => (string)$this->id,
           'type' => 'publishers',
           'attributes' => [

               'name' => $this->name,
               'book' => $this->book_id,
               'country' => $this->country

       ]
           ];
    }
}
