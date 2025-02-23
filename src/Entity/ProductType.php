<?php

namespace App\Entity;

use App\Repository\ProductTypeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductTypeRepository::class)]
class ProductType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $season = null;

    #[ORM\Column(length: 255)]
    private ?string $production_method = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $harvest_date = null;

    #[ORM\Column(length: 255)]
    private ?string $preservation_duration = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeason(): ?string
    {
        return $this->season;
    }

    public function setSeason(string $season): static
    {
        $this->season = $season;
        return $this;
    }

    public function getProductionMethod(): ?string
    {
        return $this->production_method;
    }

    public function setProductionMethod(string $production_method): static
    {
        $this->production_method = $production_method;
        return $this;
    }

    public function getHarvestDate(): ?\DateTimeInterface
    {
        return $this->harvest_date;
    }

    public function setHarvestDate(\DateTimeInterface $harvest_date): static
    {
        $this->harvest_date = $harvest_date;
        return $this;
    }

    public function getPreservationDuration(): ?string
    {
        return $this->preservation_duration;
    }

    public function setPreservationDuration(string $preservation_duration): static
    {
        $this->preservation_duration = $preservation_duration;
        return $this;
    }
}
