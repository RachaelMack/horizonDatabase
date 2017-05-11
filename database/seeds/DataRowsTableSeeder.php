<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $postDataType = DataType::where('slug', 'posts')->firstOrFail();
        $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
        $userDataType = DataType::where('slug', 'users')->firstOrFail();
        $categoryDataType = DataType::where('slug', 'categories')->firstOrFail();
        $menuDataType = DataType::where('slug', 'menus')->firstOrFail();
        $roleDataType = DataType::where('slug', 'roles')->firstOrFail();
        $organizationDataType = DataType::where('slug', 'organizations')->firstOrFail();
        $clientDataType = DataType::where('slug', 'clients')->firstOrFail();

        $dataRow = $this->dataRow($postDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'ID',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Author',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 0,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'category_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Category',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'excerpt',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'Body',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'Post Image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '
{
    "resize": {
        "width": "1000",
        "height": "null"
    },
    "quality": "70%",
    "upsize": true,
    "thumbnails": [
        {
            "name": "medium",
            "scale": "50%"
        },
        {
            "name": "small",
            "scale": "25%"
        },
        {
            "name": "cropped",
            "crop": {
                "width": "300",
                "height": "250"
            }
        }
    ]
}',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '
{
    "slugify": {
        "origin": "title",
        "forceUpdate": true
    }
}',
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'meta_description',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'meta_keywords',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '
{
    "default": "DRAFT",
    "options": {
        "PUBLISHED": "published",
        "DRAFT": "draft",
        "PENDING": "pending"
    }
}',
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 13,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'author_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'author_id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'title',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'excerpt');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => 'excerpt',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'body');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'rich_text_box',
                'display_name' => 'body',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'slug',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'slugify' => [
                        'origin' => 'title',
                    ],
                ]),
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'meta_description',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'meta_keywords');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'meta_keywords',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'status');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'status',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'default' => 'INACTIVE',
                    'options' => [
                        'INACTIVE' => 'INACTIVE',
                        'ACTIVE'   => 'ACTIVE',
                    ],
                ]),
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 11,
            ])->save();
        }

        $dataRow = $this->dataRow($pageDataType, 'image');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'image',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 12,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'email');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'email',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'password');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'password',
                'display_name' => 'password',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'remember_token');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'remember_token',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'avatar');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'image',
                'display_name' => 'avatar',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($menuDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => 'parent_id',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'default'  => '',
                    'null'     => '',
                    'options'  => [
                        '' => '-- None --',
                    ],
                    'relationship' => [
                        'key'   => 'id',
                        'label' => 'name',
                    ],
                ]),
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'order');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'order',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => json_encode([
                    'default' => 1,
                ]),
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'slug',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }


        $dataRow = $this->dataRow($roleDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($roleDataType, 'display_name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Display Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'seo_title');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'seo_title',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 14,
            ])->save();
        }

        $dataRow = $this->dataRow($postDataType, 'featured');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'featured',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 15,
            ])->save();
        }

        $dataRow = $this->dataRow($userDataType, 'role_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'role_id',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 9,
            ])->save();
        }
//organizationRows
        $dataRow = $this->dataRow($organizationDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => 'id',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Name',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'address');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Address',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'city');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'City',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'prov');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Province',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'p_code');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Postal Code',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'phone');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => 'Phone',
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => '',
                'order'        => 7,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'is_deleted');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'checkbox',
                'display_name' => 'Is Deleted',
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 8,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'created_at',
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 9,
            ])->save();
        }

        $dataRow = $this->dataRow($organizationDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => 'updated_at',
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'details'      => '',
                'order'        => 10,
            ])->save();
        }

  //clientRows
          $dataRow = $this->dataRow($clientDataType, 'id');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'number',
                  'display_name' => 'id',
                  'required'     => 1,
                  'browse'       => 0,
                  'read'         => 0,
                  'edit'         => 0,
                  'add'          => 0,
                  'delete'       => 0,
                  'details'      => '',
                  'order'        => 1,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'organization_id');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'number',
                  'display_name' => 'Organization ID',
                  'required'     => 1,
                  'browse'       => 0,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 0,
                  'details'      => '',
                  'order'        => 2,
              ])->save();
          }
          $dataRow = $this->dataRow($clientDataType, 'first_name');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'First Name',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 3,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'last_name');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Last Name',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 4,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'initial');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Initial',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 5,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'status');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Status',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 6,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'start_date');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'date',
                  'display_name' => 'Start Date',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 7,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'date_recieved');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'date',
                  'display_name' => 'Date Recieved',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 8,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'address');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Address',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 9,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'city');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'City',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 10,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'prov');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Province',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 11,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'p_code');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Postal Code',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 12,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'residence');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Residence',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 13,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'phone');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Phone',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 14,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'healthcard');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'number',
                  'display_name' => 'Healthcard',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 15,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'SIN');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'number',
                  'display_name' => 'SIN',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 16,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'DOB');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'date',
                  'display_name' => 'Date of Birth',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 17,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'gender');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'select_dropdown',
                  'display_name' => 'Gender',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '
                  {
                    "default": "male",
                    "options": {
                      "male":"male",
                      "female":"female"
                    }
                  }',
                  'order'        => 18,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'prim_diagnosis');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Primary Diagnosis',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 19,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'sec_diagnosis');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Secondary Diagnosis',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 20,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'family_doctor');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Family Doctor',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 21,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'advocate');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text',
                  'display_name' => 'Advocate',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 22,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'special_instructions');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'text_area',
                  'display_name' => 'Special Instructions',
                  'required'     => 1,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 1,
                  'add'          => 1,
                  'delete'       => 1,
                  'details'      => '',
                  'order'        => 23,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'created_at');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'timestamp',
                  'display_name' => 'created_at',
                  'required'     => 0,
                  'browse'       => 1,
                  'read'         => 1,
                  'edit'         => 0,
                  'add'          => 0,
                  'delete'       => 0,
                  'details'      => '',
                  'order'        => 24,
              ])->save();
          }

          $dataRow = $this->dataRow($clientDataType, 'updated_at');
          if (!$dataRow->exists) {
              $dataRow->fill([
                  'type'         => 'timestamp',
                  'display_name' => 'updated_at',
                  'required'     => 0,
                  'browse'       => 0,
                  'read'         => 0,
                  'edit'         => 0,
                  'add'          => 0,
                  'delete'       => 0,
                  'details'      => '',
                  'order'        => 25,
              ])->save();
          }
    }



    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
            ]);
    }
}
