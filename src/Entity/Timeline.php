<?php

namespace Inachis\Component\Timeline\src\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Inachis\Component\Timeline\src\Repository\TimelineRepository;

#[ORM\Entity(repositoryClass: TimelineRepository::class)]
class Timeline
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $summary = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $footnotes = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(type: Types::BOOLEAN, nullable: false)]
    private bool $showDates;

    #[ORM\Column(type: Types::BOOLEAN, nullable: false)]
    private bool $showTimes;

    public function __construct()
    {
        $this->showDates = true;
        $this->showTimes = true;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): static
    {
        $this->summary = $summary;

        return $this;
    }

    public function getFootnotes(): ?string
    {
        return $this->footnotes;
    }

    public function setFootnotes(?string $footnotes): static
    {
        $this->footnotes = $footnotes;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function isShowDates(): bool
    {
        return $this->showDates;
    }

    public function setShowDates(bool $showDates): void
    {
        $this->showDates = $showDates;
    }

    public function isShowTimes(): bool
    {
        return $this->showTimes;
    }

    public function setShowTimes(bool $showTimes): void
    {
        $this->showTimes = $showTimes;
    }
}
