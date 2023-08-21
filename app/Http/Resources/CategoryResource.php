<?php

namespace App\Http\Resources;

use App\Models\Category;
use App\Models\CategoryPosts;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property string $description
 * @property Carbon $created_at
 */
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|Arrayable|\JsonSerializable
     */
    public function toArray($request): array|\JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'created' => $this->created_at,
            'posts' => PostsResource::collection(Category::find($this->id)->posts),
        ];
    }
}
