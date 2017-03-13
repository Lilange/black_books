<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChiffreAffaire
 *
 * @ORM\Table(name="chiffre_affaire")
 * @ORM\Entity
 */
class ChiffreAffaire
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
     * @var float
     *
     * @ORM\Column(name="Total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total;
 
    function getId() {
        return $this->id;
    }

    function getTotal() {
        return $this->total;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTotal($total) {
        $this->total = $total;
    }



}

