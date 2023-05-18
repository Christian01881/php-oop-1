<?php 

class Movie
{
    public string $title;
    public string $original_title;
    public string $nationality;
    public float $vote;
    public string $image;
    public $genre;


    public function __construct($title, $original_title, $nationality, $vote, $image, $genre)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->vote = $vote;
        $this->image = $image;
        $this->genre = $genre;
    }

    public function getImage() {
        return "<img class='card-img-top CPM-image' src='$this->image' alt='$this->title'>";
    }

}