<?php

namespace Afpa\ChessGameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * game
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Game {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="saveGame", type="text")
     */
    private $saveGame;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="saved_date", type="datetime")
     */
    private $savedDate;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="games")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set saveGame
     *
     * @param string $saveGame
     * @return game
     */
    public function setSaveGame($saveGame) {
        $this->saveGame = $saveGame;

        return $this;
    }

    /**
     * Get saveGame
     *
     * @return string
     */
    public function getSaveGame() {
        return $this->saveGame;
    }

    /**
     * Set savedDate
     *
     * @param \DateTime $savedDate
     * @return Game
     */
    public function setSavedDate($savedDate) {
        $this->savedDate = $savedDate;

        return $this;
    }

    /**
     * Get savedDate
     *
     * @return \DateTime
     */
    public function getSavedDate() {
        return $this->savedDate;
    }

    /**
     * Set user
     *
     * @param \Afpa\ChessGameBundle\Entity\User $user
     * @return Game
     */
    public function setUser(\Afpa\ChessGameBundle\Entity\User $user = null) {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Afpa\ChessGameBundle\Entity\User
     */
    public function getUser() {
        return $this->user;
    }

}