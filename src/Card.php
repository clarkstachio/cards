<?php

namespace Clarkstachio\Cards;

class Card
{
    /**
     * @var array
     */
    const FACES = ['A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2'];

    /**
     * @var array
     */
    const SUITS = ['H', 'S', 'C', 'D'];

    /**
     * @var string
     */
    private $suit;

    /**
     * @var string
     */
    private $face;

    /**
     * Card constructor
     * @param string $face
     * @param string $suit
     */
    public function __construct($face, $suit)
    {
        $this->setFace($face);
        $this->setSuit($suit);
    }

    /**
     * @return string
     */
    public function getFace()
    {
        return $this->face;
    }

    /**
     * @param string $face
     * @return $this
     */
    protected function setFace($face)
    {
        if (!in_array($face, self::FACES)) {
            throw new \InvalidArgumentException("Invalid face.");
        }

        $this->face = $face;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuit()
    {
        return $this->suit;
    }

    /**
     * @param string $suit
     * @return $this
     */
    protected function setSuit($suit)
    {
        if (!in_array($suit, self::SUITS)) {
            throw new \InvalidArgumentException("Invalid suit.");
        }

        $this->suit = $suit;
        return $this;
    }

    /**
     * @return string
     */
    public function getCard()
    {
        return $this->getFace() . '' . $this->getSuit();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCard();
    }
}
