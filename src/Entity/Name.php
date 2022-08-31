<?php

namespace App\Entity;

use App\Repository\NameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NameRepository::class)]
class Name
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private ?string $name = 'unknown';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
