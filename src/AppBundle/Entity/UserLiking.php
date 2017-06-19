<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLiking
 *
 * @ORM\Table(name="user_liking")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserLikingRepository")
 */
class UserLiking
{
    const UNMET = 0;
    const LIKE = 1;
    const DISLIKE = 2;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $liked;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     */
    private $liking;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="likeType", type="string", nullable=true)
     */
    private $likeType = self::UNMET;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UserLiking
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set likeType
     *
     * @param string $likeType
     *
     * @return UserLiking
     */
    public function setLikeType($likeType)
    {
        $this->likeType = $likeType;

        return $this;
    }

    /**
     * Get likeType
     *
     * @return string
     */
    public function getLikeType()
    {
        return $this->likeType;
    }

    /**
     * Set liked
     *
     * @param \AppBundle\Entity\User $liked
     *
     * @return UserLiking
     */
    public function setLiked(\AppBundle\Entity\User $liked = null)
    {
        $this->liked = $liked;

        return $this;
    }

    /**
     * Get liked
     *
     * @return \AppBundle\Entity\User
     */
    public function getLiked()
    {
        return $this->liked;
    }

    /**
     * Set liking
     *
     * @param \AppBundle\Entity\User $liking
     *
     * @return UserLiking
     */
    public function setLiking(\AppBundle\Entity\User $liking = null)
    {
        $this->liking = $liking;

        return $this;
    }

    /**
     * Get liking
     *
     * @return \AppBundle\Entity\User
     */
    public function getLiking()
    {
        return $this->liking;
    }
}
