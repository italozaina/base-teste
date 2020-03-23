<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", indexes={@ORM\Index(name="fk_cliente_usuario_idx", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="nome", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sobrenome", type="string", length=90, nullable=false)
     */
    private $sobrenome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=true)
     */
    private $cpf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dt_nascimento", type="date", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;


}
