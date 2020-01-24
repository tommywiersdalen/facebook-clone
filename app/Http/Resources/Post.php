<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User As UserResource;
class Post extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
          'data' => [
              'type' =>  'post',
               'post_id' => $this->id,
               'attributes' => [
                   'posted_by' => new UserResource($this->user),
                   'body' => $this->body,
               ]
               ],
               'links' => [
                   'self' => url('/posts/'.$this->id),
               ]
               ];
    }
}
