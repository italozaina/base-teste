<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ApiResource()
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"})})
 * @ORM\Entity
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=90, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=32, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="acesso", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $acesso = '1';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt_ultimo_acesso", type="datetime", nullable=true)
     */
    private $dtUltimoAcesso;

    /**
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean", nullable=false, options={"default"="1"})
     */
    private $status = true;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_registro", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dtRegistro = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAcesso(): ?int
    {
        return $this->acesso;
    }

    public function setAcesso(int $acesso): self
    {
        $this->acesso = $acesso;

        return $this;
    }

    public function getDtUltimoAcesso(): ?\DateTimeInterface
    {
        return $this->dtUltimoAcesso;
    }

    public function setDtUltimoAcesso(?\DateTimeInterface $dtUltimoAcesso): self
    {
        $this->dtUltimoAcesso = $dtUltimoAcesso;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDtRegistro(): ?\DateTimeInterface
    {
        return $this->dtRegistro;
    }

    public function setDtRegistro(\DateTimeInterface $dtRegistro): self
    {
        $this->dtRegistro = $dtRegistro;

        return $this;
    }

    public function getSalt()
    {
        return 'kknd';
    }

    public function getRoles()
    {
        return array('ROLE_USER');   
    }

    public function eraseCredentials()
    {
        
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized, array('allowed_classes' => false));
    }


}
