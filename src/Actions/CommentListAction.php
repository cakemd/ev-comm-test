<?php

namespace CommentApp\Actions;

use CommentApp\Models\Comment;

class CommentListAction extends AbstractAction{
    
    public function run()
    {
        $repo = $this->getApp()->getRepo(Comment::class);
        
        $comments = $repo->getAll();
        
        $response = $this->getApp()->getResponse();
        $response->setView('main.php', ['comments' => $comments]);
    }
}
