<?php

namespace Modules\Blog\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Modules\Blog\Http\Service\PostService;
use Closure;

class BlogCard extends Component
{

    public $posts;

    protected $postService;

    /**
     * Create a new component instance.
     */
    public function __construct($posts)
    {
        // $this->postService = $postService;
        // $this->posts = $this->postService->loadPosts();
        $this->posts = $posts;
    }

    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('blog::components.blogcard');
    }
}
