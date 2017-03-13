<?php

namespace LibraryBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * Livre
 *
 * @ORM\Table(name="livre", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_AC634F99FA891952", columns={"ISBN"})})
 * @ORM\Entity
 */
class Livre implements JsonSerializable {

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
     * @ORM\Column(name="ISBN", type="integer", nullable=false)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datedeparution", type="date", nullable=false)
     */
    private $datedeparution;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="datededisponibilite", type="date", nullable=false)
     */
    private $datededisponibilite;

    function getId() {
        return $this->id;
    }

    function getIsbn() {
        return $this->isbn;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDatedeparution() {
        return $this->datedeparution;
    }

    function getDatededisponibilite() {
        return $this->datededisponibilite;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDatedeparution(DateTime $datedeparution) {
        $this->datedeparution = $datedeparution;
    }

    function setDatededisponibilite(DateTime $datededisponibilite) {
        $this->datededisponibilite = $datededisponibilite;
    }

    public function jsonSerialize() {
        return array(
            
            'titre' => $this->titre,
            'isbn' => $this->isbn,
            'datededisponibilite' => $this->datededisponibilite,
            'datedeparution' => $this->datedeparution
        );
    }

}
