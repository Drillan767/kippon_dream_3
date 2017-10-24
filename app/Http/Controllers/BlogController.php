<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use JavaScript;

class BlogController extends Controller
{
    public function admin() {
        return view('admin.blog.index');
    }

    public function visitors() {
        JavaScript::put([
           'testvar' => 'truc'
        ]);

        return view('blog.index');
    }
}
