<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'title' => 'Exploring the Future of AI in Everyday Life',
                'author' => 'Alif Rizz',
                'date' => '15 August 2024',
                'content' => 'Artificial intelligence is rapidly transforming industries across the world. From healthcare to finance, AI is proving to be a game-changer. In this post, we explore how AI is integrating into our daily lives and what the future holds for this revolutionary technology.'
            ],
            [
                'id' => '2',
                'title' => 'Mastering Time Management: Tips for Productivity',
                'author' => 'Alif Rizz',
                'date' => '10 August 2024',
                'content' => 'Time management is essential for achieving your goals. In this article, we share practical tips on how to stay organized, prioritize tasks, and make the most of your time. Whether you’re a student, a professional, or a business owner, these strategies can help you boost productivity and reduce stress.'
            ],
        ];
    }

    public static function find($id): array
    {

        $post =  Arr::first(static::all(), fn ($post) => $post['id'] == $id);

        // return Arr::first(static::all(), function ($post) use ($id) {
        //     return $post['id'] == $id;
        // });

        if(! $post){
            abort(404);
        }

        return $post;
    }
}