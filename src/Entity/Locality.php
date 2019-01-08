<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LocalityRepository")
 */
class Locality
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ZipCode")
     * @ORM\JoinColumn(nullable=false)
     */
    private $zipcode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getZipcode(): ?ZipCode
    {
        return $this->zipcode;
    }

    public function setZipcode(?ZipCode $zipcode): self
    {
        $this->zipcode = $zipcode;

        return $this;
    }
}
