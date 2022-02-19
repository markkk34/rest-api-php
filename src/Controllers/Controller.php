<?php

class Controller
{
    public function __construct()
    {
        $a = new PostRepository();

        $data = $a->getData();
        $posts = [];
        if (!is_null($data)) {
            foreach ($data as $datum) {
                $posts[] = [
                    'id'            => $datum['id'],
                    'title'         => $datum['title'],
                    'body'          => htmlspecialchars_decode($datum['body']),
                    'author'        => $datum['author'],
                    'category_id'   => $datum['category_id'],
                    'category_name' => $datum['category_name'],
                ];
            }
            echo json_encode(['posts' => $posts]);
        } else {
            echo json_encode(['posts' => 'No data']);
        }
    }
}
