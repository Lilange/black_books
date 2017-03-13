<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_497DD6346C6E55B5", columns={"nom"}), @ORM\UniqueConstraint(name="UNIQ_497DD634ED0225A2", columns={"sousCategorie"})})
 * @ORM\Entity
 */
class Categorie
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="sousCategorie", type="string", length=255, nullable=false)
     */
    private $souscategorie;

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getSouscategorie() {
        return $this->souscategorie;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setSouscategorie($souscategorie) {
        $this->souscategorie = $souscategorie;
    }


}

