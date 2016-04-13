<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Multiversum\Lecture;

class LectureTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function a_lecture_has_a_title()
    {
        $lecture = factory(Lecture::class)->make(['title' => 'lecture_title']);

        $this->assertSame('lecture_title', $lecture->title);
    }
}
