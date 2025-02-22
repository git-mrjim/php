<?php 

class Post {

    public $title;
    public $content;

    public function __construct() {
        var_dump('Constructor Initialize');
    }

    public function archive() {

    }

    public function share() {

    }
}

$post = new Post();
$post->title = "The title of the post";
$post->content = "The content of the post";

$post1 = new Post();
$post1->title = "The title of the post1";
$post1->content = "The content of the post1";

$post2 = new Post();
$post2->title = "The title of the post2";
$post2->content = "The content of the post2";

$posts = [];
$posts = $post;
$posts = $post1;
$posts = $post2;
