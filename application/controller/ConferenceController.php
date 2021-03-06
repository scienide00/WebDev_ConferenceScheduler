<?php

declare(strict_types = 1);

class ConferenceController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $dbData = ConferenceModel::getAllConferences();
        $this->view->render('conference/index', $dbData);
    }

    public function create()
    {
        $this->view->render('conference/create');
    }

    public function create_action()
    {
        $success = ConferenceModel::createConference();

        if ($success) {
            Redirect::to('conference/index');
        } else {
            Redirect::to('conference/create');
        }
    }

    public function show(string $confId)
    {
        $data = ConferenceModel::getConferenceById((int)$confId);
        $this->view->render('conference/show', $data);
    }

    public function edit(string $confId)
    {
        $data = ConferenceModel::getConferenceById((int)$confId);
        $this->view->render('conference/edit', $data);
    }

    public function delete(string $confId)
    {
        ConferenceModel::deleteConferenceFromDB((int)$confId);
        Redirect::to('conference/index');
    }

    public function edit_action(string $confId)
    {
        $success = ConferenceModel::updateConference((int)$confId);

        if ($success) {
            Redirect::to('conference/index');
        } else {
            Redirect::to('conference/edit/'.$confId);
        }
    }
}