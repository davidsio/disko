<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passe", type="string", length=255, nullable=false)
     */
    private $passe;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    function getLogin() {
        return $this->login;
    }

    function getPasse() {
        return $this->passe;
    }

    function getEmail() {
        return $this->email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPasse($passe) {
        $this->passe = $passe;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function __toString() {
        return $this->login;
    }
}
