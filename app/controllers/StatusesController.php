<?php

use Larabook\Forms\PublishStatusForm;
use Larabook\Statuses\PublishStatusCommand;
use Larabook\Statuses\StatusRepository;

class StatusesController extends \BaseController
{

	/**
	 * @var StatusRepository
	 */
	protected $statusRepository;
	/**
	 * @var PublishStatusForm
	 */
	protected $publishStatusForm;

	/*
	 * @param StatusRepository $statusRepository
	 */
	function __construct(PublishStatusForm $publishStatusForm, StatusRepository $statusRepository)
	{
		$this->publishStatusForm = $publishStatusForm;
		$this->statusRepository = $statusRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$statuses = $this->statusRepository->getAllForUser(Auth::user());

		return View::make('statuses.index', compact('statuses'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Save a new status
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::get();
        $input['userId'] = Auth::id();

		$this->publishStatusForm->validate($input);

		$this->execute(PublishStatusCommand::class, $input);

		Flash::message('Your status has been updated!');

		return Redirect::back();
	}


}
