<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_set_name_in_lowercase()
    {
        $post = new Post();
        $post->name = 'TEST';
        $this->assertEquals('test', $post->name);
    }

    public function test_get_slug()
    {
        $post = new Post();
        $post->name = 'TEST IN TEXT';
        $this->assertEquals('test-in-text', $post->slug);
    }

    public function test_get_href()
    {
        $post = new Post();
        $post->name = 'TEST IN TEXT';
        $this->assertEquals('/posts/test-in-text', $post->href);
    }
}
