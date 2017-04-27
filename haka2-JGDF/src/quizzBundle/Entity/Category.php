<?php

namespace quizzBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="quizzBundle\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="Category", type="string", length=255)
     */
    private $category;


    /**
     * @var string
     *
     * @ORM\OneToMany(targetEntity="Questrep", mappedBy="category")
     */
    private $questreps;



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
     * Set category
     *
     * @param string $category
     *
     * @return Category
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }


    /**
     * Add questrep
     *
     * @param \quizzBundle\Entity\Questrep $questrep
     *
     * @return Category
     */
    public function addQuestrep(\quizzBundle\Entity\Questrep $questrep)
    {
        $this->questreps[] = $questrep;

        return $this;
    }

    /**
     * Remove questrep
     *
     * @param \quizzBundle\Entity\Questrep $questrep
     */
    public function removeQuestrep(\quizzBundle\Entity\Questrep $questrep)
    {
        $this->questreps->removeElement($questrep);
    }

    /**
     * Get questreps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestreps()
    {
        return $this->questreps;
    }
}
