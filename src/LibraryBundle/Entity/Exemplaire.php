<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemplaire
 *
 * @ORM\Table(name="exemplaire")
 * @ORM\Entity
 */
class Exemplaire
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
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var boolean
     *
     * @ORM\Column(name="emprunt", type="boolean", nullable=false)
     */
    private $emprunt;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="estimation", type="float", precision=10, scale=0, nullable=false)
     */
    private $estimation;

    function getId() {
        return $this->id;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getNumero() {
        return $this->numero;
    }

    function getEmprunt() {
        return $this->emprunt;
    }

    function getPrix() {
        return $this->prix;
    }

    function getEstimation() {
        return $this->estimation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setEmprunt($emprunt) {
        $this->emprunt = $emprunt;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setEstimation($estimation) {
        $this->estimation = $estimation;
    }


}

