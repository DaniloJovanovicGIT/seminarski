<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\Coffee;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class CoffeePostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='post';
    public function toArray($request)
    {
        return [
            'id'=>$this->resource->id,
            'title'=>$this->resource->title,
            'post_content'=>$this->resource->post_content,
            'category_id'=>new CategoryResource(Category::find($this->resource->category_id)),
            'coffee_id'=>new CoffeeResource(Coffee::find($this->resource->coffee_id)),
            'user_id'=>new UserResource(User::find($this->resource->user_id)),
            'created_at'=>$this->resource->created_at,
            'updated_at'=>$this->resource->updated_at,
        ];
    }
}
