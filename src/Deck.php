<?php

namespace Clarkstachio\Cards;

class Deck
{
    /**
     * @var Card[]
     */
    private $cards;

    /**
     * Deck constructor.
     */
    public function __construct()
    {
        $this->cards = [];

        foreach (Card::SUITS as $suit) {
            foreach (Card::FACES as $face) {
                $this->cards[] = new Card($face, $suit);
            }
        }
    }

    /**
     * @return $this
     */
    public function shuffle()
    {
        shuffle($this->cards);
        return $this;
    }

    /**
     * @return mixed
     */
    public function draw()
    {
        if ($this->getCardCount() === 0) {
            throw new \LogicException("Cannot draw a card. There are no cards left.");
        }

        return array_shift($this->cards);
    }

    /**
     * @return int
     */
    public function getCardCount()
    {
        return count($this->cards);
    }

}