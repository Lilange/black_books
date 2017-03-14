<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_A60C9F1FAB2A9FBC", columns={"numeroLivraison"})})
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroLivraison", type="integer", nullable=false)
     */
    private $numerolivraison;


}

