<?php

namespace GetCandy\Api\Http\Transformers\Fractal\Associations;

use GetCandy\Api\Associations\Models\AssociationGroup;
use GetCandy\Api\Http\Transformers\Fractal\Attributes\AttributeTransformer;
use GetCandy\Api\Http\Transformers\Fractal\BaseTransformer;

class AssociationGroupTransformer extends BaseTransformer
{
    public function transform(AssociationGroup $group)
    {
        return [
            'id' => $group->encodedId(),
            'name' => $group->name,
            'handle' => $group->handle
        ];
    }
}
