<?php

namespace App\Entity;

use App\Repository\QuoteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuoteRepository::class)]
class Quote
{  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column(type: 'integer')]
  private $id;

  #[ORM\Column(type: 'text')]
  private $quote;

  #[ORM\Column(type: 'string', length: 25)]
  private $historian;

  #[ORM\Column(type: 'string', length: 5)]
  private $year;

  public function __construct($quote, $historian, $year)
  {
    $this->quote = $quote;
    $this->historian = $historian;
    $this->year = $year;
  }


  public function getId(): ?int
  {
    return $this->id;
  }

  public function getQuote(): ?string
  {
    return $this->quote;
  }

  public function setQuote(string $quote): self
  {
    $this->quote = $quote;

    return $this;
  }

  public function getHistorian(): ?string
  {
    return $this->historian;
  }

  public function setHistorian(string $historian): self
  {
    $this->historian = $historian;

    return $this;
  }

  /**
   * @param mixed $year
   */
  public function setYear(string $year): void
  {
    $this->year = $year;
  }

  /**
   * @return mixed
   */
  public function getYear()
  {
    return $this->year;
  }
}
