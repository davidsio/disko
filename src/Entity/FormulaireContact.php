<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * FormulaireContact
 *
 * @ORM\Table(name="formulaire_contact")
 * @ORM\Entity
 */
class FormulaireContact
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
     * @ORM\Column(name="sujet", type="string", length=255, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     * @Assert\Regex(pattern="/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/", match=true, message="Adresse mail non conforme")
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string   
     * 
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     * @Assert\Regex(pattern="/\d/", match=true, message="Numéro de téléphone non conforme")
     * @ORM\Column(name="telephone", type="string", length=10, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     * 
     * @ORM\Column(name="date_naissance", type="date", nullable=false)
     */
    private $dateNaissance;

    /**
     * @var string
     * @ORM\Column(name="message", type="text", nullable=false)
     */
    private $message;

    function getId() {
        return $this->id;
    }

    function getSujet() {
        return $this->sujet;
    }

    function getEmail() {
        return $this->email;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getMessage() {
        return $this->message;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function __toString() {
        return $this->id;
    }

}
