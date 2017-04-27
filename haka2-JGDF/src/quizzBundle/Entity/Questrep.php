<?php

namespace quizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questrep
 *
 * @ORM\Table(name="questrep")
 * @ORM\Entity(repositoryClass="quizzBundle\Repository\QuestrepRepository")
 */
class Questrep
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
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse1", type="string", length=100)
     */
    private $reponse1;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse2", type="string", length=100)
     */
    private $reponse2;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse3", type="string", length=100)
     */
    private $reponse3;

    /**
     * @var string
     *
     * @ORM\Column(name="reponse4", type="string", length=100)
     */
    private $reponse4;

    /**
     * @var int
     *
     * @ORM\Column(name="solution", type="integer")
     */
    private $solution;


    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="questreps")
     */
    private $category;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Questrep
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set reponse1
     *
     * @param string $reponse1
     *
     * @return Questrep
     */
    public function setReponse1($reponse1)
    {
        $this->reponse1 = $reponse1;

        return $this;
    }

    /**
     * Get reponse1
     *
     * @return string
     */
    public function getReponse1()
    {
        return $this->reponse1;
    }

    /**
     * Set reponse2
     *
     * @param string $reponse2
     *
     * @return Questrep
     */
    public function setReponse2($reponse2)
    {
        $this->reponse2 = $reponse2;

        return $this;
    }

    /**
     * Get reponse2
     *
     * @return string
     */
    public function getReponse2()
    {
        return $this->reponse2;
    }

    /**
     * Set reponse3
     *
     * @param string $reponse3
     *
     * @return Questrep
     */
    public function setReponse3($reponse3)
    {
        $this->reponse3 = $reponse3;

        return $this;
    }

    /**
     * Get reponse3
     *
     * @return string
     */
    public function getReponse3()
    {
        return $this->reponse3;
    }

    /**
     * Set reponse4
     *
     * @param string $reponse4
     *
     * @return Questrep
     */
    public function setReponse4($reponse4)
    {
        $this->reponse4 = $reponse4;

        return $this;
    }

    /**
     * Get reponse4
     *
     * @return string
     */
    public function getReponse4()
    {
        return $this->reponse4;
    }

    /**
     * Set solution
     *
     * @param integer $solution
     *
     * @return Questrep
     */
    public function setSolution($solution)
    {
        $this->solution = $solution;

        return $this;
    }

    /**
     * Get solution
     *
     * @return int
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * Set category
     *
     * @param \quizzBundle\Entity\Category $category
     *
     * @return Questrep
     */
    public function setCategory(\quizzBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \quizzBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
