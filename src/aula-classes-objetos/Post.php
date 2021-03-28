<?php

class Post
{

    private $likes;
    private $title;
    private $comments;
    private $author;

    public function __construct()
    {
        $this->likes = 0;
        $this->author = 'William';
    }

    public function doLike()
    {
        $this->likes++;
    }

    public function showLikesCount()
    {
        return 'Likes: ' . $this->likes . PHP_EOL;
    }

    public function writeComment($title, $comment)
    {
        $this->title = $title;
        $this->comments = $comment;
    }

    public function readComment()
    {
        return 'Título: ' . $this->title . ' - ' . 'Comentário: ' . $this->comments;
    }

}

$post = new Post();
$post->doLike();
$post->writeComment("Título do meu comentário", "Comentário teste.");
echo $post->readComment();