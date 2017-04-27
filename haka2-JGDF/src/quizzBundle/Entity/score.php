<?php

namespace quizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * score
 *
 * @ORM\Table(name="score")
 * @ORM\Entity(repositoryClass="quizzBundle\Repository\scoreRepository")
 */
class score
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
