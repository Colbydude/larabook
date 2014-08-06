<?php

use Larabook\Users\UserRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class UserRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected $repo;

    protected function _before()
    {
        $this->repo = new UserRepository;
    }

    /** @test */
    public function it_paginates_all_users()
    {
        TestDummy::times(4)->create('Larabook\Users\User');

        $results = $this->repo->getPaginated(2);

        $this->assertCount(2, $results);
    }

    /** @test */
    public function it_finds_a_user_with_statuses_by_their_username()
    {
        $statuses = TestDummy::times(3)->create('Larabook\Statuses\Status');
        $username = $statuses[0]->user->username;

        $user = $this->repo->findByUsername($username);

        $this->assertEquals($username, $user->username);
        $this->assertCount(3, $user->statuses);
    }

    /** @test */
    public function it_follows_another_user()
    {
        list($john, $susan) = TestDummy::times(2)->create('Larabook\Users\User');

        $this->repo->follow($susan->id, $john);

        $this->tester->seeRecord('follows', [
            'follower_id' => $john->id,
            'followed_id' => $susan->id
        ]);
    }

    /** @test */
    public function it_unfollows_another_user()
    {
        list($john, $susan) = TestDummy::times(2)->create('Larabook\Users\User');

        $this->repo->follow($susan->id, $john);

        $this->repo->unfollow($susan->id, $john);

        $this->tester->dontseeRecord('follows', [
            'follower_id' => $john->id,
            'followed_id' => $susan->id
        ]);
    }
}
