<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class Jbrld
 * @package Hackathon\PlayerIA
 * @author JBRld
 *
 */
class JbrldPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------

        if (0 == $this->result->getLastChoiceFor($this->mySide))
          return parent::paperChoice();
        //pierre etant choisi dans 34% des cas au premier tour, je joue feuille

        else
        {
          //pour ce qui suit, je joue le contraire de mon tour d'avant pour éviter la prédiction
          if ($this->result->getLastScoreFor($this->mySide) == parent::paperChoice())
            return parent::rockChoice();
          else if ($this->result->getLastScoreFor($this->mySide) == parent::rockChoice())
            return parent::scissors();  
          else if ($this->result->getLastScoreFor($this->mySide) == parent::scissorsChoice())
            return parent::paperChoice();
        }
        
        
        
        //C'est l'histoire d'un pingouin qui respirait par le cul, il s'est assis et il est mort ...
  }
};
