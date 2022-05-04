<?php

namespace App\Entity;

use App\Repository\JobRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $job;

    #[ORM\Column(type: 'string', length: 255)]
    private $companyName;


    #[ORM\OneToMany(mappedBy: 'job', targetEntity: Client::class)]
    private $clients;


    public function __construct()
    {
        $this->clients = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function  getCompanyName(): ?string
    {
        return  $this ->companyName;
    }

    public function  setCompanyName(string $companyName): self
    {
        $this->companyName =$companyName;
        return $this;
    }


    public function getjob(): ?string
    {
        return $this->job;
    }

    public function setjob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function __toString(): string
    {
        return $this->job;
    }



    /**
     * @return Collection|Client[]
     */
    public function getClients(): Collection
    {
        return $this->clients;
    }

    public function addClient(Client $client): self
    {
        if (!$this->clients->contains($client)) {
            $this->clients[] = $client;
            $client->setjob($this);
        }

        return $this;
    }

    public function remove(Client $client): self
    {
        if ($this->clients->removeElement($client)) {
            // set the owning side to null (unless already changed)
            if ($client->getJob() === $this) {
                $client->setJob(null);
            }
        }

        return $this;
    }
}
