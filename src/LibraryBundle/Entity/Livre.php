<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity(repositoryClass="LibraryBundle\Repository\LivreRepository")
 */
class Livre implements JsonSerializable {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_parution", type="datetime")
     */
    private $dateDeParution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_disponibilite", type="datetime", nullable=true)
     */
    private $dateDeDisponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="fk_exemplaire", type="string", length=255, nullable=true)
     */
    private $fkExemplaire;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return Livre
     */
    public function setIsbn($isbn) {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn() {
        return $this->isbn;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Livre
     */
    public function setTitre($titre) {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set dateDeParution
     *
     * @param \DateTime $dateDeParution
     *
     * @return Livre
     */
    public function setDateDeParution($dateDeParution) {
        $this->dateDeParution = $dateDeParution;

        return $this;
    }

    /**
     * Get dateDeParution
     *
     * @return \DateTime
     */
    public function getDateDeParution() {
        return $this->dateDeParution;
    }

    /**
     * Set dateDeDisponibilite
     *
     * @param \DateTime $dateDeDisponibilite
     *
     * @return Livre
     */
    public function setDateDeDisponibilite($dateDeDisponibilite) {
        $this->dateDeDisponibilite = $dateDeDisponibilite;

        return $this;
    }

    /**
     * Get dateDeDisponibilite
     *
     * @return \DateTime
     */
    public function getDateDeDisponibilite() {
        return $this->dateDeDisponibilite;
    }

    /**
     * Set fkExemplaire
     *
     * @param string $fkExemplaire
     *
     * @return Livre
     */
    public function setFkExemplaire($fkExemplaire) {
        $this->fkExemplaire = $fkExemplaire;

        return $this;
    }

    /**
     * Get fkExemplaire
     *
     * @return string
     */
    public function getFkExemplaire() {
        return $this->fkExemplaire;
    }

    public function jsonSerialize() {
        return array(
            $this->titre,
            $this->isbn
        );
    }

}
