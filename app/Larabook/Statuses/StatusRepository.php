<?php namespace Larabook\Statuses;

use Larabook\Users\User;

class StatusRepository
{
	/**
	 * Get all statuses for a user.
	 *
	 * @param User $user
	 * @return mixed
	 */
	public function getAllForUser(User $user)
	{
		return $user->statuses()->with('user')->latest()->get();
	}

	/**
	 * Save a new status for a user
	 *
	 * @param Status $status
	 * @param $userId
	 * @return mixed
	 */
	public function save(Status $status, $userId)
	{
		return User::findOrFail($userId)
			->statuses()
			->save($status);
	}

    /**
     * Get the feed for a user
     *
     * @param User $user
     * @return mixed
     */
    public function getFeedForUser(User $user)
    {
        $userIds = $user->followedUsers()->lists('followed_id');
        $userIds[] = $user->id;

        return Status::with('comments')->whereIn('user_id', $userIds)->latest()->get();
    }

	public function leaveComment($userId, $statusId, $body)
	{
		$comment = Comment::leave($body, $statusId);

		User::findOrFail($userId)->comments()->save($comment);

		return $comment;
	}
}
