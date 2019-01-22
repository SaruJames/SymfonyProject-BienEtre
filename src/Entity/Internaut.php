<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InternautRepository")
 */
class Internaut extends User
{
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $newsLetter;

    public function getNewsLetter(): ?bool
    {
        return $this->newsLetter;
    }

    public function setNewsLetter(bool $newsLetter): self
    {
        $this->newsLetter = $newsLetter;

        return $this;
    }
}
