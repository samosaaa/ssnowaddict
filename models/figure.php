<?php

final class Figure {
    private int $id;
    private string $name;
    private string $description;
    private $picturePath;
    private $videoPath;
    private \DateTime $createdAt; //cameCase
    private ?\DateTime $deletedAt =null;
    private ?\Datetime $updatedAt = null;

    //constructeur:action: date-jour dans createdAt;
    function _construct() {
        $this->createdAt = new \DateTime();
    }

    public function getId(): int {
        return $this->id;
    }


    public function getName(): string {
        return $this->name;
    }
    public function setName(): self {
        $this->name = $name
        return $this;
    }
    public function getDescription(): string {
        return $this->description;
    }
    public function setDescription(): self {
        $this->description = $description;
        return $this;
    }

    
    public function getCreatedAt(): \DateTime {
        return $this->createdAt;
    }
    public function setCreatedAt( \DateTime $createdAt): self {
        $this->createdAt = $createdAt
        return $this;
    }
    public function getUpdatedAt(): ?\DateTime {
        return $this->updatedAt;
    }
    public function setUpdatedAt( ?\DateTime $updatedAt ): self {
        $this->updatedAt = $updatedAt
        return $this;
    }
    public function getDeletedAt(): ?\DateTime {
        return $this->deletedAt;
    }
    



}


?>
