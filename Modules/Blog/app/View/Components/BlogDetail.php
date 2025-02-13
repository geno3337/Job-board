<?php

namespace Modules\Blog\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class BlogDetail extends Component
{
    public $post;

    /**
     * Create a new component instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }
    /**
     * Get the view/contents that represent the component.
     */
    public function render(): View|string
    {
        return view('blog::components.blogdetail');
    }
}
