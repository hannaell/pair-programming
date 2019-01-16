<?php

declare(strict_types=1);


class Post {
  
  protected $title;
  protected $author;

  public function getTitle():string {
    return $this->title;
  }
}


