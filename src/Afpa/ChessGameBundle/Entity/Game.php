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
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_date", type="datetime")
     */
    protected $createdDate;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text")
     */
    protected $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_end", type="integer")
     */
    protected $isEnd;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="game")
     */
    protected $users;

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
     * Constructor
     */
    public function __construct() {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Game
     */
    public function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }

    /**
     * Set data
     *
     * @param string $data
     * @return Game
     */
    public function setData($data) {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData() {
        return $this->data;
    }

    /**
     * Set isEnd
     *
     * @param \Integer $isEnd
     * @return Game
     */
    public function setIsEnd($isEnd) {
        $this->isEnd = $isEnd;

        return $this;
    }

    /**
     * Get isEnd
     *
     * @return \Integer
     */
    public function getIsEnd() {
        return $this->isEnd;
    }

    /**
     * Add users
     *
     * @param \Afpa\ChessGameBundle\Entity\User $users
     * @return Game
     */
    public function addUser(\Afpa\ChessGameBundle\Entity\User $users) {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Afpa\ChessGameBundle\Entity\User $users
     */
    public function removeUser(\Afpa\ChessGameBundle\Entity\User $users) {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers() {
        return $this->users;
    }

}
