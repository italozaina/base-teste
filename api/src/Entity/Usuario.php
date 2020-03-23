<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"username"})})
 * @ORM\Entity
 */
class Usuario
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


}
