<?php

trait RobotSkillz
{
    public function speak(string $output)
    {
        echo $output;
    }
}
class HorrorFilm
{
    public $genre;
    public $length;
    public $rating;
    public $releaseDate;
    public $title;

    public function getGenre() : string
    {
        return $this->genre;
    }

    public function getLength() : int
    {
        return $this->length;
    }

    public function getRating() : string
    {
        return $this->rating;
    }
    public function getReleaseDate() : string
    {
        return $this->releaseDate;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setGenre(string $genre)
    {
        $this->genre = $genre;
    }

    public function setLength(int $minutes)
    {
        $this->length = $minutes;
    }

    public function setRating(string $rating)
    {
        $this->rating = $rating;
    }

    public function setReleaseDate(string $date)
    {
        $this->releaseDate = $date;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
trait ArrayOrJson
{
    public function asArray() : array
    {
        return get_object_vars($this);
    }

    public function asJson() : string
    {
        return json_encode($this->asArray());
    }
}
class HorrorFilm
{
    use $ArrayOrJson;
}

echo '$film = new HorrorFilm';
echo '$film->setTitle('Kill All Humans!')';
echo '$film->setGenre('Slasher')';
echo '$film->setLength(124)';
echo '$film->setRating('R')';
echo '$film->setReleaseDate('November 2, 2019')';

var_dump($film->asArray());
var_dump($film->asJson());
?>