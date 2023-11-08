<?php

namespace App\AppBundle\Entity;

use App\AppBundle\Repository\CompetenceRepository;
use App\BaseBundle\Entity\BaseEntity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompetenceRepository::class)]
final class Competence extends BaseEntity
{
    #[ORM\Column(length: 64)]
    private ?string $name = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $description = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }
}
