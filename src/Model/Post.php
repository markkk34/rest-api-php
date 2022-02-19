<?php

class Post
{
    /**
     * @var int|null
     */
    protected ?int $id;

    /**
     * @var int|null
     */
    protected ?int $category_id;

    /**
     * @var string|null
     */
    protected ?string $title;

    /**
     * @var string|null
     */
    protected ?string $body;

    /**
     * @var string|null
     */
    protected ?string $author;

    /**
     * @var int|null
     */
    protected ?int $created_at;

    /**
     * Post constructor.
     * @param int|null $id
     * @param int|null $category_id
     * @param string|null $title
     * @param string|null $body
     * @param string|null $author
     * @param int|null $created_at
     */
    public function __construct(
        ?int $id = null,
        ?int $category_id = null,
        ?string $title = null,
        ?string $body = null,
        ?string $author = null,
        ?int $created_at = null,
    )
    {
        $this->id = $id;
        $this->category_id = $category_id;
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->created_at = $created_at;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @return string|null
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->created_at;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @param string|null $body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }

    /**
     * @param int|null $category_id
     */
    public function setCategoryId(?int $category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @param int|null $created_at
     */
    public function setCreatedAt(?int $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }
}
