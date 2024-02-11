<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Blog
{

    public function __construct(public $id, public $title, public $intro, public $uploaded_time, public $body, public $filename)
    {
    }

    public static function all()
    {
        $blogs = collect(File::files(resource_path('/blogs')))->map(function ($file) {
            $yamlObj = YamlFrontMatter::parse($file->getContents());
            $filename = pathinfo($file->getFilename(), PATHINFO_FILENAME);

            return new Blog($yamlObj->id, $yamlObj->title, $yamlObj->intro, $yamlObj->uploaded_time, $yamlObj->body(), $filename);
        })->sortBy('id');

       return $blogs;
    }

    public static function find($filename)
    {
        return static::all()->firstWhere('filename', $filename);
    }

    public static function findOrFail($filename) {
        $file = static::find($filename);

        if(!$file) {
            abort(404);
        }
        
        return $file;
    }
}
