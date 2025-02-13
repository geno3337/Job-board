<?php

namespace Modules\Blog\Http\Service;

use Modules\Blog\Models\Post;

class PostService {

    public function loadPosts(){
        return Post::where('deleted_at', null)->get();
    }

}
