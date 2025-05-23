<?php

namespace App\Entity;

use App\Repository\ExecutiveProfileRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ExecutiveProfileRepository::class)]
class ExecutiveProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'executiveProfiles')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Company $company = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $biography = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $education = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $previousCompanies = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $achievements = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $leadership = null;

    #[ORM\Column(type: 'datetime_immutable')]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkedinProfileUrl = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $linkedinId = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $linkedinData = null;

    #[ORM\Column(nullable: true)]
    private ?int $connectionCount = null;

    #[ORM\Column(type: Types::JSON, nullable: true)]
    private ?array $skills = null;

    #[ORM\Column(type: 'datetime_immutable', nullable: true)]
    private ?\DateTimeImmutable $lastSynced = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profilePictureUrl = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): static
    {
        $this->company = $company;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

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

    public function getBiography(): ?string
    {
        return $this->biography;
    }

    public function setBiography(?string $biography): static
    {
        $this->biography = $biography;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): static
    {
        $this->education = $education;

        return $this;
    }

    public function getPreviousCompanies(): ?string
    {
        return $this->previousCompanies;
    }

    public function setPreviousCompanies(?string $previousCompanies): static
    {
        $this->previousCompanies = $previousCompanies;

        return $this;
    }

    public function getAchievements(): ?string
    {
        return $this->achievements;
    }

    public function setAchievements(?string $achievements): static
    {
        $this->achievements = $achievements;

        return $this;
    }

    public function getLeadership(): ?string
    {
        return $this->leadership;
    }

    public function setLeadership(?string $leadership): static
    {
        $this->leadership = $leadership;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getLinkedinProfileUrl(): ?string
    {
        return $this->linkedinProfileUrl;
    }

    public function setLinkedinProfileUrl(?string $linkedinProfileUrl): static
    {
        $this->linkedinProfileUrl = $linkedinProfileUrl;

        return $this;
    }

    public function getLinkedinId(): ?string
    {
        return $this->linkedinId;
    }

    public function setLinkedinId(?string $linkedinId): static
    {
        $this->linkedinId = $linkedinId;

        return $this;
    }

    public function getLinkedinData(): ?array
    {
        return $this->linkedinData;
    }

    public function setLinkedinData(?array $linkedinData): static
    {
        $this->linkedinData = $linkedinData;

        return $this;
    }

    public function getConnectionCount(): ?int
    {
        return $this->connectionCount;
    }

    public function setConnectionCount(?int $connectionCount): static
    {
        $this->connectionCount = $connectionCount;

        return $this;
    }

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(?array $skills): static
    {
        $this->skills = $skills;

        return $this;
    }

    public function getLastSynced(): ?\DateTimeImmutable
    {
        return $this->lastSynced;
    }

    public function setLastSynced(?\DateTimeImmutable $lastSynced): static
    {
        $this->lastSynced = $lastSynced;

        return $this;
    }

    public function getProfilePictureUrl(): ?string
    {
        return $this->profilePictureUrl;
    }

    public function setProfilePictureUrl(?string $profilePictureUrl): static
    {
        $this->profilePictureUrl = $profilePictureUrl;

        return $this;
    }
}
