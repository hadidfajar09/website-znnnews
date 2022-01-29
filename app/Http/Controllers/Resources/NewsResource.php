<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\URL;

class NewsResource extends JsonResource
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
            'id' => $this->id,
            'category' => $this->category_ind,
            // 'subcategory' => $this->subCategory_ind,
            'name' => $this->tags_en,
            'kolumnis' => $this->name,
            'title' => $this->title_ind,
            'description' => $this->details_ind,
            'url' => URL::to('view/post/'.$this->id),
            'urlToImage' => URL::to($this->image),
            'publishedAt' => $this->post_date,
            'view' => $this->views,
            

        ];

    }
}
