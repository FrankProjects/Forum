<?php

declare(strict_types=1);

namespace FrankProjects\UltimateWarfare\Entity;

use Doctrine\Common\Collections\Collection;

class ForumUser
{
    private bool $forumBan = false;
    /** @var Collection<Topic> */
    private Collection $topics;

    /** @var Collection<Topic> */
    private Collection $topicsEdited;

    /** @var Collection<Topic> */
    private Collection $topicsLastPost;

    /** @var Collection<Topic> */
    private Collection $posts;

    /** @var Collection<Topic> */
    private Collection $postsEdited;

    public function __construct()
    {
        $this->topics = new ArrayCollection();
        $this->topicsEdited = new ArrayCollection();
        $this->topicsLastPost = new ArrayCollection();
        $this->posts = new ArrayCollection();
        $this->postsEdited = new ArrayCollection();
    }

    public function setForumBan(bool $forumBan): void
    {
        $this->forumBan = $forumBan;
    }

    public function getForumBan(): bool
    {
        return $this->forumBan;
    }

    public function getTopics(): Collection
    {
        return $this->topics;
    }

    public function setTopics(Collection $topics): void
    {
        $this->topics = $topics;
    }

    public function getTopicsEdited(): Collection
    {
        return $this->topicsEdited;
    }

    public function setTopicsEdited(Collection $topicsEdited): void
    {
        $this->topicsEdited = $topicsEdited;
    }

    public function getTopicsLastPost(): Collection
    {
        return $this->topicsLastPost;
    }

    public function setTopicsLastPost(Collection $topicsLastPost): void
    {
        $this->topicsLastPost = $topicsLastPost;
    }

    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function setPosts(Collection $posts): void
    {
        $this->posts = $posts;
    }

    public function getPostsEdited(): Collection
    {
        return $this->postsEdited;
    }

    public function setPostsEdited(Collection $postsEdited): void
    {
        $this->postsEdited = $postsEdited;
    }
}
