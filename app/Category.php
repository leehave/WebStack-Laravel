<?php

namespace App;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use ModelTree, AdminBuilder;

    public function children()
    {
        return $this->hasMany(static::class, 'parent_id');
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }

    public static function getWithArray()
    {
        $categories = [];

        $parents = static::where('parent_id', 0)
            ->select('id', 'title', 'icon')
            ->get()
            ->toArray();

        foreach ($parents as $val) {
            $child = static::where('parent_id', $val['id'])
                ->select('title', 'icon')
                ->get()
                ->toArray();

            $categories[] = [
                'icon' => $val['icon'],
                'title' => $val['title'],
                'child' => $child,
            ];
        }

        return $categories;
    }
}
