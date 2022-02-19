<?php

class PostRepository
{
    /**
     * @var PDO|null
     */
    protected ?PDO $pdo;

    /**
     * @var Post|null
     */
    protected ?Post $post;

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->getPDO();
    }

    /**
     * @return false|PDO|null|array
     */
    public function getData(): bool|PDO|null|array
    {
        $query = 'SELECT
            c.name as category_name,
            p.id,
            p.category_id,
            p.title,
            p.body,
            p.author,
            p.created_at
        FROM
            posts p
        LEFT JOIN 
            categories c ON p.category_id = c.id
        ORDER BY
            p.created_at DESC';

        return $this->pdo->query($query)->fetchAll();
    }
}
