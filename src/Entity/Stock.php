<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(name: 'product_id', referencedColumnName: 'id', nullable: false)]
    private ?Product $product = null;

    #[ORM\Column]
    private ?int $available_quantity = null;

    #[ORM\Column]
    private ?float $stock_minimum = null;

    #[ORM\Column]
    private ?float $stock_maximum = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $entry_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $exit_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;
        return $this;
    }

    public function getAvailableQuantity(): ?int
    {
        return $this->available_quantity;
    }

    public function setAvailableQuantity(int $available_quantity): static
    {
        $this->available_quantity = $available_quantity;
        return $this;
    }

    public function getStockMinimum(): ?float
    {
        return $this->stock_minimum;
    }

    public function setStockMinimum(float $stock_minimum): static
    {
        $this->stock_minimum = $stock_minimum;
        return $this;
    }

    public function getStockMaximum(): ?float
    {
        return $this->stock_maximum;
    }

    public function setStockMaximum(float $stock_maximum): static
    {
        $this->stock_maximum = $stock_maximum;
        return $this;
    }

    public function getEntryDate(): ?\DateTimeInterface
    {
        return $this->entry_date;
    }

    public function setEntryDate(\DateTimeInterface $entry_date): static
    {
        $this->entry_date = $entry_date;
        return $this;
    }

    public function getExitDate(): ?\DateTimeInterface
    {
        return $this->exit_date;
    }

    public function setExitDate(?\DateTimeInterface $exit_date): static
    {
        $this->exit_date = $exit_date;
        return $this;
    }
}
