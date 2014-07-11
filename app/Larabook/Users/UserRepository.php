<?php namespace Larabook\Users;

class UserRepository
{
	public function save(User $user)
	{
		return $user->save();
	}
}
