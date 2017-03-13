<?php

namespace LibraryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="adresse", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C35F0816F55AE19E", columns={"numero"})})
 * @ORM\Entity
 */
class Adresse
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
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="typeDeVoie", type="string", length=255, nullable=false)
     */
    private $typedevoie;

    /**
     * @var string
     *
     * @ORM\Column(name="complement", type="string", length=255, nullable=true)
     */
    private $complement;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=false)
     */
    private $ville;

    function getId() {
        return $this->id;
    }

    function getNumero() {
        return $this->numero;
    }

    function getTypedevoie() {
        return $this->typedevoie;
    }

    function getComplement() {
        return $this->complement;
    }

    function getCodepostal() {
        return $this->codepostal;
    }

    function getVille() {
        return $this->ville;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setTypedevoie($typedevoie) {
        $this->typedevoie = $typedevoie;
    }

    function setComplement($complement) {
        $this->complement = $complement;
    }

    function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }


}

